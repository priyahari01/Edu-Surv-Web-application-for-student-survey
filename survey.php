

<?php
session_start();
include("connectdb.php");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    destroy_session();
}
$success="Survey Successful.Thank You";
$error="Error";

if(!isset($_SESSION['email'])){
	header('Location: index.php');
}

if(isset($_POST['cname'])){
	$email=$_SESSION['email'];
	$cname = $_POST['cname'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$country = $_POST['country'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	$q1=$_POST['q1'];
	$q2=$_POST['q2'];
	$q3=$_POST['q3'];
	$q4=$_POST['q4'];
	$q5=$_POST['q5'];
	$q6=$_POST['q6'];

	
	$sql = "INSERT INTO surveydata VALUES('$email','$cname','$address1','$address2','$country','$state','$zip','$q1','$q2','$q3','$q4','$q5','$q6')";

	if (mysqli_query($conn, $sql)) {
	    echo "<script type='text/javascript'>alert('$success');</script>";
	}
	else {
    	echo "<script type='text/javascript'>alert('$error');</script>";
	
	}
mysqli_close($conn);
//header('Location: index.php');
}

?>




<!doctype html>
<html lang="en">
 <head>
<title></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/web/images/s2.png" alt="" width="72" height="72">
    <h2>Edu Surv Survey</h2>
    <p class="lead">Hello <?php echo $_SESSION['username']; ?>.Below is a form built for students to express their views on some of the questions.After finishing the survey you can logout <a href="logout.php">here</a>.</p>
  </div>

  <div class="row">
    
    <div class="col-md-12 order-md-1">
      <h4 class="mb-3">Survey Questions</h4>
      <form class="needs-validation" method="post" novalidate>
        

        <div class="mb-3">
          <label for="cname">College Name</label>
          <input type="text" class="form-control" id="cname" name="cname" placeholder="Your College Name">
          <div class="invalid-feedback">
            Please enter a valid college name.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input name="address1" type="text" class="form-control" id="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 </label>
          <input name="address2" type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" name="country" required>
              <option value="">Choose...</option>
              	<option value="India">India</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" name="state" required>
              <option value="">Choose...</option>
              <option value="kerala">Kerala</option>
		<option value="tamil nadu">Tamil Nadu</option>
		<option value="telangana">Telangana</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" name="zip" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="mb-3">
          <label for="q1">How's Your College?</label>
					<textarea class="form-control" placeholder="Describe under 150 words" name="q1" id="q1" rows="5" reqiured></textarea>
        </div>
				<div class="mb-3">
          <label for="q2">What is your opinion about your faclulties?</label>
					<textarea class="form-control" placeholder="Describe under 150 words" name="q2" id="q2" rows="5" reqiured></textarea>
        </div>
				<div class="mb-3">
          <label for="q3">Does your college provide you with enough facilities? Describe your opinion about them.</label>
					<textarea class="form-control" placeholder="Describe under 150 words" name="q3" id="q3" rows="5" reqiured></textarea>
        </div>
				<div class="mb-3">
          <label for="q4">How is your social life in your college?</label>
					<textarea class="form-control" placeholder="Describe under 150 words" name="q4" id="q4" rows="5" reqiured></textarea>
        </div>
				<div class="mb-3">
          <label for="q5">Do you experience any difficulties of any sot in your college?</label>
					<textarea class="form-control" placeholder="Describe under 150 words" name="q5" id="q5" rows="5" reqiured></textarea>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Do you like to be contacted by our volunteers?</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="q61" name="q6" value="yes"type="radio" class="custom-control-input" checked >
            <label class="custom-control-label" for="q61">Yes, Sure</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="q62" name="q6" value="no" type="radio" class="custom-control-input">
            <label class="custom-control-label" for="q62">No,I don't need help</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="q63" name="q6" value="may be" type="radio" class="custom-control-input" >
            <label class="custom-control-label" for="q63">May be,I am not sure</label>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit and Finish Survey</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019 Edu Surv</p>
  </footer>
</div>
</body>
</html>

