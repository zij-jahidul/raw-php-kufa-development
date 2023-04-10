<?php
$title = "Service";
require_once 'includes/db.php';
require_once 'includes/dashboard/header.php';
require_once 'includes/athentic.php';
require_once 'includes/sidebar.php';
$service_query = "SELECT * FROM services";
$datas = mysqli_query($db_conntect, $service_query);

?>

<div class="row">
  <div class="col-md-12">
    <div class="card">
        <h1 class = "text-center text-primary bg-dark py-2">Services Page</h1>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-8">
    <h2 class = "py-2">Service View</h2>

    <table class="table table-dark">
        <thead>

            <tr>
                <th>SL NO.</th>
                <th>Service Icon</th>
                <th>Service Title</th>
                <th>Service Information</th>
                <th>Action</th>
            </tr>

        </thead>

        <tbody>

            <?php
             $serial = 1;
             foreach($datas as $data):
               ?>

            <tr>
                <th><?=$serial++?></th>
                <td><?=$data['service_icon']?></td>
                <td><?=$data['service_title']?></td>
                <td><?=$data['service_information']?></td>
                <td>
                  <a href="delete.php"> Delete</a>
                </td>
            </tr>

          <?php endforeach; ?>



        </tbody>
    </table>

  </div>
  <div class="col-md-4">
    <h2 class = "py-2">Service Add</h2>

    <form method="post" action="backend/service_post.php">
        <div class="form-group">
            <label>Service Icon</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "service_icon" placeholder="service_icon">
        </div>
        <div class="form-group">
            <label>Service Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="service_title" name = "service_title">
        </div>
        <div class="form-group">
            <label>Service Information</label>
            <textarea name = "service_information" rows="8" class = "form-control" placeholder="service_information"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>


<?php
 require 'includes/dashboard/footer.php';
?>
