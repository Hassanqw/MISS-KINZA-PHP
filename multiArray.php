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
        <?php
            $students = [
                ["Hassan" , 18 , "Male" , "hassan@gmail.com"],
                ["Abeera" , 19 , "Female"],
                ["Mahin" , 20 ,  "Female" , "aslammeo548@gmail.com"],
                ["Mahin" , 10 ,  "Female" , "aslammeo548@gmail.com"],
            ]        
        ?>
      <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($students as $key => $std){
            ?>
            <tr>
                <?php
                foreach( $std as $item){
              ?>
                <td ><?php echo $item ?></td>
              

                <?php
              }
                ?>
            </tr>
          <?php
            }
          ?>
        </tbody>
      </table>

    
      <table class="table">
        <tbody>
        <?php 
      $num = 13;
      for($i = 1; $i <=10; $i++){
      ?>
            <tr>
              <td><?php echo $num ?></td>
              <td><?php echo "*"?></td>
              <td><?php echo $i?></td>
              <td><?php echo "=" ?></td>
              <td><?php echo $num*$i ?></td>
            </tr>
        </tbody>
      </table>
      <?php
      }
    ?>
      
  </body>
</html>