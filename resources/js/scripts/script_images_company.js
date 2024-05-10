document.addEventListener('DOMContentLoaded', function() {
    const dropArea = document.getElementById('drop-area');
    const fileInput = document.getElementById('fileInput');
    const imagePreview = document.getElementById('image-preview');

    // Event listeners
    dropArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        dropArea.classList.add('active');
    });

    dropArea.addEventListener('dragleave', function() {
        dropArea.classList.remove('active');
    });

    dropArea.addEventListener('drop', function(e) {
        e.preventDefault();
        dropArea.classList.remove('active');
        const files = e.dataTransfer.files;
        handleFiles(files);
    });

    fileInput.addEventListener('change', function() {
        const files = this.files;
        handleFiles(files);
    });

    // Function to handle selected files
    function handleFiles(files) {
        for (const file of files) {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function(e) {
                    const image = new Image();
                    image.src = e.target.result;
                    image.classList.add('preview-image');

                    const closeButton = document.createElement('button');
                    closeButton.innerHTML = '<i class="bi bi-x"></i>';
                    closeButton.classList.add('remove-button');
                    closeButton.addEventListener('click', function() {
                        imageContainer.parentNode.removeChild(imageContainer);
                        // Remove o arquivo associado
                        const index = Array.from(imagePreview.children).indexOf(imageContainer);
                        fileInput.files.splice(index, 1);
                    });

                    const imageContainer = document.createElement('div');
                    imageContainer.classList.add('image-container');
                    imageContainer.appendChild(image);
                    imageContainer.appendChild(closeButton);

                    imagePreview.appendChild(imageContainer);
                };
            }
        }
    }
});
