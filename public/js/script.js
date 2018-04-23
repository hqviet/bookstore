$('.addBtn').click(function() {
  $.ajax({
    url: 'controllers/addCart.php',
    type: 'GET',
    data: {
      itemId: $(this).attr('data-id'),
      itemTitle: $(this).attr('data-title'),
      itemPrice: $(this).attr('data-price'),
      itemQuantity: $(this).attr('data-quantity')
    },
    success: function(data) {
      alert(data);
    },
    error: function() {
      alert('Fail to add !');
    }
  });
    $.ajax({
        url: './controllers/addCart.php',
        type: 'GET',
        data: {
            itemId: $(this).attr('data-id'),
            itemTitle: $(this).attr('data-title'),
            itemPrice: $(this).attr('data-price'),
            itemQuantity: $(this).attr('data-quantity')
        },
        success: function(data) {
            if (data.includes(".php")) {
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

