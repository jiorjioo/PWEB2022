<html>
<head>
    <title>Upload</title>
</head>
<body>

<!--fungsi enctype berperan untuk menentukan data form dikirim ke server--> 
<form enctype="multipart/form-data" method="post" action="latihan33_upload.php"> 
    File yang diupload : <input type="file" name="fupload"><br>
    Deskripsi File     : <br><textarea name="deskripsi" cols="20" rows="6"></textarea><br>
    <input type="submit" value=Upload>
</form>

</body>
</html>
        