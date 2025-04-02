import './bootstrap';
import './tiptap-editor';
import 'flowbite';

document.addEventListener('livewire:navigated', () => {
    import('flowbite').then(module => {
        module.initFlowbite();
    });
});