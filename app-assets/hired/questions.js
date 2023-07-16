// for assessment
$('.discover-btn').click(function () {
    $('.discover-details').addClass('d-none');
    $('.disc-qstn1').removeClass('d-none');
});

// $('.disc-qstn9 .qstn-choices label').click(function () {
//     const selectedChoice = $(this).attr('for');
//     alert('user opted - ' + selectedChoice);
//     $('.disc-qstn9').addClass('d-none');
//     $('.thanks-note').removeClass('d-none');
// });

for (let i = 1; i < 10; i++) {
    $('.disc-qstn' + i).click(function () {
        const selectedChoice = $(this).attr('for');
        $("#".selectedChoice).prop('checked', true);
        $('.disc-qstn' + i).addClass('d-none');
        $('.disc-qstn' + (i + 1)).removeClass('d-none');
        if (i == 9)
            $('.lite-qstn10').removeClass('d-none');
    });
}

for (let i = 10; i < 15; i++) {
    $('.lite-qstn' + i).click(function () {
        const selectedChoice = $(this).attr('for');
        $("#".selectedChoice).prop('checked', true);
        $('.lite-qstn' + i).addClass('d-none');
        $('.lite-qstn' + (i + 1)).removeClass('d-none');
        if (i == 14)
            $('.mensa-qstn15').removeClass('d-none');
    });
}

for (let i = 15; i < 20; i++) {
    $('.mensa-qstn' + i).click(function () {
        const selectedChoice = $(this).attr('for');
        $("#".selectedChoice).prop('checked', true);
        $('.mensa-qstn' + i).addClass('d-none');
        $('.mensa-qstn' + (i + 1)).removeClass('d-none');
        if (i == 19)
            $('.lpje-qstn20').removeClass('d-none');
    });
}

for (let i = 20; i < 25; i++) {
    $('.lpje-qstn' + i).click(function () {
        const selectedChoice = $(this).attr('for');
        $("#".selectedChoice).prop('checked', true);
        $('.lpje-qstn' + i).addClass('d-none');
        $('.lpje-qstn' + (i + 1)).removeClass('d-none');
        if (i == 24)
            $('.avk-qstn25').removeClass('d-none');
    });
}

for (let i = 25; i < 30; i++) {
    $('.avk-qstn' + i).click(function () {
        const selectedChoice = $(this).attr('for');
        $("#".selectedChoice).prop('checked', true);
        $('.avk-qstn' + i).addClass('d-none');
        $('.avk-qstn' + (i + 1)).removeClass('d-none');
        if (i == 29)
            $('.skill-qstn30').removeClass('d-none');
    });
}

for (let i = 30; i < 37; i++) {
    $('.skill-qstn' + i).click(function () {
        const selectedChoice = $(this).attr('for');
        $("#".selectedChoice).prop('checked', true);
        $('.skill-qstn' + i).addClass('d-none');
        $('.skill-qstn' + (i + 1)).removeClass('d-none');
        if (i == 36)
            $('.appt-qstn37').removeClass('d-none');
    });
}

for (let i = 37; i < 42; i++) {
    $('.appt-qstn' + i).click(function () {
        const selectedChoice = $(this).attr('for');
        $("#".selectedChoice).prop('checked', true);
        $('.appt-qstn' + i).addClass('d-none');
        $('.appt-qstn' + (i + 1)).removeClass('d-none');
        if (i == 41)
            $('.thanks-note').removeClass('d-none');
    });
}