<h1>Dashboard</h1>
<nav>
<a href="hash">Logout</a>

@if(Auth::user()->user_type=="admin")
<a href="hash">All User</a>
@endif

<a href="hash">My Profile</a>
</nav>