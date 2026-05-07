document.addEventListener('DOMContentLoaded', () => {

    // Toggle functionality for Path to Success
    const toggleOptions = document.querySelectorAll('.toggle-option');
    const stepCards = document.querySelectorAll('.step-card');

    const contentMap = {
        'For Candidates': [
            { title: 'Create Account', text: 'First, you have to create an account here.', icon: 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z' },
            { title: 'Find Your Niche', text: 'Search for job vacancies and find the best fit.', icon: 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z' },
            { title: 'Get Paid Securely', text: 'Apply to the best jobs and get hired.', icon: 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z' }
        ],
        'For Employers': [
            { title: 'Post a Job', text: 'Create a job posting to reach thousands.', icon: 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z' },
            { title: 'Screen Candidates', text: 'Review applications and screen the best talent.', icon: 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2' },
            { title: 'Hire the Best', text: 'Make an offer and build your dream team.', icon: 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z' }
        ]
    };

    toggleOptions.forEach(option => {
        option.addEventListener('click', () => {
            // Active State
            toggleOptions.forEach(opt => opt.classList.remove('active'));
            option.classList.add('active');

            // Update Content
            const selectedType = option.textContent.trim();
            const data = contentMap[selectedType];

            if (data) {
                stepCards.forEach((card, index) => {
                    const h3 = card.querySelector('h3');
                    const p = card.querySelector('p');
                    const iconPath = card.querySelector('.step-icon svg path');

                    // Simple fade effect
                    card.style.opacity = '0';
                    setTimeout(() => {
                        h3.textContent = data[index].title;
                        p.textContent = data[index].text;
                        if (iconPath && data[index].icon) {
                            iconPath.setAttribute('d', data[index].icon);
                        }
                        card.style.opacity = '1';
                    }, 200);
                });
            }
        });
    });

    // Scroll Reveal Animation
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px"
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Select elements to animate
    const animateElements = document.querySelectorAll('.step-card, .category-card, .job-card, .hero-stats .stat-item, .section-header, .discover-text, .discover-card-wrapper');

    animateElements.forEach(el => {
        el.classList.add('reveal');
        observer.observe(el);
    });

    console.log("Simple Tech Groups initialized with animations");

    // Discover Jobs Carousel Logic
    const discGrid = document.querySelector('.discover-card-grid');
    const prevBtn = document.getElementById('prevDiscBtn');
    const nextBtn = document.getElementById('nextDiscBtn');
    const dots = document.querySelectorAll('.disc-dot');

    // Mock Data for Pages
    const jobPages = [
        [
            { title: 'Security Guard', count: '23 jobs', icon: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z' },
            { title: 'Supply Chain...', count: '23 jobs', icon: 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3' },
            { title: 'Investment Analyst', count: '22 jobs', icon: 'M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z' },
            { title: 'Software Engineer', count: '22 jobs', icon: 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z' },
            { title: 'Sound Engineer', count: '22 jobs', icon: 'M15.536 8.464a5 5 0 010 7.072M17.536 6.464a8 8 0 010 11.072M20.48 3.52a11.05 11.05 0 010 15.96M3 11a3 3 0 013-3h1v6H6a3 3 0 01-3-3zm12 0a3 3 0 01-3 3h-1V8h1a3 3 0 013 3z' },
            { title: 'Interior Designer', count: '22 jobs', icon: 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4' }
        ],
        [
            { title: 'Education Counselor', count: '33 jobs', icon: 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253' },
            { title: 'Hotel Manager', count: '27 jobs', icon: 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4' },
            { title: 'Accountant', count: '27 jobs', icon: 'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z' },
            { title: 'Librarian', count: '24 jobs', icon: 'M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v8a2 2 0 01-2 2H5z' },
            { title: 'Plumber', count: '24 jobs', icon: 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z' },
            { title: 'Product Manager', count: '24 jobs', icon: 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z' }
        ],
        [
            { title: 'Tour Guide', count: '21 jobs', icon: 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z' },
            { title: 'Social Media Manager', count: '21 jobs', icon: 'M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z' },
            { title: 'Painter', count: '21 jobs', icon: 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01' },
            { title: 'Bank Teller', count: '21 jobs', icon: 'M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z' },
            { title: 'Office Manager', count: '21 jobs', icon: 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4' },
            { title: 'Professor', count: '21 jobs', icon: 'M12 14l9-5-9-5-9 5 9 5zM12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222' }
        ]
    ];

    let currentPage = 0;

    function renderPage(pageIndex) {
        // Fade out
        discGrid.style.opacity = '0';

        setTimeout(() => {
            discGrid.innerHTML = '';
            const pageData = jobPages[pageIndex];

            pageData.forEach(item => {
                const el = document.createElement('div');
                el.className = 'discover-item';
                el.innerHTML = `
                    <div class="disc-icon-box">
                        <svg class="icon" viewBox="0 0 24 24">
                            <path d="${item.icon}"></path>
                        </svg>
                    </div>
                    <div class="disc-info">
                        <h4>${item.title}</h4>
                        <span>${item.count}</span>
                    </div>
                    <span class="disc-arrow">➜</span>
                `;
                discGrid.appendChild(el);
            });

            // Update dots
            dots.forEach((dot, idx) => {
                if (idx === pageIndex) dot.classList.add('active');
                else dot.classList.remove('active');
            });

            // Fade in
            discGrid.style.opacity = '1';
        }, 200);
    }

    if (prevBtn && nextBtn) {
        prevBtn.addEventListener('click', () => {
            if (currentPage > 0) {
                currentPage--;
                renderPage(currentPage);
                // Update button states
                if (currentPage === 0) prevBtn.classList.remove('active');
                nextBtn.classList.add('active');
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentPage < jobPages.length - 1) {
                currentPage++;
                renderPage(currentPage);
                // Update button states
                if (currentPage === jobPages.length - 1) nextBtn.classList.remove('active');
                prevBtn.classList.add('active');
            }
        });

        // Initialize state
        prevBtn.classList.remove('active'); // Start at 0, so prev disabled visually
    }
});
function toggleMenu() {
  document.querySelector(".nav-links").classList.toggle("active");
}
