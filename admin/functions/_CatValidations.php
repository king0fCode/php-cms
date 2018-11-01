<?php

// Insert post values POST Functions

if ((isset($_POST['submit']) && isset($_POST['cat-title'])) && !empty($_POST['cat-title'])) {
    # code...

   $cat = mysqli_real_escape_string($db, $_POST['cat-title']);

   $arg = ['TABLE' => T_CATEGORIES, 'ARG' => $cat];
   $InsertData = InsertCatData($arg, $db);

   if ($InsertData) {
      $msg = "<div class='alert alert-success' role='alert'> Category Added Success!</div>";
   } else {
      $msg = "<div class='alert alert-warning' role='alert'> Category Added Fails!</div>";
   }

}
// END of Insert post values POST Functions




if (isset($_POST['submit']) && empty($_POST['cat-title'])) {

   $msg = "<div class='alert alert-warning' role='alert'>Cat Title Field Cannot Be Empty!</div>";
}



if (isset($_GET['edit']) && !empty($_GET['edit_title'])) {

    $edit_id = mysqli_real_escape_string($db, $_GET['edit']);
    $edit_title = mysqli_real_escape_string($db, $_GET['edit_title']);

    $arg = ['SELECT' => T_ALL, 'TABLE' => T_CATEGORIES, 'ARG' => $edit_id];
    $CheckData = CheckCatData($arg, $db);

    if ($CheckData) {
        $EditVisibility = "visibility:block";
        //  $msg = "<div class='alert alert-success' role='alert'>Category {$cat_title} Cate Found !</div>";
    } else {
        $msg = "<div class='alert alert-warning' role='alert'>Category ID Not Found!</div>";
    }
}

// Edit post values POST Functions

if ((isset($_POST['edit_cat']) && isset($_POST['edit-title'])) && !empty($_POST['edit-title'])) {
    # code...

    $cat_id = mysqli_real_escape_string($db, $_POST['edit-id']);
    $edit_title = mysqli_real_escape_string($db, $_POST['edit-title']);

    $arg = ['SELECT' => T_ALL, 'TABLE' => T_CATEGORIES, 'ARG' => $cat_id];
    $CheckData = CheckCatData($arg, $db);

    if ($CheckData) {
        $msg = "<div class='alert alert-success' role='alert'> Date Found Success!</div>";

        $arg = ['TABLE' => T_CATEGORIES, 'ID' => $cat_id, 'TITLE' => $edit_title];
        $EditData = EditCatData($arg, $db);

        if ($EditData) {

            $msg = "<div class='alert alert-success' role='alert'> Category Edit Success!</div>";
        }

    } else {
        $msg = "<div class='alert alert-warning' role='alert'> Category Edit Fails [Cat Not Exist!</div>";
    }

}
// End of Edit post values POST Functions



    if (isset($_GET['delete']) && !empty($_GET['delete'])) {

    $cat_id = mysqli_real_escape_string($db, $_GET['delete']);
    $cat_title = mysqli_real_escape_string($db, $_GET['cat_title']);

    $arg = ['TABLE' => T_CATEGORIES, 'ARG' => $cat_id];
    $DeleteData = DeleteCatData($arg, $db);

    if ($DeleteData) {
        $msg = "<div class='alert alert-success' role='alert'>Category {$cat_title} Successfully Deleted!</div>";
    } else {
        $msg = "<div class='alert alert-warning' role='alert'>Delete Category Fails!</div>";
    }
}
?>