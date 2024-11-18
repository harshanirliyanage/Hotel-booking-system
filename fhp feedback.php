<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["Name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    
    $sql = "INSERT INTO feedback (name, email, comment) VALUES ('$name', '$email', '$comment')";
    if ($conn->query($sql) === TRUE) {
        echo "Feedback added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>
<!DOCTYPE html>
<html>
    <head>
<meta  content="width=device-width, initial-scale=1">
  <title>GetSetBooking.lk</title>
  <link rel="stylesheet" type="text/css" href="header.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" href="feedback.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body>
	  <header>
		<div class="logo">
		  <img src="images/photo1686316618.jpeg">
		</div>
		<nav>
		  <ul>

			<li><a href="index.html">Home</a></li>
			<li><a href="About Us.html">About</a></li>
			<li><a href="Contact Us.html">Contact Us</a></li>
			<li><a href="Feedback.html">Feedback</a></li>

		  </ul>
		</nav>
		<div class="login">
		  <a href="Siun in.html">
		<button>Login/Register</button>
	</a>
		</div>
	  </header>

	  <div class="wrap">
        <table>
		    <form action="" method="">
			  <h2>Customer Feedback on getsetbooking service</h2>
			  <tr>
	            <td> 
				   <label>Name*</label>
				   </br>
				   <input type="text" name="Name" class="txt">
			    </td>
			  </tr>
			  <tr>
				<td>
				   <label>E-mail*</label>
				   </br>
				   <input type="email" name="email">
				</td>
			  </tr>
			  <tr>
				<td colspan="2">
				   <label>Comment</label>
				   </br>
				   <textarea class="txtarea"></textarea>
				</td>
			  </tr>
			  <tr>
			    <td colspan="2"><button type="submint" class="btn">Submit</button></td>
			  </tr>
            </form>
			
		</table>		  
	</div>
	</body>
	
	<!-- Site footer -->
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>getset<span>booking</span></h3>

				<p class="footer-links">
					<a href="index.html" class="link-1">Home</a>
					
					<a href="About Us.html">About Us</a>
				
					<a href="Contact Us.html">Contact Us</a>
				
					<a href="help.html">Help</a>
					<a href="use account.html">User</a>
				</p>

				<p class="footer-company-name">Copyright © 1996–2023 getsetbooking.lk™. All rights reserved.</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-phone"></i>
					<p><a href="#">(+94) 71 335 5775</a></p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="it22271396@my.sliit.lk">it22271396@my.sliit.lk</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Save time,save money!</span>
					GET SET BOOK NOW!
					
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>

				</div>

			</div>

		</footer>
	
</html>