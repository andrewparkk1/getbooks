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
    <link href="assets/css/tailwind.css" rel="stylesheet">

</head>

<body>
    <div id="__next">
        <?php include(ROOT . "app/includes/header.php"); ?>


        <div class="w-5/12 mx-auto">
            <div class="flex flex-row justify-between">
                <h2><?php echo sizeof($alluniqueprofessors) . " Professors"; ?></h2>
                <h2><?php echo sizeof($allcourses) . " Courses"; ?></h2>
                <h2><?php echo sizeof($allitems) . " Books"; ?></h2>
            </div>

        </div>



        <div class="flex flex-row flex-grow text-center justify-center items-center">
            <a href="" class="flex-col h-screen w-full bg-blue-500 m-0 p-0">
                <div class="flex flex-col justify-center h-full">
                    <h1>STUDENT</h1>
                </div>
            </a>
            <a href="" class="flex-col h-screen w-full bg-blue-300 m-0 p-0">
                <div class="flex flex-col justify-center h-full">
                    <h1>PROFESSOR</h1>
                </div>
            </a>
        </div>


       <?php include(ROOT . "app/includes/footer.php"); ?>



    </div>


</body>

</html>