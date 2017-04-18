<?php

$cont = <<<EOT
<link href="../css/facsubject.css" rel="stylesheet">
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
                    <option value="1">CC101 - Calculus</option>
                    <option value="2">CC141 - Fundamentals of Electronics</option>
                    <option value="3">CC143 - Engineering Physics</option>
                    <option value="4">CC152 - Elements of Mechanical Engineering</option>
                </select>
            </div>
        </div>
        <div class="row hidden" id="facsubjedit">
<!--            <div class="col-md-2"><div class="btn btn-primary factypesel">Edit Course</div></div>-->
            <div class="col-md-3"><div class="btn btn-primary factypesel" id="addeditins">Add/Edit Instructions</div></div>
            <div class="col-md-3"><div class="btn btn-primary factypesel" id="addeditmarks">Add/Edit Marks</div></div>
            <div class="col-md-3"><div class="btn btn-primary factypesel" id="addeditlabmanual">Add/Edit Lab Manual</div></div>
<!--            <div class="col-md-2"><div class="btn btn-primary"></div></div>-->
<!--            <div class="col-md-2"><div class="btn btn-primary"></div></div>-->
        </div>
    </div>

    <div class="facsubjmain">
        <ul class="list-group hidden" id="subjmain-list">
            <div class="addins">
                <div class="btn btn-success" id="addinsbtn">Add New Instruction</div>
                <div class="btn btn-success" id="addinsfilebtn">Add New Instruction(File)</div>
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
                    <button class="btn btn-primary downloadlinks">Some PDF file</button>
                    <button class="btn btn-primary downloadlinks">Link2</button>
                </div>
                <div class="col-md-1">
                    <i class="fa fa-times list-icons listicon-cancel" aria-hidden="true"></i>
                </div>
            </li>

        </ul>

<!--        Add/Edit Marks-->
        <div class="hidden" id="add-editmarks">
            <div class="row">
                <div class="col-md-2" id="addfilediv">
                    Upload Marks File
                </div>
                <div class="col-md-9">
                    <div class="col-9">
                        <div id="showoldupload">Upload</div>
                    </div>
                </div>
            </div>
        </div>

<!--        Add/Edit Lab Manual-->
        <div class="hidden" id="add-editlabmanual">
            <div class="row">
                <div class="col-md-2" id="addfilediv">
                    Upload Lab Manual
                </div>
                <div class="col-md-9">
                    <div class="col-9">
                        <div id="showoldupload1">Upload</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/facsubject.js"></script>
EOT;

print($cont);
?>
