<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel='stylesheet' href="{{ asset('css/spectrum.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/jquery.js"></script>
<script src="{{ asset('js/spectrum.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

<script>
    $(document).ready(function() {  
    $(".navbar-burger").click(function() {
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
    });
});
</script>



