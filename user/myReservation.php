<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myreservation</title>
    <link rel="stylesheet" href="../src/output.css">
    <link rel="stylesheet" href="../src/input.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include "../components/USERheader.html"
    ?>
    <div class="w-full rounded-md bg-white p-8">
        <div>
            <div class="-mx-4 overflow-x-auto px-4 py-4 sm:-mx-8 sm:px-8">
                <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                    <table class="min-w-full leading-normal text-center">
                        <thead>
                            <tr>
                                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-xs font-semibold uppercase tracking-wider text-gray-600">menu</th>
                                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3  text-xs font-semibold uppercase tracking-wider text-gray-600">Created at</th>
                                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3  text-xs font-semibold uppercase tracking-wider text-gray-600">number of gets</th>
                                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3  text-xs font-semibold uppercase tracking-wider text-gray-600">Status</th>
                                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3  text-xs font-semibold uppercase tracking-wider text-gray-600">edit / cancel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap text-gray-900">menu1</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap text-gray-900">Jan 21, 2020</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm ">
                                    <p class="whitespace-no-wrap text-gray-900 ">43</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                        <span aria-hidden class="absolute inset-0 rounded-full bg-green-200 opacity-50"></span>
                                        <span class="relative">accepted</span>
                                    </span>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 cancel">cancel</button>
                                    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 edit">edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap text-gray-900">menu2</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap text-gray-900">Jan 21, 2020</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm ">
                                    <p class="whitespace-no-wrap text-gray-900 ">43</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                        <span aria-hidden class="absolute inset-0 rounded-full bg-yellow-200 opacity-50"></span>
                                        <span class="relative">pending</span>
                                    </span>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 cancel">cancel</button>
                                    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 edit">edit</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap text-gray-900">menu3</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <p class="whitespace-no-wrap text-gray-900">Jan 21, 2020</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm ">
                                    <p class="whitespace-no-wrap text-gray-900 ">43</p>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                        <span aria-hidden class="absolute inset-0 rounded-full bg-red-200 opacity-50"></span>
                                        <span class="relative">rejected</span>
                                    </span>
                                </td>
                                <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 cancel">cancel</button>
                                    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 edit">edit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "../components/footer.html"
    ?>
</body>

</html>