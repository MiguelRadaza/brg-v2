<div class="container pt-4 pb-5 " style="display: flex; flex-direction:column;">
    <section class="card">
        <div class="card-body">
            <form class="form-horizontal form-bordered" method="get" action="{{ $form_url }}">
                <div class="form-group row pb-4 align-items-center">
                    <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Current Verse</label>
                    <div class="col-lg-7 col-xl-6">
                        <input type="text" class="form-control form-control-modern" name="productName" value=""
                            required="">
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="textareaAutosize">Select</label>
                    <div class="col-lg-6">
                    <select class="form-control populate">
                        <option value="morning">Morning</option>
                        <option value="evening">Evening</option>
                    </select>
                </div>
                </div>

                <div class="form-group row pb-4">
                    
                        <label class="col-lg-3 control-label text-lg-end pt-2" for="textareaAutosize">Textarea
                        Rhema</label>
                    <div class="col-lg-6">
                        <textarea class="form-control" rows="3" id="textareaAutosize" 
                            style=" overflow-wrap: break-word; text-align: start; height: 89px;"></textarea>
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="textareaAutosize">Textarea
                        Description</label>
                    <div class="col-lg-6">
                        <textarea class="form-control" rows="3" id="textareaAutosize"
                            style=" overflow-wrap: break-word; text-align: start; height: 89px;"></textarea>
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="textareaAutosize">Textarea
                        Prayer</label>
                    <div class="col-lg-6">
                        <textarea class="form-control" rows="3" id="textareaAutosize"
                            style=" overflow-wrap: break-word; text-align: start; height: 89px;"></textarea>
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <button class="btn {{ $submit_button_class }}">{{ $submit_button_text }}</button>
                </div>

            </form>

        </div>
    </section>
</div>
