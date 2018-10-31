<?php

function SelectData($Arr, $db)
{


    $select = $Arr[SELECT];
    $table = $Arr[TABLE];
    $arg = $Arr[ARG] ;


//    $query = "SELECT ". $select ." FROM ". $table . " WHERE post_tags = ". $arg;

    $query = "SELECT " . $select . " FROM " . $table . " WHERE post_tags LIKE '%". $arg."%'";

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


function IndexData($Arr, $db)
{


    $select = $Arr[SELECT];
    $table = $Arr[TABLE];



//    $query = "SELECT ". $select ." FROM ". $table . " WHERE post_tags = ". $arg;

    $query = "SELECT " . $select . " FROM " . $table;

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


function CategoryData($Arr, $db)
{


    $select = $Arr[SELECT];
    $table = $Arr[TABLE];



//    $query = "SELECT ". $select ." FROM ". $table . " WHERE post_tags = ". $arg;

    $query = "SELECT " . $select . " FROM " . $table;

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

