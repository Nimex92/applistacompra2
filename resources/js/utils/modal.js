export function showModal(name) {
    window.dispatchEvent(new CustomEvent('open-modal', { detail: name }));
}
export function closeModal(name) {
    window.dispatchEvent(new CustomEvent('close-modal', { detail: name }));
}
// Path: resources/js/utils/modal.js