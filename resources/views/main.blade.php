<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vlaskov.ch - Main Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-6 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-gray-900">vlaskov.ch</a>
            <nav class="space-x-6">
                <a href="#shop" class="text-gray-700 hover:text-blue-600">Shop</a>
                <a href="#about" class="text-gray-700 hover:text-blue-600">About</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600">Contact</a>
            </nav>
        </div>
    </header>
    <main>
        <section class="bg-gradient-to-r from-blue-100 to-purple-100 py-20">
            <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6">Welcome to vlaskov.ch</h1>
                    <p class="text-lg text-gray-700 mb-8">Discover unique products, crafted with passion. Shop now and enjoy fast delivery across Switzerland!</p>
                    <a href="#shop" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold shadow hover:bg-blue-700 transition">Shop Now</a>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="/images/hero-product.png" alt="Featured Product" class="w-80 rounded-xl shadow-lg">
                </div>
            </div>
        </section>
        <section id="shop" class="container mx-auto px-4 py-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">Featured Products</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Example Product Card -->
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                    <img src="/images/product1.jpg" alt="Product 1" class="w-40 h-40 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Product Name 1</h3>
                    <p class="text-gray-600 mb-4">Short product description goes here.</p>
                    <span class="text-lg font-bold text-blue-600 mb-4">CHF 29.00</span>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Add to Cart</button>
                </div>
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                    <img src="/images/product2.jpg" alt="Product 2" class="w-40 h-40 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Product Name 2</h3>
                    <p class="text-gray-600 mb-4">Short product description goes here.</p>
                    <span class="text-lg font-bold text-blue-600 mb-4">CHF 49.00</span>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Add to Cart</button>
                </div>
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                    <img src="/images/product3.jpg" alt="Product 3" class="w-40 h-40 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Product Name 3</h3>
                    <p class="text-gray-600 mb-4">Short product description goes here.</p>
                    <span class="text-lg font-bold text-blue-600 mb-4">CHF 19.00</span>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Add to Cart</button>
                </div>
            </div>
        </section>
        <section id="about" class="bg-white py-16">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">About vlaskov.ch</h2>
                <p class="text-gray-700 max-w-2xl mx-auto">vlaskov.ch is a Swiss online shop offering handpicked products with a focus on quality and customer satisfaction. We believe in fast delivery, friendly service, and a seamless shopping experience.</p>
            </div>
        </section>
        <section id="contact" class="bg-gray-100 py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Contact Us</h2>
                <form class="max-w-lg mx-auto bg-white p-8 rounded shadow" x-data="{ name: '', email: '', message: '', submitted: false }" @submit.prevent="submitted = true">
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="name">Name</label>
                        <input x-model="name" class="w-full border border-gray-300 rounded px-3 py-2" type="text" id="name" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="email">Email</label>
                        <input x-model="email" class="w-full border border-gray-300 rounded px-3 py-2" type="email" id="email" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2" for="message">Message</label>
                        <textarea x-model="message" class="w-full border border-gray-300 rounded px-3 py-2" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Send</button>
                    <div x-show="submitted" class="mt-4 text-green-600 font-semibold">Thank you for contacting us!</div>
                </form>
            </div>
        </section>
    </main>
    <footer class="bg-white border-t mt-16">
        <div class="container mx-auto px-4 py-8 text-center text-gray-500">
            &copy; 2024 vlaskov.ch. All rights reserved.
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
