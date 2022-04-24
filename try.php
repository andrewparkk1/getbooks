<?php include("path.php");
include("app/controllers/users.php");
$allcourses = selectAllOrdered('courses', 'name', 'ASC'); 
// $allCourseNames = array(); 
// foreach($courses as $cn) {
//     array_push($allCourseNames, $cn['name']);
// }

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetBooks | Student </title>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- <link href="assets/css/tailwind.css" rel="stylesheet"> -->
    <link href="css/style.css" rel="stylesheet">
    <script src="assets/js/scripts.js"></script>
</head>

<body>
    <div id="__next">
        <?php include(ROOT . "app/includes/header.php"); ?>

        <div class="flex flex-col flex-grow text-center justify-around items-center py-16">
            <div class="w-7/12 ">
            <?php $i = 0; ?>

            <div class="py-10">
                    <h1>Courses</h1>
                    <input id="searchBarCourses" onkeyup="searchCourses()" type="text" name="search" placeholder="Search courses...">

                    <div id="course-list" class="grid grid-cols-4">
                        <?php foreach($allcourses as $course): ?>
                            <a class="searchCourses" href=""><?php echo $course['name']; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <h2 class="text-left">My Courses</h2>

                <form action="user.php" method="post" class="p-10 space-y-5" enctype="multipart/form-data">
                    <div class="grid grid-cols-5 gap-10">
                        <?php foreach($mycourses as $c): ?>
                            
                            <!-- list MY courses -->
                            <select class="border-black border-2 p-4" id="mycourses<?php echo $i; ?>" name="mycourses<?php echo $i; ?>">
                                <option value="<?php echo $c['name']; ?>"><?php echo $c['name']; ?></option>
                                <!-- list ALL courses as options -->
                                <?php foreach($allcourses as $thiscourse): ?>
                                    <?php if ($thiscourse['name'] == $c['name']) {
                                        continue;
                                    } else { ?>
                                        <option value="<?php echo $thiscourse['name']; ?>"><?php echo $thiscourse['name']; ?></option>
                                    <?php }; ?>
                                <?php endforeach; ?>
                                <option value=""></option>
                                <?php $i = $i + 1; ?>
                            </select>
                        <?php endforeach; ?>

                        <select class="border-black border-2 p-4" id="mycourses" name="mycourses">
                            <option value=""></option>
                            <!-- list ALL courses as options -->
                            <?php foreach($allcourses as $thiscourse): ?>
                                <option value="<?php echo $thiscourse['name']; ?>"><?php echo $thiscourse['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button class="border-black border-2 p-4 hover:bg-blue-200" type="submit" name="editMyCourses">Edit Courses</button>
                </form>

                <hr>

                <div class="flex flex-row justify-between pt-10 pb-5 align-text-bottom">
                    <h2>Course Info</h2>
                    <?php if($_SESSION['admin'] == 1): ?>
                        <a href="edit.php" class="text-lg hover:text-blue-200">Edit</a>
                    <?php endif; ?>
                </div>
                <table id="allcourses">
                    <tr>
                        <th onclick="sortTable(0)">Course</th>
                        <th onclick="sortTable(1)">Professor</th>
                        <th>Items</th>
                    </tr>
                    <?php foreach($mycourses as $course): ?>
                        <tr>
                            <td><?php echo $course['name']; ?></td>
                            <td><?php echo $course['professor']; ?></td>
                            <?php 
                            $itemsArr = explode(" ", $course['items']);
                            $cnt = count($itemsArr);
                            ?>
                            <td>
                                <?php foreach($itemsArr as $i):?>
                                    <a class="hover:text-blue-800" href="<?php echo $i; ?>"><?php echo $i; ?></a><br>
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