
<?php
$title = "Genta Store - Home";
include 'includes/header.php';
?>

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
    
<?php
include 'includes/footer.php';
?>