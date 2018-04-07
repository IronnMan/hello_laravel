<form action="{{ route('statuses.store') }}" method="POST">
    @include('shared._errors')
    {{ csrf_field() }}

    <div class="form-group">
        <label for="content" class="h5 font-italic light-blue-text float-left" style="font-family:'TianZhen114681e0bc1c6b3';">有什么新鲜事想告诉大家？</label>
        <textarea name="content" id="content" class="form-control" row="5" style="height:6rem;"></textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary waves-effect waves-light float-right" style="margin-top:0;margin-bottom:0;">发布</button>
</form>