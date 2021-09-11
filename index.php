<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <title>AL-Shifa Hospital</title>
</head>
<body>
        <div class="main">
            <div class="logo">
                <img src="images/hospital.png" />
                <h2>Al-Shifa Hospital</h2>
            </div>
        <div class="book">
            <p>Welcome to Al-Shifa Hospital, For Reservations Fill out the Form</p>

             <form action="index.php" method="post">
                <input type="text" placeholder="Enter Your Name.." name="name" required>
                <input type="text" placeholder="Enter Your Phone.." name="phone" required>
                <input type="text" placeholder="Enter Your Email.." name="email">
                <input type="date"  name="date" required>
                <input type="submit" value="Book Now"  name="send">


             </form>

                     <?php 
                        // connect to server
                        include("basic.php");

                        // sending the info by user
                       if(isset($_POST['name'])){
                        $pName = $_POST['name'];
                        } 
                        if(isset($_POST['phone'])){
                            $pPhone = $_POST['phone'];
                            } 
                        if(isset( $_POST['email'])){
                            $pEmail = $_POST['email'];
                        }
                        if(isset($_POST['date'])){
                            $pDate =  $_POST['date']; 
                        }
                        if(isset($_POST['send'])){
                            $pSend =  $_POST['send']; 
                        }
                            
                    

                        if(isset($pSend)){

                            $query = "INSERT INTO patients(name , phone , email , date)VALUES('$pName' , '$pPhone' ,'$pEmail', ' $pDate')";
                            $result = mysqli_query($connection , $query);
                            echo "<p style='color:green'>" . "Booked" . "</p>";

                        }else{
                            echo "<p style='color:red'>" . "Not Booked" . "</p>";
                        }
                    

                     ?>

          </div>
        </div>

</body>
</html>  