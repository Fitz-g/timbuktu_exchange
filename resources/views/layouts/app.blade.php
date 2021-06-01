<!DOCTYPE html>
<html lang="fr-France">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:300,400,500,600,700|Montserrat:300,400,500,600,700|Muli:300,400,600,700&display=swap"
        rel="stylesheet">
    <meta name="keywords" content="">
    <meta http-equiv="content-language" content="en-US, fr"/>
</head>

<body>

    <main id="main">
        @yield('content')
    </main>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{ asset('assets/js/agencyList.js') }}"></script>
<script src="{{ asset('assets/js/newConversor.js') }}"></script>
<script>
    let slideIndex = 1;

    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        let i;
        let x = document.getElementsByClassName("slide-box");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "flex";
    }
</script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/agency.js') }}"></script>
</body>

</html>
