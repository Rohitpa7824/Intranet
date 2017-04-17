<!DOCTYPE html>
<html>
<head>
    <title>Intranet</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/newevent.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
<!--    <link href="http://hayageek.github.io/jQuery-Upload-File/4.0.10/uploadfile.css" rel="stylesheet">-->
<!--    <script src="http://hayageek.github.io/jQuery-Upload-File/4.0.10/jquery.uploadfile.min.js"></script>-->
    <link rel="stylesheet" href="../css/uploadfile.css">
    <script src="../js/jquery.uploadfile.min.js"></script>
</head>
<body>

<!--API USED == http://hayageek.com/docs/jquery-upload-file.php#multi-->
<div id="newevent-section-heading">
    Create new Event
</div>
<form id="neweventform">

    <div class="form-group row">
        <label for="ename" class="col-2 col-form-label inp" id="">Event Name</label>
        <div class="col-9">
            <input class="form-control" type="text" name="ename">
        </div>
    </div>

    <div class="form-group row">
        <label for="desc" class="col-2 col-form-label inp" id="">Description</label>
        <div class="col-9">
            <textarea class="form-control" placeholder="Write full description of event" rows=4 name="desc"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="edate" class="col-2 col-form-label inp" id="">Date From</label>
        <div class="col-2">
            <div class="input-group date" id="datefrom" data-provide="datepicker">
                <input type="text" class="form-control">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="edate" class="col-2 col-form-label inp" id="">Date To</label>
        <div class="col-2">
            <div class="input-group date" id="dateto" data-provide="datepicker">
                <input type="text" class="form-control">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="ename" class="col-2 col-form-label inp" id="">Time From</label>
        <div class="col-2">
            <input class="form-control" type="time" name="ename" id="timefrom">
        </div>
    </div>

    <div class="form-group row">
        <label for="ename" class="col-2 col-form-label inp" id="">Time To</label>
        <div class="col-2">
            <input class="form-control" type="time" name="ename" id="timeto">
        </div>
    </div>

    <div class="form-group row">
        <label for="loc" class="col-2 col-form-label inp" id="">Location</label>
        <div class="col-9">
            <input class="form-control" type="text" name="loc">
        </div>
    </div>

    <div class="form-group row">
        <label for="exp" class="col-2 col-form-label inp" id="">Expert Name</label>
        <div class="col-9">
            <input class="form-control" type="text" name="exp">
        </div>
    </div>

    <div class="form-group row">
        <label for="edesc" class="col-2 col-form-label inp" id="">Expert's Description</label>
        <div class="col-9">
            <textarea class="form-control" placeholder="Expert details" name="edesc"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="sponsor" class="col-2 col-form-label inp" id="">Sponsor</label>
        <div class="col-9">
            <input class="form-control" type="text" name="sponsor">
        </div>
    </div>

    <div class="form-group row">
        <label for="beneficiaries" class="col-2 col-form-label inp" id="">Event Beneficiaries</label>
        <div class="col-9">
            <input class="form-control" type="text" name="beneficiaries">
        </div>
    </div>

    <div class="form-group row">
        <label for="coordinators" class="col-2 col-form-label inp" id="">Event Coordinators</label>
        <div class="col-9">
            <input class="form-control" type="text" name="coordinators">
        </div>
    </div>

    <div class="form-group row">
        <label for="files" class="col-2 col-form-label inp" id="">Upload Files/Images</label>
        <div class="col-9">
            <div id="showoldupload">Upload</div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-2"></div>
        <div class="col-9">
            <div class="btn btn-primary" id="submitbtn">Create Event</div>
        </div>
    </div>


</form>
<script src="../js/bootstrap-datepicker.js"></script>
<script src="../js/newevent.js"></script>
</body>
</html>