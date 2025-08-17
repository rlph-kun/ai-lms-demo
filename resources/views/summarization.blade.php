@php
    $role = request()->get('role', 'student');
    $layout = 'layouts.' . $role;
@endphp

@extends($layout)

@section('title', 'AI Lesson Summarization - CCDI AI LMS')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="text-center mb-8">
        <div class="mx-auto w-16 h-16 bg-gradient-to-br from-green-500 to-blue-600 rounded-2xl flex items-center justify-center mb-4">
            <i class="fas fa-file-text text-white text-2xl"></i>
        </div>
        <h1 class="text-3xl font-bold text-gray-900 mb-2">AI Lesson Summarization</h1>
        <p class="text-gray-600">Transform lengthy lecture notes into concise, actionable summaries</p>
    </div>

    <!-- Controls -->
    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 mb-8">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-book text-blue-600"></i>
                    <span class="text-sm font-medium text-gray-700">Course:</span>
                    <select class="text-sm border border-gray-300 rounded-lg px-3 py-1">
                        <option>Artificial Intelligence</option>
                        <option>Database Management</option>
                        <option>Data Structures</option>
                    </select>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-calendar text-green-600"></i>
                    <span class="text-sm font-medium text-gray-700">Lesson:</span>
                    <select class="text-sm border border-gray-300 rounded-lg px-3 py-1">
                        <option>Introduction to AI</option>
                        <option>Machine Learning Basics</option>
                        <option>Neural Networks</option>
                    </select>
                </div>
            </div>
            <button class="bg-gradient-to-r from-green-500 to-blue-600 text-white px-6 py-2 rounded-xl hover:from-green-600 hover:to-blue-700 transition-all duration-200 transform hover:scale-105 flex items-center space-x-2">
                <i class="fas fa-magic"></i>
                <span>Generate New Summary</span>
            </button>
        </div>
    </div>

    <!-- Split Screen Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Original Lecture Notes -->
        <div class="space-y-6">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-200 bg-gray-50">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-bold text-gray-900 flex items-center">
                            <i class="fas fa-file-alt text-gray-600 mr-3"></i>
                            Original Lecture Notes
                        </h2>
                        <span class="text-sm text-gray-500">1,247 words</span>
                    </div>
                </div>
                
                <div class="p-6 h-[600px] overflow-y-auto">
                    <div class="prose prose-sm max-w-none">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Introduction to Artificial Intelligence</h3>
                        
                        <h4 class="font-semibold text-gray-800 mb-2">Definition and Overview</h4>
                        <p class="text-gray-700 mb-4">
                            Artificial Intelligence (AI) is the simulation of human intelligence processes by machines, 
                            especially computer systems. These processes include learning (the acquisition of information 
                            and rules for using the information), reasoning (using rules to reach approximate or definite 
                            conclusions), and self-correction.
                        </p>

                        <h4 class="font-semibold text-gray-800 mb-2">Types of AI</h4>
                        <p class="text-gray-700 mb-2">
                            AI can be categorized into several types based on capabilities and functionalities:
                        </p>
                        <ul class="list-disc pl-6 text-gray-700 mb-4 space-y-1">
                            <li><strong>Narrow AI (Weak AI):</strong> Designed to perform specific tasks like speech recognition, 
                            image classification, or playing chess. Examples include Siri, Alexa, and recommendation systems.</li>
                            <li><strong>General AI (Strong AI):</strong> Hypothetical AI that would have human-like cognitive 
                            abilities across multiple domains. This type of AI doesn't exist yet.</li>
                            <li><strong>Superintelligent AI:</strong> AI that surpasses human intelligence in all aspects. 
                            This is purely theoretical at this point.</li>
                        </ul>

                        <h4 class="font-semibold text-gray-800 mb-2">Machine Learning</h4>
                        <p class="text-gray-700 mb-4">
                            Machine Learning (ML) is a subset of AI that provides systems the ability to automatically 
                            learn and improve from experience without being explicitly programmed. ML focuses on the 
                            development of computer programs that can access data and use it to learn for themselves.
                        </p>

                        <h4 class="font-semibold text-gray-800 mb-2">Deep Learning</h4>
                        <p class="text-gray-700 mb-4">
                            Deep Learning is a branch of machine learning that uses neural networks with multiple layers 
                            (hence "deep") to model and understand complex patterns in data. It's particularly effective 
                            for tasks like image recognition, natural language processing, and speech recognition.
                        </p>

                        <h4 class="font-semibold text-gray-800 mb-2">Applications in Education</h4>
                        <p class="text-gray-700 mb-2">
                            AI is revolutionizing education through various applications:
                        </p>
                        <ul class="list-disc pl-6 text-gray-700 mb-4 space-y-1">
                            <li>Personalized learning platforms that adapt to individual student needs</li>
                            <li>Intelligent tutoring systems that provide instant feedback</li>
                            <li>Automated grading and assessment tools</li>
                            <li>Chatbots for student support and question answering</li>
                            <li>Predictive analytics to identify at-risk students</li>
                        </ul>

                        <h4 class="font-semibold text-gray-800 mb-2">Ethical Considerations</h4>
                        <p class="text-gray-700 mb-4">
                            As AI becomes more prevalent, several ethical concerns arise including bias in algorithms, 
                            privacy issues, transparency in decision-making, and the potential impact on employment. 
                            It's crucial to develop AI systems that are fair, accountable, and transparent.
                        </p>

                        <h4 class="font-semibold text-gray-800 mb-2">Real-World Example</h4>
                        <p class="text-gray-700">
                            Self-driving cars represent a complex application of AI technology. They use computer vision 
                            to detect obstacles and interpret traffic signs, machine learning to improve their performance 
                            over time, and decision-making algorithms to navigate safely in real-time traffic conditions.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- AI Generated Summary -->
        <div class="space-y-6">
            <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl shadow-sm border border-green-200 overflow-hidden">
                <div class="p-6 border-b border-green-200 bg-white">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-bold text-gray-900 flex items-center">
                            <i class="fas fa-magic text-green-600 mr-3"></i>
                            AI-Generated Summary
                        </h2>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-green-600 font-medium">87% Compression</span>
                            <span class="text-sm text-gray-500">162 words</span>
                        </div>
                    </div>
                </div>
                
                <div class="p-6 h-[600px] overflow-y-auto">
                    <div class="space-y-4">
                        <div class="bg-white rounded-xl p-4 border border-green-200">
                            <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                <span class="w-6 h-6 bg-green-500 text-white rounded-full flex items-center justify-center text-xs mr-2">1</span>
                                Key Definition
                            </h4>
                            <p class="text-gray-700 text-sm">
                                <strong>Artificial Intelligence (AI)</strong> is the simulation of human intelligence in machines, 
                                encompassing learning, reasoning, and self-correction capabilities.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl p-4 border border-blue-200">
                            <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                <span class="w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center text-xs mr-2">2</span>
                                Types of AI
                            </h4>
                            <ul class="text-gray-700 text-sm space-y-1">
                                <li>• <strong>Narrow AI:</strong> Task-specific (Siri, chess programs)</li>
                                <li>• <strong>General AI:</strong> Human-like cognitive abilities (theoretical)</li>
                                <li>• <strong>Superintelligent AI:</strong> Surpasses human intelligence (theoretical)</li>
                            </ul>
                        </div>

                        <div class="bg-white rounded-xl p-4 border border-purple-200">
                            <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                <span class="w-6 h-6 bg-purple-500 text-white rounded-full flex items-center justify-center text-xs mr-2">3</span>
                                Core Technologies
                            </h4>
                            <ul class="text-gray-700 text-sm space-y-1">
                                <li>• <strong>Machine Learning:</strong> Systems learn from data automatically</li>
                                <li>• <strong>Deep Learning:</strong> Multi-layer neural networks for complex patterns</li>
                            </ul>
                        </div>

                        <div class="bg-white rounded-xl p-4 border border-yellow-200">
                            <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                <span class="w-6 h-6 bg-yellow-500 text-white rounded-full flex items-center justify-center text-xs mr-2">4</span>
                                Educational Applications
                            </h4>
                            <ul class="text-gray-700 text-sm space-y-1">
                                <li>• Personalized learning platforms</li>
                                <li>• Intelligent tutoring systems</li>
                                <li>• Automated grading tools</li>
                                <li>• Student support chatbots</li>
                                <li>• Predictive analytics for at-risk students</li>
                            </ul>
                        </div>

                        <div class="bg-white rounded-xl p-4 border border-red-200">
                            <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                <span class="w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center text-xs mr-2">5</span>
                                Ethical Considerations
                            </h4>
                            <p class="text-gray-700 text-sm">
                                Key concerns include algorithmic bias, privacy issues, decision transparency, 
                                and employment impact requiring fair, accountable AI development.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl p-4 border border-indigo-200">
                            <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                <span class="w-6 h-6 bg-indigo-500 text-white rounded-full flex items-center justify-center text-xs mr-2">6</span>
                                Practical Example
                            </h4>
                            <p class="text-gray-700 text-sm">
                                <strong>Self-driving cars</strong> integrate computer vision, machine learning, 
                                and decision algorithms for real-time navigation and obstacle detection.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Summary Actions -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Summary Actions</h3>
                <div class="grid grid-cols-2 gap-3">
                    <button class="flex items-center justify-center p-3 border border-gray-200 rounded-xl hover:border-blue-300 hover:bg-blue-50 transition-all duration-200">
                        <i class="fas fa-download text-blue-600 mr-2"></i>
                        <span class="text-sm font-medium text-gray-900">Export PDF</span>
                    </button>
                    <button class="flex items-center justify-center p-3 border border-gray-200 rounded-xl hover:border-green-300 hover:bg-green-50 transition-all duration-200">
                        <i class="fas fa-share text-green-600 mr-2"></i>
                        <span class="text-sm font-medium text-gray-900">Share Notes</span>
                    </button>
                    <button class="flex items-center justify-center p-3 border border-gray-200 rounded-xl hover:border-purple-300 hover:bg-purple-50 transition-all duration-200">
                        <i class="fas fa-bookmark text-purple-600 mr-2"></i>
                        <span class="text-sm font-medium text-gray-900">Save to Library</span>
                    </button>
                    <button class="flex items-center justify-center p-3 border border-gray-200 rounded-xl hover:border-yellow-300 hover:bg-yellow-50 transition-all duration-200">
                        <i class="fas fa-brain text-yellow-600 mr-2"></i>
                        <span class="text-sm font-medium text-gray-900">Create Quiz</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Features -->
    <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="text-center p-6 bg-blue-50 rounded-2xl border border-blue-200">
            <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-bolt text-white"></i>
            </div>
            <h3 class="font-semibold text-gray-900 mb-2">Instant Processing</h3>
            <p class="text-sm text-gray-600">Transform lengthy documents into concise summaries in seconds.</p>
        </div>
        
        <div class="text-center p-6 bg-green-50 rounded-2xl border border-green-200">
            <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-bullseye text-white"></i>
            </div>
            <h3 class="font-semibold text-gray-900 mb-2">Key Points</h3>
            <p class="text-sm text-gray-600">AI identifies and highlights the most important concepts automatically.</p>
        </div>
        
        <div class="text-center p-6 bg-purple-50 rounded-2xl border border-purple-200">
            <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-adjust text-white"></i>
            </div>
            <h3 class="font-semibold text-gray-900 mb-2">Customizable</h3>
            <p class="text-sm text-gray-600">Adjust summary length and focus areas based on your needs.</p>
        </div>
    </div>
</div>
@endsection
