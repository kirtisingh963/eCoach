<?php include_once "config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - E-Coach | An Application for Coaching</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <?php include_once "include/header.php"; ?>

    <!-- form container -->
    <div class="container p-10">
        <div class="flex justify-center items-center">
            <form action="" method="post" class="w-96 p-5 shadow-lg ">
            <h2 class="text-center text-xl font-bold mb-3">Apply for Admission</h2>
                <div class="mb-3">
                    <label for="name" class="font-semibold capitalize">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" class="w-full p-2 border rounded">
                </div>
                <div class="mb-3">
                    <label for="gender" class="font-semibold capitalize">Gender</label>
                    <select name="gender" id="gender" class="w-full p-2 border rounded">
                        <option value="">Select gender</option>
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                        <option value="o">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="contact" class="font-semibold capitalize">Contact</label>
                    <input type="tel" name="contact" id="contact" placeholder="Enter contact no" class="w-full p-2 border rounded">
                </div>
                <div class="mb-3">
                    <label for="email" class="font-semibold capitalize">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter your email" class="w-full p-2 border rounded">
                </div>
                <div class="mb-3">
                    <label for="password" class="font-semibold capitalize">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" class="w-full p-2 border rounded">
                </div>
                <div class="mb-3">
                    <label for="address" class="font-semibold capitalize">Address</label>
                    <textarea name="address" id="address" placeholder="Enter address here..." class="w-full p-2 border rounded"></textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" name="register" value="Sign up" class="w-full p-2 bg-blue-700 text-white text-lg font-semibold rounded cursor-pointer">
                </div>

                <div class="text-center">
                    <p class="mb-4">or sign up with</p>
                    <div class="flex justify-center gap-4">
                        <a href="#" class="text-xl py-1 px-2 bg-stone-300 hover:bg-stone-400 rounded"><i class="bi bi-google"></i></a>
                        <a href="#" class="text-xl py-1 px-2 bg-stone-300 hover:bg-stone-400 rounded"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-xl py-1 px-2 bg-stone-300 hover:bg-stone-400 rounded"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-xl py-1 px-2 bg-stone-300 hover:bg-stone-400 rounded"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </form>

            <!-- register php work start -->
            <?php
            if(isset($_POST['register'])){
                $data = [
                    'name' => $_POST['name'],
                    'gender' => $_POST['gender'],
                    'contact' => $_POST['contact'],
                    'email' => $_POST['email'],
                    'address' => $_POST['address'],
                    'password' => md5($_POST['password'])
                ];

                $result = insertData("students", $data);
                ($result)? redirect("index.php") : alert("Admission failed");
            }

            ?>

        </div>
    </div>
</body>

</html>