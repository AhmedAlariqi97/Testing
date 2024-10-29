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
                        <div class="mb-3">
                            <input type='hidden' name='formType' value='update'>
                            <label for="key" class="form-label">Key <span class="error">*</span></label>
                            <input type="text" name="key" class="form-control" id="update_key"
                                aria-describedby="key">

                        </div>
                        
                    @endif
                    <div class="mb-3 ">
                        <label for="title" class="form-label ">Section <span class="error">*</span></label>
                        <input type="text" name="title" class="form-control" id="update_title"
                            aria-describedby="title">

                    </div>
                    <div class="mb-3">
                        <label for="translate_description" class="form-label">section content <span
                                class="error">*</span></label>
                        <textarea class="editor" name="value" id="update_value"></textarea>

                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
