<!DOCTYPE html>
<html lang="en">
<?php include '../settings.php';?>
<?php include 'inc/admin_header.php';?>

<body>
   <div id="wrapper">
      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">CMS Admin</a>
         </div>
         <!-- Top Menu Items -->
         <?php include 'inc/admin_nav_top.php';?>
         <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
         <?php include 'inc/admin_nav_side.php';?>
         <!-- /.navbar-collapse -->
      </nav>
      <div id="page-wrapper">
         <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
               <div class="col-lg-12">
                  <h1 class="page-header">
                     Welcome to Admin Panel
                     <small>Subheading</small>
                  </h1>
                  <ol class="breadcrumb">
                     <li>
                        <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                     </li>
                     <li class="active">
                        <i class="fa fa-file"></i> Blank Page
                     </li>
                  </ol>
               </div>
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container-fluid -->
      </div>
      <!-- /#page-wrapper -->
   </div>
   <!-- /#wrapper -->
   <?php include 'inc/admin_footer.php';?>
</body>

</html>