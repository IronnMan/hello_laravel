{{-- <li id="status-{{ $status->id }}">
    <a href="{{ route('users.show', $user->id) }}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar">
    </a>
    <span class="user">
        <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
    </span>
    <span class="timestamp">
        {{ $status->created_at->diffForHumans() }}
    </span>
    <span class="content">{{ $status->content }}</span>
</li> --}}

<!-- MDB 风格 -->
<div class="media d-block d-md-flex mt-3" id="status-{{ $status->id }}">
    <a href="{{ route('users.show', $user->id) }}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="d-flex mb-3 mx-auto gravatar rounded-circle">
    </a>
    <div class="media-body text-center text-md-left ml-md-3 ml-0">
        <h5 class="mt-0 font-weight-bold text-left">
                <a href="{{ route('users.show', $user->id) }}">
                    {{ $user->name }}

                    @can('destroy', $status)
                        <form action="{{ route('statuses.destroy', $status->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn-floating danger-color waves-effect waves-light rounded pull-right" style="border-width:0;">
                                <i class="fa fa-trash-o white-text"></i>
                            </button>
                        </form>
                    @endcan
                </a>

                <p class="timestamp grey-text font-weight-normal" style="font-size:0.9rem;padding-top:0.5rem;margin-bottom:0.5rem;">{{ $status->created_at->diffForHumans() }}</p>
        </h5>
        <p class="content">
            {{ $status->content }}
        </p>
    </div>
</div>