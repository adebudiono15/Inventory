$().ready(function () {
    $('[data-toggle="tooltip"]').tooltip()
    // Toggle Sidebar

    $('.toggle-hide-sidebar').on('click', function () {
        $('body').toggleClass('sidebar-collapse');
        $('.toggle-show-sidebar').addClass('active');
    });
    $('.toggle-show-sidebar').on('click', function () {
        $('body').toggleClass('sidebar-collapse');
        $('.toggle-show-sidebar').removeClass('active');
    });

    $('.toggle-calendar').on('click', function () {
        $('#infoagenda').toggleClass('active');
    });

    // Dropdown

    $('.toggle-dropdown').on('click', function () {
        var n = $(this).next();

        if (n.hasClass('active')) {
            n.removeClass('active');
            $('.dropdownsub-wrapper').removeClass('active');
        } else {
            $('.dropdown-wrapper').removeClass('active');
            n.addClass('active');
        }
    });
    $('.toggle-dropdownsub').on('click', function () {
        var n = $(this).next();

        if (n.hasClass('active')) {
            n.removeClass('active');
        } else {
            $('.dropdownsub-wrapper').removeClass('active');
            n.addClass('active');
        }
    });
    // Hide dropdown out of element
    $(document).on("click", function (event) {
        if (!$(event.target).closest(".dropdown").length) {
            $(".dropdown-wrapper").removeClass("active");
            $('.dropdownsub-wrapper').removeClass('active');
        }
    });

    // Floating Button
    $('.toggle-btn-float').on('click', function () {
        var n = $(this).closest('.btn-float-group');
        n.toggleClass('active');
    })

    // Floating Input label
    $('.is-floating-label input, .is-floating-label textarea').on('focus blur', function (e) {
        $(this).parents('.is-floating-label').toggleClass('is-focused', (e.type === 'focus' || this.value.length > 0));
    }).trigger('blur');
})

// ======= Vanilla Calendar =======

let calendar = new VanillaCalendar({
    selector: "#eventCalendar",
    onSelect: (data, elem) => {
        console.log(data) // console.log(data, elem)
    }
})
