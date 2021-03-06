<?php
session_start();
include('includes/dbconnection.php');
if(strlen($_SESSION['aid']==0)){
	header('location:logout.php');
}
else {
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome to Employee Rocord Management System </title>
  
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <div id="wrapper">

      
    <?php include_once('includes/sidebar.php');?>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

       <?php include_once('includes/header.php');?>
        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Employee Record Management System</h1>
                   </div>

          <div class="row">
<div class="col-xl-3 col-md-6 mb-4"></div>
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Welcome Back to ERMS !</div>

                      <?php
$adminid=$_SESSION['aid'];
$ret=mysqli_query($con,"select AdminName from tbladmin where ID='$adminid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];

?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $name; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        

         
          </div>
        </div>
          </div>

        </div>

      </div>
    </div>
  </div>


  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="../js/sb-admin-2.min.js"></script>

  <script src="../vendor/chart.js/Chart.min.js"></script>

  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>

</html>
<?php
}
?>