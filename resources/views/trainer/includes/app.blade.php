<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>@yield('title')</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('theme/admin/assets/css/dashlite.css?ver=2.4.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('theme/admin/assets/css/theme.css?ver=2.4.0')}}">
    <link rel="stylesheet" href="{{asset('theme/admin/assets/css/editors/summernote.css?ver=2.4.0')}}">
    <link rel="stylesheet" href="{{ asset('theme/admin/assets/css/libs/fontawesome-icons.css?ver=2.4.0') }}">
    @yield('css')
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">

        @include('trainer.includes.sidenav')
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->

        @include('trainer.includes.nav')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">

                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">

                            @yield('content')
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2020 DashLite. Template by <a href="https://softnio.com" target="_blank">Softnio</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{asset('theme/admin/assets/js/bundle.js?ver=2.4.0')}}"></script>
    <script src="{{asset('theme/admin/assets/js/scripts.js?ver=2.4.0')}}"></script>
    <script src="{{asset('theme/admin/assets/js/charts/gd-default.js?ver=2.4.0')}}"></script>
    <script src="{{asset('theme/admin/assets/js/editors.js?ver=2.4.0') }}"></script>
    <script src="{{asset('theme/admin/assets/js/libs/editors/summernote.js?ver=2.4.0')}}"></script>
    <script src="{{asset('theme/admin/assets/js/editors.js?ver=2.4.0')}}"></script>
    @yield('js')
</body>

</html>
