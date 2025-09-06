// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', () => {
    try {
        // Mobile Navigation
        const burger = document.querySelector('.burger');
        const mobileMenu = document.querySelector('.nav-links-mobile');
        const navLinks = document.querySelectorAll('.nav-links-mobile li');

        if (burger && mobileMenu && navLinks.length > 0) {
            burger.addEventListener('click', () => {
                // Toggle Navigation
                mobileMenu.classList.toggle('active');
                
                // Animate Links
                navLinks.forEach((link, index) => {
                    if (link.style.animation) {
                        link.style.animation = '';
                    } else {
                        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
                    }
                });
                
                // Burger Animation
                burger.classList.toggle('toggle');
            });
        }

        // Mobile Dropdown Functionality
        const mobileDropdownItems = document.querySelectorAll('.nav-links-mobile .nav-item');
        
        mobileDropdownItems.forEach(item => {
            const dropdownLink = item.querySelector('a');
            const dropdownContent = item.querySelector('.dropdown-content, .domains-dropdown-content, .analytics-dropdown-content, .ai-dropdown-content, .apps-dropdown-content');
            
            if (dropdownLink && dropdownContent) {
                dropdownLink.addEventListener('click', (e) => {
                    e.preventDefault();
                    
                    // Close all other dropdowns
                    mobileDropdownItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('open');
                        }
                    });
                    
                    // Toggle current dropdown
                    item.classList.toggle('open');
                });
            }
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (mobileMenu && mobileMenu.classList.contains('active')) {
                if (!mobileMenu.contains(e.target) && !burger.contains(e.target)) {
                    mobileMenu.classList.remove('active');
                    burger.classList.remove('toggle');
                    
                    // Close all dropdowns
                    mobileDropdownItems.forEach(item => {
                        item.classList.remove('open');
                    });
                }
            }
        });

        // Smooth Scrolling for Navigation Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const target = document.querySelector(targetId);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    if (mobileMenu && burger) {
                        mobileMenu.classList.remove('active');
                        burger.classList.remove('toggle');
                    }
                }
            });
        });

        // Form Submission
        const contactForm = document.getElementById('contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                try {
                    // Get form data
                    const formData = new FormData(this);
                    const data = Object.fromEntries(formData);
                    
                    // Here you would typically send the data to a server
                    console.log('Form submitted:', data);
                    
                    // Show success message
                    alert('Thank you for your message! We will get back to you soon.');
                    this.reset();
                } catch (error) {
                    console.error('Form submission error:', error);
                    alert('There was an error submitting the form. Please try again.');
                }
            });
        }

        // Scroll Animation for Elements
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            if (section) {
                observer.observe(section);
            }
        });

        // Navbar Background Change on Scroll
        const navbar = document.querySelector('.navbar');
        if (navbar) {
            const updateNavbar = () => {
                if (window.scrollY > 50) {
                    navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                    navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
                } else {
                    navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                    navbar.style.boxShadow = 'none';
                }
            };

            window.addEventListener('scroll', updateNavbar);
            // Initial call to set correct state
            updateNavbar();
        }

        // Add animation class to elements when they come into view
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.service-card, .stat, .about-text');
            
            elements.forEach(element => {
                if (element) {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementBottom = element.getBoundingClientRect().bottom;
                    
                    if (elementTop < window.innerHeight && elementBottom > 0) {
                        element.classList.add('animate');
                    }
                }
            });
        };

        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);

        // Testimonial Slider
        document.addEventListener('DOMContentLoaded', function() {
            const testimonialSlider = {
                currentSlide: 0,
                testimonials: document.querySelectorAll('.testimonial'),
                images: document.querySelectorAll('.product-image'),
                nextBtn: document.querySelector('.testimonial-navigation .nav-btn.next'),
                prevBtn: document.querySelector('.testimonial-navigation .nav-btn.prev'),

                init() {
                    if (!this.testimonials.length || !this.images.length) {
                        console.error('Missing testimonial elements');
                        return;
                    }

                    this.nextBtn?.addEventListener('click', () => this.next());
                    this.prevBtn?.addEventListener('click', () => this.prev());
                    this.showSlide(0);
                },

                next() {
                    this.currentSlide = (this.currentSlide + 1) % this.testimonials.length;
                    this.showSlide(this.currentSlide);
                },

                prev() {
                    this.currentSlide = (this.currentSlide - 1 + this.testimonials.length) % this.testimonials.length;
                    this.showSlide(this.currentSlide);
                },

                showSlide(index) {
                    // Hide all testimonials and remove active class
                    this.testimonials.forEach(testimonial => {
                        testimonial.style.opacity = '0';
                        testimonial.style.visibility = 'hidden';
                        testimonial.classList.remove('active');
                    });

                    // Hide all images and remove active class
                    this.images.forEach(image => {
                        image.style.opacity = '0';
                        image.style.visibility = 'hidden';
                        image.classList.remove('active');
                    });

                    // Show current testimonial
                    setTimeout(() => {
                        if (this.testimonials[index]) {
                            this.testimonials[index].style.opacity = '1';
                            this.testimonials[index].style.visibility = 'visible';
                            this.testimonials[index].classList.add('active');
                        }

                        // Show current image
                        if (this.images[index]) {
                            this.images[index].style.opacity = '1';
                            this.images[index].style.visibility = 'visible';
                            this.images[index].classList.add('active');
                        }
                    }, 50);
                }
            };

            testimonialSlider.init();
        });

        // Video Player Functionality
        const videoUrls = {
            testimonial1: 'https://www.youtube.com/watch?v=QPntJcGes2k',
            testimonial2: 'https://www.youtube.com/watch?v=4i8ci-_M8qU',
            testimonial3: 'https://www.youtube.com/watch?v=6rKctgckcBQ'  // Karachi Bakery video
        };

        // Get all play buttons
        const playButtons = document.querySelectorAll('.play-button');

        playButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Find the closest testimonial slide
                const testimonialSlide = this.closest('.testimonial-slide');
                const testimonialId = testimonialSlide.id;
                
                // Get the corresponding video URL
                const videoUrl = videoUrls[testimonialId];
                
                // Open video in new tab
                if (videoUrl) {
                    window.open(videoUrl, '_blank');
                }
            });
        });

        // Play button logic for testimonial cards (final, clean version)
        document.addEventListener('DOMContentLoaded', function() {
          document.querySelectorAll('.play-button').forEach(btn => {
            btn.addEventListener('click', function(e) {
              e.preventDefault();
              const videoUrl = this.getAttribute('data-video');
              if (videoUrl) {
                window.open(videoUrl, '_blank');
              }
            });
          });
        });

        // Client Logo Carousel
        document.addEventListener('DOMContentLoaded', function() {
            const clientLogos = document.querySelectorAll('.client-logo');
            const carouselPrevBtn = document.querySelector('.carousel-btn.prev');
            const carouselNextBtn = document.querySelector('.carousel-btn.next');
            let currentLogoIndex = 0;

            function showLogo(index) {
                clientLogos.forEach(logo => {
                    logo.classList.remove('active');
                });
                clientLogos[index].classList.add('active');
            }

            function nextLogo() {
                currentLogoIndex = (currentLogoIndex + 1) % clientLogos.length;
                showLogo(currentLogoIndex);
            }

            function prevLogo() {
                currentLogoIndex = (currentLogoIndex - 1 + clientLogos.length) % clientLogos.length;
                showLogo(currentLogoIndex);
            }

            if (carouselPrevBtn && carouselNextBtn) {
                carouselPrevBtn.addEventListener('click', prevLogo);
                carouselNextBtn.addEventListener('click', nextLogo);
            }

            // Show first logo initially
            if (clientLogos.length > 0) {
                showLogo(0);
            }
        });

        // Testimonial Navigation
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.testimonial-slide');
            const prevButton = document.querySelector('.nav-btn.prev');
            const nextButton = document.querySelector('.nav-btn.next');
            let currentIndex = 0;

            function showSlide(index) {
                // Remove active class from all slides
                slides.forEach(slide => {
                    slide.classList.remove('active');
                    slide.style.display = 'none';
                });

                // Add active class to current slide
                slides[index].classList.add('active');
                slides[index].style.display = 'flex';
                
                currentIndex = index;
            }

            // Add click handlers for navigation buttons
            if (prevButton) {
                prevButton.addEventListener('click', () => {
                    console.log('Previous button clicked');
                    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                    showSlide(currentIndex);
                });
            }

            if (nextButton) {
                nextButton.addEventListener('click', () => {
                    console.log('Next button clicked');
                    currentIndex = (currentIndex + 1) % slides.length;
                    showSlide(currentIndex);
                });
            }

            // Initialize first slide
            showSlide(0);
        });

        document.querySelector('a[href="#analytics"]').addEventListener('click', function() {
            const section = document.getElementById('analytics');
            section.classList.add('highlight');
            setTimeout(() => section.classList.remove('highlight'), 1500);
        });

        // Click-to-toggle for mobile dropdowns (open/close)
        document.querySelectorAll('.nav-links-mobile .nav-item > a').forEach(link => {
            link.addEventListener('click', function(e) {
                const parent = this.parentElement;
                if (parent.querySelector('.dropdown-content')) {
                    e.preventDefault();
                    parent.classList.toggle('open');
                }
            });
        });

        // --- Mobile Burger and Dropdown Toggle Logic ---
        document.addEventListener('DOMContentLoaded', function() {
            // Burger menu toggle
            var burger = document.getElementById('burger');
            var mobileMenu = document.getElementById('mobileMenu');
            if (burger && mobileMenu) {
                burger.addEventListener('click', function() {
                    mobileMenu.classList.toggle('active');
                    // Close all dropdowns when menu closes
                    if (!mobileMenu.classList.contains('active')) {
                        document.querySelectorAll('.nav-links-mobile .nav-item.open').forEach(item => item.classList.remove('open'));
                    }
                });
            }
            // Dropdown toggle: only one open at a time, tap again to close
            document.querySelectorAll('.nav-links-mobile .nav-item > a').forEach(link => {
                link.addEventListener('click', function(e) {
                    const parent = this.parentElement;
                    if (parent.querySelector('.dropdown-content')) {
                        e.preventDefault();
                        // If already open, close it (back to main menu)
                        if (parent.classList.contains('open')) {
                            parent.classList.remove('open');
                        } else {
                            // Close all others, then open this one
                            document.querySelectorAll('.nav-links-mobile .nav-item.open').forEach(item => item.classList.remove('open'));
                            parent.classList.add('open');
                        }
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.nav-links-mobile .dropdown-content, .nav-links-mobile .domains-dropdown-content, .nav-links-mobile .analytics-dropdown-content, .nav-links-mobile .ai-dropdown-content, .nav-links-mobile .apps-dropdown-content').forEach(dropdown => {
                dropdown.addEventListener('touchstart', function(e) {
                    var top = this.scrollTop;
                    var totalScroll = this.scrollHeight;
                    var currentScroll = top + this.offsetHeight;
                    if (top === 0) {
                        this.scrollTop = 1;
                    } else if (currentScroll === totalScroll) {
                        this.scrollTop = top - 1;
                    }
                });
                dropdown.addEventListener('touchmove', function(e) {
                    if (this.offsetHeight < this.scrollHeight)
                        e.stopPropagation();
                });
            });
        });

    } catch (error) {
        console.error('Script initialization error:', error);
    }
}); 