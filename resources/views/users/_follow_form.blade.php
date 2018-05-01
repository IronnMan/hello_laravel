@if ($user->id !== Auth::user()->id)
    <div id="follow_form">
        @if (Auth::user()->isFollowing($user->id))
            <form action="{{ route('followers.destroy', $user->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-blue-grey btn-lg btn-block">取消关注</button>
            </form>
        @else
            <form action="{{ route('followers.store', $user->id) }}" method="POST">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-deep-orange btn-lg btn-block"> <strong>+</strong> 关注</button>
            </form>
        @endif
    </div>
@endif