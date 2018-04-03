@extends('layouts.default')
@section('title', '所有用户')

@section('content')
<div class="col-md-8 mb-4">
    <div class="card card-comments mb-3 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="card-header font-weight-bold">所有用户</div>
        <div class="card-body">

            @foreach ($users as $user)
            <div class="media d-block d-md-flex mt-3">
                    <img class="d-flex mb-3 mx-auto gravatar rounded-circle" src="{{ $user->gravatar() }}" alt="{{ $user->name }}">
                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <a href="{{ route('users.show', $user->id) }}">
                            <h5 class="mt-0 font-weight-bold text-left">{{ $user->name }}

                                @can('destroy', $user)
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn-floating danger-color waves-effect waves-light rounded pull-right" style="border-width:0;">
                                        <i class="fa fa-trash-o white-text"></i>
                                    </button>
                                </form>
                                @endcan
                            </h5>
                        </a>
                    </div>
            </div>
            @endforeach
        </div>
    </div>

    <br>

    <!-- Pagination -->
    <nav aria-label="pagination example" class="d-flex justify-content-center">
        {{ $users->links('vendor.pagination.default') }}
    </nav>

</div>
@stop