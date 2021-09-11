<?php

    include("header.php");
    include("basic.php"); 
    $query = "SELECT * FROM patients";
    $result = mysqli_query($connection , $query );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>
<body>
    
<table class="table table-bordered my-4 text-center">
  <tr>

    <th>Number</th>
        <th>Name</th>
            <th>phone</th>
                <th>Email</th>
                    <th>Date</th>
                        <th>Action</th>

    

    </tr>

    <?php 
       

            while($patient = mysqli_fetch_assoc($result)) { ?>
                <tr>
                     <td><?php echo $patient['id']; ?></td>
                     <td><?php echo $patient['name']; ?></td>
                     <td><?php echo $patient['phone']; ?></td>
                     <td><?php echo $patient['email']; ?></td>
                     <td><?php echo $patient['date']; ?></td>

                     <td>
                     <a href= "patients_delete.php?d=<?php echo $patient["id"] ?>" class="btn btn-danger">Trash</a>
                     </td>


                    

                </tr>
            
       
    <?php }?>
    
    </table>
</body>
</html>





