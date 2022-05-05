

            <?php
            
           
            // 

            //     if($question_result == true){
            //     echo "connection established question id . $_GET[quesid]";
            // }else{
            //     echo "Database connection not established";
            // }

                // $i = 0;if (mysqli_num_rows($question_result) > 0) {
            
                //$row_question = mysqli_fetch_array($question_result);

                if (mysqli_num_rows($question_result) > 0) {
                    // $totalQues = $row['totalques'];
                    // // $quesno = $_GET['qno'];
                    // while($row_question = mysqli_fetch_array($question_result)){
                    
                    echo "<form method='post' action='../QuizCreateAttempt/scripts/submitanswerscript.php?answerquizid=<?php echo repliedquizid=$row_question[quizid];?>&answerquesid=<?php echo repliedquesid=$row_question[quesid];?>&answerquesno=<?php echo repliedqno=$row_question[qno];?>'>";

                // $i = 0;
                // while ($row_question = mysqli_fetch_array($question_result)) {
                // echo "connection established question id . $_GET[quizid]";
                // echo "connection established question id . $_GET[quesid]";
                // echo "connection established question id . $_GET[qno]";
                // $i++;
                // }

                echo "<input type='hidden' name='questionQuizId' value='<?php echo $_GET[quizid];   ?>   ' />";
                echo "<input type='hidden' name='questionQuestionId' value='<?php echo $_GET[quesid];   ?>   ' />";
                echo "<input type='hidden' name='questionQuestionNo' value='<?php echo $_GET[qno];   ?>   ' />";
                
                echo "<div class='quiz-header'>";
                echo "<h2>Q$row_question[qno]. &nbsp;$row_question[ques]</h2>";
                echo "<div class='answer__options'>";
                echo "<div class='option__one__three'>";
                echo "<ul>";
                echo "<li>";
                echo "<div class='d-flex'>";
                echo "<input type='radio' name='answer' id='a' class='answer m-2' value='optionA'>";
                //class='answer m-2';
                echo "<label for='a' id='a_text'>$row_question[a]</label>";
                echo "</div>";
                echo "</li>";
                echo "<li>";
                echo "<div class='d-flex'>";
                echo "<input type='radio' name='answer' id='b' class='answer m-2' value='optionB'>";
                echo "<label for='b' id='b_text'>$row_question[b]</label>";
                echo "</div>";
                echo "</li>";
                echo "</ul>";
                echo "</div>";

                echo "<div class='option__two__four'>";
                echo "<ul>";
                echo "<li>";
                echo "<div class='d-flex'>";
                echo "<input type='radio' name='answer' id='c' class='answer m-2' value='optionC'>";
                echo "<label for='c' id='c_text'>$row_question[c]</label>";
                echo "</div>";
                echo "</li>";
                echo "<li>";
                echo "<div class='d-flex'>";
                echo "<input type='radio' name='answer' id='d' class='answer m-2' value='optionD'>";
                echo "<label for='d' id='d_text'>$row_question[d]</label>";
                echo "</div>";
                echo "</li>";
                echo "</ul>";
                echo "</div>";
                echo "</div>";
                echo "</div>";


                echo "
                           <button type='submit' id='submit' name='submitAnswer'>
                                Submit This Question
                           </button>";

                echo "</form>";
            }
            //  } 
             else {
                echo "No questions available";
            }
            

            ?>


            <?php

            // if (mysqli_num_rows($question_result) > 0) {
            // }
            $totalQues = $row['totalques'];
            $quesno = $_GET['qno'];
            $questionID = $_GET['quesid'];
            $quizID = $_GET['quizid'];

            // while(){
            // }
            // for ($q = 0; $q <= $quesno; $x++) {
            //     echo "The number is: $x <br>";
            //   }

           // take data from table rows - fetch array data and update
        // if($question_result == true){
        
        // }else{
        //     echo "Connection not established with database. question_result query not true";
        // }
            // echo "Total Ques. $totalQues";
            ?>


