<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AI LMS Demo - CCDI Sorsogon')</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800 font-inter">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-green-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-chalkboard-teacher text-white text-sm"></i>
                    </div>
                    <h1 class="text-xl font-bold text-gray-900">CCDI AI LMS</h1>
                    <span class="ml-2 px-2 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Faculty</span>
                </div>
                
                <!-- Faculty Navigation Links -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/faculty?role=faculty" class="px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-green-600 hover:bg-green-50 transition-all duration-200">
                        <i class="fas fa-chart-line mr-2"></i>Analytics
                    </a>
                    <a href="/chatbot?role=faculty" class="px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-green-600 hover:bg-green-50 transition-all duration-200">
                        <i class="fas fa-robot mr-2"></i>AI Assistant
                    </a>
                    <a href="/summarization?role=faculty" class="px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-green-600 hover:bg-green-50 transition-all duration-200">
                        <i class="fas fa-file-text mr-2"></i>Content Tools
                    </a>
                    <a href="/faculty/profile" class="px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-green-600 hover:bg-green-50 transition-all duration-200">
                        <i class="fas fa-user mr-2"></i>Profile
                    </a>
                    <a href="/" class="px-3 py-2 rounded-lg text-sm font-medium text-red-600 hover:text-red-700 hover:bg-red-50 transition-all duration-200" onclick="logout()">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button class="p-2 rounded-lg text-gray-600 hover:text-green-600 hover:bg-green-50">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-gray-600 text-sm">© 2025 CCDI Sorsogon - AI-Powered Learning Management System</p>
                <p class="text-gray-500 text-xs mt-1">Faculty Portal</p>
            </div>
        </div>
    </footer>

    @vite('resources/js/app.js')
    <script>
        function logout() {
            sessionStorage.removeItem('userRole');
            window.location.href = '/';
        }
    </script>
</body>
</html>
