$(document).ready(function () {
    $('.prefecture-select, .genre-select').on('change', function () {
        performSearch();
    });

    $('.search-input').on('input', function () {
        performSearch();
    });

    function performSearch() {
        var query = $('.search-input').val();
        var selectedPrefecture = $('.prefecture-select').val();
        var selectedGenre = $('.genre-select').val();


        $.ajax({
            type: 'GET',
            url: '/results',
            data: {
                query: query,
                prefecture: selectedPrefecture,
                genre: selectedGenre
            },
            success: function (data) {
                $('.search-results').html(data);
            }
        });
    }
});