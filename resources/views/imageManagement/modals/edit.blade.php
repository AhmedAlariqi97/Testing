<div class="modal fade" id="update_model" tabindex="-1">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3>Update Section</h3>
                </div>
                <form id="update_form" action="" method="POST" class="card-body" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @if (auth()->user()->hasRole('super_admin'))
                        <div class="mb-3 ">
                            <label for="title" class="form-label ">key <span class="error">*</span></label>
                            <input type="text" name="key" class="form-control" id="update_key"
                                aria-describedby="title">
                        </div>

                    @endif
                    <div class="mb-3 ">
                        <label for="title" class="form-label ">section <span class="error">*</span></label>
                        <input type="text" name="title" class="form-control" id="update_title"
                            aria-describedby="title">

                    </div>


                    <div class="mb-3 " id='update_imageContainer'>
                        <label class="form-label">cover </label>
                        <label for="imageUpdate" class="form-control  position-relative py-3 "
                            style="border: 2px dashed #d9dee3; cursor: pointer;">
                            <span class="text-center call-to-action"> Click To Add Image</span>
                            <img class="position-absolute top-0 preview-image imagePreview"
                                src="
                            "alt="" id="imagePreview"
                                style="height:-webkit-fill-available">
                            <input type="file" name="image" id="imageUpdate" class="d-none"
                                oninput="$('.imagePreview').attr('src',window.URL.createObjectURL(this.files[0])); $('.imagePreview').removeClass('d-none');">
                        </label>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="prvImage" class="form-control d-none" id="update_prvImage">

                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
