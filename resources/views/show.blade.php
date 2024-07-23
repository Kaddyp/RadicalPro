<h1>Showing All Users Data</h1>
<table border="2">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
   @foreach ($k as $z)
    <tr>
        <td>{{$z->name}}</td>
        <td>{{$z->email}}</td>
        <td>{{$z->mobile}}</td>
        <td>
            <a href="delete/{{$z->id}}">Delete</a>
        </td>
    </tr>
   @endforeach
</table>
<br>
<a href="softDeleteRecords">Show Soft Delete Records</a>