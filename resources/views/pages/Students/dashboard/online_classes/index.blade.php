@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
{{ trans('online_classes.online_class') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
{{ trans('online_classes.online_class') }}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="col-xl-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                    data-page-length="50" style="text-align: center">
                                    <thead>
                                        <tr class="alert-success">
                                            <th>#</th>
                                            <th>{{ trans('online_classes.grade') }}</th>
                                            <th>{{ trans('online_classes.classroom') }}</th>
                                            <th>{{ trans('online_classes.section') }}</th>
                                            <th>{{ trans('online_classes.teacher') }}</th>
                                            <th>{{ trans('online_classes.subject') }}</th>
                                            <th>{{ trans('online_classes.date_start') }}</th>
                                            <th> {{ trans('online_classes.duration') }}</th>
                                            <th> {{ trans('online_classes.link') }}</th>
                                            <th>{{ trans('online_classes.Processes') }}</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($online_classes as $online_classe)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $online_classe->grade->Name }}</td>
                                                <td>{{ $online_classe->classroom->Name_Class }}</td>
                                                <td>{{ $online_classe->section->Name_Section }}</td>
                                                <td>{{ $online_classe->created_by }}</td>
                                                <td>{{ $online_classe->topic }}</td>
                                                <td>{{ $online_classe->start_at }}</td>
                                                <td>{{ $online_classe->duration }}</td>
                                                <td class="text-danger"><a href="{{ $online_classe->join_url }}"
                                                        target="_blank">انضم الان</a></td>

                                            </tr>

                                        @endforeach
                                </table>
                            </div>
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
