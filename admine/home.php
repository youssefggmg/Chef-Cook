<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admineHome</title>
    <link rel="stylesheet" href="../src/output.css">
</head>

<body>
    <?php
    include "../components/admineHeader.html"
    ?>
    <div class="container mx-auto p-6">
        <!-- Title -->
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Dashboard Overview</h1>
    
        <!-- Grid of Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
                <h2 class="text-xl font-semibold text-gray-700 mb-2">Total Users</h2>
                <p class="text-3xl font-bold text-blue-600">10,492</p>
                <p class="text-sm text-gray-500 mt-2">↑ 12% from last month</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
                <h2 class="text-xl font-semibold text-gray-700 mb-2">Revenue</h2>
                <p class="text-3xl font-bold text-green-600">$84,320</p>
                <p class="text-sm text-gray-500 mt-2">↑ 8% from last month</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
                <h2 class="text-xl font-semibold text-gray-700 mb-2">Active Projects</h2>
                <p class="text-3xl font-bold text-purple-600">23</p>
                <p class="text-sm text-gray-500 mt-2">↓ 2 from last month</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
                <h2 class="text-xl font-semibold text-gray-700 mb-2">Tasks Completed</h2>
                <p class="text-3xl font-bold text-orange-600">1,342</p>
                <p class="text-sm text-gray-500 mt-2">↑ 18% from last month</p>
            </div>
        </div>
    </div>
</body>
</html>