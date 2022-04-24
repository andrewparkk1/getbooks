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
    
</head>

<body>
    <div id="__next">
        <?php include(ROOT . "app/includes/header.php"); ?>

        <div class="flex flex-col flex-grow text-center justify-around items-center py-12">
            <div class="w-7/12 ">
                <h1>EDIT</h1>
                <hr>            

                <div class="py-12">
                    <h2 class="text-left pb-3">Course Info</h2>

            
                    <table>
                        <tr>
                            <th>Course Name</th>
                            <th>Professor</th>
                            <th>Items</th>
                            <th>Submit</th>
                            <th>Delete</th>
                        </tr>
                        <?php foreach($allcourses as $course): ?>
                            <tr>
                                <form action="edit.php" method="post" class="p-5 space-y-5" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $course['id']; ?>">
                                    <td><?php echo $course['name']; ?></td>
                                    <td><?php echo $course['professor']; ?></td>
                                    <?php 
                                    $itemsArr = explode(" ", $course['items']);
                                    $cnt = count($itemsArr);
                                    $inputCnt = 0; 
                                    ?>
                                    <td>
                                        <?php foreach($itemsArr as $j):?>
                                            <input class="border-black border-2 p-3 my-3 w-full" type="text" value="<?php echo $j; ?>" name="input<?php echo $inputCnt; ?>">
                                            <?php $inputCnt = $inputCnt + 1; ?>
                                        <?php endforeach; ?>
                                    </td>
                                    <td><button class="hover:text-blue-800" type="submit" name="editItems">Change</button></td>
                                    <td><button class="hover:text-blue-800" type="submit" name="deleteItem">Delete</button></td>
                                </form>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                                <form action="edit.php" method="post">
                                    <td>
                                        <input type="text" name="name">
                                    </td>
                                    <td>
                                        <input type="text" name="professor">
                                    </td>
                                    <td>
                                        <input type="text" name="items">
                                    </td>
                                    <td><button class="hover:text-blue-800" type="submit" name="addNewCourse">Add</button></td>
                                    <td></td>
                                </form>
                            </tr>
                    </table>
                </div>

            </div>
        </div>


        <?php include(ROOT . "app/includes/footer.php"); ?>


    </div>


</body>

</html>