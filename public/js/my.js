$(document).ready(function () {

    $('.add-to-cart').on('click', function () {
        const productId = $(this).data('product-id');
        const quantity = $(this).data('quantity');   

        $.ajax({
            url: '/basket/add', 
            method: 'POST',  
            data: {
                productId: productId,
                quantity: quantity,
                _token: $('meta[name="csrf-token"]').attr('content') 
            },
            success: function (response) {
                alert(response.message);
                location.reload();
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
                alert('Произошла ошибка при добавлении товара.');
            }
        });
    });


    $('.delete-basket').on('click', function () {
        const productId = $(this).data('id');

        $.ajax({
            url: '/basket/delete', 
            method: 'DELETE',  
            data: {
                productId: productId,
                _token: $('meta[name="csrf-token"]').attr('content') 
            },
            success: function (response) {
                alert(response.message);
                location.reload();
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
                alert('Произошла ошибка при добавлении товара.');
            }
        });
    });

    $('.change-quantity').on('change', function () {
        const id = $(this).data('id');
        $.ajax({
            url: '/basket/quantity', 
            method: 'POST',  
            data: {
                id: id,
                quantity:$(this).val(),
                _token: $('meta[name="csrf-token"]').attr('content') 
            },
            success: function (response) {
                location.reload();
            },
            error: function (xhr, status, error) {
                alert(xhr.responseJSON.error);
            }
        });
    });

    // AJAX-запрос
    $.ajax({
        url: "/basket/count",
        method: "GET",
        dataType: "json",
        success: function (response) {
            // Предполагается, что сервер возвращает объект с полем "quantity"
            $("#product-quantity").text(`${response.count}`);
        },
        error: function () {
            $("#product-quantity").text("Ошибка загрузки данных.");
        },
    });
});