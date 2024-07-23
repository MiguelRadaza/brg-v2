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
                    <select data-plugin-selectTwo class="form-control populate">
                        @foreach ($verses as $month => $verses)
                            <optgroup label="{{ $month }}">
                                @foreach ($verses as $verse)
                                    <option value="{{ $verse->id }}">{{ }}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    </select>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="textareaAutosize">Textarea
                        Rhema</label>
                    <div class="col-lg-6">
                        <textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize=""
                            style="overflow: hidden; overflow-wrap: break-word; resize: none; text-align: start; height: 89px;"></textarea>
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="textareaAutosize">Textarea
                        Description</label>
                    <div class="col-lg-6">
                        <textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize=""
                            style="overflow: hidden; overflow-wrap: break-word; resize: none; text-align: start; height: 89px;"></textarea>
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <label class="col-lg-3 control-label text-lg-end pt-2" for="textareaAutosize">Textarea
                        Prayer</label>
                    <div class="col-lg-6">
                        <textarea class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize=""
                            style="overflow: hidden; overflow-wrap: break-word; resize: none; text-align: start; height: 89px;"></textarea>
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <button class="btn {{ $submit_button_class }}">{{ $submit_button_text }}</button>
                </div>

            </form>

        </div>
    </section>
</div>
