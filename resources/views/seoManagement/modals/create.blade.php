<div class="modal fade" id="create_modal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3>Create SEO </h3>
                </div>
                <form id="create_form" action="" method="POST" class="card-body" enctype="multipart/form-data">
                    @csrf

                    <div class='row'>
                        <div class="mb-3 col-12">
                            <label for="title" class="form-label">title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder=""
                                aria-describedby="title" value='{{ old('title') }}'>

                        </div>

                    </div>
                    {{-- 
                    <div class="mb-3">
                        <label for="keywords" class="form-label">keywords</label>
                        <input type="text" name="keywords" class="form-control" id="keywords" placeholder=""
                            aria-describedby="keywords" value="@php echo old('keywords')??'Tag1, Tag2, Tag3'; @endphp">


                    </div> --}}
                    <!-- Basic -->
                    <div class="mb-3">
                        <label for="keywords" class="form-label">keywords</label>
                        <input id="keywords" class="form-control" name="keywords" value="key1,key2,key3" />
                    </div>

                    {{-- <div class="mb-3">
                        <label for="TagifyBasic" class="form-label">Basic</label>
                        <input id="TagifyBasic" class="form-control" name="TagifyBasic" value="Tag1, Tag2, Tag3" />
                    </div> --}}
                    {{-- <div class="mb-3">
                        <label for="TagifyBasic" class="form-label">Basic</label>
                        <input id="TagifyBasic" class="form-control" name="TagifyBasic" value="Tag1, Tag2, Tag3" />
                    </div> --}}

                    <div class="mb-3">
                        <label for="meta" class="form-label">meta</label>
                        <textarea type="text" name="meta" class="form-control" id="meta" placeholder="" aria-describedby="meta">{{ old('meta') }}</textarea>

                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
