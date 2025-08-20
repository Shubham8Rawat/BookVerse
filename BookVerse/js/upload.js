// Get the upload link and upload modal
var uploadLink = document.querySelector('.upload-link');
var uploadModal = document.getElementById('uploadModal');

// When upload link is clicked, show the upload modal
uploadLink.addEventListener('click', function() {
    uploadModal.style.display = 'block';
});

// Close the upload modal when the close button or outside modal is clicked
var closeButton = document.querySelector('.close');
window.addEventListener('click', function(event) {
    if (event.target == uploadModal || event.target == closeButton) {
        uploadModal.style.display = 'none';
    }
});
