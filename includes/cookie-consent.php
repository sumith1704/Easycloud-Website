<!-- Cookie Consent Banner -->
<div id="cookieConsent" class="cookie-consent-banner" style="display: none;">
    <div class="cookie-consent-content">
        <div class="cookie-consent-text">
            <h3>🍪 We Value Your Privacy</h3>
            <p>We use cookies to enhance your experience, analyze site traffic, and provide personalized content. You can customize your preferences below.</p>
        </div>
        <div class="cookie-consent-buttons">
            <button onclick="acceptAllCookies()" class="cookie-btn accept-all">Accept All</button>
            <button onclick="rejectNonEssential()" class="cookie-btn reject">Only Essential</button>
            <button onclick="showCookieSettings()" class="cookie-btn customize">Customize</button>
        </div>
    </div>
</div>

<!-- Cookie Settings Modal -->
<div id="cookieSettings" class="cookie-settings-modal" style="display: none;">
    <div class="cookie-settings-content">
        <div class="cookie-settings-header">
            <h2>Cookie Preferences</h2>
            <button onclick="closeCookieSettings()" class="close-settings">&times;</button>
        </div>
        
        <div class="cookie-category">
            <div class="cookie-category-header">
                <label class="cookie-switch">
                    <input type="checkbox" id="essentialCookies" checked disabled>
                    <span class="slider"></span>
                </label>
                <div>
                    <h4>Essential Cookies <span class="required-badge">Required</span></h4>
                    <p>These cookies are necessary for the website to function and cannot be switched off. They are usually only set in response to actions made by you such as setting your privacy preferences or filling in forms.</p>
                </div>
            </div>
        </div>

        <div class="cookie-category">
            <div class="cookie-category-header">
                <label class="cookie-switch">
                    <input type="checkbox" id="analyticsCookies">
                    <span class="slider"></span>
                </label>
                <div>
                    <h4>Analytics Cookies</h4>
                    <p>These cookies help us understand how visitors interact with our website by collecting and reporting information anonymously. We use Google Analytics to improve our services.</p>
                </div>
            </div>
        </div>

        <div class="cookie-category">
            <div class="cookie-category-header">
                <label class="cookie-switch">
                    <input type="checkbox" id="marketingCookies">
                    <span class="slider"></span>
                </label>
                <div>
                    <h4>Marketing Cookies</h4>
                    <p>These cookies track your browsing habits to enable us to show personalized content and ads based on your interests. We may share this information with our partners.</p>
                </div>
            </div>
        </div>

        <div class="cookie-settings-footer">
            <p><a href="/privacy-policy.php" target="_blank">Read our Privacy Policy</a></p>
            <div class="cookie-settings-buttons">
                <button onclick="saveCustomPreferences()" class="cookie-btn save-preferences">Save Preferences</button>
                <button onclick="closeCookieSettings()" class="cookie-btn cancel">Cancel</button>
            </div>
        </div>
    </div>
</div>

<style>
/* Cookie Consent Banner */
.cookie-consent-banner {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(135deg, #1a2b4e 0%, #2d3e5f 100%);
    color: white;
    padding: 1.5rem;
    box-shadow: 0 -4px 20px rgba(0,0,0,0.15);
    z-index: 9999;
    animation: slideUp 0.4s ease-out;
}

@keyframes slideUp {
    from { transform: translateY(100%); }
    to { transform: translateY(0); }
}

.cookie-consent-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
    flex-wrap: wrap;
}

.cookie-consent-text h3 {
    margin: 0 0 0.5rem 0;
    font-size: 1.3rem;
    color: white;
    font-weight: 700;
}

.cookie-consent-text p {
    margin: 0;
    font-size: 1rem;
    line-height: 1.5;
    color: rgba(255,255,255,0.9);
}

.cookie-consent-buttons {
    display: flex;
    gap: 0.8rem;
    flex-shrink: 0;
}

.cookie-btn {
    padding: 0.7rem 1.5rem;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.cookie-btn.accept-all {
    background: linear-gradient(90deg, #4CAF50 0%, #45a049 100%);
    color: white;
}

.cookie-btn.accept-all:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(76,175,80,0.4);
}

.cookie-btn.reject {
    background: rgba(255,255,255,0.15);
    color: white;
    border: 2px solid rgba(255,255,255,0.3);
}

.cookie-btn.reject:hover {
    background: rgba(255,255,255,0.25);
}

.cookie-btn.customize {
    background: white;
    color: #1a2b4e;
}

.cookie-btn.customize:hover {
    background: #f0f0f0;
}

/* Cookie Settings Modal */
.cookie-settings-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
    z-index: 10000;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
}

.cookie-settings-content {
    background: white;
    border-radius: 16px;
    max-width: 600px;
    width: 100%;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 10px 40px rgba(0,0,0,0.3);
    animation: fadeIn 0.3s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.95); }
    to { opacity: 1; transform: scale(1); }
}

.cookie-settings-header {
    padding: 1.5rem;
    border-bottom: 2px solid #f0f0f0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.cookie-settings-header h2 {
    margin: 0;
    color: #1a2b4e;
    font-size: 1.5rem;
}

.close-settings {
    background: none;
    border: none;
    font-size: 2rem;
    color: #666;
    cursor: pointer;
    line-height: 1;
    padding: 0;
    width: 30px;
    height: 30px;
}

.close-settings:hover {
    color: #1a2b4e;
}

.cookie-category {
    padding: 1.5rem;
    border-bottom: 1px solid #f0f0f0;
}

.cookie-category-header {
    display: flex;
    gap: 1rem;
    align-items: flex-start;
}

.cookie-category h4 {
    margin: 0 0 0.5rem 0;
    color: #1a2b4e;
    font-size: 1.1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.required-badge {
    background: #ff9800;
    color: white;
    font-size: 0.7rem;
    padding: 0.2rem 0.5rem;
    border-radius: 4px;
    font-weight: 600;
}

.cookie-category p {
    margin: 0;
    color: #666;
    font-size: 0.95rem;
    line-height: 1.5;
}

/* Toggle Switch */
.cookie-switch {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 26px;
    flex-shrink: 0;
}

.cookie-switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: 0.4s;
    border-radius: 26px;
}

.slider:before {
    position: absolute;
    content: "";
    height: 20px;
    width: 20px;
    left: 3px;
    bottom: 3px;
    background-color: white;
    transition: 0.4s;
    border-radius: 50%;
}

input:checked + .slider {
    background-color: #4CAF50;
}

input:disabled + .slider {
    background-color: #ff9800;
    cursor: not-allowed;
}

input:checked + .slider:before {
    transform: translateX(24px);
}

.cookie-settings-footer {
    padding: 1.5rem;
    background: #f9f9f9;
    border-bottom-left-radius: 16px;
    border-bottom-right-radius: 16px;
}

.cookie-settings-footer p {
    margin: 0 0 1rem 0;
    text-align: center;
}

.cookie-settings-footer a {
    color: #1a2b4e;
    text-decoration: underline;
    font-weight: 600;
}

.cookie-settings-buttons {
    display: flex;
    gap: 0.8rem;
    justify-content: center;
}

.cookie-btn.save-preferences {
    background: linear-gradient(90deg, #1a2b4e 0%, #2d3e5f 100%);
    color: white;
}

.cookie-btn.save-preferences:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(26,43,78,0.3);
}

.cookie-btn.cancel {
    background: #e0e0e0;
    color: #666;
}

.cookie-btn.cancel:hover {
    background: #d0d0d0;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .cookie-consent-content {
        flex-direction: column;
        align-items: stretch;
        gap: 1rem;
    }

    .cookie-consent-text h3 {
        font-size: 1.1rem;
    }

    .cookie-consent-text p {
        font-size: 0.9rem;
    }

    .cookie-consent-buttons {
        flex-direction: column;
        width: 100%;
    }

    .cookie-btn {
        width: 100%;
        padding: 0.8rem;
    }

    .cookie-settings-content {
        max-height: 100vh;
        border-radius: 0;
    }

    .cookie-category-header {
        flex-direction: column;
        gap: 0.8rem;
    }

    .cookie-settings-buttons {
        flex-direction: column;
    }
}
</style>
