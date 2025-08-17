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
                    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-sm"></i>
                    </div>
                    <h1 class="text-xl font-bold text-gray-900">CCDI AI LMS</h1>
                </div>
                
                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/dashboard" class="px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition-all duration-200">
                        <i class="fas fa-home mr-2"></i>Dashboard
                    </a>
                    <a href="/chatbot" class="px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition-all duration-200">
                        <i class="fas fa-robot mr-2"></i>AI Chat
                    </a>
                    <a href="/summarization" class="px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition-all duration-200">
                        <i class="fas fa-file-text mr-2"></i>Summary
                    </a>
                    <a href="/faculty" class="px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition-all duration-200">
                        <i class="fas fa-chalkboard-teacher mr-2"></i>Faculty
                    </a>
                    <a href="/admin" class="px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition-all duration-200">
                        <i class="fas fa-cog mr-2"></i>Admin
                    </a>
                    <a href="/profile" class="px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition-all duration-200">
                        <i class="fas fa-user mr-2"></i>Profile
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button class="p-2 rounded-lg text-gray-600 hover:text-blue-600 hover:bg-blue-50">
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
                <p class="text-gray-500 text-xs mt-1">Designed for demo purposes</p>
            </div>
        </div>
    </footer>

    <!-- Floating Chatbot Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <a href="/chatbot" class="bg-blue-600 hover:bg-blue-700 text-white rounded-full w-14 h-14 flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 group">
            <i class="fas fa-comments text-xl group-hover:scale-110 transition-transform duration-200"></i>
        </a>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
