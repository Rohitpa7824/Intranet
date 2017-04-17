
<?php

$cont = <<<EOT

<link rel="stylesheet" type="text/css" href="css/homepage.css">
<div id="carouselExampleIndicators" class="carousel slide home-carousel-item " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner " role="listbox">
        <div class="carousel-item active">
            <img class="d-block img-fluid home-carousel-item" src="img/1.JPG" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid home-carousel-item" src="img/2.JPG" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid home-carousel-item" src="img/3.JPG" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="mission-vision">
    <div id="vision">
        <div class="visiontop">Vision</div>
        <div class="visionbottom">Produce globally employable Computer Engineers having core values and aptitude to innovate</div>
    </div>
    <div id="mission">
        <div class="missiontop">Mission</div>
        <div class="missionbottom">
            <ul class="list-group" id="missionul">
                <li class="list-group-item missionli">Revise curricula regularly to incorporate relevant technology advances while also maintaining strong emphasis on fundamentals.</li>
                <li class="list-group-item missionli">Deliver quality technical education by regularly reforming policies,  systems and processes at all levels.</li>
                <li class="list-group-item missionli">Promote innovative and best practices at all levels and create an environment in which research and partnerships with industries flourish.</li>
                <li class="list-group-item missionli">Imbibe core values.</li>
                <li class="list-group-item missionli">Foster faculty and staff members to meet challenges.</li>
            </ul>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.carousel').carousel()
    });
</script>

EOT;
print($cont);
?>
