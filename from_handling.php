<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
       <form action="" method="post">
        <div class="form-group">
            <label for="my-input">Name</label>
            <input name="userName" id="my-input" class="form-control" type="text" name="">
        </div>
        <button class="btn btn-info" name="sub">Submit</button>
       </form>
      
      </div>
      <?php 
      if(isset($_POST["sub"])){
        $userName = $_POST["userName"];
        echo $userName . " is the user name";
      }
      
      ?>
 
  </body>
</html>