var quantity = $('select[name="quantity"]').val();

$('select[name="quantity"]').on('change' , function(){
    quantity = $('select[name="quantity"]').val();
});

$('#cart-button-submit').click(function(){
    $('#quantity-value').val(quantity);
});



// $('#search-bar').blur(function(){
//     $('.search-results').hide()
// });

$(document).click(function(e) {
    var target = e.target;

    if (!$(target).is('.search-results') && !$(target).parents().is('.search-results')) {
        $('.search-results').hide();
    }
});