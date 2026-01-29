
    <h1>{{$post->title}}</h1>
    <h4>{{$post->body}}</h4>
    <br><br> <a href="{{route('posts.edit',$post->id)}}">edit</a>
    <br>
    <br>
    <a href="{{route('postlist')}}">back to post list</a> 