<h1>Dashboard</h1>
<!-- <nav>
<a href="hash">Logout</a>

@if(Auth::user()->user_type=="admin")
<a href="hash">All User</a>
@endif

<a href="hash">My Profile</a>
</nav> -->

<h2>My Profile</h2>
<table border="2" cellpadding="10">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone No.</th>
</tr>
<tr>
    <td>
        {{Auth::user()->name}}
    </td>
    <td>
        {{Auth::user()->email}}
    </td>
    <td>
        {{Auth::user()->mobile}}
    </td>
</tr>
</table>
<br>
<a href="logout">Logout</a>