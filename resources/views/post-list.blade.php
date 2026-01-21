<h1>job listing page</h1>

@foreach($posts as $post)
<ul>
    <li><a href="{{route('single-post', $post->id)}}">{{$post->title}}</a></li>
</ul>
@endforeach