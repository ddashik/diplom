// JavaScript for opening and closing the modal
document.addEventListener("DOMContentLoaded", function() {
    var modal = document.querySelector(".modal");
    var modalImg = document.querySelector(".modal-img"); // Changed to select the modal image element

    // Get all gallery images
    var images = document.querySelectorAll(".gallery img");
    images.forEach(function(img) {
        img.addEventListener("click", function() {
            modal.style.display = "flex"; // Display the modal
            modalImg.src = this.src; // Set modal image source to clicked image source
            modalImg.alt = this.alt; // Set modal image alt to clicked image alt
        });
    });

    // Close the modal when clicking outside of the modal content or on close button
    modal.addEventListener("click", function(event) {
        if (event.target === modal || event.target.classList.contains("modal-close")) {
            modal.style.display = "none"; // Hide the modal
        }
    });
});
