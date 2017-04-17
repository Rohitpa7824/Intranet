$(document).ready(function () {
    // Routing using SAMMY.JS
    var app = $.sammy(function() {

        this.get('/Intranet/', function() {
            $('#Homeli').parent().addClass('active');
            $('#Homeli').parent().siblings().removeClass("active");
            $.ajax({
                url:"php/homepage.php",
                success:function (data) {
                    $('#main-content').html(data);
                }
            });
        });
        this.get('/Intranet/#About_Department', function() {
            $('#About_Departmentli').parent().addClass('active');
            $('#About_Departmentli').parent().siblings().removeClass("active");
            $.ajax({
                url:"php/aboutdepartment.php",
                success:function (data) {
                    $('#main-content').html(data);
                }
            });
        });
        this.get('/Intranet/#Course', function() {
            $('#Courseli').parent().addClass('active');
            $('#Courseli').parent().siblings().removeClass("active");
            $.ajax({
                url:"php/syllabus.php",
                success:function (data) {
                    $('#main-content').html(data);
                }
            });
        });
        this.get('/Intranet/#Projects', function() {
            $('#Projectsli').parent().addClass('active');
            $('#Projectsli').parent().siblings().removeClass("active");
            $.ajax({
                url:"php/projects.php",
                success:function (data) {
                    $('#main-content').html(data);
                }
            });
        });
        this.get('/Intranet/#Notice_Board', function() {
            $('#Notice_Boardli').parent().addClass('active');
            $('#Notice_Boardli').parent().siblings().removeClass("active");
            $.ajax({
                url:"php/noticeboard.php",
                success:function (data) {
                    $('#main-content').html(data);
                }
            });
        });
        this.get('/Intranet/#Events', function() {
            $('#Eventsli').parent().addClass('active');
            $('#Eventsli').parent().siblings().removeClass("active");
            $.ajax({
                url:"php/events.php",
                success:function (data) {
                    $('#main-content').html(data);
                }
            });
        });
        this.get('/Intranet/#Login', function() {
            $('#Loginli').parent().addClass('active');
            $('#Loginli').parent().siblings().removeClass("active");
            $.ajax({
                url:"php/login.php",
                success:function (data) {
                    $('#main-content').html(data);
                }
            });
        });
    });
    app.run();

    // Navbar items color change on click
    // $('.navbar-nav .nav-item').click(function () {
    //     $(this).siblings().removeClass("active");
    //     $(this).addClass("active");
    // });
});