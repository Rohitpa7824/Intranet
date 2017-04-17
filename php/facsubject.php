<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- styles -->
    <link rel="stylesheet" href="../css/uploadfile.css">
    <link href="../css/facsubject.css" rel="stylesheet">

</head>
<body>

<div class="facultysubjdiv">
    <div class="facsubjtop">
        Subjects
    </div>
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-2">
                <div class="facsubj1top">Subject</div>
            </div>
            <div class="col-md-6">
                <select class="custom-select" id="fac-subjectselect">
                    <option value="None">Select Subject</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="row hidden" id="facsubjedit">
<!--            <div class="col-md-2"><div class="btn btn-primary factypesel">Edit Course</div></div>-->
            <div class="col-md-2"><div class="btn btn-primary factypesel" id="addeditins">Add/Edit Instructions</div></div>
            <div class="col-md-2"><div class="btn btn-primary factypesel" id="addeditmarks">Add/Edit Marks</div></div>
            <div class="col-md-2"><div class="btn btn-primary factypesel">Add/Edit Lab Manual</div></div>
<!--            <div class="col-md-2"><div class="btn btn-primary"></div></div>-->
<!--            <div class="col-md-2"><div class="btn btn-primary"></div></div>-->
        </div>
    </div>

    <div class="facsubjmain">
        <ul class="list-group hidden" id="subjmain-list">
            <div class="addins">
                <div class="btn btn-success" id="addinsbtn">Add New Instruction</div>
            </div>
            <li id="dummyli"></li>
            <li class="list-group-item">
                <div class="col-md-11 listitem-div">
                    Dapibus ac facilisis in1
                </div>
                <div class="col-md-1">
                    <i class="fa fa-pencil list-icons listicon-pencil" aria-hidden="true" ></i>
                    <i class="fa fa-times list-icons listicon-cancel"></i>
                </div>
            </li>
            <li class="list-group-item">
                <div class="col-md-11 listitem-div">
                    Dapibus ac facilisis in
                </div>
                <div class="col-md-1">
                    <i class="fa fa-pencil list-icons listicon-pencil" aria-hidden="true" ></i>
                    <i class="fa fa-times list-icons listicon-cancel"></i>
                </div>
            </li>
            <li class="list-group-item">
                <div class="col-md-11 listitem-div">
                    Dapibus ac facilisis in
                </div>
                <div class="col-md-1">
                    <i class="fa fa-pencil list-icons listicon-pencil" aria-hidden="true" ></i>
                    <i class="fa fa-times list-icons listicon-cancel"></i>
                </div>
            </li>
            <li class="list-group-item">
                <div class="col-md-11 listitem-div">
                    Dapibus ac facilisis in
                </div>
                <div class="col-md-1">
                    <i class="fa fa-pencil list-icons listicon-pencil" aria-hidden="true" ></i>
                    <i class="fa fa-times list-icons listicon-cancel"></i>
                </div>
            </li>
            <li class="list-group-item">
                <div class="col-md-11 listitem-div">
                    <button class="btn btn-primary downloadlinks">Link1</button>
                    <button class="btn btn-primary downloadlinks">Link2</button>
                </div>
                <div class="col-md-1">
                    <i class="fa fa-times list-icons" aria-hidden="true"></i>
                </div>
            </li>

        </ul>
    </div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../js/jquery.uploadfile.min.js">
<script src="../js/facsubject.js"></script>
</body>
</html>