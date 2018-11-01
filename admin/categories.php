<!DOCTYPE html>
<html lang="en">
<?php include '../settings.php';?>
<?php include 'inc/admin_header.php';?>
<?php
// Declaration Init
$msg            = false;
$EditVisibility = "visibility:hidden";
?>
<?php include './functions/_CatValidations.php';?>

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
                        <i class="fa fa-file"></i> Categories
                     </li>
                  </ol>
                  <div class="col-xs-6">
                     <?php echo (($msg) ? $msg : '');

?>
                     <!-- // start add category -->
                     <form action="categories.php" method="post">
                        <div class="form-group">
                           <label for="cat-title">Add Category</label>
                           <input type="text" class="form-control" name="cat-title" id="cat-title">
                        </div>
                        <div class="form-group">
                           <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add Category">
                        </div>
                     </form>
                     <!-- // end add category -->
                     <!-- // start edit category -->
                     <div style="<?php echo $EditVisibility; ?>">
                        <form action="categories.php" method="post">
                           <div class="form-group">
                              <label for="cat-title">Edit Category</label>
                              <input type="hidden" class="form-control" name="edit-id" value="<?php echo (($edit_id) ? $edit_id : ''); ?>">
                              <input type="text" class="form-control" name="edit-title" id="edit-title" value="<?php echo (($edit_title) ? $edit_title : '') ?>">
                           </div>
                           <div class="form-group">
                              <input type="submit" name="edit_cat" id="edit_cat" class="btn btn-primary" value="Edit Category">
                           </div>
                        </form>
                        <!-- // end edit category -->
                     </div>
                  </div>
                  <table class="table table-hover table-bordered">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>CATEGORY TITLE</th>
                        </tr>
                     </thead>
                     <tbody>
 <?php include 'functions/_CatResults.php'; ?>
                     </tbody>
                  </table>
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