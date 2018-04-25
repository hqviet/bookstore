$('.addBtn').click(function() {

    $.ajax({
        url: './controllers/addCart.php',
        type: 'POST',
        data: {
            itemId: $(this).attr('data-id'),
            itemTitle: $(this).attr('data-title'),
            itemPrice: $(this).attr('data-price'),
            itemQuantity: $(this).attr('data-quantity')
        },
        success: function(data) {
            var ext = ".php";
            if (data.indexOf(ext) >= 0) {
                window.location = data;
            }
            else {
                alert(data);
            }
        },
        error: function() {
            alert('Fail to add !');
        }
    });
});

