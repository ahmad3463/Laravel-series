<div>
    <h3>registration form</h3>
  <!-- @if($errors->any())
    @foreach ($errors->all() as $error )
    {{ print_r($error) }}
    @endforeach

  @endif -->
    
    <form action="userform" method="post">
        @csrf
        <input type="text" name="username" placeholder="please enter your name">
        <span style="color:red;">@error('username') {{ $message }}@enderror</span>
        <br><br>
        
        <input type="text" name="useremail" placeholder="please enter your email">
        <span style="color:red;">@error('useremail') {{ $message }}@enderror</span><br><br>
        
        <input type="number" name="userphone" placeholder="please enter your phone no">
        <span style="color:red;">@error('userphone') {{ $message }}@enderror</span>
        
        <br><br>
        

        <button type="submit">submit</button>
    </form>
</div>
