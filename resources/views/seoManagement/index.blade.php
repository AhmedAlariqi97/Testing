@extends('layouts.master')
@section('page-styles')
    {{-- <link rel="stylesheet" href="assets/vendor/libs/tagify/tagify.css " /> --}}
@endsection

@section('content')
    <!-- Basic Bootstrap Table -->

    <div class='container-xxl flex-grow-1 container-p-y'>
        <x-feedback-message></x-feedback-message>
        <div class="d-flex justify-content-between align-items-center  container-p-y">

            <h3 class="fw-bold py-3 mb-2"> {{ __('sidebar.seo') }} </h3>

            <div>
                @if (Auth::user()->hasRole('super_admin'))
                    <button data-bs-toggle="modal" onclick="create_(this);" data-route="{{ route('SEOManagement.store') }}"
                        data-bs-target="#create_modal" class="btn btn-primary"> {{ __('content.add') }}
                    </button>
                @endif

                {{-- @endCan --}}
            </div>
            {{-- @endcan --}}
        </div>
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>title</th>
                            <th>meta</th>
                            {{-- <th>Page</th> --}}
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($data as $item)
                            <tr>
                                <td>
                                    {{ $item->title }}
                                </td>
                                <td>
                                    {{ $item->meta }}
                                </td>
                                {{-- <td>

                                    <span class="badge bg-label-primary me-1">{{ $item->page->page_title }}
                                    </span>


                                </td> --}}

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">


                                            <a class="dropdown-item" onclick="update_(this);"
                                                data-route="{{ route('SEOManagement.update', $item->id) }}"
                                                data-get="{{ route('SEOManagement.edit', $item->id) }}"
                                                data-bs-toggle="modal" data-bs-target="#update_model"
                                                data-title="{{ $item->title }}"
                                                data-keywords="{{ $item->keywords ?? 'key1,key2,key3' }}"
                                                data-meta="{{ $item->meta }}">
                                                <i class="bx bx-edit me-1"></i>
                                                {{ __('content.edit') }}</a>
                                            @if (Auth::user()->hasRole('super_admin'))
                                                <a class="dropdown-item" data-bs-toggle="modal" onclick="delete_(this);"
                                                    data-route="{{ route('SEOManagement.destroy', $item->id) }}"
                                                    data-bs-target="#delete_modal"><i class="bx bx-trash me-1"></i>
                                                    {{ __('content.delete') }}</a>
                                            @endif
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>

        </div>


    </div>


    <!-- All Modals -->
    @include('seoManagement.modals.create')
    @include('seoManagement.modals.update')
    <x-delete-model> </x-delete-model>
@endsection

@include('modals.scripts.delete')

@include('seoManagement.modals.scripts.update')
@include('seoManagement.modals.scripts.create')

@section('scripts')
    {{-- <script src="assets/vendor/libs/tagify/tagify.js"></script> --}}
    <script>
        const tagifyBasicEl = document.querySelector("#TagifyBasic");
        const TagifyBasic = new Tagify(tagifyBasicEl);
    </script>
@endsection
