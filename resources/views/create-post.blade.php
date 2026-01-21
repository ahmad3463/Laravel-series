<h1> Create Post</h1>
@if(session('Success'))
<p style='color:green;'>{{session('Success')}}</p>
@endif

<form action="add-post" Method='POST'>
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <span style='color:red'>@error('title') {{$message}} @enderror</span>
    
    <br>
    <br>
    <label for="body">Body</label>
    <textarea name="body" id="body"></textarea>
     <span style='color:red'>@error('body') {{$message}} @enderror</span>
    <br>
    <br>
    <button type="submit">Submit</button>
</form>