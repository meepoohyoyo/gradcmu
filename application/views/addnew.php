<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administration Page</title>
   
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<ul>
  <li><a href="#home">Home</a></li>
  <li><a class="active" href="#news">Add News</a></li>
</ul>

<div class="container">
  <table border="1">
        <tr>
          <th>Add New</th>
        </tr>
        <tr>
            <td><label for="title">Title</label>
              <br><input type="text" name="title"></br>
            </td>
        </tr>
        <tr>
          <td><label for="content">Content</label>
                <br><textarea name="content">Enter text here...</textarea></br>
            </td>
        </tr>
        <tr>
            <td>Select File: <input type="file" name="filename"><br></td>
        </tr>
        <tr>
            <td><input type="submit" value="Save"></td>
        </tr>
  </table>
</div>

</body>
</html>
