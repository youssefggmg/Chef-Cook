<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include "../components/admineHeader.html";
    ?>
    <div class="grid md:grid-cols-3 items-start gap-4 max-md:gap-12 max-w-6xl mx-auto py-6 bg-white font-[sans-serif]">
        <div class="px-4">
            <h2 class="text-gray-800 text-2xl font-semibold">Hello Chef</h2>

            <div class="space-y-8 mt-8">
                <div class="flex">
                    <div class="ml-4">
                        <h4 class="text-gray-800 text-base font-semibold">adding a new plate </h4>
                    </div>
                </div>

            </div>
        </div>

        <div class="bg-gray-800 rounded-3xl md:col-span-2 p-8">
            <h2 class="text-2xl text-yellow-300 font-semibold">Product or Service Inquiry</h2>
            <p class="text-sm text-gray-300 mt-4 leading-relaxed">you have to add at least one plate and max of 3 plates</p>

            <form>
                <div class="space-y-4 mt-8">
                    <input type="text" placeholder="menu name"
                        name="menu_name"
                        class="px-2 py-3 bg-transparent text-gray-200 font-medium w-full text-sm border-b border-gray-400 focus:border-yellow-300 outline-none" />
                    <input type="file" placeholder="menu image" name="menu_image"
                        class="px-2 py-3 bg-transparent text-gray-200 font-medium w-full text-sm border-b border-gray-400 focus:border-yellow-300 outline-none" />
                        <button class="rounded-full border-red-600 border-4 w-9">
                        <i class="fa-solid fa-plus" style="color: #df2a2a;"></i>
                        </button>
                    <div id="new_inputs">
                        <input type="text" placeholder="plate name" name="plate_name" 
                        class="px-2 py-3 bg-transparent text-gray-200 font-medium w-full text-sm border-b border-gray-400 focus:border-yellow-300 outline-none"/>
                        <input type="text" placeholder="plate descreption" name="plate_descreption"
                        class="px-2 py-3 bg-transparent text-gray-200 font-medium w-full text-sm border-b border-gray-400 focus:border-yellow-300 outline-none"/>
                    </div>
                </div>


                <button type="button"
                    class="mt-8 flex items-center justify-center text-sm w-full rounded-md px-4 py-2.5 text-gray-800 bg-yellow-400 hover:bg-yellow-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='currentColor' class="mr-3"
                        viewBox="0 0 548.244 548.244">
                        <path fill-rule="evenodd"
                            d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z"
                            clip-rule="evenodd" data-original="#000000" />
                    </svg>
                    Send Message
                </button>
            </form>
        </div>
    </div>
    <?php
    include "../components/footer.html";
    ?>
</body>

</html>