@extends('layouts.faculty')

@section('title', 'Faculty Profile - CCDI AI LMS')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Profile Info -->
        <div class="lg:col-span-1 space-y-6">
            <!-- Basic Info Card -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <div class="text-center">
                    <div class="relative inline-block">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                             alt="Profile Picture" 
                             class="w-24 h-24 rounded-full object-cover mx-auto border-4 border-white shadow-lg">
                        <div class="absolute bottom-0 right-0 w-6 h-6 bg-green-500 rounded-full border-2 border-white"></div>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900 mt-4">Prof. Bonel Gardon</h2>
                    <p class="text-gray-600">Professor of Computer Science</p>
                    <p class="text-sm text-gray-500 mt-1">Faculty ID: FAC-2019-CS-003</p>
                </div>
                
                <div class="mt-6 space-y-4">
                    <div class="flex items-center">
                        <i class="fas fa-envelope text-gray-400 w-5"></i>
                        <span class="text-sm text-gray-700 ml-3">e.johnson@ccdi.edu.ph</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone text-gray-400 w-5"></i>
                        <span class="text-sm text-gray-700 ml-3">+63 915 888 9012</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt text-gray-400 w-5"></i>
                        <span class="text-sm text-gray-700 ml-3">Sorsogon City, Philippines</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-calendar text-gray-400 w-5"></i>
                        <span class="text-sm text-gray-700 ml-3">Joined: September 2019</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-building text-gray-400 w-5"></i>
                        <span class="text-sm text-gray-700 ml-3">Room 304, CS Building</span>
                    </div>
                </div>

                <button class="w-full mt-6 bg-blue-600 text-white py-2 px-4 rounded-xl hover:bg-blue-700 transition-colors duration-200">
                    Edit Profile
                </button>
            </div>

            <!-- Academic Credentials -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Academic Credentials</h3>
                <div class="space-y-3">
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Highest Degree</span>
                        <span class="text-sm font-medium text-gray-900">PhD Computer Science</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Specialization</span>
                        <span class="text-sm font-medium text-gray-900">Data Structures & Algorithms</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Teaching Experience</span>
                        <span class="text-sm font-medium text-gray-900">12 Years</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Research Papers</span>
                        <span class="text-sm font-medium text-gray-900">47 Published</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-600">Department</span>
                        <span class="text-sm font-medium text-gray-900">Computer Science</span>
                    </div>
                </div>
            </div>

            <!-- Teaching Load -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Current Teaching Load</h3>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-gray-600">Weekly Hours</span>
                            <span class="font-medium text-gray-900">18/21 hours</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-gray-600">Student Capacity</span>
                            <span class="font-medium text-gray-900">145/150 students</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 97%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm mb-1">
                            <span class="text-gray-600">Course Preparation</span>
                            <span class="font-medium text-gray-900">92% Complete</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-purple-500 h-2 rounded-full" style="width: 92%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Teaching Courses -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-gray-900">Current Teaching Courses</h2>
                    <span class="text-sm text-gray-500">Spring 2025</span>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Course</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Students</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Progress</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Avg Grade</th>
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
                                            <div class="text-sm text-gray-500">CS 301 - Section A</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">45 students</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-full bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-green-600 h-2 rounded-full" style="width: 75%"></div>
                                        </div>
                                        <span class="text-sm text-gray-600">75%</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">87.2</td>
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
                                            <i class="fas fa-sitemap text-purple-600"></i>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Advanced Algorithms</div>
                                            <div class="text-sm text-gray-500">CS 401 - Section B</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">32 students</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-full bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-blue-600 h-2 rounded-full" style="width: 60%"></div>
                                        </div>
                                        <span class="text-sm text-gray-600">60%</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-purple-600">84.5</td>
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
                                            <i class="fas fa-project-diagram text-green-600"></i>
                                        </div>
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">Software Engineering</div>
                                            <div class="text-sm text-gray-500">CS 350 - Section C</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">38 students</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-full bg-gray-200 rounded-full h-2 mr-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 40%"></div>
                                        </div>
                                        <span class="text-sm text-gray-600">40%</span>
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

            <!-- Teaching Analytics -->
            <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl p-6 border border-blue-200">
                <div class="flex items-center mb-4">
                    <div class="p-2 bg-blue-600 rounded-lg mr-3">
                        <i class="fas fa-chart-line text-white"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-900">Teaching Analytics & Insights</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white rounded-xl p-4 border border-blue-200">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-users text-blue-500 mr-2"></i>
                            <h4 class="font-semibold text-gray-900">Student Engagement</h4>
                        </div>
                        <p class="text-sm text-gray-700">
                            Your students show 92% engagement rate in online activities, 
                            which is 15% above the department average.
                        </p>
                        <div class="mt-2 w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: 92%"></div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl p-4 border border-blue-200">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-comments text-green-500 mr-2"></i>
                            <h4 class="font-semibold text-gray-900">AI Chatbot Interactions</h4>
                        </div>
                        <p class="text-sm text-gray-700">
                            Students in your courses asked 1,247 questions to the AI assistant 
                            this month, mostly about algorithms.
                        </p>
                        <div class="mt-2 text-xs text-green-600 font-medium">+23% from last month</div>
                    </div>
                    
                    <div class="bg-white rounded-xl p-4 border border-blue-200">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-star text-yellow-500 mr-2"></i>
                            <h4 class="font-semibold text-gray-900">Student Feedback</h4>
                        </div>
                        <p class="text-sm text-gray-700">
                            Average rating: 4.8/5.0 based on 89 student evaluations. 
                            Students appreciate your clear explanations.
                        </p>
                        <div class="mt-2 flex text-yellow-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl p-4 border border-blue-200">
                        <div class="flex items-center mb-2">
                            <i class="fas fa-trophy text-purple-500 mr-2"></i>
                            <h4 class="font-semibold text-gray-900">Student Performance</h4>
                        </div>
                        <p class="text-sm text-gray-700">
                            Your students achieve 12% higher grades on average compared 
                            to similar courses department-wide.
                        </p>
                        <div class="mt-2 text-xs text-purple-600 font-medium">Excellent teaching impact</div>
                    </div>
                </div>
            </div>

            <!-- Recent Teaching Activities -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-gray-900 mb-6">Recent Teaching Activities</h2>
                <div class="space-y-4">
                    <div class="flex items-center p-4 bg-green-50 border border-green-200 rounded-xl">
                        <div class="p-2 bg-green-100 rounded-lg mr-4">
                            <i class="fas fa-check text-green-600"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Assignments Graded</h4>
                            <p class="text-sm text-gray-600">Graded 45 Data Structures assignments</p>
                            <p class="text-xs text-gray-500">3 hours ago</p>
                        </div>
                        <span class="text-sm font-medium text-green-600">Completed</span>
                    </div>

                    <div class="flex items-center p-4 bg-blue-50 border border-blue-200 rounded-xl">
                        <div class="p-2 bg-blue-100 rounded-lg mr-4">
                            <i class="fas fa-video text-blue-600"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Lecture Recorded</h4>
                            <p class="text-sm text-gray-600">Advanced Algorithms - Graph Theory</p>
                            <p class="text-xs text-gray-500">1 day ago</p>
                        </div>
                    </div>

                    <div class="flex items-center p-4 bg-purple-50 border border-purple-200 rounded-xl">
                        <div class="p-2 bg-purple-100 rounded-lg mr-4">
                            <i class="fas fa-calendar-plus text-purple-600"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Office Hours Scheduled</h4>
                            <p class="text-sm text-gray-600">Added extra office hours for midterm prep</p>
                            <p class="text-xs text-gray-500">2 days ago</p>
                        </div>
                    </div>

                    <div class="flex items-center p-4 bg-yellow-50 border border-yellow-200 rounded-xl">
                        <div class="p-2 bg-yellow-100 rounded-lg mr-4">
                            <i class="fas fa-book text-yellow-600"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Course Material Updated</h4>
                            <p class="text-sm text-gray-600">Updated Software Engineering syllabus</p>
                            <p class="text-xs text-gray-500">3 days ago</p>
                        </div>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-2 gap-4">
                    <button class="flex items-center justify-center p-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fas fa-plus mr-2"></i>
                        New Assignment
                    </button>
                    <button class="flex items-center justify-center p-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                        <i class="fas fa-chart-bar mr-2"></i>
                        View Analytics
                    </button>
                </div>
            </div>

            <!-- Research & Publications -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-gray-900 mb-6">Research & Publications</h2>
                <div class="space-y-4">
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h4 class="font-semibold text-gray-900 mb-2">Recent Publications</h4>
                        <div class="space-y-2">
                            <div class="flex items-start">
                                <div class="w-2 h-2 bg-blue-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">
                                        "Optimizing Binary Search Trees for Educational Applications"
                                    </p>
                                    <p class="text-xs text-gray-500">International Journal of Computer Science Education, 2024</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-2 h-2 bg-green-500 rounded-full mt-2 mr-3 flex-shrink-0"></div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">
                                        "AI-Assisted Algorithm Visualization for Student Learning"
                                    </p>
                                    <p class="text-xs text-gray-500">Proceedings of Educational Technology Conference, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border border-gray-200 rounded-lg p-4">
                        <h4 class="font-semibold text-gray-900 mb-2">Current Research Projects</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-700">Machine Learning in Education</span>
                                <span class="text-xs text-blue-600 bg-blue-100 px-2 py-1 rounded">In Progress</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-700">Algorithm Complexity Visualization</span>
                                <span class="text-xs text-green-600 bg-green-100 px-2 py-1 rounded">Published</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
