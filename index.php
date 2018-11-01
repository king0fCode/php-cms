<!DOCTYPE html>
<html lang="en">
<?php
include 'settings.php';
include 'includes/header.php';?>


<body>

    <!-- Navigation -->
<?php include 'includes/nav.php';?>
<!-- /Nav -->

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
    <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

<?php

$arg = ['SELECT' => T_ALL, 'TABLE' => T_POSTS];
$PostResults = IndexData($arg, $db);

// $result = GetPosts($db);

if ($PostResults) {

    foreach ($PostResults as $key => $value) {
        # code...
        // print_r($value);




        $image = $value[post_image];


        ?>


                <!-- fetch Blog Posts -->
                <h2>
                    <a href="#"><?php $value[post_title];
        ?> </a>
                </h2>
                <p class="lead">
               <a href="index.php"><?php echo $value[post_author];
 ?>
</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $value[post_date];
 ?>
</p>
                <hr>
                <img class="img-responsive" src="<?php echo $img = GetImage(900, 400); ?>" alt="">
                <hr>
                <p><?php echo $value[post_content];
 ?>
</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>


<?php

    }

}

?>

            </div>
            <!-- / Blog entry -->

            <!-- Blog Sidebar Widgets Column -->
   <?php include 'includes/sidebar.php';?>
   <!-- /Sidebar -->
        <!-- /.row -->

        <hr>

      <!-- footer -->
      <?php include 'includes/footer.php';?>
<!-- /footer -->
</body>

</html>
