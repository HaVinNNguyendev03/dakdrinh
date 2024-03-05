
let carouselEl = document.getElementById('bootstrap-gallery-container');

// Create a new Bootstrap 5 Carousel instance with specified options
const carousel = new bootstrap.Carousel(carouselEl, {
    interval: 2000,
    wrap: true,
});

// Add an event listener for the 'slide.bs.carousel' event, fires immediately when the slide instance method is invoked.
carouselEl.addEventListener('slide.bs.carousel', (event) => {
    const container = document.querySelector('.carousel-inner');
    lightGallery(container, {
        thumbnail: false,
        pager: false,
        plugins: [],
        hash: false,
        preload: 4,
        selector: '.lg-item',
    });
});