<?php

function AdminCatData($Arr, $db)
{

    $select = $Arr[SELECT];

    $table = $Arr[TABLE];

//    $query = "SELECT ". $select ." FROM ". $table . " WHERE post_tags = ". $arg;

    $query = "SELECT {$select} FROM {$table}";

    $dataR = mysqli_query($db, $query);

    if ($dataR) {

        while ($row = mysqli_fetch_assoc($dataR)) {

            $arr[] = $row;

        }
        return $arr;
    } else {
        //  echo "Result Not Found: " . mysqli_error($db);
        return false;

    }

}

function InsertCatData($Arr, $db)
{

    $table = $Arr[TABLE];
    $value = $Arr[ARG];

//    $query = "SELECT ". $select ." FROM ". $table . " WHERE post_tags = ". $arg;

    $query = "INSERT INTO {$table} (cat_title) VALUES('{$value}')";

    $dataR = mysqli_query($db, $query);

    if ($dataR) {

        return true;
    } else {
        //  echo "Result Not Found: " . mysqli_error($db);
        return false;

    }

}

function DeleteCatData($Arr, $db)
{

    $table = $Arr[TABLE];
    $value = $Arr[ARG];

//    $query = "SELECT ". $select ." FROM ". $table . " WHERE post_tags = ". $arg;

    $query = "DELETE FROM {$table} WHERE cat_id={$value}";
    $dataR = mysqli_query($db, $query);

    if ($dataR) {

        return true;
    } else {
        //  echo "Result Not Found: " . mysqli_error($db);
        return false;

    }

}

function CheckCatData($Arr, $db)
{

    $select = $Arr[SELECT];
    $table  = $Arr[TABLE];
    $arg    = $Arr[ARG];

//    $query = "SELECT ". $select ." FROM ". $table . " WHERE post_tags = ". $arg;

    $query = "SELECT {$select} FROM {$table} WHERE cat_id={$arg}";

    $dataR = mysqli_query($db, $query);

    if ($dataR) {

        while ($row = mysqli_fetch_assoc($dataR)) {

            $arr[] = $row;

        }
        return $arr;
    } else {
        //  echo "Result Not Found: " . mysqli_error($db);
        return false;

    }

}

function EditCatData($Arr, $db)
{

    $table       = $Arr[TABLE];
    $argCatTitle = $Arr[TITLE];
    $argCatID    = $Arr[ID];
//    $query = "SELECT ". $select ." FROM ". $table . " WHERE post_tags = ". $arg;

    $query = "UPDATE {$table} SET cat_title='{$argCatTitle}' WHERE cat_id={$argCatID}";

    $dataR = mysqli_query($db, $query);
    if ($dataR) {

        return true;
    } else {
        //  echo "Result Not Found: " . mysqli_error($db);
        return false;

    }

}
