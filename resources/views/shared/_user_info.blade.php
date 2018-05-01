<!--Card-->
<div class="card testimonial-card">

    <!--Background color-->
    <div class="card-up info-color"></div>

    <!--Avatar-->
    <div class="avatar mx-auto white">
        <a href="{{ route('users.show', $user->id) }}">
                <img src="{{ $user->gravatar('140') }}" class="rounded-circle img-fluid" alt="{{ $user->name }}">
            </a>
    </div>

    <div class="card-body">
        <!--Name-->
        <h4 class="mt-1">
            <strong>{{ $user->name }}</strong>
        </h4>
        <hr>
        <!--Quotation-->
        @include('shared._stats', ['user' => $user])
    </div>

</div>
<!--Card-->