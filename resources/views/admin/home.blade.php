
@extends('admin.layout.master')

@section('DashboardMenu','active')

@section('content')


<div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Today Login </div>
                                    <div class="stat-digit">80</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total User</div>
                                    <div class="stat-digit">78</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Doctors</div>
                                    <div class="stat-digit"> 500</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Hospital </div>
                                    <div class="stat-digit"> </i>650</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
         
                    <div class="col-xl-12 col-xxl-6 col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                                <div class="card">
                                    <div class="social-graph-wrapper widget-facebook">
                                        <span class="s-icon"><i class="fa fa-facebook"></i></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 border-right">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">89</span> k</h4>
                                                <p class="m-0">Friends</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">119</span> k</h4>
                                                <p class="m-0">Followers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                                <div class="card">
                                    <div class="social-graph-wrapper widget-linkedin">
                                        <span class="s-icon"><i class="fa fa-linkedin"></i></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 border-right">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">89</span> k</h4>
                                                <p class="m-0">Friends</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">119</span> k</h4>
                                                <p class="m-0">Followers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                                <div class="card">
                                    <div class="social-graph-wrapper widget-googleplus">
                                        <span class="s-icon"><i class="fa fa-google-plus"></i></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 border-right">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">89</span> k</h4>
                                                <p class="m-0">Friends</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">119</span> k</h4>
                                                <p class="m-0">Followers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6">
                                <div class="card">
                                    <div class="social-graph-wrapper widget-twitter">
                                        <span class="s-icon"><i class="fa fa-twitter"></i></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 border-right">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">89</span> k</h4>
                                                <p class="m-0">Friends</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                                <h4 class="m-1"><span class="counter">119</span> k</h4>
                                                <p class="m-0">Followers</p>
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
          