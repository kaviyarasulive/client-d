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
                            <h4>Download Report</h4>
                            <span class="ml-1">List</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Download Report</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Tab</a></li>
                        </ol>
                    </div>
                </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tab with icon</h4>
                            </div>
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#home8">
                                            <span>
                                                <i class="ti-home"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#profile8">
                                            <span>
                                                <button type="button" class="btn btn-rounded btn-secondary"><span
                                                 class="btn-icon-left text-secondary"><i
                                                class="fa fa-share-alt color-secondary"></i> </span>Share</button>                                                
                                           </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#messages8">
                                            <span>
                                            <button type="button" class="btn btn-rounded btn-danger"><span
                                                class="btn-icon-left text-danger"><i class="fa fa-envelope color-danger"></i>
                                            </span>Email</button>                                           
                                         </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#messages8">
                                            <span>
                                                <button type="button" class="btn btn-rounded btn-warning"><span
                                                    class="btn-icon-left text-warning"><i class="fa fa-download color-warning"></i>
                                                </span>Download</button>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane fade show active" id="home8" role="tabpanel">
                                        <div class="pt-4">
                                            <!-- <h4>This is icon title</h4>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                            </p>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                            </p> -->
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile8" role="tabpanel">
                                        <div class="pt-4">
                                            <h4>This is icon title</h4>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                            </p>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="messages8" role="tabpanel">
                                        <div class="pt-4">
                                            <h4>This is icon title</h4>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                            </p>
                                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                            </p>
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