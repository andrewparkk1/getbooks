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
</head>

<body>
    <div id="__next">
        <?php include(ROOT . "app/includes/header.php"); ?>


        <div class="flex flex-col flex-grow text-center justify-center items-center">
            <div class="w-7/12">
                <div class="flex flex-row justify-between">
                    <h1>Courses</h1>
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
                    <?php foreach($fullcourses as $course): ?>
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