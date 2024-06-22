// // document-editor.js

// document.addEventListener('DOMContentLoaded', function() {
//     var documentContent = document.getElementById('document-content');
//     var boldButton = document.getElementById('bold-button');
//     var italicButton = document.getElementById('italic-button');
//     var underlineButton = document.getElementById('underline-button');
//     var imageInput = document.getElementById('image-input');
//     var saveButton = document.getElementById('save-document');

//     boldButton.addEventListener('click', function() {
//         document.execCommand('bold', false, null);
//         toggleButtonState(boldButton);
//     });

//     italicButton.addEventListener('click', function() {
//         document.execCommand('italic', false, null);
//         toggleButtonState(italicButton);
//     });

//     underlineButton.addEventListener('click', function() {
//         document.execCommand('underline', false, null);
//         toggleButtonState(underlineButton);
//     });

//     imageInput.addEventListener('change', function(event) {
//         insertImage(event.target.files);
//     });

//     saveButton.addEventListener('click', function() {
//         saveDocument();
//     });

//     function toggleButtonState(button) {
//         if (document.queryCommandState(button.id.replace('-button', ''))) {
//             button.classList.add('btn-toggled');
//         } else {
//             button.classList.remove('btn-toggled');
//         }
//     }

//     function insertImage(files) {
//         var file = files[0];
//         var reader = new FileReader();
        
//         reader.onload = function(event) {
//             var image = new Image();
//             image.src = event.target.result;
//             image.style.maxWidth = '100%'; // Adjust this as needed
//             documentContent.appendChild(image);
//         }
        
//         reader.readAsDataURL(file);
//     }

//     function saveDocument() {
//         var documentData = documentContent.innerHTML;
//         // Send document data to server to save
//         // For example, you can use AJAX to send the data to the server
//         // Replace the alert with your actual AJAX call
//         alert('Document saved successfully:\n' + documentData);
//     }
// });
