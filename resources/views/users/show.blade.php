@extends('layouts.default')
@section('title', $user->name)

@section('content')
<div class="row  justify-content-md-center">



    <!-- user list -->
    <div class="col-md-8 mb-4">
        <div class="card card-comments mb-3 wow fadeIn" style="visibility:visible;animation-name:fadeIn;">
            <div class="card-header font-weight-bold">我的动态</div>

            @if (count($statuses) > 0)
            <div class="card-body">
                <div class="statuses">
                    @foreach ($statuses as $status)
                        <div class="media d-block d-md-flex mt-3">
                            @include('statuses._status')
                        </div>
                    @endforeach
                </div>

            </div>
            @endif

        </div>

        <!-- Pagination -->
        <nav aria-label="pagination example" class="d-flex justify-content-center">
            {{ $statuses->links('vendor.pagination.default') }}
        </nav>
        {{-- {!! $statuses->render() !!} --}}
    </div>

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-4">
        @include('shared._user_info', ['user' => Auth::user()])
    </div>
</div>
@stop