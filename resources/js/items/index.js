import axios from 'axios';
import { showModal } from '../utils/modal';

const createItemButton = document.querySelector('.create-item-button');
const editItemButtons = document.querySelectorAll('.edit-item-button');
const deleteItemButtons = document.querySelectorAll('.delete-item-button');

editItemButtons.forEach(button => {
    button.addEventListener('click', () => {
        const id = button.getAttribute('data-id');
        axios.get(`/items/${id}/edit`)
        .then(response => {
            // Get the item from the response
            const item = response.data;
            const name = document.getElementById('edit-item-name');
            const description = document.getElementById('edit-item-description');
            const price = document.getElementById('edit-item-price');
            const category = document.getElementById('edit-item-category');
            // Set the values of the input fields
            name.value = item.name;
            description.value = item.description;
            price.value = item.price;
            category.value = item.category_id;
        });
        showModal('edit-item-modal');
    });
});
createItemButton.addEventListener('click', () => {
    showModal('create-item-modal');
});


