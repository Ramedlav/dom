<form action={{Route('CreateDialogForm')}} method="post">
    @csrf
    <input type="hidden" name="post_id" value="{{$post->id}}">

    <button type="submit" class="btn progress-button">{{__('message')}}</button>
</form>
