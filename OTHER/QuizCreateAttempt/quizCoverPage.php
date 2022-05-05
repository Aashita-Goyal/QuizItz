<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="./css/styleTest.css">
    <link rel="stylesheet" href="../../css/styleQuizCoverPage.css" />
    <style type="text/css">
        .bs-example {
            margin: 20px;
        }
    </style>
    

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      
     <!-- FontAwesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
       integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
       crossorigin="anonymous" referrerpolicy="no-referrer" />
   
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
       integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

   </head>
<body>

<?php include '../../includes/navbarLogout.php'; ?>

<div class="bg">
    <div class="heading">
        <div class="heading-text">
            <h3 style="color: white;">Learn It. Own It. QuizItz.</h3>
        </div>
    </div>
    <div class="testbox">
        <div class="box1">
            <h5>Create Quiz</h5>
            <p>Create a question or an entire quiz in minutes and help yourself and others.</p>
            <a href=""><h6 style="padding-bottom: 20px;">Click to create quiz</h6></a>
        </div>
        <div class="box2">
            <h5>Attempt Quiz</h5>
            <p>Ready to start getting better grades? Then test and improve yourself.</p>
            <a href=""><h6>Click to attempt quiz</h6></a>
        </div>
        <div class="box3">
            <h5>View Topic</h5>
            <p>Find, study or create sets anywhere life takes you with the mobile app.</p>
            <a href=""><h6>Go to topics</h6></a>
        </div>
    </div>
</div>

<section>
<br /><br />
  <div class="all_quiz_list" id="allQuiz" >
      <h2 style="text-align: center;">List of All Quizzes Available</h2>
      <!-- <p>Calling list of all quizzes here</p> -->
      <div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">All Quizzes</h2>
                    </div>
                    <?php
                    require '../QuizCreateAttempt/db/dbconn.php';
                    $quiz_result = mysqli_query($con, "SELECT * FROM quiz3");
                    ?>
                    <?php
                    if (mysqli_num_rows($quiz_result) > 0) {
                    ?>
                        <table class='table table-bordered table-striped'>
                            <tr>
                                <td>Quiz Name</td>
                                <td class='text-center'>Quiz Branch</td>
                                <td>Quiz Topic</td>
                                <td>Action 1 - Start Quiz</td>
                                <td>Action 2 - Other quizzes for this topic and branch</td>
                            </tr>
                            <?php
                            $i = 0;
                            while ($row = mysqli_fetch_array($quiz_result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row["quizname"]; ?></td>
                                    <td><?php echo $row["branch"]; ?></td>
                                    <td><?php echo $row["quiztopic"]; ?></td>
                                    <td><a href="./attemptQuiz.php?quizid=<?php echo $row["quizid"]; ?>">Start Quiz</a></td>
                                    <td><a href="./topicAllQuizInfo.php?branch=<?php echo $row["branch"]; ?>">Other quizzes for this topic and branch</a></td>
                                </tr>
                            <?php
                                $i++;
                            }
                            ?>
                        </table>
                    <?php
                    } else {
                        echo "No result found";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

<?php include '../../includes/footer.php'; ?>

</body>
</html>

