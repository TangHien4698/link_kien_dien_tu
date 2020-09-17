$(function(){
    registerEvent();
});

function registerEvent()
{
    let id = "", tr_parent = "";
    $(document).on('click', '.btn_delete', function(){
        id = $(this).data('id');
        $('#id').val(id);
        $('#username').val($(this).data('username'));
        $('#productName').val($(this).data('productname'));
        tr_parent = $(this).parents('tr');
    });

    $(document).on('click', '#click_delete', function(){
        callAjaxDelete(id, tr_parent);
    });
}

function callAjaxDelete(id, tr_parent)
{
    $.ajax({
        type:"POST",
        url: urlDelete,
        data:{
            'id':id
        }
    })
        .done(function(response) {
            location.reload();
            window.scrollTo(0, 0);
            if (response.result) {
                $('.alert-success').show();
                setTimeout(function(){
                    $('.alert-success').hide();
                }, 3000);
                $(tr_parent).remove();
            } else {
                $('.alert-danger').show();
                setTimeout(function(){
                    $('.alert-danger').hide();
                }, 3000);
            }
        });
}
