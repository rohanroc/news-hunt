document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('rss_url');
    const links = document.querySelectorAll('.l');

    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const url = this.getAttribute('data-link');
            searchInput.value = url;
        });
    });
});
