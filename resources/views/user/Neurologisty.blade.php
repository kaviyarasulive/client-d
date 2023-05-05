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
                    <form action="Neurologisty" method="post">
                @csrf
                            <div class="card-header">
                                <h4 class="card-title">Can a stroke cause weakness or paralysis on one side of the body?



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
                                <h4 class="card-title">Can migraines cause sensitivity to light and sound?



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
                                <h4 class="card-title">Can Parkinson's disease cause tremors, stiffness, and difficulty with movement?

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
                                <h4 class="card-title">Can Bell's palsy cause weakness or paralysis of the facial muscles on one side of the face?


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
                                <h4 class="card-title">Can meningitis cause sudden, severe headaches, a stiff neck, and fever?



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
                                <h4 class="card-title">Can peripheral neuropathy cause numbness, tingling, and pain in the hands and feet?


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
                                <h4 class="card-title">Can peripheral neuropathy cause numbness, tingling, and pain in the hands and feet?



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
                                <h4 class="card-title">Can trigeminal neuralgia cause sudden, severe pain in one side of the face?



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
                                <h4 class="card-title">Can nystagmus cause involuntary eye movements?



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
                                <h4 class="card-title">Can dystonia cause involuntary muscle contractions, often causing twisting or repetitive movements?


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
                                <h4 class="card-title">Can aphasia cause difficulty with speaking and understanding language?
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
                                <h4 class="card-title">Can syncope or fainting cause a sudden, brief loss of consciousness and muscle tone?



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
                                <h4 class="card-title">Can ataxia cause slurred speech and difficulty with coordination and balance?

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
                                <h4 class="card-title">Can dyskinesia cause involuntary movements of the limbs, face, or trunk?


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
                                <h4 class="card-title">Can amnesia cause a loss of memory and difficulty with learning new information?

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
                                <h4 class="card-title">Can hemiplegia cause weakness or paralysis on one side of the body?



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
                                <h4 class="card-title">Can diplopia cause double vision?

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
                                <h4 class="card-title">Can vestibular dysfunction cause a loss of balance and vertigo (the sensation of spinning)?

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
                                <h4 class="card-title">Can muscle spasms cause sudden, brief muscle contractions that can be painful?


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
                                <h4 class="card-title">Can sensory loss cause a loss of feeling or sensation in part of the body?


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
          