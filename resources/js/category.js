$(document).ready(function(){

    $(document).on('click', '#click_create', function(){
        var name = $('#cName').val();
        var cat_rewrite = $('#cRewrite').val();
        if (name == "") {
            $('.errorCreate').show();
            setTimeout(function(){
                $('.errorCreate').hide();
            }, 3000);
        } else {
            //close modal
            $('#createCategory').modal('hide');
            $.ajax({
                type:"POST",
                url:urlCreate,
                data:{
                    'name':name,
                    'cat_rewrite': cat_rewrite
                }
            })
            .done(function(response){
                window.scrollTo(0, 0);
                if (response.result) {
                    location.reload();
                    //tra ve new data
                    var dataRowCategory = response.dataRowCategory;

                    $('table tbody').append(dataRowCategory);
                    //thong bao
                    $('#notifi').addClass('alert-success');
                    $('#notifi span').html('Create success!');
                    $('.notifi').show();
                    setTimeout(function(){
                        $('.notifi').hide();
                    }, 3000);
                } else {
                    $('#notifi').addClass('alert-danger');
                    $('#notifi span').html('Create fail!');
                    $('.notifi').show();
                    setTimeout(function(){
                        $('.notifi').hide();
                    }, 3000);
                }
            });
        }
    });

    let idEdit = ""
    $(document).on('click', '#btn_edit', function(){
        idEdit = $(this).data('id');
        $('#eId').val(idEdit);
        $('#eName').val($(this).data('name'));
        $('#eRewrite').val($(this).data('rewrite'));
    });

    $(document).on('click', '#click_update', function(){
        var name = $('#eName').val();
        var rewrite = $('#eRewrite').val();
        if (name == "" ||rewrite == "" ) {
            $('.errorCreate').show();
            setTimeout(function(){
                $('.errorCreate').hide();
            }, 3000);
        } else {
            $.ajax({
                type:"POST",
                url: urlUpdate,
                data: {
                    'id':idEdit,
                    'name':name,
                    'rewrite': rewrite
                }
            })
            .done(function(response){
                window.scrollTo(0, 0);
                if (response.result) {
                    location.reload();
                    //thong bao
                    $('#notifi').addClass('alert-success');
                    $('#notifi span').html('Edit success!');
                    $('.notifi').show();
                    setTimeout(function(){
                        $('.notifi').hide();
                    }, 3000);
                } else {
                    $('#notifi').addClass('alert-danger');
                    $('#notifi span').html('Edit fail!');
                    $('.notifi').show();
                    setTimeout(function(){
                        $('.notifi').hide();
                    }, 3000);
                }
            });
        }
    });

    var idDelete = "", currentName = "";
    $(document).on('click', '#btn_delete',function(){
        idDelete = $(this).data('id');
        $('#dId').val(idDelete);
        $('#dName').val($(this).data('name'));
        $('#dName').attr('disabled',true);

        tr_parent = $(this).parents('tr');
    });

    $('#click_delete').on('click', function(){
        $.ajax({
            type:"POST",
            url:urlDelete,
            data:{
                'id':idDelete
            }
        })
        .done(function(response){
            window.scrollTo(0, 0);
            location.reload();
            if (response.result) {
                tr_parent.remove();
                $('#notifi').addClass('alert-success');
                $('#notifi span').html('Delete success!');
                $('.notifi').show();
                setTimeout(function(){
                    $('.notifi').hide();
                }, 3000);
            } else {
                $('#notifi').addClass('alert-danger');
                $('#notifi span').html('Delete fail!');
                $('.notifi').show();
                setTimeout(function(){
                    $('.notifi').hide();
                }, 3000);
            }
        });
    });
});

