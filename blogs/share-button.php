<!-- 
    Mobile Share Button for Blog Pages
    Automatically included on all blog pages via footer.php
    Uses Native Web Share API on mobile devices
    Strictly mobile-only (hidden on desktop via CSS in styles.css)
-->

<!-- Floating Share Button (Mobile Only) -->
<button class="mobile-share-btn" onclick="mobileShare()" aria-label="Share this article">
    <i class="fas fa-share-alt"></i>
</button>

<!-- Fallback Modal (if native share not available) -->
<div class="share-modal" id="shareModal" onclick="closeShareModal(event)">
    <div class="share-modal-content" onclick="event.stopPropagation()">
        <button class="share-modal-close" onclick="closeShareModal()" aria-label="Close share modal">&times;</button>
        <h3>Share this article</h3>
        <div class="share-buttons">
            <a href="#" class="share-btn facebook" onclick="shareOnPlatform('facebook'); return false;" title="Share on Facebook" aria-label="Share on Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="share-btn x" onclick="shareOnPlatform('x'); return false;" title="Share on X (Twitter)" aria-label="Share on X">
                <i class="fab fa-x-twitter"></i>
            </a>
            <a href="#" class="share-btn linkedin" onclick="shareOnPlatform('linkedin'); return false;" title="Share on LinkedIn" aria-label="Share on LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" class="share-btn instagram" onclick="shareOnPlatform('instagram'); return false;" title="Share on Instagram" aria-label="Share on Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="share-btn whatsapp" onclick="shareOnPlatform('whatsapp'); return false;" title="Share on WhatsApp" aria-label="Share on WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>
    </div>
</div>

<script>
/**
 * Mobile Share Function - Uses Native Web Share API
 * Automatically detects mobile devices and uses native share
 * Falls back to custom modal if native share unavailable
 */
async function mobileShare() {
    const pageTitle = document.title;
    const pageUrl = window.location.href;
    const pageDescription = document.querySelector('meta[name="description"]')?.content || pageTitle;
    
    // Check if Web Share API is supported (primarily mobile browsers)
    if (navigator.share) {
        try {
            await navigator.share({
                title: pageTitle,
                text: pageDescription,
                url: pageUrl
            });
            
            // Optional: Track share event in Google Analytics
            if (typeof gtag !== 'undefined') {
                gtag('event', 'share', {
                    'event_category': 'Social',
                    'event_label': 'Native Share',
                    'value': pageUrl
                });
            }
            
            console.log('Content shared successfully');
        } catch (err) {
            // User cancelled share or error occurred
            if (err.name !== 'AbortError') {
                console.log('Share error:', err);
                // Show fallback modal if share fails
                openShareModal();
            }
        }
    } else {
        // Web Share API not supported, show custom modal
        openShareModal();
    }
}

/**
 * Open Custom Share Modal (Fallback)
 */
function openShareModal() {
    const modal = document.getElementById('shareModal');
    if (modal) {
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
        
        // Focus management for accessibility
        const closeButton = modal.querySelector('.share-modal-close');
        if (closeButton) closeButton.focus();
    }
}

/**
 * Close Share Modal
 */
function closeShareModal(event) {
    const modal = document.getElementById('shareModal');
    if (modal && (!event || event.target.id === 'shareModal' || event.target.classList.contains('share-modal-close'))) {
        modal.style.display = 'none';
        document.body.style.overflow = ''; // Restore scrolling
    }
}

/**
 * Share on Specific Platform (Fallback Modal)
 */
function shareOnPlatform(platform) {
    const url = encodeURIComponent(window.location.href);
    const title = encodeURIComponent(document.title);
    const description = encodeURIComponent(document.querySelector('meta[name="description"]')?.content || document.title);
    
    let shareUrl = '';
    
    switch(platform) {
        case 'facebook':
            shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
            break;
        case 'x':
            shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${title}`;
            break;
        case 'linkedin':
            shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${url}`;
            break;
        case 'whatsapp':
            shareUrl = `https://wa.me/?text=${title}%20${url}`;
            break;
        case 'instagram':
            // Instagram doesn't support direct link sharing via web
            alert('To share on Instagram:\n1. Copy the link\n2. Open Instagram app\n3. Create a new post or story\n4. Paste the link in your caption\n\nLink copied to clipboard!');
            
            // Copy to clipboard
            if (navigator.clipboard) {
                navigator.clipboard.writeText(window.location.href);
            }
            closeShareModal();
            return;
    }
    
    if (shareUrl) {
        // Open share window
        window.open(shareUrl, '_blank', 'width=600,height=400,menubar=no,toolbar=no,location=no');
        
        // Track share event in Google Analytics
        if (typeof gtag !== 'undefined') {
            gtag('event', 'share', {
                'event_category': 'Social',
                'event_label': platform,
                'value': window.location.href
            });
        }
        
        // Close modal after sharing
        closeShareModal();
    }
}

/**
 * Keyboard Support for Modal
 */
document.addEventListener('keydown', function(e) {
    const modal = document.getElementById('shareModal');
    if (modal && modal.style.display === 'flex') {
        // Close modal on Escape key
        if (e.key === 'Escape') {
            closeShareModal();
        }
    }
});

/**
 * Prevent Body Scroll When Modal Open
 */
window.addEventListener('load', function() {
    const modal = document.getElementById('shareModal');
    if (modal) {
        // Ensure modal is hidden on page load
        modal.style.display = 'none';
    }
});
</script>
