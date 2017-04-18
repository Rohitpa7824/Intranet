<?php

$cont = <<<EOT
<link rel="stylesheet" href="../css/edit-profile.css">
	<div class="container">
        <div class="editprofiletop">
            Edit Profile
        </div>
        <form>
            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">Name</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>

            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">Designation</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>

            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">Department</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>

            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">Date of join</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>

            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">Qualification</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>

            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">Total experience</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>

            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">Paper Published</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>

            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">Paper Presented</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>

            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">PhD Guide</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>

            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">PhDs/Project Guided</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>

            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">Books published/IPRs/Patents</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>

            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">Professional Membership</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>

            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">Consultancy Activities</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>

            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">Awards</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>
            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">Grant fetched</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>
            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">Additional Information</label>
                <div class="col-9">
                    <input class="form-control" type="text" name="ename">
                </div>
            </div>
            <div class="form-group row">
                <label for="ename" class="col-3  col-form-label" id="inp">Photo</label>
                <div class="col-9">
                    <div id="showoldupload">Upload</div>
                </div>
            </div>

            <div class="row">
                <div class="col-3"></div>
                <div class="col-9">
                    <div class="btn btn-primary" id="submitprofile">Submit Profile</div>
                </div>
            </div>
        </form>
    </div>
<script src="../js/editprofile.js"></script>
EOT;
print($cont);
?>

