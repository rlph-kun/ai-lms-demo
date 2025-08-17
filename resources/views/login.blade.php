@extends('layouts.login')

@section('title', 'Login - CCDI AI LMS')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <!-- Header -->
        <div class="text-center">
            <div class="mx-auto w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mb-6">
                <i class="fas fa-graduation-cap text-white text-2xl"></i>
            </div>
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Welcome Back</h2>
            <p class="text-gray-600">Sign in to CCDI AI Learning Management System</p>
        </div>

        <!-- Login Form -->
        <div class="bg-white py-8 px-6 shadow-xl rounded-2xl border border-gray-100">
            <form class="space-y-6" id="loginForm">
                <!-- Role Selection -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">Select Your Role</label>
                    <div class="grid grid-cols-3 gap-3">
                        <label class="cursor-pointer">
                            <input type="radio" name="role" value="student" class="sr-only peer" checked>
                            <div class="flex flex-col items-center p-4 border-2 border-gray-200 rounded-xl peer-checked:border-blue-500 peer-checked:bg-blue-50 hover:border-blue-300 transition-all duration-200">
                                <i class="fas fa-user-graduate text-2xl text-gray-400 peer-checked:text-blue-500 mb-2"></i>
                                <span class="text-sm font-medium text-gray-700">Student</span>
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="role" value="faculty" class="sr-only peer">
                            <div class="flex flex-col items-center p-4 border-2 border-gray-200 rounded-xl peer-checked:border-green-500 peer-checked:bg-green-50 hover:border-green-300 transition-all duration-200">
                                <i class="fas fa-chalkboard-teacher text-2xl text-gray-400 peer-checked:text-green-500 mb-2"></i>
                                <span class="text-sm font-medium text-gray-700">Faculty</span>
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="role" value="admin" class="sr-only peer">
                            <div class="flex flex-col items-center p-4 border-2 border-gray-200 rounded-xl peer-checked:border-purple-500 peer-checked:bg-purple-50 hover:border-purple-300 transition-all duration-200">
                                <i class="fas fa-user-shield text-2xl text-gray-400 peer-checked:text-purple-500 mb-2"></i>
                                <span class="text-sm font-medium text-gray-700">Admin</span>
                            </div>
                        </label>
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                        <input id="email" name="email" type="email" autocomplete="email" required 
                               class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200" 
                               placeholder="student@ccdi.edu.ph">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input id="password" name="password" type="password" autocomplete="current-password" required 
                               class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200" 
                               placeholder="••••••••">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                    </div>
                    <div class="text-sm">
                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Forgot password?</a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-xl text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 transform hover:scale-[1.02]">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <i class="fas fa-sign-in-alt text-blue-500 group-hover:text-blue-400"></i>
                        </span>
                        Sign In
                    </button>
                </div>
            </form>

            <!-- JavaScript for Role-based Login -->
            <script>
                document.getElementById('loginForm').addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const selectedRole = document.querySelector('input[name="role"]:checked').value;
                    const email = document.getElementById('email').value;
                    const password = document.getElementById('password').value;
                    
                    // Simple validation
                    if (!email || !password) {
                        alert('Please fill in all fields');
                        return;
                    }
                    
                    // Store role in session storage for navigation
                    sessionStorage.setItem('userRole', selectedRole);
                    
                    // Route based on role
                    let redirectUrl = '/dashboard';
                    if (selectedRole === 'faculty') {
                        redirectUrl = '/faculty';
                    } else if (selectedRole === 'admin') {
                        redirectUrl = '/admin';
                    }
                    
                    // Redirect to appropriate page
                    window.location.href = redirectUrl + '?role=' + selectedRole;
                });
                
                // Update placeholder email based on role selection
                document.querySelectorAll('input[name="role"]').forEach(radio => {
                    radio.addEventListener('change', function() {
                        const emailInput = document.getElementById('email');
                        const placeholders = {
                            'student': 'student@ccdi.edu.ph',
                            'faculty': 'faculty@ccdi.edu.ph',
                            'admin': 'admin@ccdi.edu.ph'
                        };
                        emailInput.placeholder = placeholders[this.value];
                    });
                });
            </script>

            <!-- Demo Credentials -->
            <div class="mt-6 p-4 bg-blue-50 rounded-xl border border-blue-200">
                <h4 class="text-sm font-medium text-blue-800 mb-2">Demo Credentials:</h4>
                <div class="text-xs text-blue-700 space-y-1">
                    <p><strong>Student:</strong> student@ccdi.edu.ph / password</p>
                    <p><strong>Faculty:</strong> faculty@ccdi.edu.ph / password</p>
                    <p><strong>Admin:</strong> admin@ccdi.edu.ph / password</p>
                </div>
            </div>
        </div>

        <!-- University Info -->
        <div class="text-center">
            <p class="text-sm text-gray-600">
                Computer Communication Development Institute<br>
                <span class="text-blue-600 font-medium">Sorsogon, Philippines</span>
            </p>
        </div>
    </div>
</div>
@endsection
