@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')

    {{ trans('Students_trans.Student_details') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    {{ trans('Students_trans.Student_details') }}

@stop
<!-- breadcrumb -->
@endsection
@section('content')

<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="card-body">
                    <div class="tab nav-border">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="home-02-tab" data-toggle="tab" href="#home-02"
                                    role="tab" aria-controls="home-02"
                                    aria-selected="true">{{ trans('Students_trans.Student_details') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-02-tab" data-toggle="tab" href="#profile-02"
                                    role="tab" aria-controls="profile-02"
                                    aria-selected="false">{{ trans('Students_trans.Attachments') }}</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="home-02" role="tabpanel"
                                aria-labelledby="home-02-tab">
                                {{-- جدول بيانات الطالب --}}
                                <table class="table table-striped table-hover" style="text-align:center">
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ trans('Students_trans.name') }}</th>
                                            <th scope="row">{{ trans('Students_trans.email') }}</th>
                                            <th scope="row">{{ trans('Students_trans.gender') }}</th>
                                            <th scope="row">{{ trans('Students_trans.Grade') }}</th>
                                            <th scope="row">{{ trans('Students_trans.classrooms') }}</th>
                                            <th scope="row">{{ trans('Students_trans.section') }}</th>
                                            <th scope="row">{{trans('Students_trans.academic_year')}}</th>
                                            <th scope="row">{{ trans('Students_trans.Date_of_Birth') }}</th>
                                            <th scope="row">{{ trans('Students_trans.blood_type') }}</th>

                                        </tr>

                                        <tr>
                                            <td>{{ $Student->name }}</td>
                                            <td>{{ $Student->email }}</td>
                                            <td>{{ $Student->gender->Name }}</td>
                                            <td>{{ $Student->grade->Name }}</td>
                                            <td>{{ $Student->classroom->Name_Class }}</td>
                                            <td>{{ $Student->section->Name_Section }}</td>
                                            <td>{{ $Student->Date_Birth }}</td>
                                            <td>{{ $Student->academic_year }}</td>
                                            <td>{{ $Student->type__blood->Name }}</td>
                                        </tr>

                                        {{-- <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <th scope="row"></th>
                                            <td></td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                                    {{-- جدول المرفقات  --}}
                            <div class="tab-pane  fade" id="profile-02" role="tabpanel"
                                aria-labelledby="profile-02-tab">
                                <div class="card card-statistics">
                                    <div class="card-body">
                                        <form  method="post" action="{{route('Upload_attachment')}}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label
                                                        for="academic_year">{{ trans('Students_trans.Attachments') }}
                                                        : <span class="text-danger">*</span></label>
                                                    <input type="file" accept="image/*" name="photos[]" multiple
                                                        required>
                                                    <input type="hidden" name="student_name"
                                                        value="{{ $Student->name }}">
                                                    <input type="hidden" name="student_id" value="{{ $Student->id }}">
                                                </div>
                                            </div>
                                            <br><br>
                                            <button type="submit" class="button button-border x-small">
                                                {{ trans('Students_trans.submit') }}
                                            </button>
                                        </>
                                    </div>
                                    <br>
                                    <table class="table center-aligned-table mb-0 table table-hover"
                                        style="text-align:center">
                                        <thead>
                                            <tr class="table-secondary">
                                                <th scope="col">#</th>
                                                <th scope="col">{{ trans('Students_trans.filename') }}</th>
                                                <th scope="col">{{ trans('Students_trans.created_at') }}</th>
                                                <th scope="col">{{ trans('Students_trans.Processes') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Student->images as $attachment)
                                                <tr style='text-align:center;vertical-align:middle'>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $attachment->filename }}</td>
                                                    <td>{{ $attachment->created_at->diffForHumans() }}</td>


                                                    <td colspan="2">
                                                        <a class="btn btn-outline-info btn-sm"
                                                           href="{{url('Download_attachment')}}/{{ $attachment->imageable->name }}/{{$attachment->filename}}"
                                                           role="button"><i class="fas fa-download"></i>&nbsp; {{trans('Students_trans.Download')}}</a>

                                                        <button type="button" class="btn btn-outline-danger btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#Delete_img{{ $attachment->id }}"
                                                                title="{{ trans('Grades_trans.Delete') }}">{{trans('Students_trans.delete')}}
                                                        </button>

                                                    </td>
                                                </tr>
                                                @include('pages.Students.Delete_img')
                                            @endforeach

                                        </tbody>
                                    </table>



                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- row closed -->
    @endsection
    @section('js')
        @toastr_js
        @toastr_render
    @endsection


