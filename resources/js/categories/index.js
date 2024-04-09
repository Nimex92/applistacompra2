import axios from 'axios';
import { showModal, closeModal } from '../utils/modal';

const createCategoryButton = document.querySelector('.create-category');
const editCategoryButtons = document.querySelectorAll('.edit-category');
const submitButton = document.querySelector('.update-category');
const deleteButton = document.querySelectorAll('.delete-category');
const deleteButtonSubmit = document.querySelector('.submit-delete-category');

createCategoryButton.addEventListener('click', () => {
    showModal('create-category-modal');
});

function showEditCategoryModal(categoryId) {
    // Get the category data
    axios.get(`/categories/${categoryId}/edit`)
        .then(response => {
            // Set the category data to the form
            const nameInput = document.getElementById('editNameInput');
            nameInput.value = response.data.name;
            submitButton.setAttribute('data-id', categoryId);
            // Show the modal
            showModal('edit-category-modal');
        })
        .catch(error => {
            console.log(error);
        });
}

submitButton.addEventListener('click', () => {
    const categoryId = submitButton.getAttribute('data-id');
    const nameInput = document.getElementById('editNameInput');
    const category = {
        name: nameInput.value
    };
    axios.post(`/categories/${categoryId}`, category)
        .then(response => {
            // Close the modal
            closeModal('edit-category-modal');
            // Reload the page
            window.location.reload();
        })
        .catch(error => {
            console.log(error);
        });
});

deleteButton.forEach(button => {
    button.addEventListener('click', () => {
        const categoryId = button.getAttribute('data-id');
        deleteButtonSubmit.setAttribute('data-id', categoryId);
        showModal('delete-category-modal');
    });
});

deleteButtonSubmit.addEventListener('click', () => {
    const categoryId = deleteButtonSubmit.getAttribute('data-id');
    axios.post(`/categories/${categoryId}/delete`)
        .then(response => {
            // Close the modal
            closeModal('delete-category-modal');
            // Reload the page
            window.location.reload();
        })
        .catch(error => {
            console.log(error);
        });
});

editCategoryButtons.forEach(button => {
    button.addEventListener('click', () => {
        //get the button data-id attribute
        const categoryId = button.getAttribute('data-id');
        showEditCategoryModal(categoryId);
    });
});

console.log('Categories index script loaded');