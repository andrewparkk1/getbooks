<?php
include("../..path.php");
include("../controllers/users.php");

?>

<header class="sticky py-6 bg-gray-200 w-full">
    <div class="flex flex-row justify-between w-9/12 mx-auto">
        <a href="index.php" class="text-xl hover:text-blue-500">GetBooks</a>
        <div class="flex flex-row w-3/12 justify-between">

            <?php if(isset($_SESSION['id'])): ?>
                <a href="user.php" class="text-lg hover:text-blue-500"><?php echo $_SESSION['username']; ?></a>
                <a href="school.php" class="text-lg hover:text-blue-500">School</a>
                <a href="logout.php" class="text-lg hover:text-blue-500">Logout</a>
            <?php else: ?>
                <a href="school.php" class="text-lg hover:text-blue-500">School</a>
                <a href="login.php " class="text-lg hover:text-blue-500">Log-In</a>
            <?php endif; ?>

        </div>
        
    </div>
</header>

