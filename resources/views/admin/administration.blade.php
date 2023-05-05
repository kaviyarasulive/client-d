
@extends('admin.layout.master')

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
                            <h4>Administration</h4>
                            <p class="mb-0">Appointment List</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Administration</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">View</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row --> 
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Administrations List </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>
                                                 @foreach ($administration as $key => $value)
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">email</th>                                                
                                                <th scope="col">Edit</th>                                                
                                                <th scope="col">Delete</th>                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$value ->id}}</td>
                                                <td>{{$value ->name}}  </td>
                                                <td>{{$value ->email}}</td>
                                                <td><a href=""><i class="fa fa-pencil color-muted"></a></i></td>
                                                <td><a href=""><i class="fa fa-close color-danger"></a></i></td>

                                                @endforeach
                                            </tr>
                                           
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  
        <!--**********************************
            Content body end
        ***********************************-->



@endsection


@section('script')


@endsection
          