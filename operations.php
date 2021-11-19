<?php

require __DIR__ ."/database_connection_test.php";

function add($word_to_add, $conn) {
      $sql="INSERT INTO `practical_lab_table` (`Search_term`) VALUES (";
      $sql2="'$word_to_add')";
      $sql= $sql.$sql2;
      //echo  , $sql;
      $q=mysqli_query($conn,$sql);
      if($q)
      echo "success: word added ";
      else
      echo "error".mysqli_error($conn); 

}


function delete($dataID, $conn){

      //n I want to create a button and delete bassed on that button 
      $sql2="delete from `practical_lab_table` where `Lab_id`='$dataID'";
      //echo $sql2;
      $q=mysqli_query($conn,$sql2);
      if($q)
      echo "success: Word deleted";
      else
      echo "error";
}
function listing($conn){
      $q=mysqli_query($conn,"select * from `practical_lab_table`");
      $data=mysqli_fetch_all($q,MYSQLI_ASSOC);
      return $data;

}

function selection($theword, $conn){
      $theword =trim($theword);
      $sql2 = mysqli_query($conn, "SELECT * from `practical_lab_table` where `Search_term` LIKE '%$theword%'");
      $q=mysqli_fetch_all($sql2,MYSQLI_ASSOC);
      echo mysqli_error($conn); 
      
      return $q; 
}

function update_content($theword, $dataID, $conn){
  
   $sql="UPDATE `practical_lab_table` SET 
      `Search_term`='$theword'";                      
   
    $sql2= " where `Lab_id`='$dataID'"; 
       $sql=$sql.$sql2;    
       //echo $sql;
    $q=mysqli_query($conn, $sql);
    if($q)
    echo "success";
    else
    echo "error".mysqli_error($conn);


}

?>