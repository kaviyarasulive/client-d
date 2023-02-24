@extends('patient.layout.master')

@section('DashboardMenu','active')

@section('content')


<!--**********************************
            Content body start
        ***********************************-->
            <div class="content-body">
                <!-- row -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">             
                            <div class="card-header">
                                <h4 class="card-title">Radio Buttons</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optradio"> Option 1</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optradio"> Option 2</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optradio"> Option 2</label>
                                            </div>
                                            
                                        </div>
                                    </form>
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
          