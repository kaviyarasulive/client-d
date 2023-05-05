
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
                            <h4>Question inserting Form</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- <h4 class="card-title">Form Validation</h4> -->
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="store" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="Insert_question">insert Question
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="Insert_question" name="Insert_question" placeholder="Enter the question.." required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="Option_A">insert Option A <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="Option_A" name="Option_A" placeholder="Option A" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="Option_B">insert Option B
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="Option_B" name="Option_B" placeholder="Option B"required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="Option_C">insert Option C <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="Option_C" name="Option_C" placeholder="Option C " required>
                                                    </div>
                                                </div>
                                            
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header flex-row flex-nowrap" >
                                <h4 class="card-title">Questions Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>                                                
                                               <th scope="col">S.no</th>
                                                <th scope="col">Question</th>
                                                <th scope="col">Option A</th>
                                                <th scope="col">Option B</th>
                                                <th scope="col">Option C</th>
                                                <th scope="col">Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($question as $key => $value)

                                            <tr>
                                                <td>{{$value ->id}}</td>
                                                <td>{{$value->Insert_question}}</td>
                                                <td>{{$value->Option_A}}</td>
                                                <td>{{$value->Option_B}}</td>
                                                <td>{{$value->Option_C}}</td>
                                                <td><button type="button" class="btn btn-danger"> <i class="fa fa-close"></i></span></button></td>

                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection


@section('script')


@endsection