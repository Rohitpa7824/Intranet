$(document).ready(function(){


  $(".submenu > a").click(function(e) {
    e.preventDefault();
    var $li = $(this).parent("li");
    var $ul = $(this).next("ul");

    if($li.hasClass("open")) {
      $ul.slideUp(350);
      $li.removeClass("open");
    } else {
      $(".nav > li > ul").slideUp(350);
      $(".nav > li").removeClass("open");
      $ul.slideDown(350);
      $li.addClass("open");
    }
  });

    var app = $.sammy(function () {

        this.get('/Intranet/faculty-dashboard/', function () {
            $('#facdashboard-main').html('  ');
        });
        this.get('/Intranet/faculty-dashboard/#Profile', function () {

            $.ajax({
                url: "../php/editprofile.php",
                success: function (data) {
                    $('#facdashboard-main').html(data);
                }
            });
        });
        this.get('/Intranet/faculty-dashboard/#Subjects', function () {

            $.ajax({
                url: "../php/facsubject.php",
                success: function (data) {
                    $('#facdashboard-main').html(data);
                }
            });
        });
        this.get('/Intranet/faculty-dashboard/#Notice', function () {
            $.ajax({
                url: "../php/facnotice.php",
                success: function (data) {
                    $('#facdashboard-main').html(data);
                }
            });
        });
        this.get('/Intranet/faculty-dashboard/#Event', function () {
            $.ajax({
                url: "../php/newevent.php",
                success: function (data) {
                    $('#facdashboard-main').html(data);
                }
            });
        });

    });
    app.run();
  
});