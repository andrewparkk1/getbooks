<?php
include("../..path.php");
include("../controllers/users.php");

?>

<header class="sticky py-6 bg-blue-600 w-full text-white">
    <div class="flex flex-row justify-between w-9/12 mx-auto">
        <a href="index.php" class="text-3xl font-bold hover:text-blue-300">GetBooks</a>

        <?php if(isset($_SESSION['id'])): ?>
                <a href="logout.php" class="text-lg hover:text-blue-300">Logout</a>
        <?php else: ?>
            <a href="login.php " class="text-lg hover:text-blue-300">Log-In</a>
        <?php endif; ?>

        <!-- <?php if(isset($_SESSION['id'])): ?>
            <div class="flex flex-row w-3/12 justify-between">
                <a href="user.php" class="text-lg hover:text-blue-300"><?php echo $_SESSION['username']; ?></a>
                <a href="logout.php" class="text-lg hover:text-blue-300">Logout</a>
            </div>
        <?php else: ?>
            <a href="login.php " class="text-lg hover:text-blue-300">Log-In</a>
        <?php endif; ?> -->

        
    </div>
</header>

