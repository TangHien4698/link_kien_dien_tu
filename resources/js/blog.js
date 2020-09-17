$(function(){
    registerEvent();
});

function registerEvent()
{
    //upload image
    $(document).on('click','#btn_chooseImg' ,function(){
        $('#image').click();
    });

    $(document).on('change','#image', function() {
        readURL(this);
    });

    let id = '', tr_parent = '';
    $(document).on('click', '.btn_delete', function(){
        id = $(this).data('id');
        $('#id').val(id);
        $('#title').val($(this).data('title'));

        tr_parent = $(this).parents('tr');
    });

    $(document).on('click', '#click_delete', function(){
        callAjaxDelete(id, tr_parent);
    });
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
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
            // location.reload();
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


