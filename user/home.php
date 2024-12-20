<?php
include "../middleware/isUser.php";
include "../config/db.php";
$query = "SELECT * FROM plate , menu  WHERE plate.FK_MENU_ID = menu.menuID;";
$result = $connection->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homePage</title>
    <link rel="stylesheet" href="../src/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../src/input.css">
</head>

<body>
    <?php
    include "../components/USERheader.html"
    ?>
    <section id="hero">
        <div class="h-[40vh] bg-center relative " style="background-image: url('https://images.squarespace-cdn.com/content/v1/538acfa1e4b01f1c805e1329/1613598775068-Z4Y3LKMYU9QOR1ER5XHZ/junzi+family+meal_Photography+by+Mischelle+Moy_s.jpeg?format=2500w');">
            <h1 class="w-1/2 h-1/2 absolute top-6 left-10 text-5xl text-white sfont  "> Reserve your meals at the time you want when ever you want </h1>
        </div>
    </section>
    <h2 class="mx-auto text-center sfont text-3xl mt-4"> Our Menu </h2>
    <section id="menu" class="flex flex-wrap  pt-10 px-16 justify-between">
        <?php
        while ($row = $result->fetch_assoc()) {
            echo  "
            <div class='max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 pb-5'>
            <img class='rounded-t-lg' src='../images/chef-cook-high-resolution-logo.png' alt='meal image' />
            <div class='p-5'>
                <h5 class='mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white ' id='mealTitle'>Noteworthy technology acquisitions 2021</h5>
                <p class='mb-3 font-normal text-gray-700 dark:text-gray-400' id='mealDes'>Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <button class='inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 showmore' data-id='data'>
                    Read more
                    <svg class='rtl:rotate-180 w-3.5 h-3.5 ms-2' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 14 10'>
                        <path stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M1 5h12m0 0L9 1m4 4L9 9' />
                    </svg>
                </button>
            </div>
        </div>
            ";
        }
        ?>
    </section>
    <div id="mealInfo">
    </div>
    <?php
    include "../components/footer.html"
    ?>
    <script src="../js/script.js"></script>
</body>

</html>