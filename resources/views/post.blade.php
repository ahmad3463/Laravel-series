
  @foreach($posts as $post)
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>

    @endforeach

<!-- <h1>Hello World</h1> -->