import axios from 'axios';
import { showModal } from '../utils/modal';

const createItemButton = document.querySelector('.create-item-button');
const storeItemButton = document.querySelector('.store-item-button');
const editItemButtons = document.querySelectorAll('.edit-item-button');
const deleteItemButtons = document.querySelectorAll('.delete-item-button');

storeItemButton.addEventListener('click', () => {
    const name = document.getElementById('name').value;
    const description = document.getElementById('description').value;
    const price = document.getElementById('price').value;
    const category = document.getElementById('category').value;
    const image = document.getElementById('image').files[0];
    const formData = new FormData();
    formData.append('name', name);
    formData.append('description', description);
    formData.append('price', price);
    formData.append('category', category);
    formData.append('image', image);
    axios.post('/items', formData)
    .then(response => {
        window.location.reload();
    });
});

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


