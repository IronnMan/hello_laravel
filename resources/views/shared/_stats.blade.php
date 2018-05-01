<div class="stats row" style="padding-top:0;">
    <a href="{{ route('users.followings', $user->id) }}" class="d-inline-block col">
        <strong id="following" class="h5 stat black-text">
            {{ count($user->followings) }}
        </strong>
        <span class="grey-text" style="display:block;">
            关注
        </span>
    </a>
    <a href="{{ route('users.followers', $user->id) }}" class="d-inline-block col">
        <strong id="followers" class="h5 stat black-text">
            {{ count($user->followers) }}
        </strong>
        <span class="grey-text" style="display:block">
            粉丝
        </span>
    </a>
    <a href="{{ route('users.show', $user->id) }}" class="d-inline-block col">
        <strong id="statuses" class="h5 stat black-text">
            {{ $user->statuses()->count() }}
        </strong>
        <span class="grey-text" style="display:block;">
            微博
        </span>
    </a>
</div>