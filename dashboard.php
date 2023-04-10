<?php
$title = "Dashboard";
require_once 'includes/dashboard/header.php';
require_once 'includes/athentic.php';
require_once 'includes/sidebar.php';
?>
<div class="alert alert-success">
  <h1><?=$_SESSION['login']?></h1>
</div>




<?php
 require 'includes/dashboard/footer.php';
?>
