<div class="modal fade" id="create_modal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3>Create Section</h3>
                </div>
                <form id="create_form" action="" method="POST" class="card-body" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="key" class="form-label">key <span class="error">*</span></label>
                        <input type="text" name="key" class="form-control" id="key" aria-describedby="key"
                            value="{{ old('key') }}">
                    </div>

                    <div class="mb-3">
                        <label for="key" class="form-label "> section <span class="error">*</span></label>
                        <input type="text" name="title" class="form-control" id="title"
                            aria-describedby="title" value="{{ old('title') }}">

                    </div>

                   
                    <div class="mb-3" id='imageContianer'>
                        <label class="form-label">cover <span class="error">*</span></label>
                        <label for="image" class="form-control  position-relative py-3 "
                            style="border: 2px dashed #d9dee3; cursor: pointer;">
                            <span class="text-center call-to-action "> Click To Add Image</span>


                            <img class="d-none position-absolute top-0 preview-image " alt=""
                                id="imagePreviewCreate">

                            <input type="file" name="image" id="image" class="d-none"
                                oninput="$('#imagePreviewCreate').attr('src',window.URL.createObjectURL(this.files[0])); $('#imagePreviewCreate').removeClass('d-none');">
                        </label>

                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
