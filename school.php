<?php include("path.php");
include("app/controllers/users.php");
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetBooks | Student </title>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="assets/css/tailwind.css" rel="stylesheet">
    <script src="assets/js/scripts.js"></script>

</head>

<body>
    <div id="__next">
        <?php include(ROOT . "app/includes/header.php"); ?>
        <div class="flex flex-row flex-grow text-center justify-center items-center">
            <div class="flex flex-col mx-40 px-12 py-9 flex-grow justify-center">

                <div class="py-10">
                    <h1 class="font-bold text-3xl">Courses</h1>
                    <input id="searchBarCourses" onkeyup="searchCourses()" type="text" name="search" placeholder="Search courses...">

                    <div id="course-list" class="grid grid-cols-4">
                        <?php foreach($allcourses as $course): ?>
                            <a class="searchCourses" href=""><?php echo $course['name']; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="py-10">
                    <h1 class="font-bold text-3xl">Professors</h1>
                    <input id="searchBarProfessor" onkeyup="searchProfessors()" type="text" name="search" placeholder="Search professors...">

                    <div class="grid grid-cols-4">
                        <?php foreach($alluniqueprofessors as $prof): ?>
                            <a class="searchProfessors" href=""><?php echo $prof; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>


                <table id="allcourses">
                    <tr>
                        <th onclick="sortTable(0)">Course</th>
                        <th onclick="sortTable(1)">Professor</th>
                        <th>Items</th>
                    </tr>
                    <?php foreach($allcourses as $course): ?>
                        <tr>
                            <td><?php echo $course['name']; ?></td>
                            <td><?php echo $course['professor']; ?></td>
                            <?php 
                            $itemsArr = explode(" ", $course['items']);
                            $cnt = count($itemsArr);
                            ?>
                            <td>
                                <?php foreach($itemsArr as $i):?>
                                    <a href="<?php echo $i; ?>"><?php echo $i; ?></a><br>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>



        <?php include(ROOT . "app/includes/footer.php"); ?>
    </div>

</body>

</html>