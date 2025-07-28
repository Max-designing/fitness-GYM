<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('location:../index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo ucfirst(basename($_SERVER['PHP_SELF'], ".php")); ?> | Baazi</title>
<link rel="shortcut icon" href="./theme/images/logo.JPG" type="image/x-icon">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/uniform.css" />
<link rel="stylesheet" href="../css/select2.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="header">
  <h2><a href="dashboard.html">Baazi Gym</a></h2>
</div>

<?php include '../includes/header.php'?>
<?php $page="attendance"; include '../includes/sidebar.php'?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb">
      <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="attendance.php" class="current">Manage Attendance</a>
    </div>
    <h1 class="text-center">Attendance List <i class="icon icon-calendar"></i></h1>
  </div>

  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class='widget-box'>
          <div class='widget-title'> 
            <span class='icon'> <i class='icon-th'></i> </span>
            <h5>Attendance Table</h5>
          </div>
          <div class='widget-content nopadding'>

            <table class='table table-bordered'>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Fullname</th>
                  <th>Contact Number</th>
                  <th>Choosen Service</th>
                  <th>Action</th>
                </tr>
              </thead>

              <?php
              include "dbcon.php";
              date_default_timezone_set('Asia/Kathmandu');
              $current_date = date('Y-m-d h:i A');
              $exp_date_time = explode(' ', $current_date);
              $todays_date = $exp_date_time[0];

              $qry = "SELECT * FROM members WHERE status = 'Active'";
              $result = mysqli_query($conn, $qry);
              $cnt = 1;

              while ($row = mysqli_fetch_array($result)) {
                  $user_id = $row['user_id'];
              ?>
              <tbody>
                <tr>
                  <td class='text-center'><?php echo $cnt; ?></td>
                  <td class='text-center'><?php echo $row['fullname']; ?></td>
                  <td class='text-center'><?php echo $row['contact']; ?></td>
                  <td class='text-center'><?php echo $row['services']; ?></td>

                  <?php
                  $att_qry = "SELECT * FROM attendance WHERE curr_date = '$todays_date' AND user_id = '$user_id'";
                  $res = mysqli_query($conn, $att_qry);
                  $row_exist = mysqli_fetch_array($res);

                  if (!empty($row_exist) && isset($row_exist['curr_date']) && $row_exist['curr_date'] === $todays_date) {
                      ?>
                      <td>
                        <div class='text-center'>
                          <span class="label label-inverse"><?php echo $row_exist['curr_date']; ?> <?php echo $row_exist['curr_time']; ?></span>
                        </div>
                        <div class='text-center'>
                          <a href='actions/delete-attendance.php?id=<?php echo $user_id; ?>'>
                            <button class='btn btn-danger'>Check Out <i class='icon icon-time'></i></button>
                          </a>
                        </div>
                      </td>
                  <?php } else { ?>
                      <td>
                        <div class='text-center'>
                          <a href='actions/check-attendance.php?id=<?php echo $user_id; ?>'>
                            <button class='btn btn-info'>Check In <i class='icon icon-map-marker'></i></button>
                          </a>
                        </div>
                      </td>
                  <?php } ?>
                </tr>
              </tbody>
              <?php $cnt++; } ?>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
#footer {
  color: white;
}
</style>

<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.ui.custom.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/matrix.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/jquery.uniform.js"></script>
<script src="../js/select2.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/matrix.tables.js"></script>
</body>
</html>
