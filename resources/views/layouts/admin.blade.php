<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="theme-color" content="#8b5cf6">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <title>@yield('title', 'AI LMS Demo - CCDI Sorsogon')</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800 font-inter">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-3 sm:px-4 md:px-6 lg:px-8">
            <div class="flex justify-between items-center h-14 sm:h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-2 sm:space-x-3 min-w-0 flex-1">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 bg-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-user-shield text-white text-xs sm:text-sm"></i>
                    </div>
                    <div class="min-w-0 flex-1">
                        <h1 class="text-lg sm:text-xl font-bold text-gray-900 truncate">CCDI AI LMS</h1>
                    </div>
                    <span class="ml-1 sm:ml-2 px-2 py-1 bg-purple-100 text-purple-800 text-xs font-medium rounded-full flex-shrink-0">Admin</span>
                </div>
                
                <!-- Admin Navigation Links -->
                <div class="hidden lg:flex items-center space-x-1">
                    <a href="/admin?role=admin" class="px-2 sm:px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200">
                        <i class="fas fa-tachometer-alt mr-1 sm:mr-2"></i><span class="hidden xl:inline">Dashboard</span>
                    </a>
                    <a href="/chatbot?role=admin" class="px-2 sm:px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200">
                        <i class="fas fa-robot mr-1 sm:mr-2"></i><span class="hidden xl:inline">AI Tools</span>
                    </a>
                    <a href="/summarization?role=admin" class="px-2 sm:px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200">
                        <i class="fas fa-file-text mr-1 sm:mr-2"></i><span class="hidden xl:inline">Content Manager</span>
                    </a>
                    <a href="/admin/profile" class="px-2 sm:px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200">
                        <i class="fas fa-user mr-1 sm:mr-2"></i><span class="hidden xl:inline">Profile</span>
                    </a>
                    <a href="/" class="px-2 sm:px-3 py-2 rounded-lg text-sm font-medium text-red-600 hover:text-red-700 hover:bg-red-50 transition-all duration-200" onclick="logout()">
                        <i class="fas fa-sign-out-alt mr-1 sm:mr-2"></i><span class="hidden xl:inline">Logout</span>
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button onclick="toggleMobileMenu()" class="p-2 rounded-lg text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200">
                        <i class="fas fa-bars text-lg"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Navigation Menu -->
            <div id="mobileMenu" class="lg:hidden hidden border-t border-gray-200 py-3">
                <div class="space-y-1">
                    <a href="/admin?role=admin" class="flex items-center px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200">
                        <i class="fas fa-tachometer-alt mr-3"></i>Dashboard
                    </a>
                    <a href="/chatbot?role=admin" class="flex items-center px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200">
                        <i class="fas fa-robot mr-3"></i>AI Tools
                    </a>
                    <a href="/summarization?role=admin" class="flex items-center px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200">
                        <i class="fas fa-file-text mr-3"></i>Content Manager
                    </a>
                    <a href="/admin/profile" class="flex items-center px-3 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200">
                        <i class="fas fa-user mr-3"></i>Profile
                    </a>
                    <a href="/" class="flex items-center px-3 py-2 rounded-lg text-sm font-medium text-red-600 hover:text-red-700 hover:bg-red-50 transition-all duration-200" onclick="logout()">
                        <i class="fas fa-sign-out-alt mr-3"></i>Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-6 sm:py-8">
        <div class="max-w-7xl mx-auto px-3 sm:px-4 md:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-gray-600 text-xs sm:text-sm">© 2025 CCDI Sorsogon - AI-Powered Learning Management System</p>
                <p class="text-gray-500 text-xs mt-1">Administrator Portal</p>
            </div>
        </div>
    </footer>

    @vite('resources/js/app.js')
    <script>
        function logout() {
            sessionStorage.removeItem('userRole');
            window.location.href = '/';
        }
        
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('mobileMenu');
            const button = event.target.closest('button[onclick="toggleMobileMenu()"]');
            
            if (!menu.contains(event.target) && !button && !menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
            }
        });
        
        // Close mobile menu on window resize if desktop view
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) { // lg breakpoint
                document.getElementById('mobileMenu').classList.add('hidden');
            }
        });
    </script>
</body>
</html>
