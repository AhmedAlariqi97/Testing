@extends('layouts.master')


@section('page-styles')
    <style>
    </style>
@endsection

@section('content')
    <!-- Basic Bootstrap Table -->

    <div class='container-xxl flex-grow-1 container-p-y'>

        <x-feedback-message></x-feedback-message>

        <div class="d-flex justify-content-between align-items-center  container-p-y">
            <h3 class="fw-bold py-3 mb-2">{{ __('content.images') }}
                {{-- <span class="error">* <a href='https://icomoon.io/'
                        class="error">use icomoon
                        fonts for icons</a></span> --}}
            </h3>
            <div>
                @if (auth()->user()->hasRole('super_admin'))
                    <button data-bs-toggle="modal" onclick="create_(this);" data-route="{{ route('images.store') }}"
                        data-bs-target="#create_modal" class="btn btn-primary">{{ __('content.add') }} </button>
                @endif
            </div>

        </div>
        <div class="card p-5 p-md-4 mb-4">
            <form class="row g-3" action="{{ route('images.index') }}" method="Get">
                <h4>Filters</h4>

                <div class="row d-flex align-items-center">
                    <div class="col-md-3 mb-3">
                        <input type="text" name="search" class="form-control" id="search"
                            placeholder="search by section" aria-describedby="search" value='{{ $search }}'>


                    </div>


                    <div class="col-3  mb-3 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 "> بحث</button>

                    </div>
                </div>



            </form>
        </div>
        <div class="card">

            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            @if (auth()->user()->hasRole('super_admin'))
                                <th>key</th>
                            @endif
                            <th>Section</th>

                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($data as $item)
                            <tr>
                                @if (auth()->user()->hasRole('super_admin'))
                                    <td>
                                        {{ $item->key ?? '' }}
                                    </td>
                                @endif

                                <td>
                                    {{ $item->title }}
                                </td>

                                <td>
                                    @if ($item->image)
                                        <img width="50" style='width:50px;height:50px' class="rounded-circle"
                                            src="{{ asset('assets/uploaded_images/' . $item->image) }} " alt="">
                                    @elseif($item->icon)
                                        <i class="icomoon-ico1"><span class="sr-only">icon</span></i>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">


                                            <a class="dropdown-item" onclick="update_(this);"
                                                data-route="{{ route('images.update', $item->id) }}"
                                                data-get="{{ route('images.edit', $item->id) }}" data-bs-toggle="modal"
                                                data-bs-target="#update_model" data-key="{{ $item->key }}"
                                                data-title="{{ $item->title }}"data-icon="{{ $item->icon ?? '' }}"
                                                data-prvImage="{{ $item->image ?? '' }}" data-page="{{ $item->page_id }}"
                                                data-type="{{ $item->type }}">
                                                <i class="bx bx-edit me-1"></i>
                                                {{ __('content.edit') }}</a>

                                            @if (auth()->user()->hasRole('super_admin'))
                                                <a class="dropdown-item" data-bs-toggle="modal" onclick="delete_(this);"
                                                    data-route="{{ route('images.destroy', $item->id) }}"
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

    </div>
    {!! $data->appends(['search' => $search])->links() !!}
    <!-- All Modals -->
    @include('imageManagement.modals.create')
    @include('imageManagement.modals.edit')


    <x-delete-model>


    </x-delete-model>
@endsection
@section('page-scripts')
    <script>
        
    </script>
@endsection
@include('modals.scripts.delete')
@include('imageManagement.modals.scripts.update')
@include('imageManagement.modals.scripts.create')
