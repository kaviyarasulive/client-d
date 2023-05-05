   
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
                            <h4>Test Result</h4>
                            <span class="ml-1">page</span>
                        </div>
                    </div>


                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Test</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Result</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">

                <?php 
$p = rand(0,99);

?>

@if ($p<30)

<div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="card text-white bg-success">
                            <div class="card-header">
                                <h5 class="card-title text-white">Successfully Completed the test</h5>
                            </div>
                            <div class="card-header">
                                <h5 class="card-title text-white">Result Level <?php echo $p ?></h5>
                            </div>
                            <div class="card-footer bg-transparent border-0 text-white">Given Below the Best docter List Check on it!
                            </div>
                        </div>
                    </div>
                </div>
@elseif($p>70)


<div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="card text-white bg-danger">
                            <div class="card-header">
                                <h5 class="card-title text-white">Successfully Completed the test</h5>
                            </div>
                            <div class="card-body mb-0">
                                <p class="card-text">Result Level <?php echo $p ?></a>
                            </div>
                            <div class="card-footer bg-transparent border-0 text-white">Given Below the Best docter List Check on it!
                            </div>
                        </div>
                    </div>
@elseif($p>85)
<div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="card text-white bg-warning">
                            <div class="card-header">
                                <h5 class="card-title text-white">Successfully Completed the test</h5>
                            </div>
                            <div class="card-body mb-0">
                                <p class="card-text">Result Level <?php echo $p ?>
                            <div class="card-footer bg-transparent border-0 text-white">Given Below the Best docter List Check on it!
                            </div>
                        </div>
                    </div>

@elseif($p >10)
<div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="card text-white bg-warning">
                            <div class="card-header">
                                <h5 class="card-title text-white"></h5>
                            </div>
                            <div class="card-body mb-0">
                                <p class="card-text">OOPS :) retry </a>
                            </div>
                            <div class="card-footer bg-transparent border-0 text-white">
                            </div>
                        </div>
                    </div>




@endif

@foreach ($doctor as $key => $value)

                    <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="card bg-light">
                            <div class="card-header">
                                <h5 class="card-title">{{ $value->name}}</h5>
                            </div>
                            <div class="card-body mb-0">
                                <p class="card-text">{{ $value->disease }}</a>
                            </div>
                            <div class="card-footer bg-transparent border-0">{{ $value->hospital }}
                            </div>
                        </div>
                    </div>
@endforeach
         

                   
                    
                









              
                

                    

@endsection


@section('script')


@endsection