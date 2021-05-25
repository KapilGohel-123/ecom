@if(session('user'))
<h1>Welcome to Home page</h1>
@endif

<!--<h1>Hello:{{session('user')}}</h1>-->
<a href="/logout">Logout</a>