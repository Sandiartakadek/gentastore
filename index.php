
<?php
$title = "Genta Store - Home";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Genta Store'; ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Unna:wght@400;700&display=swap">
    <link rel="stylesheet" href="./assets/css/output.css">
</head>

<body class="bg-gray-100 text-black">
    <!-- Navbar start -->
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
                        <a href="#" class="text-lg hover:text-gray-700">Home</a>
                        <a href="#" class="text-lg hover:text-gray-700">Product</a>
                        <a href="#" class="text-lg hover:text-gray-700">Contact</a>
                    </div>
                </div>
                <!-- Right side: Login -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="views/login.php"
                        class="bg-transparent hover:bg-green-600 text-black font-extralight hover:text-white py-2 px-4 border border-black hover:border-transparent rounded">
                        Login or Register
                    </a>
                    <!-- Add more social icons here -->
                </div>
            </div>
        </div>
    </nav>

    <!-- Section Hero -->
    <section class="bg-gray-100 shadow-md w-full h-screen flex flex-col">
        <!-- Top Side (Image) -->
        <div class="h-2/4">
            <img src="assets/images/hero-bg.jpg" alt="Gambar Genta Store" class="w-full h-full object-cover">
        </div>
        
        <!-- Bot Side (Text) -->
        <div class="h-2/4 flex flex-col items-center justify-center bg-gray-100">
            <h1 class="hero-text text-4xl font-extralight mb-12">GENTA STORE</h1>
            <p class="text-gray-700 text-center max-w-screen-md">Genta Store is a place for all Platycerium fans! Here we sell all your Platycerium needs, from seeds, the plant itself and growing media. The goods we sell are guaranteed to be of the best quality you’ll ever see.</p>
        </div>
    </section>

    <!-- Section Best Selling -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="unna-style text-5xl font-bold text-center mb-12 underline">Best Selling</h2>
            <div class="flex flex-wrap justify-center gap-8">
                <!-- Card 1 -->
                <div class="relative max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <div class="p-4">
                        <div class="relative">
                            <img src="assets/images/indoor-plants.png" alt="Product 1" class="w-full mb-4 rounded">
                            <h5 class="overlay-text absolute inset-0 flex items-center justify-center text-center text-white text-2xl font-extralight">
                                INDOOR <br> PLANTS
                            </h5>
                        </div>
                        <a href="#" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 w-full mt-2 flex items-center justify-center rounded">
                            Shop Now
                        </a>
                    </div>
                </div>
        
                <!-- Card 2 -->
                <div class="relative max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <div class="p-4">
                        <div class="relative">
                            <img src="assets/images/airpurifyng-plants.png" alt="Product 2" class="w-full mb-4 rounded">
                            <h5 class="overlay-text absolute inset-0 flex items-center justify-center text-center text-white text-2xl font-extralight ">
                                AIR PURIFYING <br> PLANTS
                            </h5>
                        </div>
                        <a href="#" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 w-full mt-2 flex items-center justify-center rounded">
                            Shop Now
                        </a>
                    </div>
                </div>
        
                <!-- Card 3 -->
                <div class="relative max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <div class="p-4">
                        <div class="relative">
                            <img src="assets/images/flower-plants.png" alt="Product 3" class="w-full mb-4 rounded">
                            <h5 class="overlay-text absolute inset-0 flex items-center justify-center text-center text-white text-2xl font-extralight ">
                                FLOWERING <br> PLANTS
                            </h5>
                        </div>
                        <a href="#" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 w-full mt-2 flex items-center justify-center rounded">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <!-- Section Blogs -->
     <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="unna-style text-5xl font-bold text-center mb-12 underline">Blogs</h2>

            <!-- Blog Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Blog Card 1 -->
                <div class="relative">
                    <img src="assets/images/blog-1.png" alt="Blog 1" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center flex-col text-center text-white">
                        <h5 class="text-xl font-extralight mb-4">How to take care of your Platycerium</h5>
                        <a href="#" class="blog-anchor bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-block">Read</a>
                    </div>
                </div>

                <!-- Blog Card 2 -->
                <div class="relative">
                    <img src="assets/images/blog-2.png" alt="Blog 2" class="w-full h-64 object-cover">
                    <div class="absolute inset-0 flex items-center justify-center flex-col text-center text-white">
                        <h3 class="text-xl font-extralight mb-4">See news about your Platycerium</h3>
                        <a href="#" class="blog-anchor bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-block">Read</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section Stock and Price -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="unna-style text-5xl font-bold text-center mb-12 underline">Stock and Price</h2>
    
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img src="assets/images/stock-1.png" alt="Product 1" class="w-full p-4 mb-4">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Product 1</h3>
                        <p class="text-gray-700 mb-2">$350 <span class="text-red-500">450</span></p>
                        <div class="flex justify-center">
                            <a href="#" class="bg-green-600 hover:bg-green-700 w-full text-center text-white font-bold py-2 px-4 rounded">Buy Now</a>
                        </div>
                    </div>
                </div>
    
                <!-- Card 2 -->
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img src="assets/images/stock-2.png" alt="Product 2" class="w-full p-4 mb-4 rounded">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Product 2</h3>
                        <p class="text-gray-700 mb-2">$350 <span class="text-red-500">450</span></p>
                        <div class="flex justify-center">
                            <a href="#" class="bg-green-600 hover:bg-green-700 w-full text-center text-white font-bold py-2 px-4 rounded">Buy Now</a>
                        </div>
                    </div>
                </div>
    
                <!-- Card 3 -->
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img src="assets/images/stock-3.png" alt="Product 3" class="w-full p-4 mb-4 rounded">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Product 3</h3>
                        <p class="text-gray-700 mb-2">$350 <span class="text-red-500">450</span></p>
                        <div class="flex justify-center">
                            <a href="#" class="bg-green-600 hover:bg-green-700 w-full text-center text-white font-bold py-2 px-4 rounded">Buy Now</a>
                        </div>
                    </div>
                </div>
    
                <!-- Card 4 -->
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img src="assets/images/stock-4.png" alt="Product 4" class="w-full p-4 mb-4 rounded">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Product 4</h3>
                        <p class="text-gray-700 mb-2">$350 <span class="text-red-500">450</span></p>
                        <div class="flex justify-center">
                            <a href="#" class="bg-green-600 hover:bg-green-700 w-full text-center text-white font-bold py-2 px-4 rounded">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Planters -->
    <section class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="unna-style text-5xl font-bold text-center mb-12 underline">Planters</h2>
    
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img src="assets/images/planter-1.png" alt="Product 1" class="w-full p-4 mb-4">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Product 1</h3>
                        <p class="text-gray-700 mb-2">$350 <span class="text-red-500">450</span></p>
                        <div class="flex justify-center">
                            <a href="#" class="bg-green-600 hover:bg-green-700 w-full text-center text-white font-bold py-2 px-4 rounded">Buy Now</a>
                        </div>
                    </div>
                </div>
    
                <!-- Card 2 -->
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img src="assets/images/planter-2.png" alt="Product 2" class="w-full p-4 mb-4 rounded">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Product 2</h3>
                        <p class="text-gray-700 mb-2">$350 <span class="text-red-500">450</span></p>
                        <div class="flex justify-center">
                            <a href="#" class="bg-green-600 hover:bg-green-700 w-full text-center text-white font-bold py-2 px-4 rounded">Buy Now</a>
                        </div>
                    </div>
                </div>
    
                <!-- Card 3 -->
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img src="assets/images/planter-3.png" alt="Product 3" class="w-full p-4 mb-4 rounded">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Product 3</h3>
                        <p class="text-gray-700 mb-2">$350 <span class="text-red-500">450</span></p>
                        <div class="flex justify-center">
                            <a href="#" class="bg-green-600 hover:bg-green-700 w-full text-center text-white font-bold py-2 px-4 rounded">Buy Now</a>
                        </div>
                    </div>
                </div>
    
                <!-- Card 4 -->
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                    <img src="assets/images/planter-4.png" alt="Product 4" class="w-full p-4 mb-4 rounded">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">Product 4</h3>
                        <p class="text-gray-700 mb-2">$350 <span class="text-red-500">450</span></p>
                        <div class="flex justify-center">
                            <a href="#" class="bg-green-600 hover:bg-green-700 w-full text-center text-white font-bold py-2 px-4 rounded">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<!-- Footer Section -->
<footer>
        <!-- Layer 1: Main Footer -->
        <div class="bg-green-600 py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <!-- Left side: Genta Store -->
                <div class="text-white text-xl font-bold">
                    Genta Store
                </div>
                <!-- Right side: Social Media Icons -->
                <div class="flex space-x-4">
                    <!-- Facebook Icon -->
                    <a href="https://www.facebook.com" class="text-white w-10 h-10 p-1 flex items-center justify-center bg-green-600 rounded-full hover:bg-green-700">
                        <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6 p-1">
                            <path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82v-9.293H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.787 4.659-4.787 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.714-1.795 1.762v2.31h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.593 1.323-1.324V1.325C24 .593 23.407 0 22.675 0z"/>
                        </svg>
                    </a>
                    <!-- X Icon -->
                    <a href="https://www.twitter.com" class="text-white w-10 h-10 p-1 flex items-center justify-center bg-green-600 rounded-full hover:bg-green-700">
                        <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6 p-1">
                            <path d="M23.953 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.949.555-2.003.959-3.127 1.184-.896-.959-2.173-1.555-3.594-1.555-2.717 0-4.918 2.201-4.918 4.917 0 .39.045.765.127 1.124-4.084-.205-7.699-2.159-10.126-5.134-.423.722-.666 1.561-.666 2.458 0 1.697.865 3.196 2.181 4.078-.805-.026-1.563-.247-2.228-.616v.061c0 2.37 1.685 4.348 3.918 4.799-.411.111-.844.171-1.292.171-.316 0-.624-.03-.924-.086.625 1.956 2.444 3.379 4.6 3.42-1.68 1.316-3.797 2.102-6.096 2.102-.395 0-.785-.023-1.17-.069 2.179 1.397 4.768 2.212 7.557 2.212 9.054 0 14.009-7.498 14.009-13.986 0-.21-.004-.423-.015-.635.962-.69 1.8-1.56 2.46-2.548l-.047-.02z"/>
                        </svg>
                    </a>
                    <!-- Instagram Icon -->
                    <a href="https://www.instagram.com" class="text-white w-10 h-10 p-1 flex items-center justify-center bg-green-600 rounded-full hover:bg-green-700">
                        <svg fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6 p-1">
                            <path d="M12 2.163c3.204 0 3.584.012 4.849.07 1.366.062 2.633.326 3.608 1.301.974.975 1.239 2.242 1.301 3.608.058 1.265.07 1.645.07 4.849s-.012 3.584-.07 4.849c-.062 1.366-.326 2.633-1.301 3.608-.975.974-2.242 1.239-3.608 1.301-1.265.058-1.645.07-4.849.07s-3.584-.012-4.849-.07c-1.366-.062-2.633-.326-3.608-1.301-.974-.975-1.239-2.242-1.301-3.608-.058-1.265-.07-1.645-.07-4.849s.012-3.584.07-4.849c.062-1.366.326-2.633 1.301-3.608.975-.974 2.242-1.239 3.608-1.301 1.265-.058 1.645-.07 4.849-.07zm0-2.163c-3.259 0-3.667.013-4.947.072-1.562.07-2.95.34-4.123 1.513C1.34 3.637 1.071 5.025 1 6.587.941 7.867.928 8.275.928 12c0 3.724.013 4.133.072 5.413.07 1.562.34 2.95 1.513 4.123 1.173 1.173 2.561 1.443 4.123 1.513 1.28.058 1.688.072 4.947.072s3.667-.013 4.947-.072c1.562-.07 2.95-.34 4.123-1.513 1.173-1.173 1.443-2.561 1.513-4.123.058-1.28.072-1.688.072-4.947s-.013-3.667-.072-4.947c-.07-1.562-.34-2.95-1.513-4.123-1.173-1.173-2.561-1.443-4.123-1.513-1.28-.058-1.688-.072-4.947-.072zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.998 3.998 0 110-7.996 3.998 3.998 0 010 7.996zm6.406-11.845a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Layer 2: Copyright -->
        <div class="bg-green-700 py-1">
            <div class="text-sm font-extralight text-center text-white">
                &copy; by @gentaaribhuana 2024
            </div>
        </div>
    </footer>

    
</body>
</html>