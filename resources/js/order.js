$(function(){
  registerEvent();
});


function registerEvent()
{
    let id = '', tr_parent = '';
    $(document).on('click', '.btn_delete', function(){
        id = $(this).data('id');
        $('#id').val(id);
        $('#verification').val($(this).data('verification'));
        $('#receivername').val($(this).data('receivername'));

        tr_parent = $(this).parents('tr');
    });

    $(document).on('click', '#click_delete', function(){
        callAjaxDelete(id, tr_parent);
    });

    let valueState = "", idState = "";
    $(document).on('click', '#state', function(){
        idState = $(this).val();
        let state = "";
        if ($(this).is(':checked')) {
            state = 1;
        } else {
            state = 0;
        }
        valueState = state;
        $('#confirmChangeState').modal();
    });

    $(document).on('click', '#changeState', function(){
        callAjaxChangeState(idState, valueState);
    });
}

function callAjaxDelete(id, tr_parent)
{
    $.ajax({
            type:"POST",
            url: urlDelete,
            data: {
                'id': id
            }
        })
        .done(function(response){
            window.scrollTo(0,0);
            if (response.result) {
                location.reload();
                $('#alertDelete').show();
                $('#alertDelete').addClass('alert-success');
                $('#alertDelete span').html('Delete order success!');
                setTimeout(function(){
                    $('#alertDelete').hide();
                }, 3000);
                $(tr_parent).remove();
            } else {
                $('#alertDelete').show();
                $('#alertDelete').addClass('alert-danger');
                $('#alertDelete span').html('Delete order fail!');
                setTimeout(function(){
                    $('#alertDelete').hide();
                }, 3000);
            }
        });
}

function callAjaxChangeState(idState, valueState, temp)
{
    $.ajax({
        type:"POST",
        url: urlChangeState,
        data:{
            'id': idState,
            'state': valueState
        }
    })
        .done(function (response) {
            window.scrollTo(0,0);
            location.reload();
            if (response.result) {
                $('#alertConfirm').show();
                $('#alertConfirm').addClass('alert-success');
                $('#alertConfirm span').html('Change state success!');
                setTimeout(function(){
                    $('#alertConfirm').hide();
                }, 3000);
            } else {
                $('#alertConfirm').show();
                $('#alertConfirm').addClass('alert-danger');
                $('#alertConfirm span').html('Change state fail!');
                setTimeout(function(){
                    $('#alertConfirm').hide();
                }, 3000);
            }
        })
}
