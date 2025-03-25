import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'public/assets/vendor/font-awesome/all.min.css',
                'public/assets/vendor/swiper/swiper-bundle.min.css',
                'public/assets/vendor/splide/splide.min.css',
                'public/assets/vendor/slim-select/slimselect.css',
                'public/assets/css/style.css', // Custom CSS
                'public/assets/vendor/swiper/swiper-bundle.min.js',
                'public/assets/vendor/splide/splide.min.js',
                'public/assets/vendor/slim-select/slimselect.min.js',
                'public/assets/vendor/fslightbox/fslightbox.js',
                'public/assets/vendor/splide/splide-extension-auto-scroll.min.js',
                'public/assets/vendor/lenis/lenis.min.js',
                'public/assets/vendor/splittype/index.min.js',
                'public/assets/vendor/gsap/gsap.min.js',
                'public/assets/vendor/gsap/gsap-scroll-trigger.min.js',
                'public/assets/js/main.js',
                'public/assets/js/countdown.js'
            ],
            refresh: true,
        }),
    ],
});
