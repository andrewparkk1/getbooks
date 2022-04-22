<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetBooks</title>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
</head>

<body>
    <div id="next">
        <?php include("includes/header.php"); ?>


        <div class="flex flex-col px-12 flex-grow text-center justify-center items-center">
            <div class="text-center mx-auto w-6/12">
                <h1 class=" pb-10 text-2xl">Sign-Up</h1>
                <div class="flex flex-row justify-between">
                    <a href="student.php ">
                        <div style="border-radius: 50%;" class="md:w-24 md:h-24 lg:w-36 lg:h-24 text-center bg-gray-700 flex items-center hover:bg-gray-400">
                            <p class="w-full text-center text-white">Student</p>
                        </div>
                    </a>
                    <a href="professor.php ">
                        <div style="border-radius: 50%;" class="md:w-24 md:h-24 lg:w-36 lg:h-24 text-center bg-gray-700 flex items-center hover:bg-gray-400">
                            <p class="w-full text-center text-white">Professor</p>
                        </div>
                    </a>
                    <a href="school.php ">
                        <div style="border-radius: 50%;" class="md:w-24 md:h-24 lg:w-36 lg:h-24 text-center bg-gray-700 flex items-center hover:bg-gray-400">
                            <p class="w-full text-center text-white">School</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- <div class="flex flex-row items-center ">
                <img src="images/bunch.jpg " class="w-[32rem] h-auto mx-20 ">
                <h1 class="mx-20 text-center text-2xl ">Easy way to get books for school</h1>
            </div> -->
        </div>

       <?php include("includes/footer.php"); ?>



    </div>


</body>

</php>