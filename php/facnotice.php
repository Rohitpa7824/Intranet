<?php
$cont = <<<EOT
<link rel="stylesheet" href="../css/facnotice.css">
<div class="facnoticetop">Create New Notice</div>
<form>
    <div class="form-group row">
        <div class="col-2 facnoticelabels">Faculty Name</div>
        <div class="col-9">
            <input class="form-control" type="text" placeholder="Enter your Name">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-2 facnoticelabels">Semester No</div>
        <div class="col-9">
            <select class="custom-select" id="syllsem-select">
                <option value="None">Select Semester</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
           ;</select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-2 facnoticelabels">Notice Name</div>
        <div class="col-9">
            <input class="form-control" type="text" placeholder="Enter Notice Name">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-2 facnoticelabels">Description</div>
        <div class="col-9">
            <input class="form-control" type="text" placeholder="Enter your Short Description">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-2 facnoticelabels">File</div>
        <div class="col-9">
            <div id="showoldupload">Upload</div>
        </div>
    </div>
    <div class="abc">
        <div class="btn btn-success">Submit Notice</div>
    </div>
</form>
<script src="../js/facnotice.js"></script>

EOT;
print($cont);
?>