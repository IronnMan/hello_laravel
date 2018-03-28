@if (count($errors) > 0)
    <div class="alert alert-danger text-left">
        <ul style="margin-top:0;margin-bottom:0;">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif