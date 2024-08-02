import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('posts-container');
    const leftArrow = document.getElementById('left-arrow');
    const rightArrow = document.getElementById('right-arrow');

    leftArrow.addEventListener('click', function () {
        container.scrollBy({
            left: -300,
            behavior: 'smooth'
        });
    });

    rightArrow.addEventListener('click', function () {
        container.scrollBy({
            left: 300,
            behavior: 'smooth'
        });
    });
});
