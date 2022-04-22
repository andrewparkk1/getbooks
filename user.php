<?php include("path.php");
include("app/controllers/users.php");
$allcourses = selectAllOrdered('courses', 'name'); 
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
    <link href="assets/css/tailwind.css" rel="stylesheet">
</head>

<body>
    <div id="__next">
        <?php include(ROOT . "app/includes/header.php"); ?>

        <div class="flex flex-col flex-grow text-center justify-around items-center">
            <div class="w-7/12 ">
            <?php $i = 0; ?>

                <form action="user.php" method="post" class="p-5 space-y-5" enctype="multipart/form-data">
                    <div class="grid grid-cols-5 py-32">
                        <?php foreach($mycourses as $c): ?>
                            
                            <!-- list MY courses -->
                            <select id="mycourses<?php echo $i; ?>" name="mycourses<?php echo $i; ?>">
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

                        <select id="mycourses" name="mycourses">
                            <option value=""></option>
                            <!-- list ALL courses as options -->
                            <?php foreach($allcourses as $thiscourse): ?>
                                <option value="<?php echo $thiscourse['name']; ?>"><?php echo $thiscourse['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <button type="submit" name="editMyCourses">Edit Courses</button>
                    </div>
                </form>

                

                <div class="flex flex-row justify-between">
                    <h1>Course Info</h1>
                    <?php if($_SESSION['admin'] == 1): ?>
                        <a href="edit.php">Edit</a>
                    <?php endif; ?>
                </div>
                <table>
                    <tr>
                        <th>Course Name</th>
                        <th>Professor</th>
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