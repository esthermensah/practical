<!-- Esther Dzifa Mensah 
Submission -->

<?php
require __DIR__ ."/operations.php";
echo "<br>";
$userSearch="";

if (isset($_POST["submit"])){
    $userSearch=$_POST["add"];
    add($userSearch, $conn);

}

if (isset ($_POST["Delete"])){
    $theid = $_POST["ID"];
    delete($theid, $conn);

}

$data = listing($conn);

?>

<html>
<body>
    <br>
    <?php foreach($data as $i ) { ?>        
        <form action="result.php" method= "POST" >
        <?php echo $i["Search_term"]; ?>
            <input type="submit" name="Delete"   value="Delete"/>
            <input type="text" name="ID" value="<?php echo $i["Lab_id"] ?>" hidden/>
        </form>
    <?php } ?>

 
   

</body>
</html>


