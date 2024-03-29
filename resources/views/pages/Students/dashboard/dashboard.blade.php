<!DOCTYPE html>
<html lang="en">
@section('title')
{{trans('main_trans.Main_title')}}
@stop
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    @include('layouts.head')
    <link rel="stylesheet" href="css/">
</head>

<body style="font-family: 'Cairo', sans-serif">

    <div class="wrapper" style="font-family: 'Cairo', sans-serif">

        <!--=================================
 preloader -->

 <div id="pre-loader">
     <img src="{{ URL::asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
 </div>

        <!--=================================
 preloader -->

        @include('layouts.main-header')

        @include('layouts.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->


            <!-- widgets -->

            <div class="content-wrapper">



<!-- home section starts  -->

<section class="home" id="home">

    <h1>{{trans('Students_trans.online_education')}}</h1>
    <br>
    <br>
    <br>

    <a href="{{ route('zoom.show') }}"><button class="btn1">{{trans('Students_trans.get-started')}}</button></a>

    <div class="shape"></div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">



    <div class="content  col-sm-6">
        <h3>{{trans('Students_trans.Compound-targets')}}</h3>
        <p> {{trans('Students_trans.p')}}</p>


    </div>

    <div class="image  col-sm-6">
        <img src="{{ URL::asset('assets/images/about-img.svg') }}" alt="avatar">
    </div>






</section>

<!-- teacher section starts  -->

<section class="teacher" id="teacher">

    <h1 class="heading">{{trans('Students_trans.teacher')}}</h1>

    <p>{{trans('Students_trans.p1')}}</p>



    </section>









                                        </div>














            <!--=================================
 footer -->


 @include('layouts.footer')
</div><!-- main content wrapper end-->
</div>
</div>
</div>

<!--=================================
footer -->

@include('layouts.footer-scripts')
@livewireScripts
@stack('scripts')
<script src="{{ URL::asset('assets/js/script.js') }}"></script>
</body>

</html>
