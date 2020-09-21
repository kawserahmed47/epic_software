@extends('layouts.backend.app')
@section('title','View Report')
@push('css')
@endpush

@section('content')
    <div class="container-fluid">
        <div class="block-header">
        {{-- <h2>View Report</h2> --}}
        <h2 class="btn btn-outline-secondary"> <a href="{{route('createReport')}}"> Create Report</a> </h2>
        <h2 class="btn btn-outline-secondary"> <a href="{{route('viewReport')}}"> View Report</a> </h2>

        </div>

        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>VIEW REPORT</h2>
                        @if (Session::get('message'))
                            <p class="text-success">{{Session::get('message')}}</p>
                            
                        @endif
                        {{-- <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul> --}}
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($reports as $key=>$report)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$report->name}}</td>
                                    <td>{{$report->address}}</td>
                                    <td>{{$report->point_of_contact_email}}</td>
                                    <td>{{$report->phone}}</td>
                                    <td>{{$report->audit_date}}</td>
                                    <td>
                                    <a href="{{route('report',$report->id)}}" target="_blank" class="badge badge-info">EDIT</a>
                                        <a href="" target="_blank" class="badge badge-success">VIEW</a>
                                    <a href="{{route('deleteReport',$report->id)}}" class="badge badge-success">DELETE</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
        </div>
    </div>    
@endsection
@push('js')

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('/') }}assets/backend/plugins/jquery-countto/jquery.countTo.js"></script>
    <script src="{{ asset('/') }}assets/backend/js/pages/index.js"></script>
    <!-- Morris Plugin Js -->
    <script src="{{ asset('/') }}assets/backend/plugins/raphael/raphael.min.js"></script>
    <script src="{{ asset('/') }}assets/backend/plugins/morrisjs/morris.js"></script>
    <!-- ChartJs -->
    <script src="{{ asset('/') }}assets/backend/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('/') }}assets/backend/plugins/flot-charts/jquery.flot.js"></script>
    <script src="{{ asset('/') }}assets/backend/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="{{ asset('/') }}assets/backend/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="{{ asset('/') }}assets/backend/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="{{ asset('/') }}assets/backend/plugins/flot-charts/jquery.flot.time.js"></script>

@endpush
