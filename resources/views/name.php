<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    <h1>
        <?php echo "My name is $name"; ?>
    </h1>
    <h3>
        <?php echo "I am learning $course"; ?>
    </h3>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black flex flex-col justify-center items-center h-screen">
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-center">
        <h1 class="text-white text-2xl mb-4">Welcome : <?php echo $name; ?></h1>
        <h3 class="text-white text-2xl"><?php echo "I am learning $course"; ?></h3>
    </div>
</body>
</html>
