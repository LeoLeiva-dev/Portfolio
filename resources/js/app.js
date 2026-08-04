import './bootstrap';

import "./navbar.js";
import "./animations.js";

// Esto le dice a Vite que compile todas las imágenes de esa carpeta
import.meta.glob([
  '../img/**',
]);

import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

