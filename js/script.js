(function ($) {

    $(document).ready(function () {

        var ORDER = 'title';
        var CATEGORY = '*';

        //render all resources when the page start loading
        useFetch(CATEGORY, ORDER);

        //ajax call
        function useFetch(c, o) {
            $.ajax({
                url: wpAjax.ajaxUrl,
                data: { action: 'filter', category: c, order: o },
                type: 'post',
                success: function (res) {
                    $('.filter-field').html(res);
                },
                error: function (err) {
                    console.warn(err);
                }
            });
        }

        // render function when category or filter changed
        function renderFilterItems (e, c, o) {
            e.preventDefault();

            console.log('category', c);
            console.log('order', o);

            useFetch(c, o);
        }

        // on change category
        $(document).on('click', '.category-item', function(e) {

            CATEGORY = $(this).data('category');

            renderFilterItems(e, CATEGORY, ORDER);

        });

        // on change order
        $(document).on('change', '#resources-order', function (e) {
            e.preventDefault();

            ORDER = $(this).val();

            renderFilterItems(e, CATEGORY, ORDER);

        });

        // pagination 
        $('#filterResources').delegate('#resourcesPagination a', 'click', function (e) {
            e.preventDefault();
            var link = $(this).attr('href');

            $('#filterResources').fadeOut('400', function() {
                $(this).load(link , function (res) {
                    $('.filter-field').html(res);
                    $('.filter-field').fadeIn('400');
                });
            });

        });

    
         // $(document).on('submit', '#filter-form', function (e) {
        //     e.preventDefault();

        //     $category = $('#resources-category').val();
        //     $order = $('#resources-order').val();

        //     $.ajax({
        //         url: wpAjax.ajaxUrl,
        //         data: { action: 'filter', category: $category, order: $order },
        //         type: 'post',
        //         success: function (res) {
        //             $('.filter-field').html(res);
        //             console.log(res);
        //         },
        //         error: function (err) {
        //             console.log(err);
        //         }
        //     });
        // });
        

        // $(document).on('submit', '#filter-form', function(e) {

        //     e.preventDefault();

        //     var filterData = $(this).serialize();
            

        //     $.ajax({
        //         url: wpAjax.ajaxUrl,
        //         data: { action: 'filter', data: filterData },
        //         type: 'post',
        //         success: function (res) {
        //             console.log(res);
        //         },
        //         error: function (err) {
        //             console.log(err);
        //         }
        //     });
        // });


    });

}) (jQuery);