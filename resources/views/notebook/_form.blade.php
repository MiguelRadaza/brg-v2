<div class="container pt-4 pb-5 " style="display: flex; flex-direction:column;">
    <section class="card">
        <div class="card-body">
            <form class="form-horizontal form-bordered" method="post" action="{{ $form_url }}">
                @csrf
                <input type="hidden" name="verse_id" id="verse_id" />
                <div class="form-group row pb-4 align-items-center">
                    <label class="col-lg-5 col-xl-3 control-label text-lg-end mb-0">Current Verse</label>
                    <div class="col-lg-7 col-xl-6">
                        <input type="text" id="currentVerseInput" disabled class="form-control form-control-modern"
                            name="currentVerseInput" value="" required="">
                        <label id="validate-status" style="display: none;" class="error" for="currentVerseInput">This
                            field is
                            required.</label>
                    </div>
                </div>
                <div class="form-group row pb-3">
                    <label class="col-lg-3 control-label text-lg-end pt-2">Select Date</label>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-calendar-alt"></i>
                            </span>
                            <input type="text" name="journalDateInput" data-plugin-datepicker required
                                class="form-control" id="selected-date" onchange="handleDateChange(this);">
                        </div>
                    </div>
                </div>
                <div class="form-group row pb-4">
                    <div class="form-group row pb-3">
                        <label class="col-lg-3 control-label text-lg-end pt-2">Journal Types</label>
                        <div class="col-lg-6">
                            <select data-plugin-selectTwo name="journalTypeInput" required
                                onchange="handleJournalTypeChange(this);" class="form-control populate" disabled
                                id="journal-type">
                                <option value="">Select Journal Types</option>
                                <option value="morning">Morning</option>
                                <option value="evening">Evening</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="form-group row pb-4">

                    <label class="col-lg-3 control-label text-lg-end pt-2" for="inputRhema">
                        Rhema</label>
                    <div class="col-lg-6">
                        <textarea name="inputRhema" disabled required data-plugin-summernote data-plugin-options='{ "height": 400 }'
                            class="summernote" id="inputRhema">Start typing...</textarea>
                    </div>
                </div>

                <div class="form-group row pb-4">
                    <button type="submit" class="btn {{ $submit_button_class }}">{{ $submit_button_text }}</button>
                </div>
            </form>
        </div>
    </section>
</div>
