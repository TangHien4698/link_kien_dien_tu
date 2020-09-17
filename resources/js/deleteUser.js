$(document).ready(function(){
    var id = "", name, tr_delete;
    $(document).on('click', '.btn_delete', function(){
        id = $(this).data('id');
        $('#id').val(id);
        $('#name').val($(this).data('name'));

        tr_delete = $(this).parents('tr');
    });

    $('#click_delete').on('click', function(){
        $.ajax({
            type:"POST",
            url: urlDelete,
            data: {
                'id': id,
            }
        })
        .done(function(response){
            location.reload();
            window.scrollTo(0, 0);
            if (response.result) {
                $('.alert-success').show();
                setTimeout(function(){
                    $('.alert-success').hide();
                }, 3000);
                $(tr_delete).remove();
            } else {
                $('.alert-danger').show();
                setTimeout(function(){
                    $('.alert-danger').hide();
                }, 3000);
            }
        });
    });
});
