@extends('layouts.admin')

@section('title', 'Admin Profile - CCDI AI LMS')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Profile Info -->
        <div class="lg:col-span-1 space-y-6">
            <!-- Basic Info Card -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <div class="text-center">
                    <div class="relative inline-block">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                             alt="Profile Picture" 
                             class="w-24 h-24 rounded-full object-cover mx-auto border-4 border-white shadow-lg">
                        <div class="absolute bottom-0 right-0 w-6 h-6 bg-green-500 rounded-full border-2 border-white"></div>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mt-4">Jurick Dominguez</h2>
                    <p class="text-gray-600">System Administrator</p>
                    <p class="text-sm text-gray-500 mt-1">Admin ID: ADM-2021-001</p>
                </div>
                
                <div class="mt-6 space-y-4">
                    <div class="flex items-center">
                        <i class="fas fa-envelope text-gray-400 w-5"></i>
                        <span class="text-sm text-gray-700 ml-3">m.rodriguez@ccdi.edu.ph</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone text-gray-400 w-5"></i>
                        <span class="text-sm text-gray-700 ml-3">+63 918 555 0123</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt text-gray-400 w-5"></i>
                        <span class="text-sm text-gray-700 ml-3">Sorsogon City, Philippines</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar text-gray-400 w-5"></i>
                        <span class="text-sm text-gray-700 ml-3">Joined: January 2021</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-shield-alt text-gray-400 w-5"></i>
                        <span class="text-sm text-gray-700 ml-3">Super Administrator</span>
                    </div>
                </div>

                <button class="w-full mt-6 bg-blue-600 text-white py-2 px-4 rounded-xl hover:bg-blue-700 transition-colors duration-200">
                    Edit Profile
                </button>
            </div>

            <!-- Admin Credentials -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Credentials & Qualifications</h3>
                <div class="space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Education</span>
                        <span class="text-sm font-medium text-gray-900">PhD Computer Science</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Specialization</span>
                        <span class="text-sm font-medium text-gray-900">AI & Machine Learning</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Experience</span>
                        <span class="text-sm font-medium text-gray-900">15+ Years</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Certifications</span>
                        <span class="text-sm font-medium text-gray-900">Cloud, Security, AI</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Department</span>
                        <span class="text-sm font-medium text-gray-900">IT Services</span>
                    </div>
                </div>
            </div>

            <!-- System Access -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">System Access Level</h3>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-gray-600">Admin Privileges</span>
                            <span class="font-medium text-gray-900">Full Access</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-600 h-2 rounded-full" style="width: 100%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-gray-600">Security Clearance</span>
                            <span class="font-medium text-gray-900">Level 5</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 100%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-gray-600">Data Access</span>
                            <span class="font-medium text-gray-900">Unrestricted</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-purple-600 h-2 rounded-full" style="width: 100%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- System Management Overview -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-gray-900">System Management Overview</h2>
                    <span class="text-sm text-gray-500">Current Session</span>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-blue-50 rounded-xl p-4 border border-blue-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600">Active Users</p>
                                <p class="text-2xl font-bold text-blue-600">1,245</p>
                            </div>
                            <i class="fas fa-users text-blue-600 text-2xl"></i>
                        </div>
                    </div>
                    
                    <div class="bg-green-50 rounded-xl p-4 border border-green-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600">System Health</p>
                                <p class="text-2xl font-bold text-green-600">99.8%</p>
                            </div>
                            <i class="fas fa-heartbeat text-green-600 text-2xl"></i>
                        </div>
                    </div>
                    
                    <div class="bg-purple-50 rounded-xl p-4 border border-purple-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600">AI Requests</p>
                                <p class="text-2xl font-bold text-purple-600">12.8K</p>
                            </div>
                            <i class="fas fa-robot text-purple-600 text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Administrative Responsibilities -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Responsibility</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Updated</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Priority</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                            <i class="fas fa-server text-blue-600"></i>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">System Monitoring</div>
                                            <div class="text-sm text-gray-500">Infrastructure oversight</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2 hours ago</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800">
                                        Critical
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                            <i class="fas fa-users-cog text-purple-600"></i>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">User Management</div>
                                            <div class="text-sm text-gray-500">Account administration</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                        Reviewing
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1 day ago</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                                        High
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                            <i class="fas fa-database text-green-600"></i>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Database Backup</div>
                                            <div class="text-sm text-gray-500">Data protection</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                        Completed
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">6 hours ago</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                        Medium
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Administrative Tools -->
            <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl p-6 border border-blue-200">
                <div class="flex items-center mb-4">
                    <div class="p-2 bg-blue-600 rounded-lg mr-3">
                        <i class="fas fa-tools text-white"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900">Administrative Tools</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white rounded-xl p-4 border border-blue-200">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                            <h4 class="font-semibold text-gray-900">Analytics Dashboard</h4>
                        </div>
                        <p class="text-sm text-gray-700 mb-3">
                            Comprehensive system analytics and performance monitoring.
                        </p>
                        <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg text-sm hover:bg-blue-700 transition-colors">
                            View Analytics
                        </button>
                    </div>
                    
                    <div class="bg-white rounded-xl p-4 border border-blue-200">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-shield-alt text-green-500 mr-2"></i>
                            <h4 class="font-semibold text-gray-900">Security Center</h4>
                        </div>
                        <p class="text-sm text-gray-700 mb-3">
                            Monitor security threats and manage access controls.
                        </p>
                        <button class="w-full bg-green-600 text-white py-2 px-4 rounded-lg text-sm hover:bg-green-700 transition-colors">
                            Security Panel
                        </button>
                    </div>
                    
                    <div class="bg-white rounded-xl p-4 border border-blue-200">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-cogs text-purple-500 mr-2"></i>
                            <h4 class="font-semibold text-gray-900">System Configuration</h4>
                        </div>
                        <p class="text-sm text-gray-700 mb-3">
                            Configure system settings and manage integrations.
                        </p>
                        <button class="w-full bg-purple-600 text-white py-2 px-4 rounded-lg text-sm hover:bg-purple-700 transition-colors">
                            Configure
                        </button>
                    </div>
                    
                    <div class="bg-white rounded-xl p-4 border border-blue-200">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-robot text-yellow-500 mr-2"></i>
                            <h4 class="font-semibold text-gray-900">AI Management</h4>
                        </div>
                        <p class="text-sm text-gray-700 mb-3">
                            Manage AI services and monitor model performance.
                        </p>
                        <button class="w-full bg-yellow-600 text-white py-2 px-4 rounded-lg text-sm hover:bg-yellow-700 transition-colors">
                            AI Console
                        </button>
                    </div>
                </div>
            </div>

            <!-- Recent Administrative Activities -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-gray-900 mb-6">Recent Administrative Activities</h2>
                <div class="space-y-4">
                    <div class="flex items-center p-4 bg-green-50 border border-green-200 rounded-xl">
                        <div class="p-2 bg-green-100 rounded-lg mr-4">
                            <i class="fas fa-check text-green-600"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">System Backup Completed</h4>
                            <p class="text-sm text-gray-600">Full system backup to cloud storage</p>
                            <p class="text-xs text-gray-500">2 hours ago</p>
                        </div>
                        <span class="text-sm font-medium text-green-600">Success</span>
                    </div>

                    <div class="flex items-center p-4 bg-blue-50 border border-blue-200 rounded-xl">
                        <div class="p-2 bg-blue-100 rounded-lg mr-4">
                            <i class="fas fa-user-plus text-blue-600"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">New Users Approved</h4>
                            <p class="text-sm text-gray-600">Approved 23 new student registrations</p>
                            <p class="text-xs text-gray-500">6 hours ago</p>
                        </div>
                    </div>

                    <div class="flex items-center p-4 bg-purple-50 border border-purple-200 rounded-xl">
                        <div class="p-2 bg-purple-100 rounded-lg mr-4">
                            <i class="fas fa-server text-purple-600"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Server Maintenance</h4>
                            <p class="text-sm text-gray-600">Updated AI processing servers</p>
                            <p class="text-xs text-gray-500">1 day ago</p>
                        </div>
                    </div>

                    <div class="flex items-center p-4 bg-yellow-50 border border-yellow-200 rounded-xl">
                        <div class="p-2 bg-yellow-100 rounded-lg mr-4">
                            <i class="fas fa-exclamation-triangle text-yellow-600"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Security Alert Resolved</h4>
                            <p class="text-sm text-gray-600">Resolved potential security vulnerability</p>
                            <p class="text-xs text-gray-500">2 days ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
