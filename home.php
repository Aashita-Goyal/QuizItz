<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <?php include 'includes/head.php'; ?>
</head>

<body>
    <?php include 'includes/navbarLogout.php'; ?>

    <!--section 1-->
    <div class="home-intro">
        <h1>QUIZITZ</h1>
        <p>An online learning website</p>
        <button>Explore</button>
    </div>

    <!--section 2-->
    <marquee behavior="slide" scrollamount="45">

        <div class="div-two">

            <div class="triangle-design">
                <!--<div class="triangle" id="triangle1">1 Never Stop Learning - study material page</div>
       <div class="triangle" id="triangle2">2 Analyse to Memorize - quiz page</div>
       <div class="triangle" id="triangle3">3 Interact and Retain - flashcard page</div>-->

                <img src="./assets/Images/5437683.jpg" alt="study image">
            </div>

            <div class="motto">
                <p class="div-two-text">Learn. Analyse. Interact.</p>
                <p class="div-two-subtext">Every beginner possesses a great potential
                    <br>
                    to be an expert in his or her chosen field
                </p>
            </div>
        </div>

    </marquee>


    <!-- <marquee 
behavior="alternate">
This is an Example Marquee (Behavior : Alternate)
</marquee> -->
    <!-- <div class="div-two-middle"></div> -->
    <!-- <div class="triangle1"></div>
       <div class="triangle2"></div>
       <div class="triangle3"></div>
    </div>-->
    <!-- <div class="motto" data-position="right">
       <p class="div-two-text">Learn. Analyse. Interact.</p>
    </div> -->
    <!--  <a href='https://www.freepik.com/vectors/computer-test'>Computer test vector created by macrovector - www.freepik.com</a> 
    </div>-->


    <!--section 3-->
    <div class="bg1">
        <div class="row"></div>
        <section class="course">
            <h1>What we offer</h1>
            <p style="color: white;">There is no future, no past. There is only the present.</p>
            <br>
            <div class="row">
                <div class="course-col-2">
                    <h3>Attempt Quiz</h3>
                    <p>Attempt quizzez with new expert explanations and our ever-effective flashcards, get a suite of
                        science-backed study tools at your fingertips.
                    </p>
                </div>
                <div class="course-col-2">
                    <h3>Read Study materials</h3>
                    <p>Effective study material to familiarise students with their course unit related to every
                        branches.
                    </p>
                </div>
                <div class="course-col-2">
                    <h4>Placement Preparations</h4>
                    <p>As placement seasons are coming so provided with placement materials with respect to every
                        branches.
                    </p>
                </div>
                <div class="course-col-2">
                    <h3>Flashcards</h3>
                    <p>Mixed with smart study tools, our flashcards have been helping students ace their toughest exams.
                    </p>
                </div>
            </div>
        </section>
    </div>

    <!--section 4-->
    <div class="container-fluid1">
        <section class="offer">
            <h1>Other features</h1>
            <p>Life is not a problem to be solved. Just remember to have something that keeps you busy doing what you
                love while
                being surrounded by the people who love you.</p>
            <br>
            <div class="row">
                <div class="offer-col-2">
                    <!-- <img
                         src="https://th.bing.com/th/id/R.16554dd82a1e89a03cf7e9d64be84339?rik=wGkWcGZttC%2fnEA&riu=http%3a%2f%2fwww.allbluevr.com%2fwp-content%2fuploads%2f2017%2f06%2fAll-Blue-Quiz.jpg&ehk=L7V9TI%2b2Z4kbGC1kO2jIK7%2ftHwfuwVULeVsx3PHOwuA%3d&risl=&pid=ImgRaw&r=0"
                         > -->
                    <img src="./assets/Images/quizcloud.jpg" alt="quiz image 1 cloud">
                    <div class="layer">
                        <h4>Create Quiz</h4>
                    </div>
                </div>
                <div class="offer-col-2">
                    <img src="https://th.bing.com/th/id/OIP.NZCjTGctXCOE9qVNszma4gHaE8?pid=ImgDet&rs=1">
                    <div class="layer">
                        <h4>Upload Study materials</h4>
                    </div>
                </div>
                <div class="offer-col-2">
                    <img src="https://www.eschoolnews.com/files/2017/08/gaming-600x400.jpg">
                    <div class="layer">
                        <h4>Interactive Learning</h4>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!--section 5-->
    <div class="bg2">
        <div class="row"></div>
        <section class="cta">
            <h1>Enroll for our various online courses <br> anywhere from the world</h1>
            <a href="" class="hero-btn">Contact us</a>
        </section>
        <div class="row"></div>
    </div>

    <div>
        <br>
        <br>
        <br>
    </div>

    <?php include 'includes/footer.php'; ?>
    
</body>

</html>