$(document).ready(function(){
    $('.datepicker').datepicker();
    $('#projectsexportbtn').click(function () {
        $('#projectsexportdiv').removeClass('hidden');
    });
    $(document).on('change','#projects-select',function () {
       $('#projects-yeardiv').removeClass('hidden');
       $('#projects-filterdiv').removeClass('hidden');
       $('#projects-main1').removeClass('hidden');
    });
});
