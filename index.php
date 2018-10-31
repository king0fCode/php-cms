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

$arg = ['SELECT' => '*', 'TABLE' => 'posts '];
$PostResults = IndexData($arg, $db);

// $result = GetPosts($db);

if ($PostResults) {

    foreach ($PostResults as $key => $value) {
        # code...
        // print_r($value);

        $title = $value[post_title];
        $author = $value[post_author];
        $date = $value[post_date];
        $image = $value[post_image];
        $content = $value[post_content];

        ?>


                <!-- fetch Blog Posts -->
                <h2>
                    <a href="#"><?php echo $title; ?> </a>
                </h2>
                <p class="lead">
               <a href="index.php"><?php echo $author; ?>
</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $date; ?>
</p>
                <hr>
                <img class="img-responsive" src="<?php echo $img = GetImage(900, 400); ?>" alt="">
                <hr>
                <p><?php echo $content; ?>
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
