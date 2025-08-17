@extends('layouts.admin')

@section('title', 'Admin Panel - CCDI AI LMS')

@section('content')
<div class="max-w-7xl mx-auto px-3 sm:px-4 md:px-6 lg:px-8 py-4 sm:py-6 lg:py-8">
    <!-- Welcome Header -->
    <div class="mb-6 sm:mb-8">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900">Admin Dashboard</h1>
        <p class="text-sm sm:text-base text-gray-600 mt-1 sm:mt-2">System overview and management console for CCDI AI LMS.</p>
    </div>

    <!-- System Stats -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-6 sm:mb-8">
        <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center">
                <div class="p-2 sm:p-3 bg-blue-100 rounded-lg sm:rounded-xl">
                    <i class="fas fa-users text-blue-600 text-lg sm:text-xl"></i>
                </div>
                <div class="ml-3 sm:ml-4 min-w-0 flex-1">
                    <p class="text-xs sm:text-sm font-medium text-gray-600 truncate">Total Users</p>
                    <p class="text-xl sm:text-2xl font-bold text-gray-900">1,245</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center">
                <div class="p-2 sm:p-3 bg-green-100 rounded-lg sm:rounded-xl">
                    <i class="fas fa-book text-green-600 text-lg sm:text-xl"></i>
                </div>
                <div class="ml-3 sm:ml-4 min-w-0 flex-1">
                    <p class="text-xs sm:text-sm font-medium text-gray-600 truncate">Active Courses</p>
                    <p class="text-xl sm:text-2xl font-bold text-gray-900">48</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center">
                <div class="p-2 sm:p-3 bg-yellow-100 rounded-lg sm:rounded-xl">
                    <i class="fas fa-robot text-yellow-600 text-lg sm:text-xl"></i>
                </div>
                <div class="ml-3 sm:ml-4 min-w-0 flex-1">
                    <p class="text-xs sm:text-sm font-medium text-gray-600 truncate">AI Interactions</p>
                    <p class="text-xl sm:text-2xl font-bold text-gray-900">12,847</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center">
                <div class="p-2 sm:p-3 bg-purple-100 rounded-lg sm:rounded-xl">
                    <i class="fas fa-server text-purple-600 text-lg sm:text-xl"></i>
                </div>
                <div class="ml-3 sm:ml-4 min-w-0 flex-1">
                    <p class="text-xs sm:text-sm font-medium text-gray-600 truncate">System Uptime</p>
                    <p class="text-xl sm:text-2xl font-bold text-gray-900">99.8%</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 sm:gap-8">
        <!-- Main Dashboard Content -->
        <div class="xl:col-span-2 space-y-4 sm:space-y-6">
            <!-- User Distribution Chart -->
            <div class="bg-white rounded-xl sm:rounded-2xl p-4 sm:p-6 shadow-sm border border-gray-100">
                <h2 class="text-lg sm:text-xl font-bold text-gray-900 mb-4 sm:mb-6">User Distribution</h2>
                
                <!-- Pie Chart Placeholder -->
                <div class="relative h-48 sm:h-64 bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg sm:rounded-xl mb-4 sm:mb-6 flex items-center justify-center border border-blue-200">
                    <div class="text-center px-4">
                        <i class="fas fa-chart-pie text-blue-600 text-2xl sm:text-3xl mb-2"></i>
                        <p class="text-sm sm:text-base text-gray-700 font-medium">User Distribution by Role</p>
                        <p class="text-xs sm:text-sm text-gray-500">Students, Faculty, and Administrators</p>
                    </div>
                </div>

                <!-- User Statistics -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4">
                    <div class="text-center p-3 sm:p-4 bg-blue-50 rounded-lg sm:rounded-xl border border-blue-200">
                        <div class="text-xl sm:text-2xl font-bold text-blue-600">1,125</div>
                        <div class="text-xs sm:text-sm text-gray-600">Students</div>
                        <div class="text-xs text-green-600">+8% this month</div>
                    </div>
                    <div class="text-center p-3 sm:p-4 bg-green-50 rounded-lg sm:rounded-xl border border-green-200">
                        <div class="text-xl sm:text-2xl font-bold text-green-600">95</div>
                        <div class="text-xs sm:text-sm text-gray-600">Faculty</div>
                        <div class="text-xs text-blue-600">+2% this month</div>
                    </div>
                    <div class="text-center p-3 sm:p-4 bg-purple-50 rounded-lg sm:rounded-xl border border-purple-200">
                        <div class="text-xl sm:text-2xl font-bold text-purple-600">25</div>
                        <div class="text-xs sm:text-sm text-gray-600">Administrators</div>
                        <div class="text-xs text-gray-600">No change</div>
                    </div>
                </div>
            </div>

            <!-- FAQ Analytics -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-gray-900 mb-6">FAQ Analytics</h2>
                
                <!-- Bar Chart Placeholder -->
                <div class="relative h-48 bg-gradient-to-br from-green-50 to-blue-50 rounded-xl mb-6 flex items-center justify-center border border-green-200">
                    <div class="text-center">
                        <i class="fas fa-chart-bar text-green-600 text-3xl mb-2"></i>
                        <p class="text-gray-700 font-medium">Most Asked Questions</p>
                        <p class="text-sm text-gray-500">Top FAQ categories and frequency</p>
                    </div>
                </div>

                <!-- FAQ Categories -->
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-blue-500 rounded mr-3"></div>
                            <span class="text-sm font-medium text-gray-900">Login Issues</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="w-32 bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                            <span class="text-sm text-gray-600">342</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-green-500 rounded mr-3"></div>
                            <span class="text-sm font-medium text-gray-900">Course Navigation</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="w-32 bg-gray-200 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 65%"></div>
                            </div>
                            <span class="text-sm text-gray-600">267</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-yellow-500 rounded mr-3"></div>
                            <span class="text-sm font-medium text-gray-900">AI Chatbot Usage</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="w-32 bg-gray-200 rounded-full h-2">
                                <div class="bg-yellow-500 h-2 rounded-full" style="width: 45%"></div>
                            </div>
                            <span class="text-sm text-gray-600">189</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-purple-500 rounded mr-3"></div>
                            <span class="text-sm font-medium text-gray-900">Grade Inquiries</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="w-32 bg-gray-200 rounded-full h-2">
                                <div class="bg-purple-500 h-2 rounded-full" style="width: 35%"></div>
                            </div>
                            <span class="text-sm text-gray-600">145</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System Performance -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-gray-900 mb-6">System Performance</h2>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <h4 class="text-sm font-medium text-gray-600 mb-3">Server Response Time</h4>
                        <div class="relative h-32 bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg flex items-center justify-center border border-blue-200">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-600">245ms</div>
                                <div class="text-xs text-gray-500">Average</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-sm font-medium text-gray-600 mb-3">Database Queries</h4>
                        <div class="relative h-32 bg-gradient-to-br from-green-50 to-blue-50 rounded-lg flex items-center justify-center border border-green-200">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-green-600">15.2k</div>
                                <div class="text-xs text-gray-500">Per hour</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- System Logs -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-lg font-bold text-gray-900 mb-4">System Logs</h2>
                <div class="space-y-3">
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                            <i class="fas fa-check text-green-600 text-xs"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">System backup completed</p>
                            <p class="text-xs text-gray-500">2 hours ago</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                            <i class="fas fa-robot text-blue-600 text-xs"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">AI chatbot answered 1,247 questions</p>
                            <p class="text-xs text-gray-500">Today</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                            <i class="fas fa-users text-purple-600 text-xs"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">23 new user registrations</p>
                            <p class="text-xs text-gray-500">Today</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                            <i class="fas fa-upload text-yellow-600 text-xs"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">8 new courses uploaded</p>
                            <p class="text-xs text-gray-500">Yesterday</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                            <i class="fas fa-exclamation-triangle text-red-600 text-xs"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Minor security alert resolved</p>
                            <p class="text-xs text-gray-500">2 days ago</p>
                        </div>
                    </div>
                </div>
                
                <button class="w-full mt-4 text-blue-600 text-sm font-medium hover:text-blue-700 transition-colors duration-200">
                    View All Logs
                </button>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-lg font-bold text-gray-900 mb-4">Quick Actions</h2>
                <div class="space-y-2">
                    <button class="w-full flex items-center p-3 rounded-lg border border-gray-200 hover:border-blue-300 hover:bg-blue-50 transition-all duration-200">
                        <i class="fas fa-user-plus text-blue-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">Add User</span>
                    </button>
                    <button class="w-full flex items-center p-3 rounded-lg border border-gray-200 hover:border-green-300 hover:bg-green-50 transition-all duration-200">
                        <i class="fas fa-database text-green-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">Backup System</span>
                    </button>
                    <button class="w-full flex items-center p-3 rounded-lg border border-gray-200 hover:border-purple-300 hover:bg-purple-50 transition-all duration-200">
                        <i class="fas fa-cog text-purple-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">System Settings</span>
                    </button>
                    <button class="w-full flex items-center p-3 rounded-lg border border-gray-200 hover:border-yellow-300 hover:bg-yellow-50 transition-all duration-200">
                        <i class="fas fa-chart-line text-yellow-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">Generate Reports</span>
                    </button>
                </div>
            </div>

            <!-- AI System Status -->
            <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl p-6 border border-blue-200">
                <div class="flex items-center mb-4">
                    <div class="p-2 bg-blue-600 rounded-lg mr-3">
                        <i class="fas fa-robot text-white"></i>
                    </div>
                    <h2 class="text-lg font-bold text-gray-900">AI System Status</h2>
                </div>
                
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Chatbot Service</span>
                        <span class="flex items-center text-green-600">
                            <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                            <span class="text-xs font-medium">Online</span>
                        </span>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Summarization API</span>
                        <span class="flex items-center text-green-600">
                            <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                            <span class="text-xs font-medium">Online</span>
                        </span>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Predictive Analytics</span>
                        <span class="flex items-center text-green-600">
                            <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                            <span class="text-xs font-medium">Online</span>
                        </span>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-700">Recommendation Engine</span>
                        <span class="flex items-center text-yellow-600">
                            <div class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></div>
                            <span class="text-xs font-medium">Maintenance</span>
                        </span>
                    </div>
                </div>
                
                <button class="w-full mt-4 bg-blue-600 text-white py-2 px-4 rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors duration-200">
                    Manage AI Services
                </button>
            </div>

            <!-- Recent Updates -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-lg font-bold text-gray-900 mb-4">Recent Updates</h2>
                <div class="space-y-3">
                    <div class="p-3 bg-green-50 border border-green-200 rounded-lg">
                        <h4 class="text-sm font-semibold text-gray-900">v2.1.0 Released</h4>
                        <p class="text-xs text-gray-600">Enhanced AI chatbot capabilities</p>
                    </div>
                    <div class="p-3 bg-blue-50 border border-blue-200 rounded-lg">
                        <h4 class="text-sm font-semibold text-gray-900">Security Patch</h4>
                        <p class="text-xs text-gray-600">Updated authentication system</p>
                    </div>
                    <div class="p-3 bg-purple-50 border border-purple-200 rounded-lg">
                        <h4 class="text-sm font-semibold text-gray-900">UI Improvements</h4>
                        <p class="text-xs text-gray-600">Better mobile responsiveness</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
