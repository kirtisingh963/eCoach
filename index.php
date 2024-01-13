<?php include_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Coach | An Application for Coaching</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include_once "include/header.php"; ?>

    <!-- container -->
    <div class="container w-10/12 mx-auto pt-10">
        <div class="flex items-center gap-8">
            <div class="flex-1">
                <h1 class="text-5xl text-green-700 font-bold">Welcome in E-Coach</h1>
                <p class="text-gray-600 mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, nam non laudantium delectus nesciunt laboriosam neque eligendi alias enim eaque ex quibusdam incidunt cupiditate laborum! Iusto, quisquam molestias accusantium aliquid recusandae ut consequuntur labore culpa distinctio. Iure optio rem dicta veniam corporis odio. Deleniti fuga quibusdam eaque ratione reiciendis eum.</p>
                <div class="float-right mt-4">
                    <a href="" class="py-1 px-2 bg-gradient-to-b from-green-500 to-green-800 text-white hover:bg-green-900 rounded font-semibold">Start Learn</a>
                </div>
            </div>
            <div class="flex justify-end ml-10">
                <img src="images/banner.png" alt="banner" width="400px">
            </div>
        </div>
        <div class="flex">
            <div class="">
                <h2 class="text-lg font-semibold mr-4">Categories</h2>
            </div>
            <div class="w-full">
                <div class="flex gap-3 scroll">
                    <?php
                    $callingData = callingData("categories");
                    foreach($callingData as $value):
                    ?>
                    <a href="">
                    <h2 class="py-1 px-2 border rounded-md bg-gradient-to-b from-purple-300 via-teal-100 to-purple-400"><?= $value['cat_title'];?></h2></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <hr class="mt-2">
        <div class="w-full mt-5">
            <h2 class="text-xl font-bold mr-4">All Courses</h2>
        </div>
        <div class="grid grid-cols-4 gap-7 mt-3 py-5">
            <?php 
            $callingData = callingData("courses");
            foreach($callingData as $value):
            ?>
            <div class="w-full">
                <div class="card shadow-md">
                    <img src="admin/images/courses/<?= $value['image'];?>" alt="">
                    <div class="card-body p-3">
                        <h5 class="text-lg font-semibold"><?= $value['title'];?></h5>
                        <p class="text-sm text-gray-600"><?= $value['description'];?></p>
                        <p class="text-sm"><span class="font-semibold">Instructor:</span> <?= $value['instructor'];?></p>
                        <span><strong>Price:</strong> Rs.<?= $value['discount_price'];?> <del class="text-sm text-gray-700"><?= $value['price'];?></del></span>
                        <div class="mt-3">
                            <a href="" class="py-1 px-2 bg-gradient-to-b from-blue-400  to-blue-900 rounded text-white">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>

</body>

</html>