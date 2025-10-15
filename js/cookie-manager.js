/**
 * Cookie Consent Manager
 * Handles cookie consent, preference storage, and analytics integration
 */

(function() {
    'use strict';

    const CookieManager = {
        // Configuration
        config: {
            cookieName: 'easycloud_consent',
            expiryDays: 365,
            version: '1.0'
        },

        // Initialize on page load
        init() {
            this.checkConsent();
            this.setupEventListeners();
        },

        // Check if user has already consented
        checkConsent() {
            const consent = this.getConsent();
            
            if (!consent) {
                // Show banner after 1 second for better UX
                setTimeout(() => {
                    this.showBanner();
                }, 1000);
            } else {
                // Apply saved preferences
                this.applyConsent(consent);
            }
        },

        // Show cookie consent banner
        showBanner() {
            const banner = document.getElementById('cookieConsent');
            if (banner) {
                banner.style.display = 'block';
            }
        },

        // Hide cookie consent banner
        hideBanner() {
            const banner = document.getElementById('cookieConsent');
            if (banner) {
                banner.style.display = 'none';
            }
        },

        // Get saved consent from localStorage
        getConsent() {
            try {
                const consent = localStorage.getItem(this.config.cookieName);
                return consent ? JSON.parse(consent) : null;
            } catch (e) {
                console.error('Error reading consent:', e);
                return null;
            }
        },

        // Save consent to localStorage
        saveConsent(preferences) {
            try {
                const consent = {
                    version: this.config.version,
                    timestamp: Date.now(),
                    preferences: preferences
                };
                localStorage.setItem(this.config.cookieName, JSON.stringify(consent));
                
                // Also set a cookie for server-side detection
                this.setCookie(this.config.cookieName, JSON.stringify(preferences), this.config.expiryDays);
                
                return true;
            } catch (e) {
                console.error('Error saving consent:', e);
                return false;
            }
        },

        // Apply consent preferences
        applyConsent(consent) {
            const prefs = consent.preferences;

            // Analytics cookies
            if (prefs.analytics) {
                this.enableAnalytics();
            } else {
                this.disableAnalytics();
            }

            // Marketing cookies
            if (prefs.marketing) {
                this.enableMarketing();
            }

            // Log consent for debugging
            console.log('Cookie consent applied:', prefs);
        },

        // Enable Google Analytics
        enableAnalytics() {
            // Check if GA is already loaded
            if (typeof gtag !== 'undefined') {
                gtag('consent', 'update', {
                    'analytics_storage': 'granted'
                });
            } else {
                // Load Google Analytics
                this.loadGoogleAnalytics();
            }
        },

        // Disable Google Analytics
        disableAnalytics() {
            if (typeof gtag !== 'undefined') {
                gtag('consent', 'update', {
                    'analytics_storage': 'denied'
                });
            }
        },

        // Load Google Analytics script
        loadGoogleAnalytics() {
            // Google Analytics ID: G-5NW9HQ2H0F (already loaded in nav_bar.php)
            // We just need to update consent status
            // Note: GA script is already loaded via nav_bar.php, so we don't re-inject it
            console.log('Google Analytics consent granted - tracking enabled');
        },

        // Enable marketing cookies (placeholder)
        enableMarketing() {
            // Add marketing scripts here (Facebook Pixel, etc.)
            console.log('Marketing cookies enabled');
        },

        // Setup event listeners
        setupEventListeners() {
            // Modal close on outside click
            const modal = document.getElementById('cookieSettings');
            if (modal) {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        this.closeCookieSettings();
                    }
                });
            }
        },

        // Set cookie (helper function)
        setCookie(name, value, days) {
            const expires = new Date();
            expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
            document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/;SameSite=Lax`;
        },

        // Get cookie (helper function)
        getCookie(name) {
            const nameEQ = name + "=";
            const ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }
    };

    // Global functions for button clicks
    window.acceptAllCookies = function() {
        const preferences = {
            essential: true,
            analytics: true,
            marketing: true
        };
        
        CookieManager.saveConsent(preferences);
        CookieManager.applyConsent({ preferences });
        CookieManager.hideBanner();
        
        // Show success message
        showToast('✓ Cookie preferences saved. Thank you!');
    };

    window.rejectNonEssential = function() {
        const preferences = {
            essential: true,
            analytics: false,
            marketing: false
        };
        
        CookieManager.saveConsent(preferences);
        CookieManager.applyConsent({ preferences });
        CookieManager.hideBanner();
        
        showToast('✓ Only essential cookies will be used.');
    };

    window.showCookieSettings = function() {
        const modal = document.getElementById('cookieSettings');
        if (modal) {
            modal.style.display = 'flex';
            
            // Load current preferences
            const consent = CookieManager.getConsent();
            if (consent) {
                document.getElementById('analyticsCookies').checked = consent.preferences.analytics;
                document.getElementById('marketingCookies').checked = consent.preferences.marketing;
            } else {
                // Default to checked
                document.getElementById('analyticsCookies').checked = true;
                document.getElementById('marketingCookies').checked = true;
            }
        }
        CookieManager.hideBanner();
    };

    window.closeCookieSettings = function() {
        const modal = document.getElementById('cookieSettings');
        if (modal) {
            modal.style.display = 'none';
        }
        
        // Show banner again if no consent saved
        if (!CookieManager.getConsent()) {
            CookieManager.showBanner();
        }
    };

    window.saveCustomPreferences = function() {
        const preferences = {
            essential: true, // Always true
            analytics: document.getElementById('analyticsCookies').checked,
            marketing: document.getElementById('marketingCookies').checked
        };
        
        CookieManager.saveConsent(preferences);
        CookieManager.applyConsent({ preferences });
        window.closeCookieSettings();
        
        showToast('✓ Your preferences have been saved.');
    };

    // Toast notification helper
    function showToast(message) {
        const toast = document.createElement('div');
        toast.style.cssText = `
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: #4CAF50;
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            z-index: 10001;
            animation: slideIn 0.3s ease-out;
            font-weight: 600;
        `;
        toast.textContent = message;
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.style.animation = 'slideOut 0.3s ease-out';
            setTimeout(() => toast.remove(), 300);
        }, 3000);
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => CookieManager.init());
    } else {
        CookieManager.init();
    }

    // Expose for external access
    window.EasyCloudCookieManager = CookieManager;

})();

// Add toast animations to stylesheet
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from { transform: translateX(400px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    @keyframes slideOut {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(400px); opacity: 0; }
    }
`;
document.head.appendChild(style);
