<?php include("path.php");
include("app/controllers/users.php");
?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetBooks</title>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- <link href="assets/css/tailwind.css" rel="stylesheet"> -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div id="__next">
        <?php include(ROOT . "app/includes/header.php"); ?>

        <div class="flex flex-col flex-grow text-center">
            
        <div class="flex flex-row flex-grow text-white">
            <div class="flex flex-col w-1/2 justify-around">
                <a href="school.php" class="flex flex-col justify-center grow flex-grow hover:opacity-50 bg-cover" style="background-image: url(assets/images/school.jpg)">
                    <h1>SCHOOL</h1>
                    <h3>Learn more about the courses and professors in your school</h3>
                </a>
                <hr>
                <a href="user.php" class="flex flex-col justify-center grow flex-grow hover:opacity-50 bg-cover" style="background-image: url(assets/images/library.jpg)">
                    <h1>ME</h1>
                    <h3>Learn more about your own courses and books</h3>
                </a>           
             </div>

            <div class="flex flex-col w-1/2 justify-around bg-cover" style="background-image: url(assets/images/bunch.jpeg)">
                <div class="flex flex-col justify-center grow flex-grow items-center gap-4 text-white drop-shadow-2xl">
                    <h1>STATISTICS</h1>
                    <h2><?php echo sizeof($alluniqueprofessors) . " Professors"; ?></h2>
                    <h2><?php echo sizeof($allcourses) . " Courses"; ?></h2>
                    <h2><?php echo sizeof($allitems) . " Books"; ?></h2>
                </div>
            </div>
        </div>

        </div> 


       <?php include(ROOT . "app/includes/footer.php"); ?>



    </div>


</body>

</html>