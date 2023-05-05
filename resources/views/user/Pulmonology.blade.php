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
                    <form action="Pulmonology" method="post">
                @csrf
                            <div class="card-header">
                                <h4 class="card-title">Can coughing up mucus or phlegm be a sign of a respiratory infection or lung disease?


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
                                <h4 class="card-title">Can shortness of breath or wheezing be a sign of asthma or COPD?

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
                                <h4 class="card-title">Can chest pain or discomfort be a sign of a heart or lung condition?

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
                                <h4 class="card-title">Can coughing up blood be a sign of lung cancer or tuberculosis?


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
                                <h4 class="card-title">Can difficulty breathing or rapid breathing be a sign of a pulmonary embolism or acute respiratory distress syndrome?

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
                                <h4 class="card-title">Can a persistent cough or hoarseness be a sign of lung cancer or throat cancer?

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
                                <h4 class="card-title">Can fatigue or weight loss be a sign of lung cancer or COPD?

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
                                <h4 class="card-title">Can snoring or gasping during sleep be a sign of sleep apnea or other breathing disorders?


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
                                <h4 class="card-title">Can chest tightness or discomfort be a sign of an allergic reaction or asthma?


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
                                <h4 class="card-title">Can a fever or chills be a sign of pneumonia or tuberculosis?


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
                                <h4 class="card-title">Can difficulty swallowing or a chronic sore throat be a sign of esophageal or lung cancer?

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
                                <h4 class="card-title">Can clubbing of the fingers or toes be a sign of lung disease or heart disease?


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
                                <h4 class="card-title">Can a swollen lymph node or neck mass be a sign of lung cancer or lymphoma?


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
                                <h4 class="card-title">Can a sudden onset of coughing or shortness of breath be a sign of pulmonary embolism or pneumothorax?


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
                                <h4 class="card-title">Can a high-pitched or wheezing sound during breathing be a sign of asthma or bronchitis?

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
                                <h4 class="card-title">Can cyanosis or blue-tinged skin be a sign of low oxygen levels in the blood or lung disease?

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
                                <h4 class="card-title">Can chronic obstructive pulmonary disease (COPD) cause persistent coughing, shortness of breath, and chest tightness?

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
                                <h4 class="card-title">Can a rapid or irregular heartbeat be a sign of pulmonary hypertension or heart disease?

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
                                <h4 class="card-title">Can a chronic cough or wheezing be a sign of cystic fibrosis or bronchiectasis?


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
                                <h4 class="card-title">Can a history of smoking or exposure to secondhand smoke increase the risk of lung cancer or other lung diseases?
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
                              
                         
@endsection


@section('script')


@endsection
          