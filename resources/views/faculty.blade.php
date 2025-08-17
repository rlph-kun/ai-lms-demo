@extends('layouts.faculty')

@section('title', 'Faculty Dashboard - CCDI AI LMS')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Welcome Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Welcome, Professor Gardon!</h1>
        <p class="text-gray-600 mt-2">Monitor student progress and gain insights into your courses.</p>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center">
                <div class="p-3 bg-blue-100 rounded-xl">
                    <i class="fas fa-users text-blue-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Total Students</p>
                    <p class="text-2xl font-bold text-gray-900">142</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center">
                <div class="p-3 bg-green-100 rounded-xl">
                    <i class="fas fa-book text-green-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Active Courses</p>
                    <p class="text-2xl font-bold text-gray-900">4</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center">
                <div class="p-3 bg-yellow-100 rounded-xl">
                    <i class="fas fa-exclamation-triangle text-yellow-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">At-Risk Students</p>
                    <p class="text-2xl font-bold text-gray-900">8</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-200">
            <div class="flex items-center">
                <div class="p-3 bg-purple-100 rounded-xl">
                    <i class="fas fa-chart-line text-purple-600 text-xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Avg. Engagement</p>
                    <p class="text-2xl font-bold text-gray-900">87%</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Analytics Charts -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-gray-900 mb-6">Student Engagement Analytics</h2>
                
                <!-- Chart Placeholder -->
                <div class="relative h-64 bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl mb-6 flex items-center justify-center border border-blue-200">
                    <div class="text-center">
                        <i class="fas fa-chart-bar text-blue-600 text-3xl mb-2"></i>
                        <p class="text-gray-700 font-medium">Student Engagement Over Time</p>
                        <p class="text-sm text-gray-500">Interactive chart showing daily engagement metrics</p>
                    </div>
                </div>

                <!-- Engagement Metrics -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="text-center p-4 bg-blue-50 rounded-xl border border-blue-200">
                        <div class="text-2xl font-bold text-blue-600">92%</div>
                        <div class="text-sm text-gray-600">Attendance Rate</div>
                    </div>
                    <div class="text-center p-4 bg-green-50 rounded-xl border border-green-200">
                        <div class="text-2xl font-bold text-green-600">78%</div>
                        <div class="text-sm text-gray-600">Assignment Completion</div>
                    </div>
                    <div class="text-center p-4 bg-purple-50 rounded-xl border border-purple-200">
                        <div class="text-2xl font-bold text-purple-600">85%</div>
                        <div class="text-sm text-gray-600">Active Participation</div>
                    </div>
                </div>
            </div>

            <!-- Quiz Performance -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-gray-900 mb-6">Quiz Performance Analysis</h2>
                
                <!-- Performance Chart -->
                <div class="relative h-48 bg-gradient-to-br from-green-50 to-blue-50 rounded-xl mb-6 flex items-center justify-center border border-green-200">
                    <div class="text-center">
                        <i class="fas fa-chart-line text-green-600 text-3xl mb-2"></i>
                        <p class="text-gray-700 font-medium">Quiz Scores Distribution</p>
                        <p class="text-sm text-gray-500">Recent quiz performance across all courses</p>
                    </div>
                </div>

                <!-- Recent Quizzes -->
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div>
                            <h4 class="font-medium text-gray-900">Neural Networks Quiz</h4>
                            <p class="text-sm text-gray-600">AI Fundamentals • 45 students</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-bold text-green-600">82%</div>
                            <div class="text-xs text-gray-500">Avg. Score</div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div>
                            <h4 class="font-medium text-gray-900">Database Normalization</h4>
                            <p class="text-sm text-gray-600">Database Management • 38 students</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-bold text-blue-600">75%</div>
                            <div class="text-xs text-gray-500">Avg. Score</div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <div>
                            <h4 class="font-medium text-gray-900">Algorithm Complexity</h4>
                            <p class="text-sm text-gray-600">Data Structures • 42 students</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-bold text-yellow-600">68%</div>
                            <div class="text-xs text-gray-500">Avg. Score</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course Performance -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-gray-900 mb-6">Course Performance Overview</h2>
                <div class="space-y-4">
                    <div class="p-4 border border-gray-200 rounded-xl hover:border-blue-200 transition-colors duration-200">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-brain text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Artificial Intelligence</h3>
                                    <p class="text-sm text-gray-600">45 students • CS 401</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-sm font-medium text-green-600">85% Avg Grade</span>
                                <p class="text-xs text-gray-500">Above target</p>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>

                    <div class="p-4 border border-gray-200 rounded-xl hover:border-blue-200 transition-colors duration-200">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-database text-purple-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Database Management</h3>
                                    <p class="text-sm text-gray-600">38 students • CS 302</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-sm font-medium text-blue-600">78% Avg Grade</span>
                                <p class="text-xs text-gray-500">On target</p>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 78%"></div>
                        </div>
                    </div>

                    <div class="p-4 border border-gray-200 rounded-xl hover:border-blue-200 transition-colors duration-200">
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-code text-green-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900">Data Structures</h3>
                                    <p class="text-sm text-gray-600">42 students • CS 301</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="text-sm font-medium text-yellow-600">72% Avg Grade</span>
                                <p class="text-xs text-gray-500">Needs attention</p>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 72%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Predictive Alerts -->
            <div class="bg-gradient-to-br from-red-50 to-orange-100 rounded-2xl p-6 border border-red-200">
                <div class="flex items-center mb-4">
                    <div class="p-2 bg-red-600 rounded-lg mr-3">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                    <h2 class="text-lg font-bold text-gray-900">AI Predictive Alerts</h2>
                </div>
                
                <div class="space-y-3">
                    <div class="p-3 bg-white rounded-lg border border-red-200">
                        <div class="flex items-center mb-2">
                            <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center mr-2">
                                <span class="text-red-600 text-xs font-bold">!</span>
                            </div>
                            <h4 class="text-sm font-semibold text-gray-900">High Risk</h4>
                        </div>
                        <p class="text-xs text-gray-700 mb-1"><strong>Maria Lopez</strong> - AI Fundamentals</p>
                        <p class="text-xs text-gray-600">85% likely to fail based on current trajectory</p>
                    </div>
                    
                    <div class="p-3 bg-white rounded-lg border border-orange-200">
                        <div class="flex items-center mb-2">
                            <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-2">
                                <span class="text-orange-600 text-xs font-bold">!</span>
                            </div>
                            <h4 class="text-sm font-semibold text-gray-900">Medium Risk</h4>
                        </div>
                        <p class="text-xs text-gray-700 mb-1"><strong>John Cruz</strong> - Database Management</p>
                        <p class="text-xs text-gray-600">Declining engagement for 2 weeks</p>
                    </div>
                    
                    <div class="p-3 bg-white rounded-lg border border-yellow-200">
                        <div class="flex items-center mb-2">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mr-2">
                                <span class="text-yellow-600 text-xs font-bold">!</span>
                            </div>
                            <h4 class="text-sm font-semibold text-gray-900">Watch List</h4>
                        </div>
                        <p class="text-xs text-gray-700 mb-1"><strong>Anna Santos</strong> - Data Structures</p>
                        <p class="text-xs text-gray-600">Missed last 2 assignments</p>
                    </div>
                </div>
                
                <button class="w-full mt-4 bg-red-600 text-white py-2 px-4 rounded-lg text-sm font-medium hover:bg-red-700 transition-colors duration-200">
                    View All Alerts
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
                            <p class="text-sm font-medium text-gray-900">Quiz graded</p>
                            <p class="text-xs text-gray-600">Neural Networks - 45 submissions</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-upload text-blue-600 text-xs"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">New material uploaded</p>
                            <p class="text-xs text-gray-600">AI Ethics presentation</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-comments text-purple-600 text-xs"></i>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Student questions</p>
                            <p class="text-xs text-gray-600">3 new forum posts</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-lg font-bold text-gray-900 mb-4">Quick Actions</h2>
                <div class="space-y-2">
                    <button class="w-full flex items-center p-3 rounded-lg border border-gray-200 hover:border-blue-300 hover:bg-blue-50 transition-all duration-200">
                        <i class="fas fa-plus text-blue-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">Create Quiz</span>
                    </button>
                    <button class="w-full flex items-center p-3 rounded-lg border border-gray-200 hover:border-green-300 hover:bg-green-50 transition-all duration-200">
                        <i class="fas fa-upload text-green-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">Upload Material</span>
                    </button>
                    <button class="w-full flex items-center p-3 rounded-lg border border-gray-200 hover:border-purple-300 hover:bg-purple-50 transition-all duration-200">
                        <i class="fas fa-chart-bar text-purple-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">View Reports</span>
                    </button>
                    <button class="w-full flex items-center p-3 rounded-lg border border-gray-200 hover:border-yellow-300 hover:bg-yellow-50 transition-all duration-200">
                        <i class="fas fa-envelope text-yellow-600 mr-3"></i>
                        <span class="text-sm font-medium text-gray-900">Message Students</span>
                    </button>
                </div>
            </div>

            <!-- Top Performers -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-lg font-bold text-gray-900 mb-4">Top Performers</h2>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-yellow-100 rounded-full flex items-center justify-center mr-3">
                            <span class="text-yellow-600 text-xs font-bold">1</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Maria Santos</p>
                            <p class="text-xs text-gray-600">95.2% average</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center mr-3">
                            <span class="text-gray-600 text-xs font-bold">2</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">John Doe</p>
                            <p class="text-xs text-gray-600">92.8% average</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                            <span class="text-orange-600 text-xs font-bold">3</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-gray-900">Lisa Wang</p>
                            <p class="text-xs text-gray-600">90.5% average</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
