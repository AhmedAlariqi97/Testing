function previewImages(images, list_id) {
    $("#" + list_id).html("");
    var filesLength = images.files.length;
    if (images.files.length > 5) {
        filesLength = 5;
    }
    for (var i = 0; i < filesLength; i++) {
        var img =
            `<div class="image" >
                    <img style='width:100px;height:100px; margin-left:10px'src="` +
            window.URL.createObjectURL(images.files[i]) +
            `" alt="hotel image">
                </div>`;
        $("#" + list_id).append(img);
    }
}
