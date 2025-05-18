var Boxlayout = (function () {
    var $el = $("#bl-main"),
        $sections = $el.children("section:not(.topleft)"),
        $sectionWork = $("#bl-work-section"),
        $workItems = $("#bl-work-items > div"),
        $workPanelsContainer = $(".bl-panel-items"),
        $workPanels = $workPanelsContainer.children("div"),
        totalWorkPanels = $workPanels.length,
        $nextWorkItem = $workPanelsContainer.find("nav > span.bl-next-work"),
        $previousWorkItem = $workPanelsContainer.find("nav > span.bl-previous-work"),
        isAnimating = false,
        transEndEventNames = {
            WebkitTransition: "webkitTransitionEnd",
            MozTransition: "transitionend",
            OTransition: "oTransitionEnd",
            msTransition: "MSTransitionEnd",
            transition: "transitionend",
        },
        transEndEventName = transEndEventNames[Modernizr.prefixed("transition")],
        supportTransitions = Modernizr.csstransitions,
        currentWorkPanel = 0;

    function init() {
        initEvents();
    }

    function pauseAllVideos() {
        $("iframe.youtube-video").each(function () {
            this.contentWindow.postMessage(
                '{"event":"command","func":"pauseVideo","args":""}',
                "*"
            );
        });

        if (typeof video !== "undefined" && video.pause) {
            if (!video.paused && !video.ended) {
                video.pause();
            }
        }
    }

    function initEvents() {
        $sections.each(function () {
            var $section = $(this);

            $section.on("click", function () {
                if (!$section.data("open")) {
                    $section.data("open", true).addClass("bl-expand bl-expand-top");
                    $el.addClass("bl-expand-item");
                }
            }).find(".bl-icon-close").on("click", function () {
                $section.data("open", false).removeClass("bl-expand")
                    .on(transEndEventName, function (event) {
                        if (!$(event.target).is("section")) return false;
                        $(this).off(transEndEventName).removeClass("bl-expand-top");
                    });

                if (!supportTransitions) {
                    $section.removeClass("bl-expand-top");
                }

                $el.removeClass("bl-expand-item");
                return false;
            });

            $(document).keyup(function (e) {
                if (!$("#bl-work-section").hasClass("bl-scale-down") && e.keyCode == 27) {
                    $section.data("open", false).removeClass("bl-expand")
                        .on(transEndEventName, function (event) {
                            if (!$(event.target).is("section")) return false;
                            $(this).off(transEndEventName).removeClass("bl-expand-top");
                        });

                    if (!supportTransitions) {
                        $section.removeClass("bl-expand-top");
                    }

                    $el.removeClass("bl-expand-item");
                    return false;
                }
            });
        });

        $workItems.on("click", function () {
            $sectionWork.addClass("bl-scale-down");
            $workPanelsContainer.addClass("bl-panel-items-show");

            var $panel = $workPanelsContainer.find(
                "[data-panel='" + $(this).data("panel") + "']"
            );
            currentWorkPanel = $panel.index();
            $panel.addClass("bl-show-work");

            return false;
        });

        $nextWorkItem.on("click", function () {
            if (isAnimating) return false;
            isAnimating = true;

            var $currentPanel = $workPanels.eq(currentWorkPanel);
            currentWorkPanel = (currentWorkPanel + 1) % totalWorkPanels;
            var $nextPanel = $workPanels.eq(currentWorkPanel);

            $currentPanel.removeClass("bl-show-work")
                .addClass("bl-hide-current-work")
                .on(transEndEventName, function (event) {
                    if (!$(event.target).is("div")) return false;
                    $(this).off(transEndEventName).removeClass("bl-hide-current-work");
                    isAnimating = false;
                });

            if (!supportTransitions) {
                $currentPanel.removeClass("bl-hide-current-work");
                isAnimating = false;
            }

            $nextPanel.addClass("bl-show-work");
            pauseAllVideos();
            return false;
        });

        $previousWorkItem.on("click", function () {
            if (isAnimating) return false;
            isAnimating = true;

            var $currentPanel = $workPanels.eq(currentWorkPanel);
            currentWorkPanel = (currentWorkPanel - 1 + totalWorkPanels) % totalWorkPanels;
            var $nextPanel = $workPanels.eq(currentWorkPanel);

            $currentPanel.removeClass("bl-show-work")
                .addClass("bl-hide-current-work")
                .on(transEndEventName, function (event) {
                    if (!$(event.target).is("div")) return false;
                    $(this).off(transEndEventName).removeClass("bl-hide-current-work");
                    isAnimating = false;
                });

            if (!supportTransitions) {
                $currentPanel.removeClass("bl-hide-current-work");
                isAnimating = false;
            }

            $nextPanel.addClass("bl-show-work");
            pauseAllVideos();
            return false;
        });

        // ✅ إصلاح زر الإغلاق لكل Panel
        $(document).on("click", ".bl-icon-close", function () {
            $sectionWork.removeClass("bl-scale-down");
            $workPanelsContainer.removeClass("bl-panel-items-show");
            $workPanels.removeClass("bl-show-work");
            pauseAllVideos();
            return false;
        });

        // ✅ التنقل بلوحة المفاتيح (يمين - يسار - Esc)
        $(document).keyup(function (e) {
            if ($("#bl-work-section").hasClass("bl-scale-down")) {
                if (e.keyCode == 39) { // Next
                    $nextWorkItem.click();
                } else if (e.keyCode == 37) { // Previous
                    $previousWorkItem.click();
                } else if (e.keyCode == 27) { // Escape
                    $sectionWork.removeClass("bl-scale-down");
                    $workPanelsContainer.removeClass("bl-panel-items-show");
                    $workPanels.removeClass("bl-show-work");
                    pauseAllVideos();
                    return false;
                }
            }
        });
    }

    return {
        init: init,
    };
})();
