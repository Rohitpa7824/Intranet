$(document).ready(function () {
    var alreadynew = 0;
   $(document).on('change','#fac-subjectselect',function () {
        $('#facsubjedit').removeClass('hidden');
   });
   $(document).on('click','.listicon-pencil',function(){
       var temp = $(this).parent().siblings();
       $(temp).attr('contentEditable','true');
       $(temp).css('background-color','#42e8f4');
       $(this).removeClass('fa-pencil');
       $(this).addClass('fa-check');
       $(this).addClass('listcheck');
    });
    $(document).on('click','.listcheck',function(){
        $(this).removeClass('listcheck');
        var temp = $(this).parent().siblings();
        $(temp).attr('contentEditable','false');
        $(temp).css('background-color','#fff');
        $(this).addClass('fa-pencil');
        $(this).removeClass('fa-check');
    });
    $(document).on('click','.listicon-cancel',function () {
        $(this).parent().parent().remove();
    });
    $(document).on('click','#addeditins',function () {
       $('#subjmain-list').removeClass('hidden');
    });
    $(document).on('click','#addinsbtn',function () {
        if(alreadynew == 0)
        {
            $('#dummyli').append("<li class='list-group-item'><div class='col-md-11 listitem-div' contenteditable style='background-color:#42e8f4 '>Dapibus ac facilisis in1</div><div class='col-md-1'><i class='fa fa-check list-icons' aria-hidden='true' ></i><i class='fa fa-times list-icons listicon-cancel'></i></div></li>");
            alreadynew=1;
        }
    });
    $(document).on('click','#addeditmarks',function () {
       $('#subjmain-list').addClass('hidden');
    });
});
