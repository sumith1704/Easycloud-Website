/**
 * Blog Tracker
 * Tracks which blogs users read and stores in cookies (with consent)
 * Enables personalized recommendations
 */

(function() {
    'use strict';

    const BlogTracker = {
        config: {
            cookieName: 'easycloud_blog_history',
            maxHistory: 10, // Keep last 10 blogs read
            expiryDays: 30
        },

        // Initialize tracking
        init() {
            // Only track if on a blog page
            if (this.isBlogPage()) {
                this.trackCurrentBlog();
            }
        },

        // Check if current page is a blog
        isBlogPage() {
            const path = window.location.pathname;
            return path.includes('/blogs/') && path !== '/blogs.php' && !path.endsWith('blogs/');
        },

        // Check if user has consented to analytics cookies
        hasConsent() {
            try {
                const consent = localStorage.getItem('easycloud_consent');
                if (consent) {
                    const data = JSON.parse(consent);
                    return data.preferences && data.preferences.analytics === true;
                }
            } catch (e) {
                console.error('Error checking consent:', e);
            }
            return false;
        },

        // Track current blog
        trackCurrentBlog() {
            // Only track if user has given consent
            if (!this.hasConsent()) {
                console.log('Blog tracking: Waiting for user consent');
                return;
            }

            const blogData = this.getCurrentBlogData();
            if (blogData) {
                this.saveBlogToHistory(blogData);
                this.updateIndustryInterest(blogData.category);
            }
        },

        // Get current blog data from page
        getCurrentBlogData() {
            const path = window.location.pathname;
            const slug = path.split('/').pop().replace('.php', '');
            
            // Get blog title from page
            const titleElement = document.querySelector('h1, .blog-title');
            const title = titleElement ? titleElement.textContent.trim() : 'Untitled Blog';

            // Try to determine category from content or URL
            const category = this.detectCategory();

            return {
                slug: slug,
                title: title,
                category: category,
                url: path,
                timestamp: Date.now(),
                date: new Date().toISOString()
            };
        },

        // Detect blog category based on keywords
        detectCategory() {
            const content = document.body.textContent.toLowerCase();
            const url = window.location.pathname.toLowerCase();

            const categories = {
                'construction': ['construction', 'building', 'contractor', 'project management'],
                'bfsi': ['banking', 'financial', 'insurance', 'bfsi'],
                'healthcare': ['healthcare', 'hospital', 'medical', 'pharmacy', 'patient'],
                'manufacturing': ['manufacturing', 'production', 'factory', 'bom', 'mrp', 'extrusion'],
                'livestock': ['livestock', 'dairy', 'poultry', 'milking', 'fish feed', 'animal'],
                'erp': ['erp', 'enterprise resource', 'business management'],
                'ai': ['artificial intelligence', 'machine learning', 'ai agent', 'automation']
            };

            // Check URL first
            for (const [cat, keywords] of Object.entries(categories)) {
                if (url.includes(cat)) return cat;
            }

            // Check content
            for (const [cat, keywords] of Object.entries(categories)) {
                for (const keyword of keywords) {
                    if (content.includes(keyword)) return cat;
                }
            }

            return 'general';
        },

        // Save blog to reading history
        saveBlogToHistory(blogData) {
            let history = this.getHistory();

            // Remove if already exists (to update timestamp)
            history = history.filter(b => b.slug !== blogData.slug);

            // Add to beginning
            history.unshift(blogData);

            // Limit to max history
            if (history.length > this.config.maxHistory) {
                history = history.slice(0, this.config.maxHistory);
            }

            // Save to localStorage
            try {
                localStorage.setItem(this.config.cookieName, JSON.stringify(history));
                console.log('Blog tracked:', blogData.title);
            } catch (e) {
                console.error('Error saving blog history:', e);
            }
        },

        // Get reading history
        getHistory() {
            try {
                const history = localStorage.getItem(this.config.cookieName);
                return history ? JSON.parse(history) : [];
            } catch (e) {
                console.error('Error getting blog history:', e);
                return [];
            }
        },

        // Update industry interest
        updateIndustryInterest(category) {
            if (!category || category === 'general') return;

            try {
                let interests = localStorage.getItem('easycloud_interests');
                interests = interests ? JSON.parse(interests) : {};

                interests[category] = (interests[category] || 0) + 1;

                localStorage.setItem('easycloud_interests', JSON.stringify(interests));
            } catch (e) {
                console.error('Error updating interests:', e);
            }
        },

        // Get top interest category
        getTopInterest() {
            try {
                let interests = localStorage.getItem('easycloud_interests');
                if (!interests) return null;

                interests = JSON.parse(interests);
                let topCategory = null;
                let maxCount = 0;

                for (const [category, count] of Object.entries(interests)) {
                    if (count > maxCount) {
                        maxCount = count;
                        topCategory = category;
                    }
                }

                return topCategory;
            } catch (e) {
                return null;
            }
        },

        // Get reading stats
        getStats() {
            const history = this.getHistory();
            const topInterest = this.getTopInterest();

            return {
                totalReads: history.length,
                recentBlogs: history.slice(0, 3),
                topInterest: topInterest,
                firstRead: history.length > 0 ? history[history.length - 1].date : null,
                lastRead: history.length > 0 ? history[0].date : null
            };
        },

        // Clear history (privacy feature)
        clearHistory() {
            localStorage.removeItem(this.config.cookieName);
            localStorage.removeItem('easycloud_interests');
            console.log('Blog history cleared');
        }
    };

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => BlogTracker.init());
    } else {
        BlogTracker.init();
    }

    // Expose globally
    window.EasyCloudBlogTracker = BlogTracker;

})();
