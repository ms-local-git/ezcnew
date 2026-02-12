<section name="invoice-printout">
    <div class="row">
        <div class="col-md-12">
            <h2 class="content-header-title float-left mb-0"></h2>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-12">
            <!-- <div class="card">
                <div class="card-header"> -->
                    <!-- <div>
                        <h4 class="card-title">Add Job Notes:</h4>
                        <br />
                    </div> -->
                <!-- </div> -->
                <!-- <div class="card-body"> -->
                    <form action="<?= base_url() ?>/jobs/save_job_notes" method="post">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6 col-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3 col-6">
                                                            <label>Job # : </label>
                                                        </div>
                                                        <div class="col-sm-3 col-6">
                                                            <strong><?= $job->job_no ?></strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6"></div>
                                            <br>
                                            <div class="col-sm-12">
                                                <div class="form-group row">
                                                    <div class="custom-control custom-radio col-md-3">
                                                        <input type="radio" name="note_type" checked value="internal"
                                                            class="custom-control-input" id="internal" />
                                                        <label class="custom-control-label" for="internal">Internal Notes
                                                        </label>
                                                    </div>
                                                <!-- </div>
                                                <div class="form-group"> -->
                                                    <div class="custom-control custom-radio col-md-3">
                                                        <input type="radio" name="note_type"
                                                            value="client" class="custom-control-input" id="client" />
                                                        <label class="custom-control-label" for="client">Client Notes</label>
                                                    </div>
                                                <!-- </div>
                                                <div class="form-group"> -->
                                                    <div class="custom-control custom-radio col-md-3">
                                                        <input type="radio" name="note_type" value="from india"
                                                            class="custom-control-input" id="india" />
                                                        <label class="custom-control-label" for="india"> From
                                                            India</label>
                                                    </div>
                                                <!-- </div> -->
                                                <!-- </div> -->
                                                <!-- <div class="form-group"> -->
                                                    <div class="custom-control custom-radio col-md-3">
                                                        <input type="radio" name="note_type"
                                                            value="quote" class="custom-control-input" id="quote" />
                                                        <label class="custom-control-label" for="quote">Quote</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-sm-6 col-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3 col-6">
                                                            <label for="valid-state">Person: </label>
                                                        </div>
                                                        <div class="col-sm-6 col-12">
                                                            <input type="text" class="form-control" name="person_name">
                                                            <input type="hidden" name="job_id" value="<?= $job->id ?>">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12"></div>
                                            <div class="col-sm-6 col-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-3 col-6">
                                                            <label for="valid-state">Notes: </label>
                                                        </div>
                                                        <div class="col-sm-9 col-12">
                                                            <textarea type="text" class="form-control" rows="4" name="notes">
                                              </textarea>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6"></div><br>
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-2 text-center">
                                                <button class="btn btn-primary w-100" type="button" id="save_btn">save</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                <!-- </div>
            </div> -->
        </div>
    </div>
</section>