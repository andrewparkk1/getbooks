<?php
include("../..path.php");
include("../controllers/users.php");

?>

<header class="sticky py-6 bg-gray-200 w-full">
    <div class="flex flex-row justify-between w-9/12 mx-auto">
        <a href="index.php" class="text-xl hover:text-blue-500">GetBooks</a>
        <?php if(isset($_SESSION['id'])): ?>
            <a href="logout.php" class="text-lg hover:text-blue-500">Logout</a>
        <?php else: ?>
            <a href="login.php " class="text-lg hover:text-blue-500">Log-In</a>
        <?php endif; ?>
    </div>
</header>

