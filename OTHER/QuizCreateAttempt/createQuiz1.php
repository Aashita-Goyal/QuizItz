

      <div class="question__details">
        <p id="quesno" class="text-center fs-2">Enter Quiz details</p>
        <div class="question__details__info">

        <?php
      
      if($_SESSION["counter"] < $_SESSION["totalQues"]){

      
        // <!-- <form method='POST' action='../QuizCreateAttempt/createQuiz.php#enterNewQuestion'> -->
          echo "<div class='quiz__button'>";
            echo "<div class='quiz__start'>";
            echo "<br  id='enterNewQuestion' >";
            echo "<input type='hidden' name='counter' value='<?php echo $_SESSION[counter]; ?>' />";
            echo "<a href='#enterNewQuestion'><input type='submit' name='button' class='btn btn-dark ms-5' value='Enter New Question'/></a>";
            echo " <br/>";
            echo "<br/>";
            echo " <br/>";
            echo "</div>";
            echo "</div>";

          if (mysqli_num_rows($result) > 0) {
                    
            $countid = 0;
            
            while ($row = mysqli_fetch_array($result)) {
              
              ++$countid;
            
            }

          
            echo "<strong><p class='text-start'>Quiz ID : </strong><?php echo $countid; ?></p>";
      // <!-- </form> -->

    } else {
        echo "Quiz ID not found";
    } 

      }else{ 
        // <!-- <form method='POST' action='../QuizCreateAttempt/createQuiz.php#createquiz'> -->
        echo "<div class='quiz__button'>";
        echo "<div class='quiz__start'>";
        echo "<br  id='enterNewQuestion'>";
        echo "<input type='hidden' name='counter' value='<?php echo $_SESSION[counter]; ?>' />";
        echo "<input type='submit' name='reset' class='btn btn-dark ms-5' value='All Questions Succesfully Uploaded'/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "</div>";
        echo "</div>";

        
          if (mysqli_num_rows($result) > 0) {
                    
            $countid = 0;
            
            while ($row = mysqli_fetch_array($result)) {
              
              ++$countid;
            
            }
            echo "<strong><p class='text-start'>Quiz ID : </strong><?php echo $countid; ?></p>";
        

    // } else {
    //     echo "Quiz ID not found";
    // }

        // echo "</form>";

      }else {
        echo "Quiz ID not found";
    } 

    
    $_SESSION['countid'] = $countid;
  }
    
  ?>
      
     



<!--<div class="create__quiz__container">
  <div class="create__quiz__left">Hello left</div>
  <div class="create__quiz__right">Hello right</div>
</div>-->

 <!--<textarea
                rows="6"
                id="questionDescription"
                placeholder="enter question here"
              ></textarea>-->







