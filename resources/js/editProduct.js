$(document).ready(function(){

    $('.edit_category').select2({
        placeholder:"choose category...",
        data: categories
    });

    if (currentCategory != null) {
        $('.edit_category').val(currentCategory.id).trigger('change');
    }

//upload image
    $('#btn_chooseImg').on('click', function(){
        $('#image').click();
    });

    function readURL(input) {

      if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $('#image').change(function() {
      readURL(this);
    });


    setTimeout(function(){
        $("div.alert").remove();
    }, 3000 );
});

