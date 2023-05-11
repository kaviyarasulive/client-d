
@extends('administration.layout.master')

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
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Datatable</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Patient table</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Patient Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Primary Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table primary-table-bordered">
                                        <thead class="thead-primary">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">File</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($patient as $key => $value)

                                            <tr>
                                                <th>{{ $value ->id }}</th>
                                                <td>{{ $value ->name }}</td>
                                                <td>{{ $value ->email }}</td>
                                                <td>{{ $value ->phone }}</td>
                                                <td>
                                                    <form action="{{ url('/administration/submitReport/'.$value ->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="file" name="report" id="">
                                                        <input type="submit" value="Submit">
                                                    </form>
                                                </td>
                                            </tr>
                                            
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
          