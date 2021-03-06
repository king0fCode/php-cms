<!DOCTYPE html>
<html lang="en">
<?php
include 'settings.php';
include 'includes/header.php';?>


<?php
if ((isset($_POST['submit']) && isset($_POST['search'])) && !empty($_POST['search'])) {
    # code...

    $search = mysqli_real_escape_string($db, $_POST['search']);
    // $pWord = mysqli_real_escape_string($con, $_POST['password']);
    // echo $search;

    $arg = ['SELECT' => T_ALL, 'TABLE' => T_POSTS, 'ARG' => $search];

    $SearchResult = SelectData($arg, $db);
    // print_r($result);
    // echo ($result ? "Database Updated, User Added" : "User add Failed");

}
?>
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

if ($SearchResult) {

    foreach ($SearchResult as $key => $value) {
        # code...
        $image = $value[post_image];
        ?>


                <!-- fetch Blog Posts -->
                <h2>
                    <a href="#"><?php echo $value[post_title]; ?> </a>
                </h2>
                <p class="lead">
               <a href="index.php"><?php echo $value[post_author]; ?>
</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $value[post_date]; ?>
</p>
                <hr>
                <img class="img-responsive" src="<?php echo $img = GetImage(900, 400); ?>" alt="">
                <hr>
                <p><?php echo $value[post_content]; ?>
</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>


<?php

    }

} else {
    echo "<h2><a href='#'>No Result Found for that Query</a></h2>";
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
