<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetBooks | School </title>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
</head>

<body>
    <div id="next">
        <?php include("includes/header.php"); ?>

        <div class="flex flex-col mx-40 px-12 py-9 flex-grow justify-center">
            <h1 class="font-bold text-3xl">School</h1><br>


            <!-- <div class="flex flex-row justify-between">
                <h1 class="font-bold text-3xl">Courses</h1>
                <div>
                    <input type="text" placeholder="Search.."><br>
                </div>
            </div> -->

            <div class="py-10">
                <h1 class="font-bold text-3xl">Courses</h1>
                <input type="text" placeholder="Search.."><br>

                <div class="grid grid-cols-4">
                    <a href="">English</a>
                    <a href="">Computer Science</a>
                    <a href="">Biology</a>
                    <a href="">Neuroscience</a>
                    <a href="">Economics</a>
                    <a href="">English</a>
                    <a href="">Computer Science</a>
                    <a href="">Biology</a>
                    <a href="">Neuroscience</a>
                    <a href="">Economics</a>
                </div>

            </div>
            
            <div class="py-10">
                <h1 class="font-bold text-3xl">Professors</h1>
                <input type="text" placeholder="Search.."><br>
                <div class="grid grid-cols-4">
                    <a href="">Mustafa</a>
                    <a href="">Hall</a>
                    <a href="">Karen</a>
                    <a href="">Bob</a>
                    <a href="">Biolsi</a>
                    <a href="">Xing</a>
                    <a href="">Wang</a>
                </div>
            </div>
            
            <table>
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Berglunds snabbköp</td>
                    <td>Christina Berglund</td>
                    <td>Sweden</td>
                </tr>
                <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>Ernst Handel</td>
                    <td>Roland Mendel</td>
                    <td>Austria</td>
                </tr>
                <tr>
                    <td>Island Trading</td>
                    <td>Helen Bennett</td>
                    <td>UK</td>
                </tr>
                </table>
        </div>


        <?php include("includes/footer.php"); ?>


    </div>


</body>

</html>