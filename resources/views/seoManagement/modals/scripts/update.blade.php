<script>
    function update_(btn, lang = 'en') {
        $('#update_title').val($(btn).attr('data-title'));
        $('#update_meta').val($(btn).attr('data-meta'));
        $('#update_keywords').val($(btn).attr('data-keywords'));
        $('#update_form').attr('action', $(btn).attr('data-route'))


    }
</script>
