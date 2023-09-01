<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>File Upload</title>
</head>
<body>
    <div>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
                <lebel>Choose File</lebel>
                <input type="file" name="photo" required><br>
                <button type="submit">Submit</button>
        </form>
        <br>
            <strong>Upload Your Image</strong>
    </div>

</body>
</html>
