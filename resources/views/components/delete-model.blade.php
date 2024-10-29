<div class="modal fade" id="delete_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog ">
        <form class="modal-content" id="delete_form" action="" method="POST">
            @csrf
            @method('delete')
            <div class="modal-header">
                {{-- <h5 class="modal-title" id="modalTopTitle"> Delete {{ $modalHeadeing }}</h5> --}}
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <h5 class="mb-1">
                        {{ __('content.deleteHeading') }}
                    </h5>
                    <p>
                        {{ __('content.deleteBody') }}
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-primary"
                    data-bs-dismiss="modal">{{ __('content.cancel') }}</button>
                <button type="submit" class="btn btn-danger">{{ __('content.confirm') }}</button>
            </div>
        </form>
    </div>
</div>
