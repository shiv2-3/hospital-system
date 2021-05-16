<?php
$conn=mysqli_connect('localhost','root','','ibrain');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type="text/css">
	.nav-link{
		margin-left: 80px;

	}
	.nav-link:hover{
		background-color: lightgrey;

	}
	
	
	.hospital{
		height:250px;
		width: 600px;
		background-color:hsl(0, 0%, 90%);
		position: relative;
		bottom: 400px;
		left: 440px;
	}
	.btn2{
		position: relative;
		bottom: 500px;
		left: 500px;
	}
	.hi{
		position: relative;
		top:40px;
	}
	.about{
		position: relative;
		bottom: 200px;
	}
	.doctor{
		position: relative;
		bottom: 60px;
	}
	.doctor2{
		height:250px;
		width:100%;
		background-color:lightgrey;
		border-radius: 10%;
	}
	.doctor22{
		height:100px;
		width:100px;
		background-color: black;
		overflow: hidden;
		border-radius: 50%;
		position: relative;
		top: 75px;
		left: 15px;
	}
	.doc{
		position: relative;
		bottom: 20px;
	}
	.ch{
		font-size: 20px;
		position: relative;
		bottom: 20px;
	}
     .d2{
     	position: relative;
     	top:40px;
     }
     @media(max-width: 557px){
     	.doc{
     		position: relative;
     		left: 20px;
     	}
     	.ch{
     		position: relative;
     		left: 20px;
     	}
     }
     .a9{
     	margin-top: 80px;
     }
    
</style>
</head>

<body>
	<!-- Navbar-->
	
	
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="doctor.jpg" alt="" height="70px">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#carouselExampleControls" >Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
      <li>
      	<a class="nav-link" href="#doctor">Doctors</a>
      </li>
      <li>
      	<a class="nav-link" href="#reg">Registration</a>
      </li>
      <li>
      	<a class="nav-link" href="#app"> Make An Appoinments</a>
      </li>
      <li>
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li>
      	<a class="nav-link" href="clinicinfo.html">clinicinfo</a>
      </li>
      
    </ul>
    
  </div>
</nav>
<!-- Navbar End -->
<!-- Coursel-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="stock.jpg" alt="First slide" height="500">
      <div class="hospital"><h1 class="text-center hi">A Hospital Alone What War Is.</h1></div>
      <a href="video.php"><button type="button" class="btn btn-lg btn-primary btn2">Get Started</button></a>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="covid.jpg" alt="Second slide" height="500">
      <div class="hospital"><h1 class="text-center hi">A Hospital Is No Place To Be Sick.</h1></div>
     <a href="video.php"> <button type="button" class="btn btn-lg btn-primary btn2">Get Started</button></div></a>
    </div>
    
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- End Coursel-->
<!-- About Us-->
<div class="container-fluid about" id="about">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center text-info"><u>ABOUT US</u></h1>
			<p class="text-center">We understand that a career in healthcare is more than just a job - it's a calling where you make a difference in people's lives each and every day.</p>
		</div>
		<div class="col-md-7">
			<img src="getty.jpg"  class="img-fluid w-100">
		</div>
		<div class="col-md-5">
			<p class="">
				SevenHills Group has over two decades of experience in the healthcare sector, and is known for providing quality healthcare and valuable experience to all domestic and international patients. Our healthcare offerings are supported by a team of compassionate and dedicated medical professionals who have rich knowledge and experience in their respective domains
			<p class="font-italic text-info">
			SevenHills Hospital, a healthcare landmark, has been a household name to more than 50 million Indians. We currently have branches in Mumbai and Visakhapatnam.</p>
			<p>
				SevenHills Group has over two decades of experience in the healthcare sector, and is known for providing quality healthcare and valuable experience to all domestic and international patients. Our healthcare offerings are supported by a team of compassionate and dedicated medical professionals who have rich knowledge and experience in their respective domains
			</p>
		</div>
	</div>
</div>
<!-- End About Us -->
<!-- Doctor Info-->
<div class="container-fluid doctor" id="doctor">
<div class="row">
	<div class="col-md-12">
		<a href="doctorinfo.php"><button type="button" class="btn btn-info btn-lg"><h1 class="text-center text-white">DOCTORS</h1></button></a>
	</div>
</div>
 </div>
 <div class="container">
 	<div class="row">
 		<div class="col-md-6">
 			<div class="doctor2">
 				<div class="doctor22">
 				<img src="doctor2.jpg" height="100" width="100" alt="">
 			</div>
 			<h2 class="text-center doc ml-5">Walter Shoni</h2>
 			<p class="text-center ch ml-5">Chief Medical Officer</p>
            <center class="mt-4">
 			<img src="whatsapp.webp " style="height: 20px;" class="rounded-circle">
			<img src="Telegram.webp" style="height: 20px;" class="rounded-circle">
			<img src="instagram.png" style="height: 20px;" class="rounded-circle">
			<img src="facebook.webp" style="height: 20px;" class="rounded-circle">
		</center>
 			</div>
 	</div>
 		<div class="col-md-6">
 			<div class="doctor2">
 				<div class="doctor22">
 				<img src="d5.jpg" height="100" width="100" alt="">
 			</div>
 			<h2 class="text-center doc ml-5">Sarah Jhons</h2>
 			<p class="text-center ch ml-5">Anesthesiologist</p>
            <center class="mt-4">
 			<img src="whatsapp.webp " style="height: 20px;" class="rounded-circle">
			<img src="Telegram.webp" style="height: 20px;" class="rounded-circle">
			<img src="instagram.png" style="height: 20px;" class="rounded-circle">
			<img src="facebook.webp" style="height: 20px;" class="rounded-circle">
		</center>
 			</div>
 		</div>
 		<div class="col-md-6 d2">
 			<div class="doctor2">
 				<div class="doctor22">
 				<img src="d6.jpg" height="100" width="100" alt="">
 			</div>
 			<h2 class="text-center doc ml-5">Willam Ador</h2>
 			<p class="text-center ch ml-5">Anesthesiologist</p>
            <center class="mt-4">
 			<img src="whatsapp.webp " style="height: 20px;" class="rounded-circle">
			<img src="Telegram.webp" style="height: 20px;" class="rounded-circle">
			<img src="instagram.png" style="height: 20px;" class="rounded-circle">
			<img src="facebook.webp" style="height: 20px;" class="rounded-circle">
		</center>
 			</div>
 		</div>
 		<div class="col-md-6 d2">
 			<div class="doctor2">
 				<div class="doctor22">
 				<img src="d7.jpg" height="100" width="100" alt="">
 			</div>
 			<h2 class="text-center doc ml-5">Watson Shoe</h2>
 			<p class="text-center ch ml-5">Anesthesiologist</p>
            <center class="mt-4">
 			<img src="whatsapp.webp " style="height: 20px;" class="rounded-circle">
			<img src="Telegram.webp" style="height: 20px;" class="rounded-circle">
			<img src="instagram.png" style="height: 20px;" class="rounded-circle">
			<img src="facebook.webp" style="height: 20px;" class="rounded-circle">
		</center>
 			</div>
 		</div>
 	</div>
 </div>
<!-- End Doctor-->
<!--Registration-->
<section class="bg-light" id="reg">
<form action="rinsert.php" method="post">
<div class="container a9">
	<div class="row border pb-5">
		<div class="col-md-12 p-3 bg-light text-center">
			<h2 class="text-uppercase text-info font-weight-bold">Patient Registratation Form</h2>
			<p class="font-weight-bold text-info">Registration Form 2019-20</p>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold" hidden="">Patient:</label>
				</div>
				<div class="col-md-9">

					<input type="text" name="pid" class="form-control" placeholder="Enter Patient Id." hidden="">
					
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Patient Id:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="p_id" class="form-control" placeholder="Enter Patient Id.">

				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Blood Group</label>
				</div>
				<div class="col-md-9">
					<select name="bgroup" class="form-control">
						<option>Select</option>
						<option>A+</option>
						<option>B+</option>
						<option>o+</option>
						<option>AB+</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold"> FirstName:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="fname" class="form-control" placeholder="Enter First Name.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Last Name:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="lname" class="form-control" placeholder="Enter Last Name.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Age:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="age" class="form-control" placeholder="Enter Age.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Mother Name:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="mname" class="form-control" placeholder="Enter Mother Name.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Birth Date:</label>
				</div>
				<div class="col-md-9">
					<input type="date" name="dob" class="form-control" placeholder="Enter Name.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Gender:</label>
				</div>
				<div class="col-md-9">
					<select name="gender" class="form-control">
						<option>Select</option>
						<option>male</option>
						<option>female</option>
						<option>other</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Contact Number:</label>
				</div>
				<div class="col-md-9">
					<input type="number" name="cnumber" class="form-control" placeholder="Enter Contact Number.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">City:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="city" class="form-control" placeholder="Enter city.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">E-mail:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="email" class="form-control" placeholder="Enter E-mail.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Appointment Future:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="afuture" class="form-control" placeholder="Enter afuture.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">State:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="state" class="form-control" placeholder="Enter state.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Password:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="pwd" class="form-control" placeholder="Enter password.">
				</div>
			</div>
		</div>
		
		
		
		<div class="col-md-12 mt-4 text-center">
			<a href="logs.html"><button class="btn btn-success btn-lg" name="save" >Save</button></a>
			<button class="btn btn-warning btn-lg" type="reset">Reset</button>
		</div>
	</div>
</div>
</form>
</section>
<!-- End Registration-->
<!-- Appoinment -->
<section class="bg-light" id="app">
<form action="makeappbtn.php" method="post">
<div class="container a9">
	<div class="row ">
		<div class="col-md-12 p-3 bg-light text-center">
			<h2 class="text-uppercase text-info font-weight-bold">Make an Appointment</h2>
			
		</div>
		
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold"> Appointement ID:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="apt_id" class="form-control" placeholder="Enter Appointement." hidden="">
					<input type="text" name="aptid" class="form-control" placeholder="Enter Appointement.">
				</div>
			</div>
		</div>
		
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Name:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="name" class="form-control" placeholder="Enter Name.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Year:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="year" class="form-control" placeholder="Enter year.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Month:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="month" class="form-control" placeholder="Enter month.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Appointment Length:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="aptlength" class="form-control" placeholder="Enter Appointment Length.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Appointment Date:</label>
				</div>
				<div class="col-md-9">
					<input type="date" name="adate" class="form-control" placeholder="Enter date.">
				</div>
			</div>
		</div>
		
		
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Provider:</label>
				</div>
				<div class="col-md-9">
					<input type="number" name="provider" class="form-control" placeholder="Enter Provider.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Operatory:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="operatory" class="form-control" placeholder="Enter Operatory.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Appointment Time:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="atime" class="form-control" placeholder="Enter time.">
				</div>
			</div>
		</div>
		<div class="col-md-6 mt-4">
			<div class="row">
				<div class="col-md-3">
					<label class="text-dark font-weight-bold">Appointment Amount:</label>
				</div>
				<div class="col-md-9">
					<input type="text" name="aamount" class="form-control" placeholder="Enter Amount.">
				</div>
			</div>
		</div>
		
		
		
		
		
		
		<div class="col-md-12 mt-4 text-center">
			<button class="btn btn-info btn-lg" name="make">Make An Appointment</button>
			
		</div>
	</div>
</div>
</form>
</section>
<!--End Appoinment-->
<!-- Contact -->
<section>
<div class="container-fluid a9" id="contact">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center text-info">CONTACT</h1>
		</div>
		<div class="col-md-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.8241337608574!2d73.8239939143677!3d18.446292476257245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc29524cc661a75%3A0xf2b39c3946ac614!2sHospital!5e0!3m2!1sen!2sin!4v1620722300739!5m2!1sen!2sin" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<div class="col-md-6 mt-5">
			<h2 class="text-center text-center text-info">Location</h2>
			<p class="text-center text-info font-italic">
				Near Hospital Gurgram road Ahmednager
			</p>
			<h2 class="text-info text-center">Email</h2>
			<p class="text-center text-info font-italic">shivaniare02@gmail.com</p>
			<h2 class="text-center text-info">Call</h2>
			<p class="text-center text-info">+9455567776 , +924444555</p>
		</div>
	</div>
</div>
</section>
<!--End Contact-->
<!--footer-->
<section class="bg-info a9">
<div class="container">
	<div class="row bg-info">
		<div class="col-md-3 col-12">
			<h5 class="text-white font-weight-bold">Hospital Thought</h5>
			<p class="text-white font-weight-bold">
				Hospital information systems provide a common source of information about a patient's health history. ... These systems enhance the ability of health care professionals to coordinate care by providing a patient's health information and visit history at the place and time that it is needed.
			</p>
		</div>
		<div class="col-md-3 col-12 foot"> 
			<h5 class="text-white font-weight-bold">Recent Posts</h5>

			<p class="text-white font-weight-bold">The organizational model of hospital assistance originated in Sri Lanka and in the Arab world with the emergence of wards, specialized care, and establishment of the role of the physician in patients’ care. This model of health care arrived in Europe with the Crusades and became established initially in  </p>
			
		</div>
		 <div class="col-md-3 col-12 foot">
			<h5 class="text-white font-weight-bold">Nurses</h5>  
			<p class="text-white font-weight-bold">Part of the success of contemporary medicine is attributed to the hospitals, reflected by the increased survival of seriously ill patients and improvement in surgical techniques, culminating with a reduction in morbidity and mortality1.</p>
			
			



		</div>
		<div class="col-md-3 col-12 foot">
		<h5 class="ml-5 text-white font-weight-bold">Doctor</h5>
		<p class="text-center font-weight-bold text-white">
			The organizational model of hospital assistance originated in Sri Lanka and in the Arab world with the emergence of wards, specialized care, and establishment of the role of the physician in patients’ care. This model of health care arrived in Europe with the Crusades and became established.
		</p>
			



		</div>
	</div>
</div>
<!--End footer-->
</body>
</html>
<?php
print_r($_POST);
?>