<?php $arg = ['SELECT' => T_ALL, 'TABLE' => T_CATEGORIES];
$CatResults = AdminCatData($arg, $db);
if ($CatResults) {
   foreach ($CatResults as $key => $value) {
      echo "<tr> <td>" . $value[cat_id] . "</td> <td>" . $value[cat_title] . "</td> <td><a href='categories.php?delete={$value[cat_id]}&cat_title={$value[cat_title]}'>Delete</a></td> <td><a href='categories.php?edit={$value[cat_id]}&edit_title={$value[cat_title]}'>Edit</a></td> </tr>";
   }
} ?>