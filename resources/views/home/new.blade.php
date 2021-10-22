<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New</title>
</head>
<body> 
    <form action="/home" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nama" placeholder="Nama">
        <input type="text" name="deskripsi" placeholder="Deskripsi">
        <input type="file"  name="file" placeholder="File">
        <input type="submit" value="Save">
    </form>
</body>
</html>