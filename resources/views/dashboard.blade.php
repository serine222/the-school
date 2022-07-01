<!DOCTYPE html>
<html lang="en">
@section('title')
    {{ trans('main_trans.Main_title') }}
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
    @livewireStyles
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
        <div class="content-wrapper">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="mb-0" style="font-family: 'Cairo', sans-serif">
                            {{ trans('dashboard.dashboard_admin') }}</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                        </ol>
                    </div>
                </div>
            </div>
            <!-- widgets -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-success">
                                        <i class="fas fa-user-graduate highlight-icon" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">{{ trans('dashboard.number_students') }}</p>
                                    <h4>{{ \App\Models\Student::count() }}</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a
                                    href="{{ route('Students.index') }}" target="_blank"><span class="text-danger">
                                        {{ trans('dashboard.display_data') }}</span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-warning">
                                        <i class="fas fa-chalkboard-teacher highlight-icon" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">{{ trans('dashboard.number_teacher') }}</p>
                                    <h4>{{ \App\Models\Teacher::count() }}</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a
                                    href="{{ route('Teachers.index') }}" target="_blank"><span
                                        class="text-danger">{{ trans('dashboard.display_data') }} </span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-primary">
                                        <i class="fas fa-chalkboard highlight-icon" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">{{ trans('dashboard.number_classes') }}</p>
                                    <h4>{{ \App\Models\Section::count() }}</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a
                                    href="{{ route('Sections.index') }}" target="_blank"><span class="text-danger">
                                        {{ trans('dashboard.display_data') }}</span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Orders Status widgets-->


            <div class="row">

                <div style="height: 400px;" class="col-xl-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="tab nav-border" style="position: relative;">
                                <div class="d-block d-md-flex justify-content-between">
                                    <div class="d-block w-100">
                                        <h5 style="font-family: 'Cairo', sans-serif" class="card-title">
                                            {{ trans('dashboard.final_operation') }}</h5>
                                    </div>
                                    <div class="d-block d-md-flex nav-tabs-custom">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">

                                            <li class="nav-item">
                                                <a class="nav-link active show" id="students-tab" data-toggle="tab"
                                                    href="#students" role="tab" aria-controls="students"
                                                    aria-selected="true"> {{ trans('dashboard.Students') }}</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" id="teachers-tab" data-toggle="tab"
                                                    href="#teachers" role="tab" aria-controls="teachers"
                                                    aria-selected="false">{{ trans('dashboard.Teachers') }}
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content" id="myTabContent">

                                    {{-- students Table --}}
                                    <div class="tab-pane fade active show" id="students" role="tabpanel"
                                        aria-labelledby="students-tab">
                                        <div class="table-responsive mt-15">
                                            <table style="text-align: center"
                                                class="table center-aligned-table table-hover mb-0">
                                                <thead>
                                                    <tr class="table-info text-danger">
                                                        <th>#</th>
                                                        <th>{{ trans('dashboard.Name_student') }}</th>
                                                        <th>{{ trans('dashboard.Email') }}</th>
                                                        <th>{{ trans('dashboard.Gender') }}</th>
                                                        <th>{{ trans('dashboard.Grade') }}</th>
                                                        <th>{{ trans('dashboard.Classroom') }}</th>
                                                        <th>{{ trans('dashboard.Section') }}</th>
                                                        <th>{{ trans('dashboard.Added_date') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse(\App\Models\Student::latest()->take(5)->get() as $student)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $student->name }}</td>
                                                            <td>{{ $student->email }}</td>
                                                            <td>{{ $student->gender->Name }}</td>
                                                            <td>{{ $student->grade->Name }}</td>
                                                            <td>{{ $student->classroom->Name_Class }}</td>
                                                            <td>{{ $student->section->Name_Section }}</td>
                                                            <td class="text-success">{{ $student->created_at }}</td>
                                                        @empty
                                                            <td class="alert-danger" colspan="8">
                                                                {{ trans('dashboard.No data') }}</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    {{-- teachers Table --}}
                                    <div class="tab-pane fade" id="teachers" role="tabpanel"
                                        aria-labelledby="teachers-tab">
                                        <div class="table-responsive mt-15">
                                            <table style="text-align: center"
                                                class="table center-aligned-table table-hover mb-0">
                                                <thead>
                                                    <tr class="table-info text-danger">
                                                        <th>#</th>
                                                        <th> {{ trans('dashboard.name_teacher') }}</th>
                                                        <th>{{ trans('dashboard.Gender') }}</th>
                                                        <th> {{ trans('dashboard.Joining_Date') }}</th>
                                                        <th>{{ trans('dashboard.specializations') }}</th>
                                                        <th> {{ trans('dashboard.Added_date') }}</th>
                                                    </tr>
                                                </thead>

                                                @forelse(\App\Models\Teacher::latest()->take(5)->get() as $teacher)
                                                    <tbody>
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $teacher->Name }}</td>
                                                            <td>{{ $teacher->genders->Name }}</td>
                                                            <td>{{ $teacher->Joining_Date }}</td>
                                                            <td>{{ $teacher->specializations->Name }}</td>
                                                            <td class="text-success">{{ $teacher->created_at }}</td>
                                                        @empty
                                                            <td class="alert-danger" colspan="8">
                                                                {{ trans('dashboard.No data') }}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                @endforelse
                                            </table>
                                        </div>
                                    </div>



                                    {{-- sections Table --}}
                                    <div class="tab-pane fade" id="fee_invoices" role="tabpanel"
                                        aria-labelledby="fee_invoices-tab">
                                        <div class="table-responsive mt-15">
                                            <table style="text-align: center"
                                                class="table center-aligned-table table-hover mb-0">
                                                <thead>
                                                    <tr class="table-info text-danger">
                                                        <th>#</th>
                                                        <th> {{ trans('dashboard.Name_student') }}</th>
                                                        <th> {{ trans('dashboard.Grade') }}</th>
                                                        <th> {{ trans('dashboard.Classroom') }}</th>
                                                        <th>{{ trans('dashboard.Section') }}</th>
                                                        {{-- <th>نوع الرسوم</th> --}}
                                                        {{-- <th>المبلغ</th> --}}
                                                        {{-- <th>تاريخ الاضافة</th> --}}
                                                    </tr>
                                                </thead>

                                            </table>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <livewire:calendar />

            <!--=================================
 wrapper -->

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

</body>

</html>
