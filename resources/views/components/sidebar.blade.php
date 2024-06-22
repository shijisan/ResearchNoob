<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse sidebarMenu">
    <div class="position-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Planning</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Project</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/citations">Citations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/notes">Notes</a>
            </li>
        </ul>
    </div>
</nav>


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