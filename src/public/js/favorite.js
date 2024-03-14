function toggleFavorite(restaurantId) {
    const button = document.querySelector(`button[data-restaurant-id="${restaurantId}"]`);

    if (button.classList.contains('favorite')) {
        // お気に入り解除の処理
        fetch(`/unfavorite/${restaurantId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
        })
        .then(response => {
            if (response.ok) {
                button.classList.remove('favorite');
            }
        })
        .catch(error => {
            console.error('Unfavorite error', error);
        });
    } else {
        // お気に入りの処理
        fetch(`/favorite/${restaurantId}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
        })
        .then(response => {
            if (response.ok) {
                button.classList.add('favorite');
            }
        })
        .catch(error => {
            console.error('Favorite error', error);
        });
    }
}