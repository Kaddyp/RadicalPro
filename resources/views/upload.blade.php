<h1>Upload File</h1>
<x-News />
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <label>Choose File</label>
    <input type="file" name="file">
    <br><br>
    <button>Upload</button>
</form>