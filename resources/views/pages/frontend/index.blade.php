<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Techwind - Tailwind CSS Multipurpose Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind CSS Saas & Software Landing Page Template" name="description" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="1.2.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/personal/runa-acharya.png" />

    <!-- Css -->
    <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet" />
    <!-- Main Css -->
    <link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/icons.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />
</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
    <!-- Loader Start -->
    <!-- <div id="preloader">
                <div id="status">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div> -->
    <!-- Loader End -->

    <!-- Start Navbar -->
    <nav id="topnav" class="defaultscroll is-sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="index.html">
                <img src="assets/images/personal/runa-acharya.png" class="inline-block dark:hidden" alt="" />
                <!-- <img
            src="assets/images/personal/runa-acharya.png"
            class="hidden dark:inline-block"
            alt=""
          /> -->
            </a>

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <!--Login button Start-->
            <ul class="buy-button list-none mb-0">
                <li class="inline mb-0">
                    <a href=""
                        class="btn btn-icon rounded-full bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white"><i
                            data-feather="settings" class="h-4 w-4"></i></a>
                </li>

                <li class="inline pl-1 mb-0">
                    <a href="https://1.envato.market/techwind" target="_blank"
                        class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                            data-feather="shopping-cart" class="h-4 w-4"></i></a>
                </li>
            </ul>
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">HOME</a><span class="menu-arrow"></span>

                        <ul class="submenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="index-saas.html" class="sub-menu-item">Saas
                                            <span
                                                class="bg-emerald-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ml-1">Animation</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">About Us</a><span class="menu-arrow"></span>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">DOCTOR</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                    </li>
                    <li class="has-submenu parent-menu-item">
                        <a href="javascript:void(0)"> Multi Level Menu</a><span class="submenu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a>
                            </li>
                            <li class="has-submenu parent-menu-item">
                                <a href="javascript:void(0)"> Level 2.0 </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">TREATMENTS</a><span class="menu-arrow"></span>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li class="megamenu-head">Portfolio Detail</li>
                                <li>
                                    <a href="portfolio-detail-three.html" class="sub-menu-item">Portfolio Three</a>
                                </li>
                                <li>
                                    <a href="portfolio-detail-four.html" class="sub-menu-item">Portfolio Four</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">BLOGS</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <a href="documentation.html" class="sub-menu-item">Documentation</a>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">FAQ'S</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <a href="documentation.html" class="sub-menu-item">Documentation</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="contact-one.html" target="_blank" class="sub-menu-item">CONTACT US</a>
                </li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </nav>
    <!--end header-->
    <!-- End Navbar -->

    <!-- Start Hero -->
    <section
        class="md:h-screen py-36 h-auto relative flex items-center background-effect overflow-hidden before:content-[''] before:absolute before:-z-1 sm:before:-bottom-80 before:-bottom-40 before:right-36 before:left-0 before:mx-auto before:rounded-full before:bg-indigo-600 sm:before:w-[50rem] before:w-[30rem] sm:before:h-[50rem] before:h-[30rem]">
        <div class="container-fluid">
            <div class="absolute inset-0" data-jarallax='{"speed": 0.5}'
                style="
            background: url('assets/images/personal/hero-overlay\ 01.png') top
              center;
          ">
            </div>
        </div>

        <!-- <div class="container relative z-1">
        <div class="grid grid-cols-1 mt-5">
          <div class="title-heading">
            <div class="grid md:grid-cols-12 mt-12">
              <div
                class="lg:col-span-4 md:col-span-6 order-2 lg:order-1 mt-6 md:mt-0 relative"
              >
                <div
                  class="rounded-md lg:shadow-md lg:dark:shadow-gray-700 lg:absolute lg:top-14 lg:bg-white lg:dark:bg-slate-900 lg:p-6"
                >
                  <h5
                    class="mb-3 text-2xl font-bold lg:text-black lg:dark:text-white text-white"
                  >
                    I'm Professional Web Developer
                  </h5>

                  <p
                    class="para-desc lg:text-slate-400 text-slate-200 dark:text-slate-200 mb-0"
                  >
                    Obviously I'm a Web Designer. Web Developer with over 3
                    years of experience.
                  </p>

                  <div class="mt-4">
                    <a
                      href="#portfolio"
                      class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"
                      >Hire me</a
                    >
                  </div>
                </div>
              </div> -->
        <!--end col-->

        <div class="lg:col-span-4 lg:block hidden lg:order-2"></div>

        <div class="lg:col-span-4 md:col-span-6 order-1 lg:order-3">
            <h4
                class="lg:text-[64px] lg:leading-[1.1] text-[40px] font-bold lg:text-black lg:dark:text-white text-white mb-0">
                Website Under <br />
                C<span class="typewrite" data-period="2000" data-type='[ "onstruction!"]'></span>
            </h4>
        </div>
        <!--end col-->
        </div>
        <!--end grid-->
        </div>
        </div>
        <!--end grid-->
        </div>
        <!--end container-->

        <div
            class="absolute inset-0 bg-gradient-to-b lg:from-indigo-600/5 lg:to-indigo-600/20 from-indigo-600/10 to-indigo-600 lg:-z-2">
        </div>
        <ul class="circles p-0 mb-0 text-purple-900">
            <li>IUI</li>
            <li>IVF</li>
            <li>ICSI</li>
            <li>IMSI</li>
            <li>TESA</li>
            <li>PESA</li>
        </ul>
    </section>
    <!--end section-->
    <div class="relative">
        <div class="absolute block w-full h-auto bottom-[25px] z-1 left-0">
            <a href="#about"><i
                    class="mdi mdi-arrow-down absolute top-0 left-0 right-0 text-center inline-flex items-center justify-center rounded-full bg-white dark:bg-slate-900 h-12 w-12 mx-auto shadow-md dark:shadow-gray-700"></i></a>
        </div>

        <div class="shape overflow-hidden text-white dark:text-slate-900">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--end section-->

    <section class="pt-12">
        <div class="container">
            <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
                <div class="mx-auto py-4">
                    <img src="assets/images/client/amazon.svg" class="h-6" alt="" />
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/google.svg" class="h-6" alt="" />
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/lenovo.svg" class="h-6" alt="" />
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/paypal.svg" class="h-6" alt="" />
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/shopify.svg" class="h-6" alt="" />
                </div>

                <div class="mx-auto py-4">
                    <img src="assets/images/client/spotify.svg" class="h-6" alt="" />
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Hero -->

    <!-- Start Section-->
    <section class="relative md:py-24 py-16" id="about">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5 md:col-span-6">
                    <div class="relative">
                        <img src="assets/images/personal/hero.jpg" class="rounded-full" alt="" />
                        <div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                                class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600">
                                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                            </a>
                        </div>

                        <div class="absolute top-0 left-0 -z-1">
                            <img src="assets/images/illustrator/dots.svg" alt="" />
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 md:col-span-6 mt-8 md:mt-0">
                    <div class="lg:ml-5">
                        <h6 class="text-purple-900 text-sm font-bold uppercase mb-2">
                            <!-- About -->
                        </h6>
                        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                            IRA FERTILITY
                        </h3>

                        <p class="text-justify">
                            IRA FERTILITY is a specialised fertility clinic which is dedicated to the service of
                            infertile couple.
                            Dr.Runa has helped many couples fulfil their dream of parenthood. Still in this pursuit, she
                            would serve the needy and continue her efforts to help infertile couple.
                        </p>
                        <br>
                        <p class="text-justify">
                            Intrauterine Insemination (IUI)
                            Intrauterine insemination or IUI is a basic treatment for infertility where washed sperm is
                            placed directly into the uterus using a catheter around the ovulation time .Decreased sperm
                            motility or low sperm count in males whereas cervical factor, endometriosis, unexplained etc
                            are the commonest indications for IUI . Couples who have tried natural or Ovulation
                            induction more than 5-6 times but in vain are recommended to step upto IUI. However they are
                            certain prerequisites and contraindications to this procedure for which you need to consult
                            a fertility specialist.
                            It is a less invasive procedure compared to IVF and the process of fertilisation to
                            implantation is natural hence success rate is 15-20% which is a little higher than natural
                            cycles but of course lower than IVF .
                            It’s a pretty cost effective procedure and can be tried 4-6 cycles as advised by your
                            fertility expert .
                        </p>
                    </div>
                </div>
            </div>
            <!--grid-->
        </div>
        <!--end container-->

        <section class="relative md:py-24 py-16" id="portfolio">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-purple-900 text-md font-bold uppercase mb-2">
                        In Vitro Fertilisation (IVF)
                    </h6>
                    <p class="text-justify whitespace-pre-line">
                        In vitro preparation (IVF Procedure) is an artificial reproductive technology wherein embryos
                        are cultured in an artificial environment which mimics the womb using specially designed
                        laboratory. The process of IVF Treatment involves stimulation of ovaries using gonadotropin
                        injections with the aim of harvesting maximal eggs: the extracted eggs are mixed with the sperms
                        in the IVf laboratory. The fertilised egg which is called an embryo is transferred back to the
                        to the woman’s womb for the further process of implantation and development.
                        There are various treatment protocols depending upon the patient’s condition and need. The
                        process starts with evaluation of both the partners, preparing them with multivitamins and
                        lifestyle modifications which includes psychological counselling. Depending upon the protocol,
                        injections are administered from day 2 or 3 of menstrual cycle for approximately 10 to 12 days.
                        Once the follicles are ready, egg retrieval is done under anaesthesia using ultrasound guidance
                        . The eggs are then evaluated for maturity and mature eggs are inseminated with sperms in a
                        culture dish and observed for 3 to 5 days to Check and assess the fertilisation and cleavage
                        process which are the stages of embryo development. IVF helps us to know and understand the
                        potential of the gametes to form the embryos. After 3 to 5 days of Culture, the Embryos are then
                        transferred back to the uterus. If for whatsoever reason embryos cannot be transferred in the
                        same cycle, they are frozen and then transferred in the next cycle. This process is called
                        frozen embryo transfer. It involves the preparation of endometrium which is the lining of uterus
                        where the embryo implants and then placing the warmed embryos back into the uterus. The lady is
                        administered progesterone support for the next 12-15 days after which the pregnancy test is
                        adviced.
                        Ivf pregnancies usually need support medications for the first 3 months after which routine
                        medicines only are continued.
                        The process on implantation is still nature driven and inspite of all the research and
                        technology one cannot predict the implantation, thence keeping the success rates between 50-70%
                        .
                    </p>
                </div>
                <!--end grid-->

                <!--end grid-->

                <div class="container md:mt-24 mt-16">
                    <div class="grid grid-cols-1 pb-8 text-center">
                        <h6 class="text-purple-900 text-sm font-bold uppercase mb-2">
                            Services
                        </h6>
                        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                            Treatments
                        </h3>

                        <p class="text-slate-400 max-w-xl mx-auto">
                            Obviously I'm a Web Designer. Experienced with all stages of the
                            development cycle for dynamic web projects.
                        </p>
                    </div>
                    <!--end grid-->

                    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-6 gap-[30px]">
                        <div
                            class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6">
                            <div
                                class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700">
                                <i class="uil uil-airplay"></i>
                            </div>

                            <div class="content mt-7">
                                <a href="page-services.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">IUI</a>
                                <p class="text-slate-400 mt-3">
                                    The phrasal sequence of the is now so that many campaign and
                                    benefit
                                </p>

                                <div class="mt-5">
                                    <a href="page-services.html"
                                        class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                        More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div
                            class="p-6 shadow-xl shadow-gray-100 dark:shadow-gray-800 transition duration-500 rounded-2xl mt-6">
                            <div
                                class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700">
                                <i class="uil uil-shutter"></i>
                            </div>

                            <div class="content mt-7">
                                <a href="page-services.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">IVF</a>
                                <p class="text-slate-400 mt-3">
                                    The phrasal sequence of the is now so that many campaign and
                                    benefit
                                </p>

                                <div class="mt-5">
                                    <a href="page-services.html"
                                        class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                        More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div
                            class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6">
                            <div
                                class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700">
                                <i class="uil uil-camera-plus"></i>
                            </div>

                            <div class="content mt-7">
                                <a href="page-services.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">ICSI</a>
                                <p class="text-slate-400 mt-3">
                                    The phrasal sequence of the is now so that many campaign and
                                    benefit
                                </p>

                                <div class="mt-5">
                                    <a href="page-services.html"
                                        class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                        More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div
                            class="p-6 shadow-xl shadow-gray-100 dark:shadow-gray-800 transition duration-500 rounded-2xl mt-6">
                            <div
                                class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700">
                                <i class="uil uil-flower"></i>
                            </div>

                            <div class="content mt-7">
                                <a href="page-services.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">IMSI</a>
                                <p class="text-slate-400 mt-3">
                                    The phrasal sequence of the is now so that many campaign and
                                    benefit
                                </p>

                                <div class="mt-5">
                                    <a href="page-services.html"
                                        class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                        More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div
                            class="p-6 hover:shadow-xl hover:shadow-gray-100 dark:hover:shadow-gray-800 transition duration-500 rounded-2xl mt-6">
                            <div
                                class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700">
                                <i class="uil uil-cog"></i>
                            </div>

                            <div class="content mt-7">
                                <a href="page-services.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">TESA</a>
                                <p class="text-slate-400 mt-3">
                                    The phrasal sequence of the is now so that many campaign and
                                    benefit
                                </p>

                                <div class="mt-5">
                                    <a href="page-services.html"
                                        class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                        More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div
                            class="p-6 shadow-xl shadow-gray-100 dark:shadow-gray-800 transition duration-500 rounded-2xl mt-6">
                            <div
                                class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-700">
                                <i class="uil uil-comment"></i>
                            </div>

                            <div class="content mt-7">
                                <a href="page-services.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600">PESA</a>
                                <p class="text-slate-400 mt-3">
                                    The phrasal sequence of the is now so that many campaign and
                                    benefit
                                </p>

                                <div class="mt-5">
                                    <a href="page-services.html"
                                        class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                        More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end grid-->
                </div>
                <!--end container-->
        </section>
        <!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-purple-900 text-sm font-bold uppercase mb-2">
                        Work Experience
                    </h6>
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">

                    </h3>

                    <p class="text-slate-400 max-w-xl mx-auto">
                        Obviously I'm a Web Designer. Experienced with all stages of the
                        development cycle for dynamic web projects.
                    </p>
                </div>
                <!--end grid-->

                <div class="grid grid-cols-1 mt-8">
                    <div class="timeline relative">
                        <div class="timeline-item">
                            <div class="grid sm:grid-cols-2">
                                <div class="">
                                    <div class="duration date-label-left md:text-right md:mr-8 relative">
                                        <img src="assets/images/client/shree-logo.png"
                                            class="rounded-full h-9 w-9 md:ml-auto" alt="" />
                                        <h5 class="my-2 font-semibold">Self Employed</h5>
                                        <h6 class="text-slate text-sm mb-0">2019-21</h6>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="mt-4 md:mt-0">
                                    <div class="event event-description-right float-left text-left md:ml-8">
                                        <h5 class="title mb-1 font-semibold">UX / UI Designer</h5>
                                        <p class="timeline-subtitle mt-3 mb-0 text-slate-400">
                                            The generated injected humour, or non-characteristic words
                                            etc. Cum sociis natoque penatibus et magnis dis parturient
                                            montes, nascetur ridiculus mus. Donec quam felis,
                                        </p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end grid-->
                        </div>
                        <!--end timeline item-->

                        <div class="timeline-item mt-12">
                            <div class="grid sm:grid-cols-2">
                                <div class="md:order-1 order-2">
                                    <div class="event event-description-left float-left text-right md:mr-8">
                                        <h5 class="title mb-1 font-semibold">
                                            Sr. UX / UI Designer
                                        </h5>
                                        <p class="timeline-subtitle mt-3 mb-0 text-slate-400">
                                            The generated injected humour, or non-characteristic words
                                            etc. Cum sociis natoque penatibus et magnis dis parturient
                                            montes, nascetur ridiculus mus. Donec quam felis,
                                        </p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="md:order-2 order-1">
                                    <div class="duration duration-right md:ml-8 relative">
                                        <img src="assets/images/client/google-logo.png" class="rounded-full h-9 w-9"
                                            alt="" />
                                        <h5 class="my-2 font-semibold">Google Tech.</h5>
                                        <h6 class="text-slate text-sm mb-0">2018-19</h6>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end grid-->
                        </div>
                        <!--end timeline item-->

                        <div class="timeline-item mt-12">
                            <div class="grid sm:grid-cols-2">
                                <div class="mt-4 mt-sm-0">
                                    <div class="duration date-label-left md:text-right md:mr-8 relative">
                                        <img src="assets/images/client/lenovo-logo.png"
                                            class="rounded-full h-9 w-9 md:ml-auto" alt="" />
                                        <h5 class="my-2 font-semibold">Lenovo Ltd.</h5>
                                        <h6 class="text-slate text-sm mb-0">2016-18</h6>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="mt-4 mt-sm-0">
                                    <div class="event event-description-right float-left text-left md:ml-8">
                                        <h5 class="title mb-1 font-semibold">
                                            Jr. UX / UI Designer
                                        </h5>
                                        <p class="timeline-subtitle mt-3 mb-0 text-slate-400">
                                            The generated injected humour, or non-characteristic words
                                            etc. Cum sociis natoque penatibus et magnis dis parturient
                                            montes, nascetur ridiculus mus. Donec quam felis,
                                        </p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end grid-->
                        </div>
                        <!--end timeline item-->

                        <div class="timeline-item mt-12">
                            <div class="grid sm:grid-cols-2">
                                <div class="md:order-1 order-2">
                                    <div class="event event-description-left float-left text-right md:mr-8">
                                        <h5 class="title mb-1 font-semibold">
                                            Front-end Web Designer
                                        </h5>
                                        <p class="timeline-subtitle mt-3 mb-0 text-slate-400">
                                            The generated injected humour, or non-characteristic words
                                            etc. Cum sociis natoque penatibus et magnis dis parturient
                                            montes, nascetur ridiculus mus. Donec quam felis,
                                        </p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="md:order-2 order-1">
                                    <div class="duration duration-right md:ml-8 relative">
                                        <img src="assets/images/client/circle-logo.png" class="rounded-full h-9 w-9"
                                            alt="" />
                                        <h5 class="my-2 font-semibold">Circle CI</h5>
                                        <h6 class="text-slate text-sm mb-0">2015-16</h6>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end grid-->
                        </div>
                        <!--end timeline item-->
                    </div>
                </div>
                <!--end grid-->
            </div>
            <!--end container-->
        </section>
        <!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="py-20 w-full table relative" data-jarallax='{"speed": 0.5}'
            style="background: url('assets/images/personal/cta.jpg') center">
            <div class="absolute inset-0 bg-dark opacity-80"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">
                        I Am Available For Freelancer Projects.
                    </h3>

                    <p class="text-white opacity-80 max-w-xl mx-auto">
                        Obviously I'm a Web Designer. Experienced with all stages of the
                        development cycle for dynamic web projects.
                    </p>

                    <div class="relative mt-8">
                        <a href=""
                            class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Hire
                            Me</a>
                    </div>
                </div>
                <!--end grid-->
            </div>
            <!--end container-->
        </section>
        <!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="relative md:py-24 py-16" id="portfolio">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-purple-900 text-md font-bold uppercase mb-2">
                        About
                    </h6>
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                        Dr. Runa Acharya
                    </h3>
                    <p class="text-justify whitespace-pre-line">
                        Dr. Runa Acharya is a distinguished medical professional, with her expertise in , IVF and
                        Infertility, Obstetrics & Gynaecology. She is currently working as Senior Consultant-Fertility
                        Solutions at Medicover Fertility Hyderabad.
                        <br>
                        Dr Runa Acharya has more than 12 years of professional experience in several fertility
                        treatments like IUI, IVF / ICSI/ IMSI, TESA, PESA, blastocyst culture, cryopreservation,
                        laparoscopy, hysteroscopy , bad obstetrics history, recurrent pregnancy loss , female sexual
                        dysfunction and successfully running donor and surrogacy programs. She individualizes each
                        couple's treatment plan from the range of options available. She practices evidence-based
                        medicine and keeps abreast with the latest medical advances.Through her constant efforts and
                        perseverance, Dr Runa Acharya became a member of many reputed societies. She is a member of the
                        Federation of Obstetrics & Gynecology Society of India (FOGSI), Member of Indian Society for
                        Assisted Reproduction (ISAR), ISAR, ESHRE, IFS and executive council member of TSAR since 2018.
                    </p>
                    <h4 class="text-justify whitespace-pre-line">
                        Dr. Runa Acharya is on scientific advisory board of Merck, Cipla & Sanzyme. She has authored
                        several research papers, articles & publications in various international journals.
                    </h4>
                    <br>
                    <p class="text-slate-900 max-w-lg mx-auto">

                    <h1 class="text-purple-900 text-md font-bold uppercase mb-2">Qualifications</h1>
                    <h1>MBBS RGHUS, Bangalore</h1>
                    <h1>M.D. ( Obs & Gynae) PGIMER, Chandigarh</h1>
                    <h1> DNB (OBG) </h1>
                    <h1>Fellowship ART Pune MS</h1>
                    <h1>Embryology Training Mumbai (Dr James Catt, Monash university)</h1>
                    </p>
                </div>
                <!--end grid-->

                <!-- <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-6 mt-8">
          <div
            class="group relative block overflow-hidden rounded-md transition-all duration-500"
          >
            <img
              src="assets/images/portfolio/1.jpg"
              class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500"
              alt=""
            />
            <div
              class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"
            ></div>

            <div class="content">
              <div
                class="icon absolute z-10 hidden group-hover:block top-4 right-4 transition-all duration-500"
              >
                <a
                  href="assets/images/portfolio/1.jpg"
                  class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"
                  ><i class="uil uil-camera"></i
                ></a>
              </div>

              <div
                class="title absolute z-10 hidden group-hover:block bottom-4 left-4"
              >
                <a
                  href="portfolio-detail-one.html"
                  class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out"
                  >Mockup Collection</a
                >
                <p class="text-slate-100 tag mb-0">Abstract</p>
              </div>
            </div>
          </div>

          <div
            class="group relative block overflow-hidden rounded-md transition-all duration-500"
          >
            <img
              src="assets/images/portfolio/2.jpg"
              class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500"
              alt=""
            />
            <div
              class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"
            ></div>

            <div class="content">
              <div
                class="icon absolute z-10 hidden group-hover:block top-4 right-4 transition-all duration-500"
              >
                <a
                  href="assets/images/portfolio/2.jpg"
                  class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"
                  ><i class="uil uil-camera"></i
                ></a>
              </div>

              <div
                class="absolute z-10 hidden group-hover:block bottom-4 left-4 transition-all duration-500"
              >
                <a
                  href="portfolio-detail-one.html"
                  class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out"
                  >Mockup Collection</a
                >
                <p class="text-slate-100 tag mb-0">Abstract</p>
              </div>
            </div>
          </div>

          <div
            class="group relative block overflow-hidden rounded-md transition-all duration-500"
          >
            <img
              src="assets/images/portfolio/3.jpg"
              class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500"
              alt=""
            />
            <div
              class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"
            ></div>

            <div class="content">
              <div
                class="icon absolute z-10 hidden group-hover:block top-4 right-4 transition-all duration-500"
              >
                <a
                  href="assets/images/portfolio/3.jpg"
                  class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"
                  ><i class="uil uil-camera"></i
                ></a>
              </div>

              <div
                class="absolute z-10 hidden group-hover:block bottom-4 left-4 transition-all duration-500"
              >
                <a
                  href="portfolio-detail-one.html"
                  class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out"
                  >Mockup Collection</a
                >
                <p class="text-slate-100 tag mb-0">Abstract</p>
              </div>
            </div>
          </div>

          <div
            class="group relative block overflow-hidden rounded-md transition-all duration-500"
          >
            <img
              src="assets/images/portfolio/4.jpg"
              class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500"
              alt=""
            />
            <div
              class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"
            ></div>

            <div class="content">
              <div
                class="icon absolute z-10 hidden group-hover:block top-4 right-4 transition-all duration-500"
              >
                <a
                  href="assets/images/portfolio/4.jpg"
                  class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"
                  ><i class="uil uil-camera"></i
                ></a>
              </div>

              <div
                class="absolute z-10 hidden group-hover:block bottom-4 left-4 transition-all duration-500"
              >
                <a
                  href="portfolio-detail-one.html"
                  class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out"
                  >Mockup Collection</a
                >
                <p class="text-slate-100 tag mb-0">Abstract</p>
              </div>
            </div>
          </div>

          <div
            class="group relative block overflow-hidden rounded-md transition-all duration-500"
          >
            <img
              src="assets/images/portfolio/5.jpg"
              class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500"
              alt=""
            />
            <div
              class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"
            ></div>

            <div class="content">
              <div
                class="icon absolute z-10 hidden group-hover:block top-4 right-4 transition-all duration-500"
              >
                <a
                  href="assets/images/portfolio/5.jpg"
                  class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"
                  ><i class="uil uil-camera"></i
                ></a>
              </div>

              <div
                class="absolute z-10 hidden group-hover:block bottom-4 left-4 transition-all duration-500"
              >
                <a
                  href="portfolio-detail-one.html"
                  class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out"
                  >Mockup Collection</a
                >
                <p class="text-slate-100 tag mb-0">Abstract</p>
              </div>
            </div>
          </div>

          <div
            class="group relative block overflow-hidden rounded-md transition-all duration-500"
          >
            <img
              src="assets/images/portfolio/6.jpg"
              class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500"
              alt=""
            />
            <div
              class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"
            ></div>

            <div class="content">
              <div
                class="icon absolute z-10 hidden group-hover:block top-4 right-4 transition-all duration-500"
              >
                <a
                  href="assets/images/portfolio/6.jpg"
                  class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"
                  ><i class="uil uil-camera"></i
                ></a>
              </div>

              <div
                class="absolute z-10 hidden group-hover:block bottom-4 left-4 transition-all duration-500"
              >
                <a
                  href="portfolio-detail-one.html"
                  class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out"
                  >Mockup Collection</a
                >
                <p class="text-slate-100 tag mb-0">Abstract</p>
              </div>
            </div>
          </div>

          <div
            class="group relative block overflow-hidden rounded-md transition-all duration-500"
          >
            <img
              src="assets/images/portfolio/7.jpg"
              class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500"
              alt=""
            />
            <div
              class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"
            ></div>

            <div class="content">
              <div
                class="icon absolute z-10 hidden group-hover:block top-4 right-4 transition-all duration-500"
              >
                <a
                  href="assets/images/portfolio/7.jpg"
                  class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"
                  ><i class="uil uil-camera"></i
                ></a>
              </div>

              <div
                class="absolute z-10 hidden group-hover:block bottom-4 left-4 transition-all duration-500"
              >
                <a
                  href="portfolio-detail-one.html"
                  class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out"
                  >Mockup Collection</a
                >
                <p class="text-slate-100 tag mb-0">Abstract</p>
              </div>
            </div>
          </div>

          <div
            class="group relative block overflow-hidden rounded-md transition-all duration-500"
          >
            <img
              src="assets/images/portfolio/8.jpg"
              class="group-hover:origin-center group-hover:scale-110 group-hover:rotate-3 transition duration-500"
              alt=""
            />
            <div
              class="absolute inset-0 group-hover:bg-dark opacity-50 transition duration-500 z-0"
            ></div>

            <div class="content">
              <div
                class="icon absolute z-10 hidden group-hover:block top-4 right-4 transition-all duration-500"
              >
                <a
                  href="assets/images/portfolio/8.jpg"
                  class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white btn-icon rounded-full lightbox"
                  ><i class="uil uil-camera"></i
                ></a>
              </div>

              <div
                class="absolute z-10 hidden group-hover:block bottom-4 left-4 transition-all duration-500"
              >
                <a
                  href="portfolio-detail-one.html"
                  class="h6 text-md font-medium text-white hover:text-indigo-600 duration-500 ease-in-out"
                  >Mockup Collection</a
                >
                <p class="text-slate-100 tag mb-0">Abstract</p>
              </div>
            </div>
          </div>
        </div> -->
                <!--end grid-->
                <!-- </div> -->
                <!--end container-->

                <div class="container md:mt-24 mt-16">
                    <div class="grid grid-cols-1 pb-8 text-center">
                        <h6 class="text-purple-900 text-sm font-bold uppercase mb-2">
                            Blogs
                        </h6>
                        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                            Latest News
                        </h3>

                        <p class="text-slate-400 max-w-xl mx-auto">
                            Obviously I'm a Web Designer. Experienced with all stages of the
                            development cycle for dynamic web projects.
                        </p>
                    </div>
                    <!--end grid-->

                    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                        <div class="blog relative rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                            <img src="assets/images/blog/01.jpg" alt="" />

                            <div class="content p-6">
                                <a href="blog-detail.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Design
                                    your apps in your own way</a>
                                <p class="text-slate-400 mt-3">
                                    The phrasal sequence of the is now so that many campaign and
                                    benefit
                                </p>

                                <div class="mt-4">
                                    <a href="blog-detail.html"
                                        class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                        More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="blog relative rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                            <img src="assets/images/blog/02.jpg" alt="" />

                            <div class="content p-6">
                                <a href="blog-detail.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">How
                                    apps is changing the IT world</a>
                                <p class="text-slate-400 mt-3">
                                    The phrasal sequence of the is now so that many campaign and
                                    benefit
                                </p>

                                <div class="mt-4">
                                    <a href="blog-detail.html"
                                        class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                        More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="blog relative rounded-md shadow dark:shadow-gray-700 overflow-hidden">
                            <img src="assets/images/blog/03.jpg" alt="" />

                            <div class="content p-6">
                                <a href="blog-detail.html"
                                    class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">Smartest
                                    Applications for Business</a>
                                <p class="text-slate-400 mt-3">
                                    The phrasal sequence of the is now so that many campaign and
                                    benefit
                                </p>

                                <div class="mt-4">
                                    <a href="blog-detail.html"
                                        class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                        More <i class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end grid-->
                </div>
                <!--end container-->

                <div class="container md:mt-24 mt-16">
                    <div class="grid grid-cols-1 text-center">
                        <h6 class="text-purple-900 text-sm font-bold uppercase mb-2">
                            Contact Me
                        </h6>
                        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">
                            Have Question ? Get in touch!
                        </h3>

                        <p class="text-slate-400 max-w-xl mx-auto">
                            Obviously I'm a Web Designer. Experienced with all stages of the
                            development cycle for dynamic web projects.
                        </p>

                        <div class="mt-6">
                            <a href="contact-one.html"
                                class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mr-2 mt-2"><i
                                    class="uil uil-phone"></i> Contact Me</a>
                        </div>
                    </div>
                    <!--end grid-->
                </div>
                <!--end container-->
        </section>
        <!--end section-->
        <!-- End -->

        <!-- Footer Start -->
        <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
            <div class="py-[30px] px-0 border-t border-slate-800">
                <div class="container text-center">
                    <div class="grid md:grid-cols-3 grid-cols-1 items-center">
                        <div class="md:text-left text-center">
                            <a href="#" class="text-[22px] focus:outline-none">
                                <img src="assets/images/logo-light.png" class="mx-auto md:mr-auto md:ml-0"
                                    alt="" />
                            </a>
                        </div>

                        <div class="text-center mt-6 md:mt-0">
                            <p class="mb-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                Techwind. Design with
                                <i class="mdi mdi-heart text-red-600"></i> by
                                <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.
                            </p>
                        </div>

                        <ul class="list-none md:text-right text-center mt-6 md:mt-0">
                            <li class="inline">
                                <a href=""
                                    class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                        data-feather="facebook" class="h-4 w-4"></i></a>
                            </li>
                            <li class="inline">
                                <a href=""
                                    class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                        data-feather="instagram" class="h-4 w-4"></i></a>
                            </li>
                            <li class="inline">
                                <a href=""
                                    class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                        data-feather="twitter" class="h-4 w-4"></i></a>
                            </li>
                            <li class="inline">
                                <a href=""
                                    class="btn btn-icon btn-sm border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                        data-feather="linkedin" class="h-4 w-4"></i></a>
                            </li>
                        </ul>
                        <!--end icon-->
                    </div>
                    <!--end grid-->
                </div>
                <!--end container-->
            </div>
        </footer>
        <!--end footer-->
        <!-- Footer End -->

        <!-- Start Cookie Popup -->
        <div
            class="cookie-popup fixed max-w-lg bottom-3 right-3 left-3 sm:left-0 sm:right-0 mx-auto bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md py-5 px-6 z-10">
            <p class="text-slate-400">
                This website uses cookies to provide you with a great user experience.
                By using it, you accept our
                <a href="https://shreethemes.in" target="_blank"
                    class="text-emerald-600 dark:text-emerald-500 font-semibold">use of cookies</a>
            </p>
            <div class="cookie-popup-actions text-right">
                <button class="absolute border-none bg-none p-0 cursor-pointer font-semibold top-2 right-2">
                    <i class="uil uil-times text-dark dark:text-slate-200 text-2xl"></i>
                </button>
            </div>
        </div>
        <!--Note: Cookies Js including in plugins.init.js (path like; assets/js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
        <!-- End Cookie Popup -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top"
            class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i
                class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- Switcher -->
        <div class="fixed top-1/4 -right-1 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label
                    class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                    for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span
                        class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- JAVASCRIPTS -->
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/jarallax/jarallax.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
</body>

</html>
