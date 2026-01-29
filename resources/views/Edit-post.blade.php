<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Title</label>
    <input type="text" name="title" value="{{ $post->title }}"><br><br>

    <label for="body">Body</label>
    <textarea name="body">{{ $post->body }}</textarea><br><br>


    <button type="submit">Update Post</button>
</form>
