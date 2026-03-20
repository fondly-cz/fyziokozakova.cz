import { createApp } from 'vue';
import App from './App.vue';
import './index.css';
import { Fancybox } from '@fancyapps/ui';
import '@fancyapps/ui/dist/fancybox/fancybox.css';
Fancybox.bind('[data-fancybox]');
createApp(App).mount('#app');
//# sourceMappingURL=main.js.map