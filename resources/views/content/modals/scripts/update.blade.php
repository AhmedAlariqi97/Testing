<script>
    function update_(btn, lang = 'en') {
        $('#update_key').val($(btn).attr('data-key'));
        $('#update_title').val($(btn).attr('data-title'));
      

        CKEDITOR.instances['update_value'].setData($(btn).attr('data-value'));
        $('#update_form').attr('action', $(btn).attr('data-route'))
        // page_update
    }
</script>
