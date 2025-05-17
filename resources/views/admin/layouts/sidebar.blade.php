<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="" class="app-brand-link">
            <div class="rounded-image" style="background-image: url('{{ $settings->logo_url ?? '' }}');"></div>
            <span class="app-brand-text demo menu-text fw-bold">{{ $settings->name ?? '' }}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Settings -->
        <li class="menu-item">
            <a href="{{ route('admin.accountSetting') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Account Setting">Account Setting</div>
            </a>
        </li>


        <!-- Users -->

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="{{ __('sidebar.users') }}"> {{ __('sidebar.users') }}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('admin.users.index') }}" class="menu-link">
                        <i class="menu-icon ti ti-eye"></i>
                        <div data-i18n="{{ __('sidebar.show_users') }}">{{ __('sidebar.show_users') }}</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.users.create') }}" class="menu-link">
                        <i class="menu-icon ti ti-plus"></i>
                        <div data-i18n="{{ __('sidebar.add_new_user') }}">{{ __('sidebar.add_new_user') }}</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- AboutME -->

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-folder"></i>
                <div data-i18n="About Me"> About Me</div>
            </a>
            <ul class="menu-sub">
                <a href="{{ route('admin.personalInfo.index') }}" class="menu-link">
                    <div data-i18n="Personal Info">Personal Info</div>
                </a>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon ti ti-eye"></i>
                        <div data-i18n="Experiences">Experiences</div>
                    </a>
                    <!-- Sub-menu for Experiences -->
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('admin.experiences.create') }}" class="menu-link">
                                <div data-i18n="Add Experience">Add Experience</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.experiences.index') }}" class="menu-link">
                                <div data-i18n="View Experiences">View Experiences</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon ti ti-plus"></i>
                        <div data-i18n="Educations">Educations</div>
                    </a>
                    <!-- Sub-menu for Educations -->
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('admin.educations.create') }}" class="menu-link">
                                <div data-i18n="Add Education">Add Education</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.educations.index') }}" class="menu-link">
                                <div data-i18n="View Educations">View Educations</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon ti ti-cog"></i>
                        <div data-i18n="Skills">Skills</div>
                    </a>
                    <!-- Sub-menu for Skills -->
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('admin.skills.create') }}" class="menu-link">
                                <div data-i18n="Add Skill">Add Skill</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.skills.index') }}" class="menu-link">
                                <div data-i18n="View Skills">View Skills</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="{{ route('admin.achievements.create') }}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-achievements"></i>
                        <div data-i18n="My Achievements">My Achievements</div>
                    </a>
                </li>

            </ul>
        </li>

        <!-- myPortfolio -->

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-folder"></i>
                <div data-i18n="My Portfolio"> My Portfolio</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon ti ti-eye"></i>
                        <div data-i18n="Projects">Projects</div>
                    </a>
                    <!-- Sub-menu for Projects -->
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('admin.projects.create') }}" class="menu-link">
                                <div data-i18n="Add Project">Add Project</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.projects.index') }}" class="menu-link">
                                <div data-i18n="View Projects">View Projects</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <!-- Contacts -->
        <li class="menu-item">
            <a href="{{ route('admin.contacts.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-phone"></i>
                <div data-i18n="{{ __('sidebar.contacts') }}">{{ __('sidebar.contacts') }}</div>
            </a>
        </li>


    </ul>
</aside>
