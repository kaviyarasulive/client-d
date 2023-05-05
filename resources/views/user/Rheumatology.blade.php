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
                    <form action="Rheumatology" method="post">
                @csrf
                            <div class="card-header">
                                <h4 class="card-title">Can rheumatoid arthritis cause joint pain, swelling, and stiffness?


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
                                <h4 class="card-title">Can osteoarthritis cause joint pain and stiffness, especially in weight-bearing joints such as the hips and knees?


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
                                <h4 class="card-title">Can gout cause sudden and severe joint pain, especially in the big toe?
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
                                <h4 class="card-title">Can lupus cause joint pain and swelling, skin rashes, and fatigue?

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
                                <h4 class="card-title">Can fibromyalgia cause widespread pain, fatigue, and sleep disturbances?


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
                                <h4 class="card-title">Can ankylosing spondylitis cause back pain and stiffness that gets worse over time?

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
                                <h4 class="card-title">Can polymyalgia rheumatica cause muscle pain and stiffness, especially in the shoulders and hips?


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
                                <h4 class="card-title">Can psoriatic arthritis cause joint pain, stiffness, and skin rashes or patches?


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
                                <h4 class="card-title">Can scleroderma cause hardening and thickening of the skin, as well as joint pain and stiffness?


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
                                <h4 class="card-title">Can Raynaud's disease cause cold and numb fingers or toes, as well as skin color changes?

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
                                <h4 class="card-title">Can vasculitis cause inflammation of blood vessels, leading to a variety of symptoms depending on the affected organs?

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
                                <h4 class="card-title">Can Sjogren's syndrome cause dry eyes and mouth, joint pain, and fatigue?


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
                                <h4 class="card-title">Can polymyositis cause muscle weakness and pain, especially in the neck, shoulders, and hips?

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
                                <h4 class="card-title">Can Behcet's disease cause mouth and genital sores, skin rashes, and joint pain?


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
                                <h4 class="card-title">Can reactive arthritis cause joint pain and swelling, as well as inflammation of the eyes, urethra, and skin?

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
                                <h4 class="card-title">Can mixed connective tissue disease cause joint pain, muscle weakness, and skin rashes?


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
                                <h4 class="card-title">Can giant cell arteritis cause headaches, scalp tenderness, and jaw pain, as well as vision problems?
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
                                <h4 class="card-title">Can dermatomyositis cause skin rashes, muscle weakness, and pain, especially in the shoulders and hips?
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
                                <h4 class="card-title">Can juvenile idiopathic arthritis cause joint pain, swelling, and stiffness in children under 16 years old?


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
                                <h4 class="card-title">Can osteoporosis cause brittle bones, fractures, and loss of height over time?

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
          