<h1>Login Page</h1>
<form action="Form" method="POST">
@csrf
 <input type="text" name="username" placeholder="enter user name"/> <br>
 <span style="color:red">@error('username'){{$message}}@enderror</span>
 </br>
 <input type="password" name="userpasswrd" placeholder="enter user password"/> <br>
 <span style="color:red">@error('userpasswrd'){{$message}}@enderror</span>
 </br>
 <button type="submmit">Login</button>
</form>