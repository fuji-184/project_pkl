import './bootstrap';
import './elements/turbo-echo-stream-tag';
import './libs/turbo';

import modal from '../js/components/modal.js'

import Alpine from 'alpinejs';

Alpine.data('modal', modal);

window.Alpine = Alpine;

Alpine.start();
