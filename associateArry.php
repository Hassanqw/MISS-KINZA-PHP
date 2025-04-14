<!-- <?php
$Ary = ["Name"=>"Isha",
"Class" => 10,
"city" => "Karachi"
];

foreach($Ary as $key => $value){
        echo $key , ":" , $value."<br>";
}
?> -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h2>Another Example</h2>
<?php 
$allEmp = [
        ["id" => 1 , "name" => "Isha" , "age" => 20],
        ["id" => 2 , "name" => "Hamza" , "age" => 15],
        ["id" => 3 , "name" => "Mahin" , "age" => 18],
] 
?>
<table class="table">
        <thead>
                
                <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Age</th>
                </tr>
        </thead>
        <tbody>
                <?php
                foreach($allEmp as $value){
                ?>
                <tr>
                        <td><?php echo $value["id"];?></td>
                        <td><?php echo $value["name"];?></td>
                        <td><?php echo $value["age"];?></td>
                </tr>

              <?php
                }
              ?>
                
        </tbody>
</table>