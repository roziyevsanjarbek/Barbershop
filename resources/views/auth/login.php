<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Hama Barbershop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
<!-- Navigation -->
<nav class="bg-gray-800 text-white px-4 py-3">
    <div class="container mx-auto flex justify-between items-center">
        <a href="index.html" class="text-2xl font-bold">Hama Barbershop</a>
        <div class="hidden md:flex space-x-4">
            <a href="index.html" class="hover:text-gray-300">Home</a>
            <a href="services.html" class="hover:text-gray-300">Services</a>
            <a href="booking.html" class="bg-indigo-600 px-4 py-2 rounded-lg hover:bg-indigo-700">Book Now</a>
        </div>
    </div>
</nav>

<!-- Login Form -->
<div class="min-h-screen flex items-center justify-center px-4 py-12">
    <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-xl shadow-lg">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-900">Sign in to your account</h2>
            <p class="mt-2 text-sm text-gray-600">
                Or <a href="register.html" class="font-medium text-indigo-600 hover:text-indigo-500">create a new account</a>
            </p>
        </div>
        <form class="mt-8 space-y-6" id="form" onsubmit="login()">
            <div class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <input id="email" name="email" type="email" required
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox"
                           class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                </div>
                <div class="text-sm">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                </div>
            </div>

            <button type="submit"
                    class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Sign in
            </button>

            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Or continue with</span>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-3 gap-3">
                    <button type="button" class="w-full py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                        <i class="fab fa-google"></i>
                    </button>
                    <button type="button" class="w-full py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <button type="button" class="w-full py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                        <i class="fab fa-apple"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    // Form validation
    async function login() {
        event.preventDefault();
        let form = document.getElementById("form"),
            formData = new FormData(form);
        const {default: apiFetch} = await import("/js/utils/apiFetch.js");
        await apiFetch("/login", {method: "POST", body: formData})
            .then(data => {
                localStorage.setItem('token', data.token);
                window.location.href = '/dashboard';
            })
            .catch((error) => {
                console.error(error.data.errors);
                document.getElementById("error").innerHTML = '';
                Object.keys(error.data.errors).forEach((err) => {
                    document.getElementById("error").innerHTML += `<p class="text-red-500 mt-1">${error.data.errors[err]}</p>`;
                });
            });
    }
</script>
</body>
</html>

