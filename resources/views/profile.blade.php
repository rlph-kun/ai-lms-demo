@php
    $role = request()->get('role', 'student');
    $layout = 'layouts.' . $role;
@endphp

@extends($layout)

@section('title', 'Student Profile - CCDI AI LMS')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Profile Info -->
        <div class="lg:col-span-1 space-y-6">
            <!-- Basic Info Card -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <div class="text-center">
                    <div class="relative inline-block">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b9c5e6e1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" 
                             alt="Profile Picture" 
                             class="w-24 h-24 rounded-full object-cover mx-auto border-4 border-white shadow-lg">
                        <div class="absolute bottom-0 right-0 w-6 h-6 bg-green-500 rounded-full border-2 border-white"></div>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mt-4">Maria Santos</h2>
                    <p class="text-gray-600">Computer Science Student</p>
                    <p class="text-sm text-gray-500 mt-1">Student ID: 2025-CS-001</p>
                </div>
                
                <div class="mt-6 space-y-4">
                    <div class="flex items-center">
                        <i class="fas fa-envelope text-gray-400 w-5"></i>
                        <span class="text-sm text-gray-700 ml-3">maria.santos@ccdi.edu.ph</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone text-gray-400 w-5"></i>
                        <span class="text-sm text-gray-700 ml-3">+63 912 345 6789</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt text-gray-400 w-5"></i>
                        <span class="text-sm text-gray-700 ml-3">Sorsogon City, Philippines</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar text-gray-400 w-5"></i>
                        <span class="text-sm text-gray-700 ml-3">Enrolled: August 2023</span>
                    </div>
                </div>

                <button class="w-full mt-6 bg-blue-600 text-white py-2 px-4 rounded-xl hover:bg-blue-700 transition-colors duration-200">
                    Edit Profile
                </button>
            </div>

            <!-- Academic Status -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Academic Status</h3>
                <div class="space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Program</span>
                        <span class="text-sm font-medium text-gray-900">BS Computer Science</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Year Level</span>
                        <span class="text-sm font-medium text-gray-900">3rd Year</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Semester</span>
                        <span class="text-sm font-medium text-gray-900">2nd Semester</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Academic Year</span>
                        <span class="text-sm font-medium text-gray-900">2024-2025</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">GPA</span>
                        <span class="text-sm font-medium text-green-600">3.85 / 4.0</span>
                    </div>
                </div>
            </div>

            <!-- Progress Indicators -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Progress Indicators</h3>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-gray-600">Degree Completion</span>
                            <span class="font-medium text-gray-900">75%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-gray-600">Current Semester</span>
                            <span class="font-medium text-gray-900">60%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 60%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-gray-600">Study Hours Goal</span>
                            <span class="font-medium text-gray-900">85%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Enrolled Courses -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-gray-900">Enrolled Courses</h2>
                    <span class="text-sm text-gray-500">Spring 2025</span>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Professor</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Progress</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Grade</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                            <i class="fas fa-code text-blue-600"></i>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Data Structures & Algorithms</div>
                                            <div class="text-sm text-gray-500">CS 301</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Dr. Johnson</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-full bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-green-600 h-2 rounded-full" style="width: 85%"></div>
                                        </div>
                                        <span class="text-sm text-gray-600">85%</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-600">92.5</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                        On Track
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                            <i class="fas fa-database text-purple-600"></i>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Database Management</div>
                                            <div class="text-sm text-gray-500">CS 302</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Prof. Smith</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-full bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-blue-600 h-2 rounded-full" style="width: 70%"></div>
                                        </div>
                                        <span class="text-sm text-gray-600">70%</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">89.0</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                        In Progress
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                            <i class="fas fa-brain text-green-600"></i>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Artificial Intelligence</div>
                                            <div class="text-sm text-gray-500">CS 401</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Dr. Garcia</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-full bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 45%"></div>
                                        </div>
                                        <span class="text-sm text-gray-600">45%</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500">TBD</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                                        Just Started
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- AI Recommendations -->
            <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl p-6 border border-blue-200">
                <div class="flex items-center mb-4">
                    <div class="p-2 bg-blue-600 rounded-lg mr-3">
                        <i class="fas fa-robot text-white"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900">AI Recommendations</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white rounded-xl p-4 border border-blue-200">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>
                            <h4 class="font-semibold text-gray-900">Study Suggestion</h4>
                        </div>
                        <p class="text-sm text-gray-700">
                            Focus more time on AI coursework. Your current progress suggests you could benefit 
                            from additional practice with neural network concepts.
                        </p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-4 border border-blue-200">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-clock text-blue-500 mr-2"></i>
                            <h4 class="font-semibold text-gray-900">Schedule Optimization</h4>
                        </div>
                        <p class="text-sm text-gray-700">
                            Your most productive study time is 2-4 PM. Consider scheduling challenging 
                            subjects during this window.
                        </p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-4 border border-blue-200">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-users text-green-500 mr-2"></i>
                            <h4 class="font-semibold text-gray-900">Study Groups</h4>
                        </div>
                        <p class="text-sm text-gray-700">
                            Join the Database Management study group. Students with similar performance 
                            patterns have shown 15% improvement.
                        </p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-4 border border-blue-200">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-target text-purple-500 mr-2"></i>
                            <h4 class="font-semibold text-gray-900">Goal Setting</h4>
                        </div>
                        <p class="text-sm text-gray-700">
                            You're on track to achieve a 3.9 GPA this semester. Maintain current study 
                            habits and focus on upcoming deadlines.
                        </p>
                    </div>
                </div>
                
                <button class="w-full mt-4 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-200">
                    Get Detailed Study Plan
                </button>
            </div>

            <!-- Recent Activities -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-gray-900 mb-6">Recent Activities</h2>
                <div class="space-y-4">
                    <div class="flex items-center p-4 bg-green-50 border border-green-200 rounded-xl">
                        <div class="p-2 bg-green-100 rounded-lg mr-4">
                            <i class="fas fa-check text-green-600"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Assignment Completed</h4>
                            <p class="text-sm text-gray-600">Database Design Project - CS 302</p>
                            <p class="text-xs text-gray-500">2 hours ago</p>
                        </div>
                        <span class="text-sm font-medium text-green-600">Grade: 95</span>
                    </div>

                    <div class="flex items-center p-4 bg-blue-50 border border-blue-200 rounded-xl">
                        <div class="p-2 bg-blue-100 rounded-lg mr-4">
                            <i class="fas fa-comments text-blue-600"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">AI Chat Session</h4>
                            <p class="text-sm text-gray-600">Asked about binary tree traversal algorithms</p>
                            <p class="text-xs text-gray-500">5 hours ago</p>
                        </div>
                    </div>

                    <div class="flex items-center p-4 bg-purple-50 border border-purple-200 rounded-xl">
                        <div class="p-2 bg-purple-100 rounded-lg mr-4">
                            <i class="fas fa-file-text text-purple-600"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Notes Summarized</h4>
                            <p class="text-sm text-gray-600">AI Fundamentals lecture notes</p>
                            <p class="text-xs text-gray-500">1 day ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
