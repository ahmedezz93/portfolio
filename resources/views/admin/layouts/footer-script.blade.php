<script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
{{-- <script src="{{asset('assets/vendor/libs/node-waves/node-waves.js')}}"></script>
<script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/vendor/libs/hammer/hammer.js')}}"></script> --}}
<script src="{{asset('assets/vendor/libs/i18n/i18n.js')}}"></script>
<script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{asset('assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
{{-- <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script> --}}

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<!-- Page JS -->
<script src="{{asset('assets/js/form-layouts.js')}}"></script>

<!-- Page JS -->
{{-- <script src="{{asset('assets/js/dashboards-analytics.js')}}"></script> --}}
@section('script')
    <script type="text/javascript">
        function printDiv() {
            var tableContents = document.querySelector('.table-responsive').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = '<table class="table table-striped">' + tableContents + '</table>';
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }
    </script>
    <script>
        function CheckAll(className, elem) {
            var elements = document.getElementsByClassName(className);
            var l = elements.length;

            if (elem.checked) {
                for (var i = 0; i < l; i++) {
                    elements[i].checked = true;
                }
            } else {
                for (var i = 0; i < l; i++) {
                    elements[i].checked = false;
                }
            }
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#btn_delete_all_modal").click(function() {
                var selected = new Array();
                $(".box1:checked").each(function() {
                    selected.push($(this).val());
                });

                if (selected.length > 0) {
                    $('#delete_all').modal('show');
                    $('#delete_all_id').val(selected.join(','));

                    // Set the action of the form
                    $('#delete_all_form').attr('action', deleteRoute);
                    // Set the CSRF token
                    $('#delete_all_form input[name="_token"]').val('{{ csrf_token() }}');
                }
            });

            // Handle form submission
            $("#btn_confirm_delete").click(function() {
                $('#delete_all_form').submit();
            });
        });
    </script>
<script>
    function scrollToTopAndPrevious() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
        stepper.previous();
    }

    function scrollToTopAndNext() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
        stepper.next();
    }



</script>
