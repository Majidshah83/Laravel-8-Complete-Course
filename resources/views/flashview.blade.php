<h1>user deatil</h1>
@if(session('user'))
<h3 style="color:blue">User name: {{session('user')}}</h3>
<h3 style="color:blue">User email: {{session('usermail')}}</h3>
<h3 style="color:blue">User password: {{session('userpassword')}}</h3>    <!-- SHOW SESSION DATA ON NEXT PAGE -->
@endif
