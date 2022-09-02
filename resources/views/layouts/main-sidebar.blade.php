<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">

            @if (auth('web')->check())
                @include('layouts.main-sidebar.admin-main-sidebar')


            @elseif (auth('student')->check())
                @include('layouts.main-sidebar.student-main-sidebar')


             @elseif (auth('teacher')->check())
                @include('layouts.main-sidebar.teacher-main-sidebar')

                @else

                @include('layouts.main-sidebar.new-main-sidebar')
            @endif




        </div>

        <!-- Left Sidebar End-->

        <!--=================================
