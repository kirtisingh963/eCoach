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
            <form action="" method="post" class="w-96 p-3 shadow-md ">
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter your email" class="w-full p-2 border rounded">
                </div>
                <div class="mb-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" class="w-full p-2 border rounded">
                </div>
                <div class="mb-3">
                    <a href="#" class="text-blue-800 hover:underline">forgot password?</a>
                </div>
                <div class="mb-3">
                    <input type="submit" name="login" value="Sign in" class="w-full p-2 bg-blue-700 text-white text-lg font-semibold rounded cursor-pointer">
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
        </div>
    </div>
</body>

</html>