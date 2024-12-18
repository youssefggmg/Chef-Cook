<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve Page</title>
    <link rel="stylesheet" href="../src/output.css">
    <link rel="stylesheet" href="../src/input.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include "../components/USERheader.html"
    ?>
    <div class="relative flex items-top justify-center min-h-[50vh] bg-white dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
                        <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight roboto">
                            Thank you for reserving this menu
                        </h1>
                        <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-4">
                            we need you to fill this form to complete your reservation
                        </p>

                        <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                            <!-- Address information here -->
                        </div>


                    </div>

                    <form action="" method="post" class="p-6 flex flex-col justify-center">

                        <div class="flex flex-col">
                            <input type="number" name="getNumber" id="name" placeholder="number of gestes" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>

                        <div class="flex flex-col mt-2">
                            <input type="date" name="date" id="" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>
                        <button type="submit" class="md:w-32 bg-black  text-white font-bold py-3 px-6 rounded-lg mt-3 hover:bg-indigo-500 transition ease-in-out duration-300">
                            Submit
                        </button>
                        <!-- <div id="error" class=" text-sm text-red-600 bg-red-50 border border-red-200 rounded-lg p-3 mt-2">
                            <p>An error occurred. Please try again.</p>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "../components/footer.html"
    ?>

</body>

</html>