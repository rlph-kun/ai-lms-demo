// Role-based navigation utility
document.addEventListener('DOMContentLoaded', function() {
    // Get current role from URL parameter or session storage
    const urlParams = new URLSearchParams(window.location.search);
    const currentRole = urlParams.get('role') || sessionStorage.getItem('userRole') || 'student';
    
    // Store role in session storage for persistence
    sessionStorage.setItem('userRole', currentRole);
    
    // Update all navigation links to include the role parameter
    function updateNavigationLinks() {
        const links = document.querySelectorAll('nav a[href]');
        links.forEach(link => {
            const href = link.getAttribute('href');
            if (href && !href.startsWith('#') && !href.startsWith('/') === false) {
                const url = new URL(href, window.location.origin);
                if (url.pathname !== '/' && !url.searchParams.has('role')) {
                    url.searchParams.set('role', currentRole);
                    link.setAttribute('href', url.toString());
                }
            }
        });
    }
    
    // Update chatbot floating button
    const chatbotButton = document.querySelector('.fixed a[href="/chatbot"]');
    if (chatbotButton) {
        chatbotButton.href = `/chatbot?role=${currentRole}`;
    }
    
    // Run the function
    updateNavigationLinks();
});

// Function to handle logout
function logout() {
    sessionStorage.removeItem('userRole');
    window.location.href = '/';
}
