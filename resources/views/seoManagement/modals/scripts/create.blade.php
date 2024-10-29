<script>
    function create_(btn, lang = 'en') {

        // $('#key').val(data.key);
        // $('#value').val(data.value);
        $('#pageId').val($(btn).attr('data-pageId'));
        $('#create_form').attr('action', $(btn).attr('data-route'))


    }
</script>
