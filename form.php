<?php
$servername="localhost";
$password="";
$username="root";
$dbname="db_wp_semiv";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn-> connect_error){
    die("Connection failed: " . $conn->connect_error);
    echo "Connection failed";
    }
    if (isset($_REQUEST['submit'])!='')
    {
        $name=$_POST["name"];
        $contact=$_POST["contact"];
        $address=$_POST["address"];
        $upi=$_POST["upi"];
        echo "<br>";
        $sql = "INSERT INTO orders (name, contact, address, upi) VALUES ('$name', '$contact', '$address', '$upi')";
        
        if (mysqli_query($conn,$sql)){
            echo "Thank you for ordering! We will contact you shortly.";
        }
        else{
            echo mysqli_error($conn);
        }    
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery</title>
    <link rel="stylesheet" href="css\form.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
         <img src="res/img/logo.png" alt="Logo Image" width="180px" height="180px">
          <ul>
            <li> <a href="index.html">HOME</a></li>
            <li> <a href="build_your_own_pc.html">BUILD YOUR OWN PC</a> </li>
            <li> <a href="guide.html">GUIDE</a></li>
            <li> <a href="about_us.html">ABOUT US</a></li>
          </ul>
        </div>
    
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form" method="post">
            <div class="header">
                <br>
                <h3>Order your computer</h3>
                <p>Please fill out this form</p>
            </div>
            <br>
            <div class="sep"></div>
            <div class="inputs"><br>
            <input type="text" placeholder="Name" autofocus name="name" />
            <br><br>
            <input type="text" placeholder="Contact Number" name="contact"/>
            <br><br>
            <input type="text" placeholder="Home Address" name="address" />
            <br><br>
            <input type="text" placeholder="UPI ID" name="upi" />
            <br><br>
            <br>
            <input id="submit" type="submit" name="submit">
            </div>
        </form>
    </div>
</body>
</html>