import './bootstrap';
// If route is /items import ./items/index.js
if (window.location.pathname === '/items') {
    import('./items/index');
}
// If route is /category import ./category/index.js
if (window.location.pathname === '/categories') {
    import('./categories/index');
}

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



