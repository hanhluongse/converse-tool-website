import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.buy-button').forEach(button => {
        button.addEventListener('click', () => {
            alert('Added to cart!');
        });
    });
});