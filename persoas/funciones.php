<?php
function db_query($query) {
    $connection = mysqli_connect("localhost","root","","obra");
    $result = mysqli_query($connection,$query);

    return $result;
}
 
function delete($persoas,$field_id,$id){

    $sql = "delete from ".$persoas." where ".$field_id."=".$id."";
    
    return db_query($sql);
}
?>