<div>
    <form action="usercontact" method="post" >
  @csrf
    <div>
        <input type="text" name="username" placeholder="Enter Your Name " value="{{ old('username') }}">
        <span class="user">@error('username') {{ $message }}@enderror</span>
    </div><br><br>
    <div>
        <input type="text" name="useremail" placeholder="Enter Your email " value="{{ old('username') }}">
        <span class="user"> @error('useremail') {{ $message }}@enderror</span>
    </div><br><br>
    <div>
        <input type="text" name="userphone" placeholder="Enter Your Phone " value="{{ old('username') }}">
        <span class="user"> @error('userphone') {{ $message }}@enderror</span>
    </div><br><br>
    <div>
        <input type="password" name="userpassword" placeholder="Enter Your password " value="{{ old('username') }}">
        <span class="user"> @error('userpassword') {{ $message }}@enderror</span>
    </div><br><br>

    <button type="submit">Submit</button>
    </form>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div>

@if (session('success'))
<div class="sucess-message"> {{session('success')}}</div>

@endif

<style>

    .user{
        color: red;
    }
    .sucess-message{
        color: green;
        font-size: 30px;
    }

</style>