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
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="<?php echo site_url("addnew"); ?>" >Add New</a></li>
  <li style="float:right"><a href="<?php echo site_url("logout"); ?>">Log out</a></li>
</ul>

<div class="container">
  <table  border="1">
          <tr>
            <th colspan="2">List</th>
          </tr>
          <tr>
            <td>
              <section title=".squaredFour">
              <!-- .squaredFour -->
              <div class="squaredFour">
                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                <label for="squaredFour">Title</label>

              </div>
              <!-- end .squaredFour -->
               </section>
            </td>
            <td>Date</td>
          </tr>
          <tr>
            <td>
              <section title=".squaredFour">
              <!-- .squaredFour -->
                <div class="squaredFour">
                  <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                  <label for="squaredFour">1</label>

                </div>
              <!-- end .squaredFour -->
               </section>
            </td>
            <td>.</td>
          </tr>
          <tr>
            <td>Joe</td>
            <td>.</td>
          </tr>
          <tr>
            <td>Cleveland</td>
            <td>.</td>
          </tr>
          <tr>
            <td><a button class="button button1">Delete post</button></a></td>
        </tr>
  </table>
</div>

<script src="<?php echo base_url("assets/js/checkbox.js");?>"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>

</html>
