<div>
    <h3>registration form</h3>
  <!-- @if($errors->any())
    @foreach ($errors->all() as $error )
    {{ print_r($error) }}
    @endforeach

  @endif -->
    
    <form action="userform" method="post">
        @csrf
        <input type="text" name="username" placeholder="please enter your name" value="{{ old('username') }}" 
        class="{{ $errors->first('username') ? 'input-error' : '' }}">
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


<style>
    .input-error{
        border: 1px solid red;
        color: red;
    }
</style>