<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResearchNoob Document Editor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('./css/document-editor.css') }}"> <!-- Add your custom CSS for the document editor -->

    <link rel="stylesheet" href="{{asset('./css/nav.css')}}">

    <link rel="stylesheet" href="{{asset('./css/sidebar.css')}}">
</head>
<body>

    <x-Nav/>

    <div class="container-fluid">
        <div class="row">
        





            <div class="col">
                <h1>Document Editor</h1>
                <!-- Toolbar for text formatting -->
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with text formatting options">
                    <div class="btn-group me-2" role="group" aria-label="Text formatting">
                        <button type="button" class="btn btn-secondary" id="bold-button">Bold</button>
                        <button type="button" class="btn btn-secondary" id="italic-button">Italic</button>
                        <button type="button" class="btn btn-secondary" id="underline-button">Underline</button>
                    </div>
                </div>
                <!-- Document content area -->
                <div id="document-content" contenteditable="true">
                    <!-- Users can type and edit content here -->
                </div>
                <!-- Button to insert image -->
                <div class="mt-3">
                    <input type="file" id="image-input" accept="image/*" style="display: none;">
                    <button type="button" class="btn btn-primary" onclick="document.getElementById('image-input').click();">Insert Image</button>
                </div>
                <!-- Button to save document -->
                <div class="mt-3">
                    <button type="button" class="btn btn-success" id="save-document">Save Document</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('./js/document-editor.js') }}"></script> <!-- Add your custom JavaScript for the document editor -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var sidebarLinks = document.querySelectorAll('#sidebarMenu .nav-link');
            var currentPath = window.location.pathname;

            sidebarLinks.forEach(function(link) {
                // Check if the link's href matches the current path, considering trailing slashes
                if (link.getAttribute('href') === currentPath || link.getAttribute('href') === currentPath + '/') {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>
