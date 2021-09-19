<?php
include('connect.php');
if(isset($_POST['submit']))
{
    $name=$_POST["Name"];
    $mobile=$_POST['phoneNumber'];
    $mail=$_POST["Email"];
    $message=$_POST['Message'];
    $query=mysqli_query($conn,"insert into contactinfo(Name,Email,phoneNumber,Message) values('$name','$mail','$mobile','$message')");
    if($query)
    {
        echo '<script>alert("Thanks For Contacting Us");</script>';
        echo '<script>window.location.href="workOfSMP.html";</script>';
    }
    else{
        echo '<script>alert("Failed to Contact");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact SMP</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="box2-area">
        <header>
            <div class="wrapper2">
                <div class="logo2">
                    <a href="#">SMP</a>
                </div>
                <nav>
                    <p>Contact us</p>
                </nav>
            </div>
        </header>
        <section class="banner-area">
            <div class="panel heading">
                <h1>We would love to hear it from you on your query</h1> 
             <h2>Fill up to contact us :</h2> 
            </div>
            <div class="panel body">
            <form action="#" method="post">
                 <div id="div">
                   <label for="Name">Name - </label>
                   <input type="text" id="Name" placeholder="Enter Name"  name="Name" required>
               </div><br><br><br>
               <div id="div1">
                   <label for="Ph Number">Phone Number - </label>
                   <input type="number" id="ph Number" placeholder="Enter Number" pattern="[0,9]" name="phoneNumber" required>
               </div><br><br><br>
               <div id="div2">
                   <label for="Email">Email - </label>
                   <input type="email" id="Email" placeholder="Enter Email"  name="Email"  required>
               </div><br><br><br>
               <div id="div3">
                   <label for="Message">Message - </label>
                   <textarea name="Message" id="Message" cols="50" rows="8" placeholder="[A,B],[a,b],[0,9]" required></textarea>
               </div> <br><br><br><br><br><br><br><br><br>
               <input type="SUBMIT" id="div4" name="submit">
            </form>
            </div>  
               
                
        </section>
        
        <div class="social">
            <a href="#">facebook</a>|
            <a href="#">twetter</a>|
            <a href="#">instagram</a>|
            <a href="#">+911234567890</a>
        </div>
    </div>
</body>
</html>