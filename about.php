<!DOCTYPE html>
<html>

<head>
    <title>About Page</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/style1.css" />
    <link rel="stylesheet" href="./css/styleTest.css" />
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

    <?php include 'includes/navbarLogout.php'; ?>
    <br>
    <section>
        <div class="about__heading">
            <p class="team-members">Team Members</p><br>
        </div>
        <div class="triangle-design" style="padding-left: 220px;">
            <div class="triangle" id="triangle1">
                <span class="tooltiptext">Click to go to Linkedin Profile</span>
                <!-- member 1 -->
                <div class="text-show1">
                    <p class="triangle-text" id="text1">Aditi Isha</p>
                </div>
                <a href="https://www.linkedin.com/in/aditi-isha-3963b7195/" target="_blank">
                    <p class="triangle-text-hide" id="member1"></p>
                </a>
            </div>

            <div class="triangle" id="triangle2">
                <span class="tooltiptext">Click to go to Linkedin Profile</span>
                <!-- member 2 -->
                <div class="text-show2">
                    <p class="triangle-text" id="text1">Aashita Goyal</p>
                </div>
                <div class="triangle-hide">
                    <a href="https://www.linkedin.com/in/aashita-goyal/" target="_blank">
                        <p class="triangle-text-hide" id="member2"></p>
                    </a>
                </div>
            </div>
            <div class="triangle" id="triangle3">
                <span class="tooltiptext">Click to go to Linkedin Profile</span>
                <!-- member 3 -->
                <div class="text-show2">
                    <p class="triangle-text" id="text1">Sakshi Tripathi</p>
                </div>
                <a href="https://www.linkedin.com/in/sakshi-tripathi-a2376a219/" target="_blank">
                    <p class="triangle-text-hide" id="member3"></p>
                </a>

            </div>
            <div class="triangle" id="triangle3">
                <span class="tooltiptext">Click to go to Linkedin Profile</span>
                <!-- member 4 -->
                <div class="text-show2">
                    <p class="triangle-text" id="text1">Aparna Shah</p>
                </div>
                <a href="https://www.linkedin.com/in/aparna-shah-135106236/" target="_blank">
                    <p class="triangle-text-hide" id="member4"></p>
                </a>

            </div>
        </div>
        <br><br><br>
    </section>
    <br><br><br>
    <?php include 'includes/footer.php'; ?>

</body>

</html>