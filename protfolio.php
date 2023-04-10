<?php
$title = "Service";
require_once 'includes/db.php';
require_once 'includes/dashboard/header.php';
require_once 'includes/athentic.php';
require_once 'includes/sidebar.php';
$service_query = "SELECT * FROM protfolios";
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
                <td><?=ucwords(strtolower($data['protfolio_name']))?></td>
                <td><?=$data['protfolio_title']?></td>
                <td>
                  <img src="/practics_2/uploads/protfolio/<?=$data['protfolio_image']?>" alt="<?=$data['protfolio_image']?>">
                </td>
                <td>
                  ---
                </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
    </table>

  </div>
  <div class="col-md-4">
    <h2 class = "py-2">Protfolio Add</h2>

    <form method="post" action="backend/protfolio_post.php" enctype="multipart/form-data">
        <div class="form-group">
            <label>Protfolio Title</label>
            <input type="text" class="form-control" name = "protfolio_name" placeholder="protfolio_name">
        </div>
        <div class="form-group">
            <label>Protfolio Information</label>
            <input type="text" class="form-control" placeholder="protfolio_title" name = "protfolio_title">
        </div>
        <div class="form-group">
            <label>Protfolio Image</label>
            <input type="file" name="protfolio_image" class = "form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>


<?php
 require 'includes/dashboard/footer.php';
?>
