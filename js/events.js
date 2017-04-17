$(document).ready(function(){
    $('.datepicker').datepicker();
    $('#eventexportbtn').click(function () {
        $('#eventexportdiv').removeClass('hidden');
    });
});