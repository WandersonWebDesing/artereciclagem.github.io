<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('.navbar').addClass('scrolled');
                $('.carousel-container').addClass('scrolled');
            } else {
                $('.navbar').removeClass('scrolled');
                $('.carousel-container').removeClass('scrolled');
            }
        });

        $('.navbar-toggler').on('click', function () {
            $('#offcanvasMenu').toggleClass('show');
        });

        $('#offcanvasClose').on('click', function () {
            $('#offcanvasMenu').removeClass('show');
        });
    });
</script>
