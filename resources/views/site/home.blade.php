<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="description" content="{{ $personalInfo->mini_description ?? '' }}" />

    <title>{{ $personalInfo->first_name ?? '' }} {{ $personalInfo->last_name ?? '' }}- Personal Portfolio</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/jquery.animatedheadline.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/materialize.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/skins/yellow.css') }}" />

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue"
        href="{{ asset('site/assets/css/skins/blue.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet"
        href="{{ asset('site/assets/css/skins/blueviolet.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod"
        href="{{ asset('site/assets/css/skins/goldrenrod.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="green"
        href="{{ asset('site/assets/css/skins/green.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="magenta"
        href="{{ asset('site/assets/css/skins/magenta.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="orange"
        href="{{ asset('site/assets/css/skins/orange.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="purple"
        href="{{ asset('site/assets/css/skins/purple.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="red"
        href="{{ asset('site/assets/css/skins/red.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="yellow"
        href="{{ asset('site/assets/css/skins/yellow.css') }}" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen"
        href="{{ asset('site/assets/css/skins/yellowgreen.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/styleswitcher.css') }}" />

    <!-- Template JS Files -->
    <script src="{{ asset('site/assets/js/modernizr.custom.js') }}"></script>
    <Style>
        input[type="tel"],
        input[type="email"] {
            color: #fff;
            /* أو أي لون يناسب التصميم العام */
        }
.input-field input {
    color: #fff;
    border-bottom: 1px solid #fff;
    box-shadow: none;
}

.input-field input:focus,
.input-field input.valid {
    border-bottom: 1px solid #fff !important;
    box-shadow: none !important;
    color: #fff !important;
}

.input-field input.invalid {
    border-bottom: 1px solid #fff !important; /* بدل الأحمر */
    box-shadow: none !important;
}

    </Style>
</head>

<body class="dark">
    <!-- Preloader Start -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- Preloader Ends -->
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img
                            src="{{ asset('site/assets/images/styleswitcher/purple.png') }}" alt="purple" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img
                            src="{{ asset('site/assets/images/styleswitcher/red.png') }}" alt="red" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet"
                        class="color"><img src="{{ asset('site/assets/images/styleswitcher/blueviolet.png') }}"
                            alt="blueviolet" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img
                            src="{{ asset('site/assets/images/styleswitcher/blue.png') }}" alt="blue" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod"
                        class="color"><img src="{{ asset('site/assets/images/styleswitcher/goldenrod.png') }}"
                            alt="goldenrod" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img
                            src="{{ asset('site/assets/images/styleswitcher/magenta.png') }}" alt="magenta" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen"
                        class="color"><img src="{{ asset('site/assets/images/styleswitcher/yellowgreen.png') }}"
                            alt="yellowgreen" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img
                            src="{{ asset('site/assets/images/styleswitcher/orange.png') }}" alt="orange" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img
                            src="{{ asset('site/assets/images/styleswitcher/green.png') }}" alt="green" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img
                            src="{{ asset('site/assets/images/styleswitcher/yellow.png') }}" alt="yellow" /></a>
                </li>
            </ul>
            <h4>BODY SKIN</h4>

            <label> <input class="dark_switch" type="radio" name="color_style" id="is_light" value="light" />
                Light</label>
            <label> <input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark"
                    checked="checked" /> Dark</label><br>

            <a href="#" class="waves-effect waves-light btn font-weight-700 purchase hoverable"><i
                    class="fa fa-shopping-cart"></i> Purchase</a>
            <div id="hideSwitcher">&times;</div>
        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <div class="main-picture myimage hide-on-med-and-down">
        </div>
        <div id="bl-main" class="bl-main">
            <!-- Top Left Section Starts -->
            <section class="topleft">
                <div class="bl-box row valign-wrapper">
                    <div class="row valign-wrapper mb-0">
                        @isset($personalInfo)
                            <div class="title-heading">
                                <div class="selector uppercase" id="selector">
                                    <h3 class="ah-headline p-none m-none">
                                        <span class="font-weight-400">Hi There ! I'm</span>
                                        <span class="my-name">{{ $personalInfo->first_name }}
                                            {{ $personalInfo->last_name }}</span>
                                        <span class="ah-words-wrapper">
                                            <b class="is-visible">{{ $personalInfo->specialization }}</b>
                                            <b>{{ $personalInfo->job_title }}</b>
                                            {{-- <b>framework  laravel</b> --}}
                                        </span>
                                    </h3>
                                </div>
                            </div>
                        @endisset

                    </div>
                </div>
            </section>
            <!-- Top Left Section Ends -->
            <!-- About Section Starts -->
            <section>
                <!-- About Title Starts -->
                <div class="bl-box valign-wrapper">
                    <div class="page-title center-align">
                        <h2 class="center-align">
                            <span data-hover="About">About </span>
                            <span data-hover="Me">Me</span>
                        </h2>
                    </div>
                </div>
                <!-- About Title Ends -->
                <!-- About Expanded Starts -->
                <div class="bl-content">
                    <!-- Main Heading Starts -->
                    <div class="container page-title custom-page-title">
                        <h2 class="center-align">
                            <span>About</span>
                            <span>Me</span>
                        </h2>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="container infos">
                        <!-- Divider Starts -->
                        <div class="divider center-align">
                            <span class="outer-line"></span>
                            <span class="fa fa-vcard" aria-hidden="true"></span>
                            <span class="outer-line"></span>
                        </div>
                        <!-- Divider Ends -->
                        <!-- Personal Informations Starts -->
                        <div class="row">
                            <!-- Picture Starts -->
                            <div class="col s12 m4 profile-picture show-on-medium-and-down section-padding">
                                <img src="images/woman.jpg" class="responsive-img my-picture" alt="My Photo">
                            </div>
                            <!-- Picture Ends -->
                            @if (isset($personalInfo))
                                <div class="col s12 m8 l12 xl12 personal-info section-padding">
                                    <h6 class="uppercase"><i class="fa fa-user"></i> Personal Info</h6>
                                    <div class="col m12 l12 xl9 p-none">
                                        <p class="second-font">{{ $personalInfo->mini_description }}
                                        </p>
                                    </div>
                                    <div class="col s12 m12 l6 p-none">
                                        <ul class="second-font list-1">

                                            <li><span class="font-weight-700">First Name:
                                                </span>{{ $personalInfo->first_name }}</li>
                                            <li><span class="font-weight-700">Last Name:
                                                </span>{{ $personalInfo->last_name }}</li>
                                            <li><span class="font-weight-700">Date of birth:
                                                </span>{{ $personalInfo->date_of_birth }} </li>
                                            <li><span class="font-weight-700">Nationality:
                                                </span>{{ $personalInfo->nationality }}</li>
                                            <li><span class="font-weight-700">Freelance:
                                                </span>{{ $personalInfo->available == 'yes' ? 'Available' : 'Not Available' }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col s12 m12 l6 p-none">
                                        <ul class="second-font list-2">
                                            <li><span class="font-weight-700">Phone: </span>{{ $personalInfo->phone }}
                                            </li>
                                            <li><span class="font-weight-700">Address:
                                                </span>{{ $personalInfo->address }}
                                            </li>
                                            <li><span class="font-weight-700">Email: </span>{{ $personalInfo->email }}
                                            </li>
                                            <li><span class="font-weight-700">Spoken Langages:
                                                </span>{{ $personalInfo->spoken_languages }}</li>
                                            <li><span class="font-weight-700">Linkedin: </span><a
                                                    href="{{ $personalInfo->linkedin }}">{{ $personalInfo->first_name }}{{ $personalInfo->last_name }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ $personalInfo->cv_url }}" class="btn font-weight-700">
                                        Download Resume <i class="fa fa-file-pdf-o"></i>
                                    </a>
                                </div>
                            @endif
                        </div>
                        <!-- Personal Informations Ends -->
                    </div>
                    <!-- Resume Starts -->
                    <div class="resume-container">
                        <div class="container">
                            <div class="valign-wrapper row">
                                <!-- Resume Menu Starts -->
                                <div class="resume-list col l4 section-padding">
                                    <div class="resume-list-item is-active" data-index="0" id="resume-list-item-0">
                                        <div class="resume-list-item-inner">
                                            <h6 class="resume-list-item-title uppercase"><i
                                                    class="fa fa-briefcase"></i> Experience</h6>
                                        </div>
                                    </div>
                                    <div class="resume-list-item" data-index="1" id="resume-list-item-1">
                                        <div class="resume-list-item-inner">
                                            <h6 class="resume-list-item-title uppercase"><i
                                                    class="fa fa-graduation-cap"></i> Education</h6>
                                        </div>
                                    </div>
                                    <div class="resume-list-item" data-index="2" id="resume-list-item-2">
                                        <div class="resume-list-item-inner">
                                            <h6 class="resume-list-item-title uppercase"><i class="fa fa-star"></i>
                                                Skills</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- Resume Menu Ends -->
                                <!-- Resume Content Starts -->
                                <div class="col s12 m12 l8 resume-cards-container section-padding">
                                    <div class="resume-cards">
                                        @if ($experiences->isNotEmpty())
                                            <!-- Experience Starts -->
                                            <div class="resume-card resume-card-0" data-index="0">
                                                <!-- Experience Header Title Starts -->
                                                <div class="resume-card-header">
                                                    <div class="resume-card-name"><i class="fa fa-briefcase"></i>
                                                        Experience</div>
                                                </div>
                                                <!-- Experience Header Title Ends -->
                                                <!-- Experience Content Starts -->

                                                <div class="resume-card-body experience">
                                                    <div class="resume-card-body-container second-font">
                                                        <!-- Single Experience Starts -->
                                                        @foreach ($experiences as $experience)
                                                            <div class="resume-content">
                                                                <h6 class="uppercase">
                                                                    <span>{{ $experience->job_title }} -
                                                                    </span>{{ $experience->company_name }}
                                                                </h6>
                                                                <span class="date"><i class="fa fa-calendar-o"></i>
                                                                    {{ $experience->start_date }} -
                                                                    {{ $experience->end_date }}</span>
                                                                <p>{{ $experience->description }}</p>
                                                            </div>
                                                            <!-- Single Experience Ends -->
                                                            <span class="separator"></span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <!-- Experience Content Starts -->
                                            </div>
                                            <!-- Experience Ends -->

                                        @endif

                                        @if ($educations->isNotEmpty())
                                            <!-- Education Starts -->
                                            <div class="resume-card resume-card-1" data-index="1">
                                                <!-- Education Header Title Starts -->
                                                <div class="resume-card-header">
                                                    <div class="resume-card-name"><i class="fa fa-graduation-cap"></i>
                                                        Education</div>
                                                </div>
                                                <!-- Education Header Title Starts -->
                                                <div class="resume-card-body education">
                                                    <div class="resume-card-body-container second-font">
                                                        <!-- Single Education Starts -->
                                                        @foreach ($educations as $education)
                                                            <div class="resume-content">
                                                                <h6 class="uppercase">
                                                                    <span>{{ $education->job_title }} -
                                                                    </span>{{ $education->company_name }}
                                                                </h6>
                                                                <span class="date"><i class="fa fa-calendar-o"></i>
                                                                    {{ $education->start_date }} -
                                                                    {{ $education->end_date }}</span>
                                                                <p>{{ $education->description }}</p>
                                                            </div>
                                                            <!-- Single Experience Ends -->
                                                            <span class="separator"></span>
                                                        @endforeach
                                                        <!-- Single Education Ends -->
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        <!-- Education Ends -->
                                        <!-- Skills Starts -->
                                        @if ($educations->isNotEmpty())
                                            <div class="resume-card resume-card-2" data-index="2">
                                                <!-- Skills Header Title Starts -->
                                                <div class="resume-card-header">
                                                    <div class="resume-card-name"><i class="fa fa-star"></i> Skills
                                                    </div>
                                                </div>
                                                <!-- Skills Header Title Starts -->
                                                @php
                                                    $skillsChunks = $skills->chunk(ceil($skills->count() / 2));
                                                @endphp

                                                <div class="resume-card-body skills">
                                                    <div class="resume-card-body-container second-font">
                                                        <div class="row">
                                                            @foreach ($skillsChunks as $chunk)
                                                                <div class="col s6">
                                                                    @foreach ($chunk as $skill)
                                                                        <div class="resume-content">
                                                                            <h6 class="uppercase">{{ $skill->name }}
                                                                            </h6>
                                                                            <p>
                                                                                @for ($i = 1; $i <= 5; $i++)
                                                                                    @if ($i <= floor($skill->rate))
                                                                                        <i class="fa fa-star"></i>
                                                                                    @elseif($i - 0.5 == $skill->rate)
                                                                                        <i
                                                                                            class="fa fa-star-half-empty"></i>
                                                                                    @else
                                                                                        <i class="fa fa-star-o"></i>
                                                                                    @endif
                                                                                @endfor
                                                                            </p>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        <!-- Skills Ends -->
                                    </div>
                                </div>
                                <!-- Resume Content Ends -->
                            </div>
                        </div>
                    </div>
                    <!-- Resume Ends -->
                    @isset($achievement)
                        <!-- Fun Facts Starts -->
                        <div class="container badges">
                            <div class="row">
                                <!-- Fact Badge Item Starts -->
                                <div class="col s12 m4 l4 center-align">
                                    <h3>
                                        <i class="fa fa-briefcase"></i>
                                        <span class="font-weight-900">{{ $achievement->years_of_experience }}+</span>
                                    </h3>
                                    <h6 class="uppercase font-weight-700">Years Experience</h6>
                                </div>
                                <!-- Fact Badge Item Ends -->
                                <!-- Fact Badge Item Starts -->
                                <div class="col s12 m4 l4 center-align">
                                    <h3>
                                        <i class="fa fa-handshake-o"></i>
                                        <span class="font-weight-900">{{ $achievement->done_projects }}+</span>
                                    </h3>
                                    <h6 class="uppercase font-weight-700">Done Projects</h6>
                                </div>
                                <!-- Fact Badge Item Ends -->
                                <!-- Fact Badge Item Starts -->
                                <div class="col s12 m4 l4 center-align">
                                    <h3>
                                        <i class="fa fa-heart-o"></i>
                                        <span class="font-weight-900">{{ $achievement->happy_customers }}+</span>
                                    </h3>
                                    <h6 class="uppercase font-weight-700">Happy customers</h6>
                                </div>
                                <!-- Fact Badge Item Ends -->
                            </div>
                        </div>
                        <!-- Fun Facts Ends -->
                    @endisset
                </div>
                <!-- End Expanded About -->
                <img alt="close" src="{{ asset('site/assets/images/close-button.png') }}"
                    class="bl-icon-close" />
            </section>
            <!-- About Ends -->
            <!-- Portfolio Starts -->
            <section id="bl-work-section">
                <!-- Portfolio Title Starts -->
                <div class="bl-box valign-wrapper">
                    <div class="page-title center-align">
                        <h2 class="center-align">
                            <span data-hover="my">my </span>
                            <span data-hover="portfolio">portfolio</span>
                        </h2>
                    </div>
                </div>
                <!-- Portfolio Title Ends -->
                <!-- Portfolio Expanded Starts -->
                <div class="bl-content">
                    <!-- Main Heading Starts -->
                    <div class="container page-title center-align">
                        <h2 class="center-align">
                            <span data-hover="my">my </span>
                            <span data-hover="portfolio">portfolio</span>
                        </h2>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="container">
                        <!-- Divider Starts -->
                        <div class="divider center-align">
                            <span class="outer-line"></span>
                            <span class="fa fa-suitcase" aria-hidden="true"></span>
                            <span class="outer-line"></span>
                        </div>
                        <!-- Divider Ends -->
                        <div class="row center-align da-thumbs" id="bl-work-items">
                            @if ($projects->isNotEmpty())
                                <!-- Project Starts -->
                                @foreach ($projects as $key => $project)
                                    <div class="col s12 m6 l6 xl4" data-panel="panel-{{ $key }}">
                                        <a href="#">
                                            <img class="responsive-img" src="{{ $project->image_url }}"
                                                alt="Project" />
                                            <div class="valign-wrapper"><span
                                                    class="font-weight-700 uppercase">{{ $project->name }}</span>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                                <!-- Project Ends -->
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Portfolio Expanded Ends -->
                <img alt="close" src="{{ asset('site/assets/images/close-button.png') }}"
                    class="bl-icon-close" />
            </section>
            <!-- Portfolio Section Ends -->
            <!-- Contact Section Starts -->
            <section>
                <!-- Contact Title Starts -->
                <div class="bl-box valign-wrapper">
                    <div class="page-title center-align">
                        <h2 class="center-align">
                            <span data-hover="get">get </span>
                            <span data-hover="in touch">in touch</span>
                        </h2>
                    </div>
                </div>
                <!-- Contact Title Ends -->
                <!-- Expanded Contact Starts -->
                <div class="bl-content">
                    <!-- Main Heading Starts -->
                    <div class="container page-title center-align">
                        <h2 class="center-align">
                            <span data-hover="get">get </span>
                            <span data-hover="in touch">in touch</span>
                        </h2>
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="container">
                        <!-- Divider Starts -->
                        <div class="divider center-align">
                            <span class="outer-line"></span>
                            <span class="fa fa-envelope-open" aria-hidden="true"></span>
                            <span class="outer-line"></span>
                        </div>
                        <!-- Divider Ends -->
                        <div class="row contact section-padding">
                            @isset($personalInfo)
                                <!-- Contact Infos Starts -->
                                <div class="col s12 m5 l5 xl4 leftside">
                                    <!-- Contacts Starts -->
                                    <h6 class="font-weight-700 uppercase">Phone</h6>
                                    <span class="font-weight-400 second-font"><i class="fa fa-phone"></i>
                                        {{ $personalInfo->phone }}</span>
                                    <h6 class="font-weight-700 uppercase">Email</h6>
                                    <span class="font-weight-400 second-font"><i class="fa fa-envelope"></i>
                                        {{ $personalInfo->email }}</span>
                                    <h6 class="font-weight-700 uppercase">Linkedin</h6>
                                    <span class="font-weight-400 second-font"><i class="fa fa-skype"></i>
                                        {{ $personalInfo->linkedin }}</span>
                                    <h6 class="font-weight-700 uppercase">Address</h6>
                                    <span class="font-weight-400 second-font"><i class="fa fa-home"></i>
                                        {{ $personalInfo->address }}</span><br>
                                    <!-- Contacts Ends -->
                                    <!-- Social Media Profiles Starts -->
                                    <h6 class="font-weight-700 uppercase">Social Profiles</h6>
                                    <div class="social">
                                        <ul class="list-inline social social-intro center-align p-none">
                                            @if ($personalInfo->facebook)
                                                <li class="facebook"><a href="{{ $personalInfo->facebook }}"><i
                                                            class="fa fa-facebook"></i></a>
                                                </li>
                                            @endif
                                            @if ($personalInfo->twitter)
                                                <li class="twitter"><a href="{{ $personalInfo->twitter }}"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            @endif
                                            @if ($personalInfo->google_plus)
                                                <li class="google-plus"><a href="{{ $personalInfo->google_plus }}"><i
                                                            class="fa fa-google-plus"></i></a></li>
                                            @endif
                                            @if ($personalInfo->linkedin)
                                                <li class="linkedin"><a href="{{ $personalInfo->linkedin }}"><i
                                                            class="fa fa-linkedin"></i></a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <!-- Social Media Profiles Ends -->
                                </div>
                                <!-- Contact Infos Ends -->

                            @endisset
                            <!-- Contact Form Starts -->
                            <div class="col s12 m7 l7 xl8 rightside">
                                <h6 class="uppercase m-none font-weight-700">Feel free to drop me a line</h6>
                                <div class="row">
                                    <p class="col s12 m12 l12 xl10 second-font">
                                        If you have any suggestion, project or even you want to say Hello.. Please fill
                                        out the form below and I will reply you shortly.
                                    </p>
                                </div>
                                <form action="{{ route('site.contactUs.sendMail') }}" method="post">
                                    @csrf
                                    <!-- Name Field Starts -->
                                    <div class="input-field second-font">
                                        <i class="fa fa-user prefix"></i>
                                        <input id="name" name="name" type="text" class="validate"
                                            required>
                                        <label class="font-weight-400" for="name">Your Name</label>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!-- Name Field Ends -->
                                    <!-- Email Field Starts -->
                                    <div class="input-field second-font">
                                        <i class="fa fa-envelope prefix"></i>
                                        <input id="email" type="email" name="email" class="validate"
                                            required>
                                        <label for="email">Your Email</label>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!-- Email Field Ends -->
                                    <div class="input-field second-font">
                                        <i class="fa fa-phone prefix"></i>
                                        <input id="phone" type="tel" name="phone" class="validate"
                                            required>
                                        <label for="phone">Your Phone</label>
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Comment Textarea Starts -->
                                    <div class="input-field second-font">
                                        <i class="fa fa-comments prefix"></i>
                                        <textarea id="comment" name="message" class="materialize-textarea" required></textarea>
                                        <label for="comment">Your Message</label>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!-- Comment Textarea Ends -->
                                    <!-- Submit Form Button Starts -->
                                    <div class="col s12 m12 l9 xl8 submit-form">
                                        <button class="btn font-weight-700" type="submit" name="send">
                                            Send Message <i class="fa fa-send"></i>
                                        </button>
                                    </div>
                                    <!-- Submit Form Button Ends -->
                                    <div class="col s12 m12 l8 xl8 form-message">
                                        <span class="output_message center-align font-weight-700 uppercase"></span>
                                    </div>
                                </form>
                            </div>
                            <!-- Contact Form Ends -->
                        </div>
                    </div>
                </div>
                <!-- Expanded Contact Ends -->
                <img alt="close" src="{{ asset('site/assets/images/close-button.png') }}"
                    class="bl-icon-close" />
            </section>
            <!-- Contact Section Ends -->
            @if ($projects->isNotEmpty())
                @foreach ($projects as $key => $project)
                    <!-- Portfolio Panel Items Starts -->
                    <div class="bl-panel-items" id="bl-panel-work-items">
                        <!-- Project Starts -->
                        <div data-panel="panel-{{ $key }}">
                            <div class="row">
                                <!-- Project Main Content Starts -->
                                <div class="col s12 l6 xl6 section-padding section-padding-right-none">
                                    <img class="responsive-img" src="{{ $project->image_url }}" alt="project" />
                                </div>
                                <!-- Project Main Content Ends -->
                                <!-- Project Details Starts -->
                                <div class="col s12 l6 xl6 section-padding">
                                    <h3 class="font-weight-700 uppercase">{{ $project->name }}</h3>
                                    <ul class="project-details second-font">
                                        <li><i class="fa fa-user"></i><span class="font-weight-700"> Client </span>:
                                            <span class="font-weight-400 uppercase">{{ $project->client }}</span>
                                        </li>
                                        <li><i class="fa fa-calendar-o"></i><span class="font-weight-700"> Start Date
                                            </span>:
                                            <span class="font-weight-400 uppercase">{{ $project->start_date }}</span>
                                        </li>
                                        <li><i class="fa fa-calendar-check-o"></i><span class="font-weight-700"> End
                                                Date
                                            </span>: <span
                                                class="font-weight-400 uppercase">{{ $project->end_date }}</span></li>
                                        <li><i class="fa fa-cogs"></i> <span class="font-weight-700"> Used
                                                Technologies</span>
                                            : <span
                                                class="font-weight-400 uppercase">{{ $project->used_technologies }}</span>
                                        </li>
                                    </ul>
                                    <hr>
                                    <a href="{{ $project->link }}"
                                        class="waves-effect waves-light btn font-weight-700">Preview <i
                                            class="fa fa-external-link"></i></a>
                                </div>
                                <!-- Project Details Ends -->
                            </div>
                        </div>
                        <!-- Project Ends -->
                        <!-- Portfolio Navigation Starts -->
                        <nav>
                            <!-- Previous Work Icon Starts -->
                            <span class="control-button bl-previous-work"><i class="fa fa-angle-left"></i></span>
                            <!-- Previous Work Icon Ends -->
                            <!-- Close Work Icon Starts -->
                            <img alt="close" src="{{ asset('site/assets/images/close-button.png') }}"
                                class="control-button bl-icon-close" />
                            <!-- Close Work Icon Ends -->
                            <!-- Next Work Icon Starts -->
                            <span class="control-button bl-next-work"><i class="fa fa-angle-right"></i></span>
                            <!-- Previous Work Icon Ends -->
                        </nav>
                        <!-- Portfolio Navigation Ends -->
                    </div>
                    <!-- Portfolio Panel Items Ends -->
                @endforeach
            @endif
        </div>
    </div>
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <script src="{{ asset('site/assets/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('site/assets/js/jquery.animatedheadline.js') }}"></script>
    <script src="{{ asset('site/assets/js/boxlayout.js') }}"></script>
    <script src="{{ asset('site/assets/js/materialize.min.js') }}"></script>
    <script src="{{ asset('site/assets/js/jquery.hoverdir.js') }}"></script>
    <script src="{{ asset('site/assets/js/custom.js') }}"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="{{ asset('site/assets/js/styleswitcher.js') }}"></script>
</body>


</html>
