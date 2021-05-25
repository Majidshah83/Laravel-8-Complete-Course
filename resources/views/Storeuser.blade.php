<h1>Add user</h1>
@if(session('user'))
<h3 style="color:blue">User name: {{session('user')}}</h3>
<h3 style="color:blue">User email: {{session('usermail')}}</h3>
<h3 style="color:blue">User password: {{session('userpassword')}}</h3>    <!-- FOR SAME PAGE SHOW DATA OF SESSION-->
<h3>Data submit successfully</h3>        <!--mesg data submit -->
@endif
<form action="strorflash" method="POST">
@csrf
<input type="text" name="user" placeholder="enter your name"/> <br></br>
<input type="email" name="useremail" placeholder="enter your email"/> <br></br>
<input type="password" name="userpassword" placeholder="enter your password"/> <br></br>
<button type="submit">Add user</button>
</form>
