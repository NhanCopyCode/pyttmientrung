<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show
@yield('style')
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="skin-blue-light sidebar-mini">
    <div id="app" v-cloak>
        <div class="wrapper">

            @include('adminlte::layouts.partials.mainheader')

            @include('adminlte::layouts.partials.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!-- Main content -->
                <section class="content">
                    <!-- Your Page Content Here -->
                    @yield('main-content')
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            @include('adminlte::layouts.partials.controlsidebar')

            @include('adminlte::layouts.partials.footer')

        </div><!-- ./wrapper -->
    </div>
    @include('sweetalert::alert')
    @section('scripts')
        @include('adminlte::layouts.partials.scripts')
    @show
    @toastr_render
    <script src="{{ asset('js/sweetsweetalert::alert2/sweetalert2@11.js') }}"></script>
    <script src="{{ asset('js/sweetalert2/sweetalert2@11.js') }}"></script>

    @yield('scripts-footer')
</body>

</html>
