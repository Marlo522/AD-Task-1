function filterKdramas(genre) {
        const items = document.querySelectorAll('.kdrama-item');
        items.forEach(item => {
            if (genre === 'All' || item.getAttribute('data-genre') === genre) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }