require('../../../../../resources/js/bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Toggle Navigation
const button = document.querySelector('#menu-button'); // Hamburger Icon
const menu = document.querySelector('#menu'); // Menu

button.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});

//import 'flag-icons/css/flag-icons.css';
