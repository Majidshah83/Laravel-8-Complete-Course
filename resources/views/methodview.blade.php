<h1>user login</h1>
<form action="test" method="POST">
@csrf
{{ method_field('PUT') }}  <!-- put method -->
<input type="text" name="user" placeholder="enter your name"/> <br></br>
<input type="password" name="password" placeholder="enter your password"/> <br></br>
<Button>submit</Button>
</form>