$(document).ready(function () {
   $(document).on('change','#fac-subjectselect',function () {
        $('#facsubjedit').removeClass('hidden');
   });
    $(document).on('click', '.listicon-pencil', function () {
       var temp = $(this).parent().siblings();
        $(temp).attr('contentEditable', 'true');
        $(temp).css('background-color', '#42e8f4');
       $(this).removeClass('fa-pencil');
       $(this).addClass('fa-check');
        $(temp).addClass('listcheck');
        console.log($(this));
    });
    $(document).on('click', '.listicon-cancel', function () {
        $(this).parent().parent().remove();
    });
    $(document).on('click', '.listcheck', function () {
        $(this).removeClass('listcheck');
        var temp = $(this).parent().siblings();
        $(temp).attr('contentEditable','false');
        $(temp).css('background-color','#fff');
        $(this).addClass('fa-pencil');
        $(this).removeClass('fa-check');
    });
    $(document).off('click', '#addeditins').on('click', '#addeditins', function () {
        $('#subjmain-list').removeClass('hidden');
    });
    $(document).off('click', '#addinsbtn').on('click', '#addinsbtn', function () {
        $('#dummyli').append("<li class='list-group-item'><div class='col-md-11 listitem-div' contenteditable style='background-color:#42e8f4 '>Dapibus ac facilisis in1</div><div class='col-md-1'><i class='fa fa-check list-icons listcheck' aria-hidden='true' ></i><i class='fa fa-times list-icons listicon-cancel'></i></div></li>");
    });
    $(document).on('click', '#addinsfilebtn', function () {
        $('#dummyli').append("<li class='list-group-item'><div class='col-md-11'><div id='showoldupload2'>Upload</div></div><div class='col-md-1'><i class='fa fa-check list-icons listcheck' aria-hidden='true' ></i><i class='fa fa-times list-icons listicon-cancel'></i></div></li>");
        var temp = document.getElementById('showoldupload2');
        // console.log(temp);
        $(temp).uploadFile({
            url: "upload.php",
            dragDrop: true,
            fileName: "myfile",
            returnType: "json",
            showDelete: true,
            showDownload: true,
            statusBarWidth: 600,
            dragdropWidth: 600,
            maxFileSize: 200 * 1024,
            showPreview: true,
            previewHeight: "100px",
            previewWidth: "100px",

            onLoad: function (obj) {
                $.ajax({
                    cache: false,
                    url: "load.php",
                    dataType: "json",
                    success: function (data) {
                        for (var i = 0; i < data.length; i++) {
                            obj.createProgress(data[i]["name"], data[i]["path"], data[i]["size"]);
                        }
                    }
                });
            },
            deleteCallback: function (data, pd) {
                for (var i = 0; i < data.length; i++) {
                    $.post("delete.php", {op: "delete", name: data[i]},
                        function (resp, textStatus, jqXHR) {
                            //Show Message
                            alert("File Deleted");
                        });
                }
                pd.statusbar.hide(); //You choice.

            },
            downloadCallback: function (filename, pd) {
                location.href = "download.php?filename=" + filename;
            }
        });

    });

    $(document).on('click','#addeditins',function () {
        $('#subjmain-list').removeClass('hidden');
        $('#add-editmarks').addClass('hidden');
        $('#add-editlabmanual').addClass('hidden');
    });

    $(document).on('click','#addeditmarks',function () {
        $('#subjmain-list').addClass('hidden');
        $('#add-editmarks').removeClass('hidden');
        $('#add-editlabmanual').addClass('hidden');

    });
    $(document).on('click', '#addeditlabmanual', function () {
        $('#subjmain-list').addClass('hidden');
        $('#add-editmarks').addClass('hidden');
        $('#add-editlabmanual').removeClass('hidden');
    });

    $("#showoldupload").uploadFile({
        url: "upload.php",
        dragDrop: true,
        fileName: "myfile",
        returnType: "json",
        showDelete: true,
        showDownload: true,
        statusBarWidth: 600,
        dragdropWidth: 600,
        maxFileSize: 200 * 1024,
        showPreview: true,
        previewHeight: "100px",
        previewWidth: "100px",

        onLoad: function (obj) {
            $.ajax({
                cache: false,
                url: "load.php",
                dataType: "json",
                success: function (data) {
                    for (var i = 0; i < data.length; i++) {
                        obj.createProgress(data[i]["name"], data[i]["path"], data[i]["size"]);
                    }
                }
            });
        },
        deleteCallback: function (data, pd) {
            for (var i = 0; i < data.length; i++) {
                $.post("delete.php", {op: "delete", name: data[i]},
                    function (resp, textStatus, jqXHR) {
                        //Show Message
                        alert("File Deleted");
                    });
            }
            pd.statusbar.hide(); //You choice.

        },
        downloadCallback: function (filename, pd) {
            location.href = "download.php?filename=" + filename;
        }
    });

    $("#showoldupload1").uploadFile({
        url: "upload.php",
        dragDrop: true,
        fileName: "myfile",
        returnType: "json",
        showDelete: true,
        showDownload: true,
        statusBarWidth: 600,
        dragdropWidth: 600,
        maxFileSize: 200 * 1024,
        showPreview: true,
        previewHeight: "100px",
        previewWidth: "100px",

        onLoad: function (obj) {
            $.ajax({
                cache: false,
                url: "load.php",
                dataType: "json",
                success: function (data) {
                    for (var i = 0; i < data.length; i++) {
                        obj.createProgress(data[i]["name"], data[i]["path"], data[i]["size"]);
                    }
                }
            });
        },
        deleteCallback: function (data, pd) {
            for (var i = 0; i < data.length; i++) {
                $.post("delete.php", {op: "delete", name: data[i]},
                    function (resp, textStatus, jqXHR) {
                        //Show Message
                        alert("File Deleted");
                    });
            }
            pd.statusbar.hide(); //You choice.

        },
        downloadCallback: function (filename, pd) {
            location.href = "download.php?filename=" + filename;
        }
    });
});
