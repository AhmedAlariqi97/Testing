<div class="modal fade" id="delete_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog ">
        <form class="modal-content" id="delete_form" action="" method="POST">
            @csrf
            @method('delete')
            <div class="modal-header">
                <h5 class="modal-title" id="modalTopTitle">Delete Publiation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <h5 class="mb-1">
                        Are you sure you want to delete this publication?
                    </h5>
                    <p>
                        item will be deleted permanently !!
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-primary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Confirm</button>
            </div>
        </form>
    </div>
</div>

{{-- <div class="modal-dialog fade" tabindex="-1">
    <form class="modal-content" id="delete_form" action="" method="POST">
        @csrf
        @method('delete')
        <div class="modal-header">
            <h5 class="modal-title" id="modalTopTitle">Delete Location</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <h5 class="mb-1">
                    Want to delete this location?
                </h5>
                <p>
                    process can't be undo !!
                </p>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Delete</button>
        </div>
    </form>
</div> --}}
