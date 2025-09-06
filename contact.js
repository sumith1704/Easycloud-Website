document.addEventListener('DOMContentLoaded', function() {
    // Handle contact form if it exists
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const formData = {
                fullName: document.getElementById('fullName').value,
                companyName: document.getElementById('companyName').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                requirements: document.getElementById('requirements').value
            };

            // Validate required fields
            if (!formData.fullName || !formData.email || !formData.phone) {
                alert('Please fill in all required fields');
                return;
            }

            // Validate email format
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(formData.email)) {
                alert('Please enter a valid email address');
                return;
            }

            // Validate phone format (basic validation)
            const phoneRegex = /^\+?[\d\s-]{10,}$/;
            if (!phoneRegex.test(formData.phone)) {
                alert('Please enter a valid phone number');
                return;
            }

            // Show loading state
            const submitBtn = contactForm.querySelector('.submit-btn');
            const originalBtnText = submitBtn.textContent;
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;

            // Prepare email template parameters
            const templateParams = {
                to_email: 'tullurusumith@gmail.com',
                from_name: formData.fullName,
                from_email: formData.email,
                company_name: formData.companyName,
                phone_number: formData.phone,
                message: formData.requirements,
                reply_to: formData.email
            };

            console.log('Sending email with params:', templateParams);

            // Send email using EmailJS
            emailjs.send('service_tyenazo', 'template_a5d1zfr', templateParams)
                .then(function(response) {
                    console.log('EmailJS Response:', response);
                    if (response.status === 200) {
                        alert('Thank you for your message! We will get back to you soon.');
                        contactForm.reset();
                    } else {
                        throw new Error('Email sending failed with status: ' + response.status);
                    }
                })
                .catch(function(error) {
                    console.error('EmailJS Error:', error);
                    alert('Sorry, there was an error sending your message. Please try again later.\nError details: ' + error.message);
                })
                .finally(function() {
                    // Reset button state
                    submitBtn.textContent = originalBtnText;
                    submitBtn.disabled = false;
                });
        });
    }

    // Handle contact buttons
    const contactButtons = document.querySelectorAll('.contact-btn');
    contactButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = 'contact.php';
        });
    });
}); 