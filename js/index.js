$(document).ready(function () {
    // Routing using SAMMY.JS
    var app = $.sammy(function() {

        this.get('/Intranet/', function() {
            $('#Homeli').parent().addClass('active');
            $('#Homeli').parent().siblings().removeClass("active");

            $.get('php/homepage.html', function (data) {
                var template=Handlebars.compile(data);
                $('#main-content').html(template({}));
            }, 'html');
        });
        this.get('/Intranet/#About_Department', function() {
            $('#About_Departmentli').parent().addClass('active');
            $('#About_Departmentli').parent().siblings().removeClass("active");

            $.get('php/aboutdepartment.html', function (data) {
                var template=Handlebars.compile(data);
                $('#main-content').html(template({}));
            }, 'html');
        });
        this.get('/Intranet/#Course', function() {
            $('#Courseli').parent().addClass('active');
            $('#Courseli').parent().siblings().removeClass("active");

            $.get('php/syllabus.html', function (data) {
                var template=Handlebars.compile(data);
                $('#main-content').html(template({}));
            }, 'html');
        });
        this.get('/Intranet/#Projects', function() {
            $('#Projectsli').parent().addClass('active');
            $('#Projectsli').parent().siblings().removeClass("active");

            $.get('php/projects.html', function (data) {
                var template=Handlebars.compile(data);
                $('#main-content').html(template({}));
            }, 'html');
        });
        this.get('/Intranet/#Notice_Board', function() {
            $('#Notice_Boardli').parent().addClass('active');
            $('#Notice_Boardli').parent().siblings().removeClass("active");

            $.get('php/noticeboard.html', function (data) {
                var template=Handlebars.compile(data);
                $('#main-content').html(template({}));
            }, 'html');
        });
        this.get('/Intranet/#Events', function() {
            $('#Eventsli').parent().addClass('active');
            $('#Eventsli').parent().siblings().removeClass("active");

            $.get('php/events.html', function (data) {
                var template=Handlebars.compile(data);
                $('#main-content').html(template({}));
            }, 'html');
        });
        this.get('/Intranet/#Login', function() {
            $('#Loginli').parent().addClass('active');
            $('#Loginli').parent().siblings().removeClass("active");

            $.get('php/login.html', function (data) {
                var template=Handlebars.compile(data);
                $('#main-content').html(template({}));
            }, 'html');
        });
    });
    app.run();


});