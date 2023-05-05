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

                        <form action="Oncologist" method="post" >  
                          
                @csrf
                            <div class="card-header">
                                <h4 class="card-title">Can a lump or swelling in the breast be a sign of breast cancer?


</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" >
                                        <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="one">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="one">No</label>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can changes in bowel habits, such as diarrhea or constipation, be a sign of colon cancer?

</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="2">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="two">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="two">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can blood in the urine be a sign of bladder cancer?


</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="3">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="three">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="three">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can persistent coughing or hoarseness be a sign of lung cancer?
</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="four">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="four">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can unexplained weight loss be a sign of cancer?

</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="5">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="five">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="five">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can frequent headaches be a sign of brain cancer?

</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="6">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="six">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="six">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can difficulty swallowing be a sign of throat or esophageal cancer?
</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="7">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="seven">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="seven">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can abdominal pain or bloating be a sign of ovarian cancer?

</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="8">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="eight">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="eight">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can bone pain or fractures be a sign of bone cancer?

</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="9">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="nine">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="nine">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can unexplained fatigue or weakness be a sign of cancer?


</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="10">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="ten">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="ten">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can skin changes, such as darkening or yellowing, be a sign of skin cancer?


</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="11">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="eleven">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="eleven">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can mouth sores or white patches be a sign of oral cancer?

</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="12">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="twelve">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="twelve">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can a lump or swelling in the neck be a sign of lymphoma or thyroid cancer?

</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="13">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="thirteen">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="thirteen">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can night sweats or fever be a sign of leukemia or lymphoma?

</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="14">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="fourteen">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="fourteen">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can pain in the back or abdomen be a sign of pancreatic cancer?
</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="15">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="fifteen">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="fifteen">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can testicular lumps or swelling be a sign of testicular cancer?


</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="16">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="sixteen">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="sixteen">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can persistent fatigue or weight loss be a sign of liver cancer?

</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="17">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="seventeen">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="seventeen">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can pelvic pain or abnormal bleeding be a sign of cervical or uterine cancer?

</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="18">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="eighteen">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="eighteen">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <h4 class="card-title">Can vision changes or eye pain be a sign of eye cancer?

</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-group" name="19">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="1" name="nineteen">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="nineteen">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>


                            <div class="card-header">
                                <h4 class="card-title">Can frequent infections or fevers be a sign of blood cancer or lymphoma?
</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                   
                                        <div class="form-group" name="20">
                                            <div class="radio" >
                                                <label>
                                                    <input type="radio" value="1" name="twenty">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="0" name="twenty">No</label>
                                            </div>
                                            
                                        </div>
                                </div>
                            </div>

             <center> <button type="submit">submit</button></center>
</form>
                              
                        
                        </form>
                     
        <!--**********************************
            Content body end
        ***********************************-->


@endsection


@section('script')


@endsection
          