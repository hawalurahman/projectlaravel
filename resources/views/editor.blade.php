<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Post</title>
    <link rel="stylesheet" href="editorStyle.css">
</head>

<body>
    <nav>
        <div class="Logo">
            <a href="index.html"><img src="logo.png"></a>
        </div>
    </nav>

    <div class="body">
        <div class="judul">Create a Post</div>

        <div class="title">
            <label for="title">Title</label><br>
            <input type="text" name="title">

        </div>

        <div class="container">
            <label for="content">Content</label>
            <textarea name="content"></textarea>
        </div>

        <script src="ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('content');
        </script>

        <div class="post">
            <button type="submit" style="background-color:#ACEF1D;outline: none; font-weight: bold;"><a href="" style="color: black;">Post</a></button>
            <button type="submit" style="outline: none;"><a href="" style="color: black;">Cancel</a></button>
        </div>
    </div>

    <div class="footer">
        <p>MentalHeal. 2021.</p>
    </div>


</body>

</html>