<section id="additional-information">
    <div class="title">
        <h2>Additional Information</h2>
        <aside class="step">5</aside>
    </div>
    <!--end title-->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group label-inline">
                <label for="children" class="width-30">Children Allowed</label>
                <select class="framed width-100" name="children" id="children">
                    <option value="1">Select</option>
                    <option value="2">All children allowed</option>
                    <option value="3">12+ years allowed</option>
                    <option value="4">No children allowed</option>
                </select>
            </div>
            <!--end form-group-->
            <div class="form-group label-inline">
                <label for="pets" class="width-30">Pets Allowed</label>
                <select class="framed width-100" name="pets" id="pets">
                    <option value="1">Select</option>
                    <option value="2">All pets allowed</option>
                    <option value="3">Only small pets allowed</option>
                    <option value="4">No pets allowed</option>
                </select>
            </div>
            <!--end form-group-->
            <div class="form-group label-inline">
                <label for="cancellation" class="width-30">Cancellation</label>
                <select class="framed width-100" name="cancellation" id="cancellation">
                    <option value="1">Select</option>
                    <option value="2">No cancellation possible</option>
                    <option value="3">30 days before check in</option>
                    <option value="4">7 days before check in</option>
                </select>
            </div>
            <!--end form-group-->
            <div class="form-group label-inline">
                <label for="parking" class="width-30">Parking</label>
                <select class="framed width-100" name="parking" id="parking">
                    <option value="1">Select</option>
                    <option value="2">Free parking</option>
                    <option value="3">Payed parking</option>
                    <option value="4">No parking possible</option>
                </select>
            </div>
            <!--end form-group-->
        </div>
        <!--end col-md-6-->
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <h3>Check In</h3>
                    <div class="form-group-inline">
                        <div class="form-group">
                            <label for="check-in-from">From</label>
                            <input type="text" class="form-control" id="check-in-from" name="check-in-from" placeholder="12:00">
                        </div>
                        <!--end form-group-->
                        <div class="form-group">
                            <label for="check-in-to">To</label>
                            <input type="text" class="form-control" id="check-in-to" name="check-in-to" placeholder="20:00">
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end form-group-inline-->
                    <label><input type="checkbox" name="1">Early Check-in</label>
                </div>
                <!--end col-md-6-->
                <div class="col-md-6">
                    <h3>Check Out</h3>
                    <div class="form-group-inline">
                        <div class="form-group">
                            <label for="check-out-from">From</label>
                            <input type="text" class="form-control" id="check-out-from" name="check-out-from" placeholder="08:00">
                        </div>
                        <!--end form-group-->
                        <div class="form-group">
                            <label for="check-out-to">To</label>
                            <input type="text" class="form-control" id="check-out-to" name="check-out-to" placeholder="12:00">
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end form-group-inline-->
                    <label><input type="checkbox" name="1">Late Check-out</label>
                </div>
                <!--end col-md-6-->
            </div>
            <!--end row-->
        </div>
        <!--end col-md-6-->
    </div>
    <!--end row-->
</section>