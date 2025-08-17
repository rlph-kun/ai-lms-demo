@extends('layouts.student')

@section('title', 'Student Dashboard - CCDI AI LMS')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Welcome Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Welcome back, Maria!</h1>
        <p class="text-gray-600 mt-2">Here's what's happening with your studies today.</p>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-xl">
                    <i class="fas fa-book text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Active Courses</p>
                    <p class="text-2xl font-bold text-gray-900">6</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-xl">
                    <i class="fas fa-tasks text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Assignments Due</p>
                    <p class="text-2xl font-bold text-gray-900">3</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center">
                <div class="p-3 bg-yellow-100 rounded-xl">
                    <i class="fas fa-clock text-yellow-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Study Hours</p>
                    <p class="text-2xl font-bold text-gray-900">24.5</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-xl">
                    <i class="fas fa-chart-line text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Average Grade</p>
                    <p class="text-2xl font-bold text-gray-900">92.5%</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Course Progress -->
        <div class="lg:col-span-2 space-y-6">
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-gray-900 mb-6">Course Progress</h2>
                <div class="space-y-4">
                    <!-- Course 1 -->
                    <div class="p-4 border border-gray-200 rounded-xl hover:border-blue-200 transition-colors duration-200">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-code text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Data Structures & Algorithms</h3>
                                    <p class="text-sm text-gray-600">Prof. Johnson</p>
                                </div>
                            </div>
                            <span class="text-sm font-medium text-green-600">85% Complete</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>

                    <!-- Course 2 -->
                    <div class="p-4 border border-gray-200 rounded-xl hover:border-blue-200 transition-colors duration-200">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-database text-purple-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Database Management</h3>
                                    <p class="text-sm text-gray-600">Prof. Smith</p>
                                </div>
                            </div>
                            <span class="text-sm font-medium text-blue-600">70% Complete</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 70%"></div>
                        </div>
                    </div>

                    <!-- Course 3 -->
                    <div class="p-4 border border-gray-200 rounded-xl hover:border-blue-200 transition-colors duration-200">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-brain text-green-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Artificial Intelligence</h3>
                                    <p class="text-sm text-gray-600">Prof. Garcia</p>
                                </div>
                            </div>
                            <span class="text-sm font-medium text-yellow-600">45% Complete</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Deadlines -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-gray-900 mb-6">Upcoming Deadlines</h2>
                <div class="space-y-4">
                    <div class="flex items-center p-4 bg-red-50 border border-red-200 rounded-xl">
                        <div class="p-2 bg-red-100 rounded-lg mr-4">
                            <i class="fas fa-exclamation-triangle text-red-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900">Database Project Submission</h3>
                            <p class="text-sm text-gray-600">Due: Tomorrow, 11:59 PM</p>
                        </div>
                        <span class="text-sm font-medium text-red-600">High Priority</span>
                    </div>

                    <div class="flex items-center p-4 bg-yellow-50 border border-yellow-200 rounded-xl">
                        <div class="p-2 bg-yellow-100 rounded-lg mr-4">
                            <i class="fas fa-clock text-yellow-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900">AI Research Paper</h3>
                            <p class="text-sm text-gray-600">Due: March 15, 2025</p>
                        </div>
                        <span class="text-sm font-medium text-yellow-600">Medium Priority</span>
                    </div>

                    <div class="flex items-center p-4 bg-blue-50 border border-blue-200 rounded-xl">
                        <div class="p-2 bg-blue-100 rounded-lg mr-4">
                            <i class="fas fa-file-alt text-blue-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900">Algorithm Analysis Quiz</h3>
                            <p class="text-sm text-gray-600">Due: March 20, 2025</p>
                        </div>
                        <span class="text-sm font-medium text-blue-600">Low Priority</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- AI Recommendations -->
            <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl p-6 border border-blue-200">
                <div class="flex items-center mb-4">
                    <div class="p-2 bg-blue-600 rounded-lg mr-3">
                        <i class="fas fa-robot text-white"></i>
                    </div>
                    <h2 class="text-lg font-bold text-gray-900">AI Recommendations</h2>
                </div>
                <div class="space-y-3">
                    <div class="p-3 bg-white rounded-lg border border-blue-200">
                        <p class="text-sm text-gray-800 font-medium">Study Suggestion</p>
                        <p class="text-xs text-gray-600 mt-1">Focus on Binary Trees this week to improve your DSA performance.</p>
                    </div>
                    <div class="p-3 bg-white rounded-lg border border-blue-200">
                        <p class="text-sm text-gray-800 font-medium">Schedule Optimization</p>
                        <p class="text-xs text-gray-600 mt-1">Best study time for you: 2-4 PM based on your activity patterns.</p>
                    </div>
                </div>
                <button class="w-full mt-4 bg-blue-600 text-white py-2 px-4 rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors duration-200">
                    Get More Insights
                </button>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-lg font-bold text-gray-900 mb-4">Recent Activity</h2>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-check text-green-600 text-xs"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Completed Module 5</p>
                            <p class="text-xs text-gray-600">Database Management</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-upload text-blue-600 text-xs"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Submitted Assignment</p>
                            <p class="text-xs text-gray-600">Data Structures</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-comments text-purple-600 text-xs"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Used AI Chat</p>
                            <p class="text-xs text-gray-600">Asked about algorithms</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-lg font-bold text-gray-900 mb-4">Quick Actions</h2>
                <div class="space-y-2">
                    <a href="/chatbot" class="flex items-center p-3 rounded-lg border border-gray-200 hover:border-blue-300 hover:bg-blue-50 transition-all duration-200">
                        <i class="fas fa-robot text-blue-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">Ask AI Tutor</span>
                    </a>
                    <a href="/summarization" class="flex items-center p-3 rounded-lg border border-gray-200 hover:border-green-300 hover:bg-green-50 transition-all duration-200">
                        <i class="fas fa-file-text text-green-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">Summarize Notes</span>
                    </a>
                    <a href="/profile" class="flex items-center p-3 rounded-lg border border-gray-200 hover:border-purple-300 hover:bg-purple-50 transition-all duration-200">
                        <i class="fas fa-user text-purple-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">View Profile</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
