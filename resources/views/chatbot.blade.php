@php
    $role = request()->get('role', 'student');
    $layout = 'layouts.' . $role;
@endphp

@extends($layout)

@section('title', 'AI Chatbot - CCDI AI LMS')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header -->
    <div class="text-center mb-8">
        <div class="mx-auto w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mb-4">
            <i class="fas fa-robot text-white text-2xl"></i>
        </div>
        <h1 class="text-3xl font-bold text-gray-900 mb-2">AI Study Assistant</h1>
        <p class="text-gray-600">Ask me anything about your courses, assignments, or study tips!</p>
    </div>

    <!-- Chat Container -->
    <div class="bg-white rounded-2xl shadow-xl border border-gray-100 h-[600px] flex flex-col">
        <!-- Chat Header -->
        <div class="p-6 border-b border-gray-200">
            <div class="flex items-center">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mr-3">
                    <i class="fas fa-robot text-white"></i>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900">AI Study Assistant</h3>
                    <p class="text-sm text-green-600 flex items-center">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>Online
                    </p>
                </div>
            </div>
        </div>

        <!-- Chat Window -->
        <div id="chatWindow" class="flex-1 overflow-y-auto p-6 space-y-4 bg-gray-50">
            <!-- Welcome Message -->
            <div class="flex justify-start">
                <div class="flex items-start space-x-3 max-w-xs lg:max-w-md">
                    <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-robot text-white text-sm"></i>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-2xl rounded-tl-md px-4 py-3 shadow-sm">
                        <p class="text-gray-800 text-sm">👋 Hello Maria! I'm your AI Study Assistant. I can help you with:</p>
                        <ul class="text-xs text-gray-600 mt-2 space-y-1">
                            <li>• Course questions and explanations</li>
                            <li>• Assignment guidance</li>
                            <li>• Study schedule optimization</li>
                            <li>• Exam preparation tips</li>
                        </ul>
                        <p class="text-sm text-gray-800 mt-2">What would you like to know?</p>
                    </div>
                </div>
            </div>

            <!-- Example User Message -->
            <div class="flex justify-end">
                <div class="flex items-start space-x-3 max-w-xs lg:max-w-md">
                    <div class="bg-blue-600 text-white rounded-2xl rounded-tr-md px-4 py-3 shadow-sm">
                        <p class="text-sm">Can you help me understand binary trees for my Data Structures exam?</p>
                    </div>
                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-user text-blue-600 text-sm"></i>
                    </div>
                </div>
            </div>

            <!-- AI Response -->
            <div class="flex justify-start">
                <div class="flex items-start space-x-3 max-w-xs lg:max-w-md">
                    <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-robot text-white text-sm"></i>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-2xl rounded-tl-md px-4 py-3 shadow-sm">
                        <p class="text-gray-800 text-sm">🌳 <strong>Binary Trees Explained:</strong></p>
                        <p class="text-gray-700 text-sm mt-2">A binary tree is a hierarchical data structure where each node has at most two children (left and right). Here are the key concepts:</p>
                        <ul class="text-xs text-gray-600 mt-2 space-y-1">
                            <li><strong>Root:</strong> The top node</li>
                            <li><strong>Leaf:</strong> Nodes with no children</li>
                            <li><strong>Height:</strong> Longest path from root to leaf</li>
                        </ul>
                        <div class="mt-3 p-2 bg-blue-50 rounded-lg">
                            <p class="text-xs text-blue-800"><strong>Study Tip:</strong> Practice tree traversal methods (inorder, preorder, postorder) to master the concept!</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Another User Message -->
            <div class="flex justify-end">
                <div class="flex items-start space-x-3 max-w-xs lg:max-w-md">
                    <div class="bg-blue-600 text-white rounded-2xl rounded-tr-md px-4 py-3 shadow-sm">
                        <p class="text-sm">What's the best way to prepare for my upcoming Database exam?</p>
                    </div>
                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-user text-blue-600 text-sm"></i>
                    </div>
                </div>
            </div>

            <!-- AI Response with Database Advice -->
            <div class="flex justify-start">
                <div class="flex items-start space-x-3 max-w-xs lg:max-w-md">
                    <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-robot text-white text-sm"></i>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-2xl rounded-tl-md px-4 py-3 shadow-sm">
                        <p class="text-gray-800 text-sm">📊 <strong>Database Exam Prep Strategy:</strong></p>
                        <p class="text-gray-700 text-sm mt-2">Here's a focused study plan for your Database exam:</p>
                        <ul class="text-xs text-gray-600 mt-2 space-y-1">
                            <li>• Review normalization (1NF, 2NF, 3NF)</li>
                            <li>• Practice SQL queries (JOIN, GROUP BY, subqueries)</li>
                            <li>• Study transaction management and ACID properties</li>
                            <li>• Understand indexing and query optimization</li>
                        </ul>
                        <div class="mt-3 p-2 bg-green-50 rounded-lg">
                            <p class="text-xs text-green-800"><strong>Pro Tip:</strong> Your next exam is on Aug 28, 2025 for Data Structures - practice with real datasets!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat Input -->
        <div class="p-6 border-t border-gray-200 bg-white">
            <div class="flex space-x-4">
                <div class="flex-1">
                    <div class="relative">
                        <input type="text" 
                               placeholder="Ask me anything about your studies..." 
                               class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                               id="messageInput">
                        <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-blue-600 transition-colors duration-200">
                            <i class="fas fa-paperclip"></i>
                        </button>
                    </div>
                </div>
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl transition-all duration-200 transform hover:scale-105 flex items-center space-x-2" id="sendBtn">
                    <i class="fas fa-paper-plane"></i>
                    <span class="hidden sm:inline">Send</span>
                </button>
            </div>
            
            <!-- Quick Actions -->
            <div class="flex flex-wrap gap-2 mt-4">
                <button class="quick-action-btn px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs hover:bg-gray-200 transition-colors duration-200" data-message="📚 Study Schedule">
                    📚 Study Schedule
                </button>
                <button class="quick-action-btn px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs hover:bg-gray-200 transition-colors duration-200" data-message="📝 Assignment Help">
                    📝 Assignment Help
                </button>
                <button class="quick-action-btn px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs hover:bg-gray-200 transition-colors duration-200" data-message="🧠 Exam Tips">
                    🧠 Exam Tips
                </button>
                <button class="quick-action-btn px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs hover:bg-gray-200 transition-colors duration-200" data-message="💡 Concept Explanation">
                    💡 Concept Explanation
                </button>
                <button class="quick-action-btn px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs hover:bg-gray-200 transition-colors duration-200" data-message="When is my next exam?">
                    When is my next exam?
                </button>
            </div>
        </div>
    </div>

    <!-- Features -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="text-center p-6 bg-blue-50 rounded-2xl border border-blue-200">
            <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-brain text-white"></i>
            </div>
            <h3 class="font-semibold text-gray-900 mb-2">Smart Learning</h3>
            <p class="text-sm text-gray-600">Personalized explanations based on your learning style and progress.</p>
        </div>
        
        <div class="text-center p-6 bg-green-50 rounded-2xl border border-green-200">
            <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-clock text-white"></i>
            </div>
            <h3 class="font-semibold text-gray-900 mb-2">24/7 Available</h3>
            <p class="text-sm text-gray-600">Get instant help anytime, anywhere. No waiting for office hours!</p>
        </div>
        
        <div class="text-center p-6 bg-purple-50 rounded-2xl border border-purple-200">
            <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-chart-line text-white"></i>
            </div>
            <h3 class="font-semibold text-gray-900 mb-2">Track Progress</h3>
            <p class="text-sm text-gray-600">Monitor your learning journey and get insights for improvement.</p>
        </div>
    </div>

    <!-- Smart Suggestions at Bottom -->
    <div class="mt-8 bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-6 border border-blue-200">
        <div class="text-center mb-4">
            <h3 class="text-lg font-semibold text-gray-900">Hello! I'm your AI Assistant. How can I help you today?</h3>
        </div>
        <div class="flex flex-wrap justify-center gap-3">
            <button class="quick-action-btn bg-white border border-blue-200 text-blue-700 px-4 py-2 rounded-xl hover:bg-blue-50 transition-colors duration-200 text-sm" data-message="When is my next exam?">
                When is my next exam?
            </button>
            <button class="quick-action-btn bg-white border border-green-200 text-green-700 px-4 py-2 rounded-xl hover:bg-green-50 transition-colors duration-200 text-sm" data-message="Help me with assignments">
                Help me with assignments
            </button>
            <button class="quick-action-btn bg-white border border-purple-200 text-purple-700 px-4 py-2 rounded-xl hover:bg-purple-50 transition-colors duration-200 text-sm" data-message="Explain a concept">
                Explain a concept
            </button>
        </div>
    </div>
</div>

<script>
// Enhanced chat functionality
function sendMessage() {
    const messageInput = document.getElementById('messageInput');
    const message = messageInput.value.trim();
    
    if (message) {
        addUserMessage(message);
        messageInput.value = '';
        
        // Show typing indicator
        showTypingIndicator();
        
        // Simulate AI response
        setTimeout(() => {
            hideTypingIndicator();
            addAIResponse(generateResponse(message));
        }, 1500);
    }
}

function addUserMessage(message) {
    const chatWindow = document.getElementById('chatWindow');
    const userMessage = `
        <div class="flex justify-end">
            <div class="flex items-start space-x-3 max-w-xs lg:max-w-md">
                <div class="bg-blue-600 text-white rounded-2xl rounded-tr-md px-4 py-3 shadow-sm">
                    <p class="text-sm">${message}</p>
                </div>
                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-user text-blue-600 text-sm"></i>
                </div>
            </div>
        </div>
    `;
    chatWindow.innerHTML += userMessage;
    chatWindow.scrollTop = chatWindow.scrollHeight;
}

function addAIResponse(response) {
    const chatWindow = document.getElementById('chatWindow');
    const aiResponse = `
        <div class="flex justify-start">
            <div class="flex items-start space-x-3 max-w-xs lg:max-w-md">
                <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-robot text-white text-sm"></i>
                </div>
                <div class="bg-white border border-gray-200 rounded-2xl rounded-tl-md px-4 py-3 shadow-sm">
                    <p class="text-gray-800 text-sm">${response}</p>
                </div>
            </div>
        </div>
    `;
    chatWindow.innerHTML += aiResponse;
    chatWindow.scrollTop = chatWindow.scrollHeight;
}

function showTypingIndicator() {
    const chatWindow = document.getElementById('chatWindow');
    const typingIndicator = `
        <div class="flex justify-start typing-indicator">
            <div class="flex items-start space-x-3 max-w-xs lg:max-w-md">
                <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-robot text-white text-sm"></i>
                </div>
                <div class="bg-white border border-gray-200 rounded-2xl rounded-tl-md px-4 py-3 shadow-sm">
                    <div class="flex items-center space-x-1">
                        <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div>
                        <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.1s;"></div>
                        <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s;"></div>
                    </div>
                </div>
            </div>
        </div>
    `;
    chatWindow.innerHTML += typingIndicator;
    chatWindow.scrollTop = chatWindow.scrollHeight;
}

function hideTypingIndicator() {
    const typingIndicator = document.querySelector('.typing-indicator');
    if (typingIndicator) {
        typingIndicator.remove();
    }
}

function generateResponse(message) {
    const responses = {
        'when is my next exam': '📅 Your next exam is on <strong>Aug 28, 2025</strong> for Data Structures. You have 11 days to prepare!',
        'exam': '📚 Based on your courses, you have upcoming exams in Data Structures, Database Management, and AI Fundamentals. Would you like specific study tips for any of these?',
        'assignment': '📝 I can help you with assignments! You currently have 3 pending: Database Project (due tomorrow), AI Research Paper (due March 15), and Algorithm Analysis Quiz (due March 20). Which one would you like help with?',
        'study schedule': '⏰ Based on your patterns, your most productive study time is 2-4 PM. I recommend dedicating this time to your most challenging subjects like AI and Data Structures.',
        'binary trees': '🌳 Binary trees are hierarchical data structures where each node has at most two children. Key concepts include root, leaves, height, and traversal methods (inorder, preorder, postorder).',
        'database': '💾 For your Database exam prep, focus on: SQL queries, normalization, ACID properties, and indexing. Practice with real datasets for better understanding!'
    };

    // Find matching response
    const lowerMessage = message.toLowerCase();
    for (const [key, response] of Object.entries(responses)) {
        if (lowerMessage.includes(key)) {
            return response;
        }
    }

    // Default response
    return '🤖 Thanks for your question! I\'m here to help you with your studies. Could you be more specific about what you\'d like to know? I can help with course content, study tips, exam preparation, and assignment guidance.';
}

// Event listeners
document.getElementById('messageInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
});

document.getElementById('sendBtn').addEventListener('click', sendMessage);

// Quick action buttons
document.querySelectorAll('.quick-action-btn').forEach(button => {
    button.addEventListener('click', function() {
        const message = this.getAttribute('data-message') || this.textContent.trim();
        document.getElementById('messageInput').value = message;
        sendMessage();
    });
});
</script>
@endsection
