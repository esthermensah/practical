<!-- Esther Dzifa Mensah 
Submission -->
<?php
    // start a session
      require __DIR__ ."/operations.php";
      
      session_start();
      $message = null;
      $input = null;  
      $select_word= [];

      if(isset($_POST['SubmitButton'])){ //check if form was submitted
        $input = $_POST['inputText']; //get input text
        //$message = "You searched: ".$input;  
        $_SESSION['searches'] = $input; // initialize session variables
        $select_word = selection($input, $conn);

      }    
?>

<html>
<body> 
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php echo '<br>' ?>

    <?php foreach($select_word as $q ) { ?> 
 
      <form action="edit.php" method="POST" > 
        <?php echo $q["Search_term"]; ?> 
        <input type="text" name = "ID" value="<?php echo $q["Lab_id"];?>" hidden>
        <input type="text" name="search_term" value="<?php echo $q["Search_term"]; ?>" hidden />  
        <input type="submit" name= "Edit" value ="Edit">
      </form>      
    <?php } ?>

      <!-- This form takes input and shows it on the same page -->
    <h1>Form 1</h1> 
    <h5>This form tests the use of sessions</h5>
    <br>  
    <form action="my_form.php" method="post">
          <?php echo $message; ?>
          <br>
          <input type="text" name="inputText" value = "<?php echo $input ?> " >
          <input type="submit" name="SubmitButton" value= "search">
    </form> 
    
  
    <!-- remove session variables and destroy the session -->
    <?php 
    session_unset();
    session_destroy();
    ?>


              
    <?php 
    $keyword = null;
    if(isset($_POST['search'])){
        $keyword = $_POST['search'];
    }

    ?>
    <h1>Form 2</h1>
      <h5>This form willl display output on another page</h5>
        <!-- This form takes input and shows it on another page -->
        <label for="text">Add</label>

      <!-- <form action="result.php" method="post">
          <input type="text" name="search">
          <input type="submit" name="submit"   value="Add"/>
      </form> -->


      <form action="" method="post">
          <input type="text" name="add">
          <input type="submit" name="submit"   value="Add" id= "addButton" onclick="ajaxAdd" />
      </form>
    <?php echo $keyword ?>

    <script>
      function ajaxAdd(){
        const addButton = document.getElementById("addButton");
        alert();

      }
    </script>

</body>
</html>