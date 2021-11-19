<!-- Esther Dzifa Mensah 
Submission -->

<?php
require __DIR__ ."/operations.php";

$userSearch= "";
$theID= "";
if (isset($_POST["Edit"])){
    $userSearch=$_POST["search_term"];
   // update_content($userSearch, $dataID, $conn);
   $theID=$_POST["ID"];
}

if (isset($_POST["update"])){
    $userSearch=$_POST["theInput"];
    $theID=$_POST["theID"];
   update_content($userSearch, $theID, $conn);
   // Updates and sends user back to form 
   header("Location: my_form.php"); 
}
?>

<html>
    <body>
        <form action="edit.php" method= "POST">
            <input type="text" name ="theInput" value= "<?php echo $userSearch ?>">
            <input type="text" name = "theID" value= "<?php echo $theID ?>" hidden>
            <input type="submit" name= "update" value= "update2">
        </form>
    </body>
</html>

