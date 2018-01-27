<section id="main-information">
    <div class="title">
        <h2>Main Information</h2>
        <aside class="step">1</aside>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="form-group">
                <label for="form-submit-title">Title<em>*</em></label>
                <input type="text" class="form-control" id="form-submit-title" name="title" value="{{$feature[0]->title}}" required="">
            </div>

            <div class="form-group ">
                <label for="form-submit-description">Description<em>*</em></label>
                <textarea style="height: 100px;" class="form-control" name="description" id="form-submit-description" rows="10"
                          placeholder="{{ $feature[0]->description }}"  required>{{ $feature[0]->description }}</textarea>
            </div>
            <!--end form-group-->


        </div>
        <!--end col-md-7-->

        <div class="col-md-5">
            <h3>Mian Items<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Enter price And area"></i></h3>
            <div class="form-group-inline">
                <div class="form-group width-60">




                    {{--<div class="form-group">--}}
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="check-in-to" value="{{$feature[0]->price}} "name="price" required  placeholder="10000">
                    {{--</div>--}}

                </div>






                <!--end form-group-->


            </div>
            <!--end form-group-inline-->


            <div class="form-group-inline">
                <div class="form-group width-60">
                    <label for="price">Unit Type</label>
                    <select class="framed width-100" name="unit_type" id="room-type_2" required>

                        <option value="{{ $feature[0]->unit_type}}">{{ $feature[0]->unit_type }}</option>
                        <option disabled> Select Unit Type </option>
                        <option value="Marla">Marla</option>
                        <option value="Kanal">Kanal</option>
                        <option value="Square Feet">Square Feet</option>
                        <option value="Square Meter">Square Meter</option>
                        <option value="Square Yard">Square Yard</option>
                    </select>
                </div>
                <!--end form-group-->
                <div class="form-group">
                    <label for="number-of-rooms_2">Size</label>
                    <input type="number" class="form-control" id="number-of-rooms_2" name="unit_size" required value="{{ $feature[0]->unit_size }}" placeholder="1" min="1" >
                </div>
                <!--end form-group-->
            </div>



        {{--<div class="form-group-inline">--}}
        {{--<div class="form-group">--}}
        {{--<h3>Price<i class="fa fa-question-circle tooltip-question" data-toggle="tooltip" data-placement="right" title="Choose Price"></i></h3>--}}
        {{--</div>--}}
        {{--<div class="form-group width-60">--}}
        {{--<input type="number" class="form-control" id="minimum-stay" name="minimum_stay" placeholder="2">--}}
        {{--</div>--}}
        {{--<!--end form-group-->--}}
        {{--</div>--}}
        <!--end form-group-inline-->
            {{--<a href="#" class="link icon"><i class="fa fa-plus"></i>Add Room Type</a>--}}
        </div>
        <!--end col-md-5-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-md-7">

            <!--end form-group-->



        </div>


        <!--end col-md-5-->
    </div>
    <!--end row-->

    <!--end row-->

    <!--end row-->
</section>