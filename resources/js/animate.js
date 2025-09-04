// resources/js/animate.js
document.addEventListener('DOMContentLoaded', () => {
    const options = {
        threshold: 0.1,
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const animation = el.dataset.animate;
                if (animation) {
                    el.classList.add(`animate-${animation}`);
                    el.classList.remove('opacity-0');
                }
            }
        });
    }, options);

    document.querySelectorAll('[data-animate]').forEach(el => observer.observe(el));
});
