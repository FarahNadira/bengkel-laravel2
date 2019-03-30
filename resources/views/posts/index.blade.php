<ul>
@foreach ($posts as $post)
<li><a href="{{ route('posts.edit', $post)}}">
{{ $post->tittle}} 
</a></li>
<img src="{{ asset('storage/'.$post->image)}}" alt="", >
</li>

</ul>
@endforeach
</ul>
<a href="{{route('posts.create')}}">Add post</a>