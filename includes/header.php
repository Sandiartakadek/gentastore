<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Genta Store'; ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Unna:wght@400;700&display=swap">
    <link rel="stylesheet" href="../assets/css/output.css">
    <?php echo isset($customCSS) ? '<link rel="stylesheet" href=""'.$customCSS.'"">' : '' ?>
</head>


<body class="bg-gray-100 text-black">
    <!-- Navbar start -->
    <?php if (!isset($nav) || $nav == true) { ?>
    <nav class="bg-white shadow-lg fixed top-0 w-full z-50">
        <!-- Layer 1: barrier -->
        <div class="bg-green-700 py-3"></div>
        <!-- Main Navbar -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Left side: Genta Simbar -->
                <div class="flex-shrink-0">
                    <a href="../index.php" class="text-xl font-bold">Genta Store</a>
                </div>
                <!-- Middle: Navigation Links -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-16">
                        <a href="../index.php" class="text-lg hover:text-gray-700">Home</a>
                        <a href="#" class="text-lg hover:text-gray-700">Product</a>
                        <a href="#" class="text-lg hover:text-gray-700">Contact</a>
                    </div>
                </div>
                <!-- Right side: Login -->
                <div class="hidden md:flex items-center space-x-4">
                    <!-- <a href="views/login.php"
                        class="bg-transparent hover:bg-green-500 text-black font-extralight hover:text-white py-2 px-4 border border-black hover:border-transparent rounded">
                        Login or Register
                    </a> -->
                    <a>
                        
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <?php } ?>