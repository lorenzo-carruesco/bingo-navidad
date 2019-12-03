var bingo = {
    last_number: 0,
    remaining_numbers: [
        1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
        11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
        21, 22, 23, 24, 25, 26, 27, 28, 29, 30,
        31, 32, 33, 34, 35, 36, 37, 38, 39, 40,
        41, 42, 43, 44, 45, 46, 47, 48, 49, 50,
        51, 52, 53, 54, 55, 56, 57, 58, 59, 60,
        61, 62, 63, 64, 65, 66, 67, 68, 69, 70,
        71, 72, 73, 74, 75, 76, 77, 78, 79, 80,
        81, 82, 83, 84, 85, 86, 87, 88, 89, 90
    ],
    getNewNumber: function () {
        let index = Math.floor(Math.random() * bingo.remaining_numbers.length);
        bingo.last_number = bingo.remaining_numbers[index];
        bingo.remaining_numbers = bingo.remaining_numbers.filter(item => item !== bingo.last_number);
    },
    newBallClick: function (e) {
        e.preventDefault();
        bingo.getNewNumber();
        bingo.printLastNumber();
    },
    printLastNumber: function() {
        $("#ball-output .output-position--1").text(bingo.last_number);
        $("#ball-output .ball").each(function () {
            let position = $(this).attr("position");
            $(this).removeClass("output-position-"+position);
            position++;
            $(this).addClass("output-position-"+position);
            $(this).attr("position",position);
        });
        $("#ball-output").prepend('<div class="ball output-position--1" position="-1" > &nbsp; </div>');
        $("#ball-output .output-position-4").remove();
        $(".number#number-" + bingo.last_number).addClass('glowed');
    },
    printLastNumberOld: function () {
        $("#ball-output .ball").fadeOut(300, function () {
            $("#ball-output").html('<div class="ball" style="display:none">' + bingo.last_number + '</div>');
            $("#ball-output .ball").fadeIn(300, function () {
                $(".number#number-" + bingo.last_number).addClass('glowed');
            });
        });
    },
    init: function () {
        document.getElementById('new-ball').addEventListener("click", bingo.newBallClick, false);
        $("#new-game").click(function (e) {
            return confirm("Nueva Partida");
        });
        //Elimina publicidad del host
        $("body>div:not(#container)").remove()
    }
};
document.addEventListener("DOMContentLoaded", function () {
    bingo.init();
});
