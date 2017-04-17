$(document).ready(function () {
    $(document).on('change','#syllsem-select',function () {
       $('#syllabus-selectsubj').removeClass('hidden');
    });

    $(document).on('change','#syllabus-selectsubj',function () {
        $('#syllabus-lastsec').removeClass('hidden');
    });

    $(document).on('click','#syll-view',function () {
        $('#syllabus-materials').addClass('hidden');
    });

    $(document).on('click','#syll-mat',function () {
        $('#syllabus-materials').removeClass('hidden');
    });

    $(document).on('click','#syll-manual',function () {
        $('#syllabus-materials').addClass('hidden');
    });

    $(document).on('click','#syll-marks',function () {
        $('#syllabus-materials').addClass('hidden');
    });
});