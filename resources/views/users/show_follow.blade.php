@extends('layouts.default')
@section('title', $title)

@section('content')
<div class="row justify-content-md-center">

    <div class="col-md-8 mb-4">
        <div class="card card-comments mb-3 wow fadeIn" style="visibility:visible;animation-name:fadeIn;">
            <div class="card-header font-weight-bold">{{ $title }}</div>

            <div class="card-body">
                <div class="statuses">
                    @foreach ($users as $user)
                        <div class="media d-block d-md-flex mt-3">
                            <a href="{{ route('users.show', $user->id) }}">
                                <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="d-flex mb-3 mx-auto gravatar rounded-circle">
                            </a>
                            <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                <h5 class="mt-0 font-weight-bold text-left">
                                    <a href="{{ route('users.show', $user->id) }}">
                                        {{ $user->name }}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- {!! $users->render() !!} --}}
        </div>
        <br>

        <!-- Pagination -->
        <nav aria-label="pagination example" class="d-flex justify-content-center">
            {{ $users->links('vendor.pagination.default') }}
        </nav>
    </div>

</div>

@stop