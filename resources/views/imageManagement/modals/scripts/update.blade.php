<script>
    function update_(btn) {
        $('#update_key').val($(btn).attr('data-key'));
        $('#update_title').val($(btn).attr('data-title'));
        $('#update_prvImage').val($(btn).attr('data-prvImage'));
        $('#update_imageContainer').addClass('d-none');


        if ($(btn).attr('data-prvImage') == '') {
            $('#update_imageContainer').addClass('d-none');

        }
        if ($(btn).attr('data-icon') == '') {

            $('#update_imageContainer').removeClass('d-none');
        }

        $('.preview-image').addClass('d-none');
        oldImage = null;
        if ($(btn).attr('data-prvImage') != '') {
            $('.preview-image').removeClass('d-none');
            var path = "{{ asset('assets/uploaded_images/') }}"
            oldImage = path + '/' + $(btn).attr('data-prvImage');
            console.log($(btn).attr('data-prvImage'));
            console.log(oldImage);

        }

        $('.preview-image').attr('src', oldImage);

        $('#update_form').attr('action', $(btn).attr('data-route'))

    }
</script>
