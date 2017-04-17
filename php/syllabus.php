<?php

$cont = <<<EOT

<link rel="stylesheet" type="text/css" href="css/syllabus.css">
<div id="syllabus-top">
    <div id="syllabus-section-heading">
        Course
    </div>
    <div class="jumbotron" id="syllabus-jumbotron">
        <div id="syllabus-filter">
            <div class="row syllabusfilterrow">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4 syllabusfilter-subheading">
                            Select Semester
                        </div>
                        <div class="col-md-4">
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
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row syllabusfilterrow hidden" id="syllabus-selectsubj">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4 syllabusfilter-subheading">
                            Select Subject
                        </div>
                        <div class="col-md-4">
                            <select class="custom-select">
                                <option value="None">Select Subject</option>
                                <option value="1">CC101 - Calculus</option>
                                <option value="2">CC141 - Fundamentals of Electronics</option>
                                <option value="3">CC143 - Engineering Physics</option>
                                <option value="4">CC152 - Elements of Mechanical Engineering</option>
                                <option value="5">CC171 - Communication Skills</option>
                                <option value="6">CC122 - Computer Workshop</option>
                                <option value="7">CC142 - Electronics Workshop</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hidden" id="syllabus-lastsec">
                <div class="col-md-2">
                    <button class="btn btn-primary syallbus-optbtn" id="syll-view">View Syllabus</button>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary syallbus-optbtn" id="syll-mat">Materials</button>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary syallbus-optbtn" id="syll-manual">Lab Manual</button>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary syallbus-optbtn" id="syll-marks">Marks</button>
                </div>
            </div>
        </div>
    </div>

</div>

<div id="syllabus-materials" class="hidden">

    <ul class="list-group" id="syllmaterials-list">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item"><button class="btn btn-primary downloadlinks">Link1</button><button class="btn btn-primary downloadlinks">Link2</button></li>
    </ul>

</div>

<script type="text/javascript" src="js/syllabus.js"></script>

EOT;
print($cont);

?>