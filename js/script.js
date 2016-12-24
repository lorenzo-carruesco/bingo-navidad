$("#new-game").click(function(e) {
    return confirm("Nueva Partida");
});

$("#new-ball").click(function(e) {
    e.preventDefault();
    var remaining_numbers = $(".number:not(.glowed)");
    var index = Math.floor((Math.random() * remaining_numbers.size())); 
    var number = remaining_numbers.eq(index).text();
    $("#ball-output .ball").fadeOut(300, function () {
        $("#ball-output").html('<div class="ball" style="display:none">'+number+'</div>');
        $("#ball-output .ball").fadeIn(300, function () {
            $(".number#number-"+number).addClass('glowed');
        });
    });
});