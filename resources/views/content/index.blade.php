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
            <h3 class="fw-bold py-3 mb-2">{{ __('content.texts') }} </h3>
            <div>
                @if (auth()->user()->hasRole('super_admin'))
                    <button data-bs-toggle="modal" onclick="create_(this);" data-route="{{ route('content.store') }}"
                        data-bs-target="#create_modal" class="btn btn-primary">{{ __('content.add') }}
                    </button>
                @endif
            </div>

        </div>
        <div class="card p-5 p-md-4 mb-4">
            <form class="row g-3" action="{{ route('content.index') }}" method="Get">
                <h4>Filters</h4>

                <div class="row d-flex align-items-center">
                    <div class="col-md-3 mb-3">
                        <input type="text" name="search" class="form-control" id="search"
                            placeholder="search by content" aria-describedby="search" value='{{ $search }}'>


                    </div>


                    <div class="col-3  mb-3 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 "> بحث</button>

                    </div>
                </div>


                <!--/ Add role form -->
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
                            <th>Content</th>

                            @if (auth()->user()->hasRole('super_admin'))
                                <th>Status</th>
                            @endif

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

                                    {!! Str::limit($item->value, 50, '...') !!}

                                </td>

                                @if (auth()->user()->hasRole('super_admin'))
                                    <td>
                                        @if ($item->is_active)
                                            <span class="badge bg-label-success me-1">{{ __('content.active') }}
                                            </span>
                                        @else
                                            <span class="badge bg-label-warning me-1">{{ __('content.unactive') }}
                                            </span>
                                        @endif
                                    </td>
                                @endif
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            @if (auth()->user()->hasRole('super_admin'))
                                                <form class='mb-0'action="{{ route('content.activate', $item->id) }}"
                                                    method='post'>
                                                    @csrf
                                                    <button class="dropdown-item" type='submit'>
                                                        @if ($item->is_active)
                                                            <i class='bx bx-hide me-1'></i>{{ __('content.hide') }}
                                                        @else
                                                            <i class='bx bx-show-alt me-1'></i>{{ __('content.show') }}
                                                        @endif
                                                    </button>
                                                </form>
                                            @endif

                                            <a class="dropdown-item" onclick="update_(this);"
                                                data-route="{{ route('content.update', $item->id) }}"
                                                data-get="{{ route('content.edit', $item->id) }}" data-bs-toggle="modal"
                                                data-bs-target="#update_model" data-item="{{ $item }}"
                                                data-key="{{ $item->key }}" data-title="{{ $item->title }}"
                                                data-value="{{ $item->value }}" data-page='{{ $item->page_id }}'>
                                                <i class="bx bx-edit me-1"></i>
                                                {{ __('content.edit') }}</a>
                                            @if (auth()->user()->hasRole('super_admin'))
                                                <a class="dropdown-item" data-bs-toggle="modal" onclick="delete_(this);"
                                                    data-route="{{ route('content.destroy', $item->id) }}"
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

    {!! $data->appends(['search' => $search])->links() !!}


    <x-delete-model>
    </x-delete-model>
    <!-- All Modals -->
    @include('content.modals.create')
    @include('content.modals.edit')

    <!-- All Modals -->
@endsection

@include('modals.scripts.delete')

@section('page-scripts')
    <script>
        CKEDITOR.replace('value');
        CKEDITOR.replace('update_value');
        CKEDITOR.replace('translate_value');
    </script>
@endsection
@include('content.modals.scripts.update')
@include('content.modals.scripts.create')
