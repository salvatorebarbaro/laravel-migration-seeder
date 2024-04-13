import './bootstrap';

import * as bootstrap from 'bootstrap'

// Import our custom CSS
import '~resources/scss/app.scss'

// resources/js/app.js // pre compilazione delle immagini
import.meta.glob([
    '../img/**'
    ])