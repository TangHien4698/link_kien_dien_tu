 $(document).ready(function(){

    $('.create_category').select2({
        placeholder:"choose category...",
        data: categories
    });

    var currentCategory =  $('.create_category').select2('data');

    var cCategory = categories.filter(category => currentCategory.includes(category.id));
    if (cCategory != null) {
        $('.edit_category').val(currentCategory).trigger('change');
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

            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#image').change(function() {
      readURL(this);
    });

    setTimeout(function(){
        $("div.alert").remove();
    }, 3000 );
 });

