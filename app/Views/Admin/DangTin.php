<?= $this->extend('Admin/Layout/base') ;?>
<?= $this->section('Admin') ;?>
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Danh Mục</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Đăng Tin
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- content -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Đăng Tin</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-end control-label col-form-label">Tiêu Đề Bài
                                    Viết</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" placeholder="First Name Here" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Tóm Tắt Bài
                                    Viết</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="lname" placeholder="Last Name Here" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-end control-label col-form-label">Ảnh Bài
                                    Viết</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="lname"
                                        placeholder="Password Here" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-end control-label col-form-label">Ngày
                                    Đăng</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email1"
                                        placeholder="Company Name Here" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Nội Dung Bài
                                    Viết</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Quill Editor</h4>
                                                    <!-- Create the editor container -->
                                                    <div id="editor" style="height: 300px">
                                                        <p>Hello World!</p>
                                                        <p>Some initial <strong>bold</strong> text</p>
                                                        <p>
                                                            <br />
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Elements</h5>
                        <div class="form-group row">
                            <label class="col-md-3 mt-3">Single Select</label>
                            <div class="col-md-9">
                                <select class="select2 form-select shadow-none" style="width: 100%; height: 36px">
                                    <option>Select</option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 mt-3">Multiple Select</label>
                            <div class="col-md-9">
                                <select class="select2 form-select shadow-none mt-3" multiple="multiple"
                                    style="height: 36px; width: 100%">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM" selected>New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD" selected>South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">Radio Buttons</label>
                            <div class="col-md-9">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="customControlValidation1"
                                        name="radio-stacked" required />
                                    <label class="form-check-label mb-0" for="customControlValidation1">First
                                        One</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="customControlValidation2"
                                        name="radio-stacked" required />
                                    <label class="form-check-label mb-0" for="customControlValidation2">Second
                                        One</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="customControlValidation3"
                                        name="radio-stacked" required />
                                    <label class="form-check-label mb-0" for="customControlValidation3">Third
                                        One</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">Checkboxes</label>
                            <div class="col-md-9">
                                <div class="form-check mr-sm-2">
                                    <input type="checkbox" class="form-check-input" id="customControlAutosizing1" />
                                    <label class="form-check-label mb-0" for="customControlAutosizing1">First
                                        One</label>
                                </div>
                                <div class="form-check mr-sm-2">
                                    <input type="checkbox" class="form-check-input" id="customControlAutosizing2" />
                                    <label class="form-check-label mb-0" for="customControlAutosizing2">Second
                                        One</label>
                                </div>
                                <div class="form-check mr-sm-2">
                                    <input type="checkbox" class="form-check-input" id="customControlAutosizing3" />
                                    <label class="form-check-label mb-0" for="customControlAutosizing3">Third
                                        One</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">File Upload</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required />
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">
                                        Example invalid custom file feedback
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3" for="disabledTextInput">Disabled input</label>
                            <div class="col-md-9">
                                <input type="text" id="disabledTextInput" class="form-control"
                                    placeholder="Disabled input" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Forms Control</h4>
                        <div class="form-group">
                            <label for="hue-demo">Hue</label>
                            <input type="text" id="hue-demo" class="form-control demo" data-control="hue"
                                value="#ff6161" />
                        </div>
                        <div class="form-group">
                            <label for="position-bottom-left">Bottom left (default)</label>
                            <input type="text" id="position-bottom-left" class="form-control demo"
                                data-position="bottom left" value="#0088cc" />
                        </div>
                        <div class="form-group">
                            <label for="position-top-right">Top right</label>
                            <input type="text" id="position-top-right" class="form-control demo"
                                data-position="top right" value="#0088cc" />
                        </div>
                        <label>Datepicker</label>
                        <div class="input-group">
                            <input type="text" class="form-control mydatepicker" placeholder="mm/dd/yyyy" />
                            <div class="input-group-append">
                                <span class="input-group-text h-100"><i class="mdi mdi-calendar"></i></span>
                            </div>
                        </div>
                        <label class="mt-3">Autoclose Datepicker</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="datepicker-autoclose"
                                placeholder="mm/dd/yyyy" />
                            <div class="input-group-append">
                                <span class="input-group-text h-100"><i class="mdi mdi-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success text-white">
                                Save
                            </button>
                            <button type="submit" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-info">Edit</button>
                            <button type="submit" class="btn btn-danger text-white">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- end content-->
</div>
<script>
$(".demo").each(function() {
    //
    // Dear reader, it's actually very easy to initialize MiniColors. For example:
    //
    //  $(selector).minicolors();
    //
    // The way I've done it below is just for the demo, so don't get confused
    // by it. Also, data- attributes aren't supported at this time...they're
    // only used for this demo.
    //
    $(this).minicolors({
        control: $(this).attr("data-control") || "hue",
        position: $(this).attr("data-position") || "bottom left",

        change: function(value, opacity) {
            if (!value) return;
            if (opacity) value += ", " + opacity;
            if (typeof console === "object") {
                console.log(value);
            }
        },
        theme: "bootstrap",
    });
});
/*datwpicker*/
jQuery(".mydatepicker").datepicker();
jQuery("#datepicker-autoclose").datepicker({
    autoclose: true,
    todayHighlight: true,
});
</script>
<!-- end pagewrapper -->
<?= $this->endSection() ;?>