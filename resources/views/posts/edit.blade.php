<form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    Title:
    <input type="text" name="title" value="{{ $post->tittle }}">
    <br>
    Content:
    <textarea name="content" id="" cols="30" rows="10">{{ $post->content }}</textarea>
    <br>
    Image:
    <img width="60" src="{{ asset('storage/'.$post->image) }}" alt="">
    <input type="file" name="image">
    <button type="submit">Save</button>
    <button type="submit" formaction="{{ route('posts.delete', $post) }}">Delete</button>
</form>