<?php

$cont = <<<EOT
<link rel="stylesheet" type="text/css" href="css/noticeboard.css">
<div id="noticeboard-topheading">
    NOTICE BOARD
</div>

<div class="jumbotron" id="noticebboard-jumbo">
    <div class="row">
        <div class="col-3">
            <h4>Select the Year:</h4>
        </div>
        <div class="col-9">
            <select class="custom-select">
                <option value="All">All</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
            </select>
        </div>
    </div>
</div>

<div id="noticeboard-maindiv">
    <div class="row">
        <div class="col-md-3">
            <div class="card notice-info-card" data-toggle="modal" data-target="#notice-Modal">
                <div class="card-block notice-info-card-block">
                    <h5 class="card-title notice-info-card-title">Industry and Institutions Interaction</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card notice-info-card" data-toggle="modal" data-target="#notice-Modal">
                <div class="card-block notice-info-card-block">
                    <h5 class="card-title notice-info-card-title">Industry and Institutions Interaction</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card notice-info-card" data-toggle="modal" data-target="#notice-Modal">
                <div class="card-block notice-info-card-block">
                    <h5 class="card-title notice-info-card-title">Industry and Institutions Interaction</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card notice-info-card" data-toggle="modal" data-target="#notice-Modal">
                <div class="card-block notice-info-card-block">
                    <h5 class="card-title notice-info-card-title">Industry and Institutions Interaction</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card notice-info-card" data-toggle="modal" data-target="#notice-Modal">
                <div class="card-block notice-info-card-block">
                    <h5 class="card-title notice-info-card-title">Industry and Institutions Interaction</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card notice-info-card" data-toggle="modal" data-target="#notice-Modal">
                <div class="card-block notice-info-card-block">
                    <h5 class="card-title notice-info-card-title">Industry and Institutions Interaction</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="notice-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog notice-modal-dialog notice-modal" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Expert lecture on “ Convergence and unified communications”</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="notice-modal-body">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <th scope="row">Notice Description</th>
                        <td>Some good small description about the project.. Short and SweetSome good small description about the project.. Short and SweetSome good small description about the project.. Short and SweetSome good small description about the project.. Short and Sweet</td>
                    </tr>
                    <tr>
                        <th scope="row">Notice For</th>
                        <td>
                            All
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Notice Date</th>
                        <td>
                            2 February 2017
                        </td>
                    </tr>
                        <th scope="row">Notice By</th>
                        <td>
                            Dr. N M Patel
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Notice Related Documents</th>
                        <td>
                            <a href="link.something">Link1</a><br>
                            <a href="link.something">Link2</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Notice Pictures</th>
                        <td>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 notice-image-container">
                                    <img src="img/1.jpg">
                                </div>
                                <div class="col-lg-6 col-md-6 notice-image-container">
                                    <img src="img/1.jpg">
                                </div>
                                <div class="col-lg-6 col-md-6 notice-image-container">
                                    <img src="img/1.jpg">
                                </div>
                                <div class="col-lg-6 col-md-6 notice-image-container">
                                    <img src="img/1.jpg">
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
EOT;
print($cont);
?>
