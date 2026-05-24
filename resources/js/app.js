import Alpine from 'alpinejs';
import '@fortawesome/fontawesome-free/css/all.min.css';
import '@fortawesome/fontawesome-free/js/all.js';
import Swal from 'sweetalert2'

// SweetAlert رو گلوبال کن
window.Swal = Swal
window.Alpine = Alpine;
Alpine.start();