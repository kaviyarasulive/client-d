
@extends('user.layout.master')

@section('DashboardMenu','active')

@section('content')

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Doctors</h4>
                            <span class="ml-1">List</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Card</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                @foreach ($doctor as $key => $value)

             
                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="card mb-3">
                            <div class="card-header">

                                <h5 class="card-title">{{$value ->name}}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{$value ->hospital}}</p>
                            </div>
                            <div class="card-footer">
                                <a href="javascript:void()" class="card-link float-right">Card link</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                   
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection


@section('script')


@endsection