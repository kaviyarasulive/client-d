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
                    <form action="Opthalmology" method="post">
                @csrf
                            <div class="card-header">
                                <h4 class="card-title">Can dry eyes cause discomfort, burning, and blurred vision?

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
                                <h4 class="card-title">Can conjunctivitis (pink eye) cause redness, itching, and discharge from the eyes?

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
                                <h4 class="card-title">Can glaucoma cause gradual loss of peripheral vision, and eventually tunnel vision or blindness?

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
                                <h4 class="card-title">Can cataracts cause cloudy or blurred vision, and difficulty seeing at night?

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
                                <h4 class="card-title">Can strabismus cause misaligned eyes or double vision?

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
                                <h4 class="card-title">Can astigmatism cause blurry or distorted vision at any distance?

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
                                <h4 class="card-title">Can myopia (nearsightedness) cause difficulty seeing far away objects clearly?

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
                                <h4 class="card-title">Can hyperopia (farsightedness) cause difficulty seeing close up objects clearly?

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
                                <h4 class="card-title">Can presbyopia cause difficulty reading small print or seeing close up objects clearly in people over 40 years old?

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
                                <h4 class="card-title">Can diabetic retinopathy cause damage to the blood vessels in the retina, leading to blurred vision and blindness?

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
                                <h4 class="card-title">Can macular degeneration cause a loss of central vision, making it difficult to read or recognize faces?

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
                                <h4 class="card-title">Can retinal detachment cause sudden flashes of light, floaters, and a curtain-like shadow over the vision field?

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
                                <h4 class="card-title">Can blepharitis cause red, swollen, and itchy eyelids, and flaky skin around the eyelashes?

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
                                <h4 class="card-title">Can uveitis cause eye pain, redness, and light sensitivity?

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
                                <h4 class="card-title">Can amblyopia (lazy eye) cause reduced vision in one eye due to lack of visual stimulation during childhood?
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
                                <h4 class="card-title">Can keratoconus cause a thinning and bulging of the cornea, leading to distorted vision?

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
                                <h4 class="card-title">Can ocular migraines cause temporary vision loss or visual disturbances, such as flashing lights or zigzag patterns?

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
                                <h4 class="card-title">Can ocular migraines cause temporary vision loss or visual disturbances, such as flashing lights or zigzag patterns?

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
                                <h4 class="card-title">Can iritis cause eye pain, sensitivity to light, and blurred vision?

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
                                <h4 class="card-title">Can corneal abrasions cause eye pain, tearing, and sensitivity to light?
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
          