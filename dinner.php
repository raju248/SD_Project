<?php
session_start();

include 'dbConnect.php';

$resultSet = '';


$sql = "select * from recipes where Type = \"Dinner\" order by CreatedDate desc";

$resultSet = mysqli_query($link, $sql);

$rowNum = mysqli_num_rows($resultSet);

mysqli_close($link);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Bootstrap</title>

    <script src="https://kit.fontawesome.com/1c17e31fd4.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="css/style.css" />


    <link rel="stylesheet" media="all" rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />


    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">


</head>

<body class="special-body">

    <section>
        <?php

        include 'header.php';

        ?>

    </section>

    <section class="dinner-content">



        <div class=" layer3 container text-center justify-content-center justify-content-sm-between justify-content-md-between">

            <div class="row text-center justify-content-center justify-content-sm-between justify-content-md-between justify-content-lg-start mb-1 p-3 ">
                <h2 class="display-4 recipe-section-title">Dinner Recipes</h2>
            </div>


            <div class="row">

                <?php

                while ($row = mysqli_fetch_assoc($resultSet)) {
                    ?>
                    <?php
                        include 'card_temp.php';
                        ?>
                <?php
                }
                ?>

            </div>

        </div>





    </section>

    <section>
        <?php

        include 'footer.php';

        ?>

    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"> </script>


    <script>
        $(document).ready(function() {
            // executes when HTML-Document is loaded and DOM is ready
            console.log("document is ready");


            $(".card").hover(
                function() {
                    $(this).addClass('shadow-lg1').css('cursor', 'pointer');
                },
                function() {
                    $(this).removeClass('shadow-lg1');
                }
            );

            // document ready  
        });
    </script>


</body>

</html>