<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    @if ($page->production)
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-61795904-1', 'auto');
            ga('send', 'pageview');
        </script>
    @endif
</head>
<body class="font-sans font-normal text-grey-darkest leading-normal bg-grey-light">
    <div class="container mx-auto mb-8">
        @yield('body')

        <div class="mt-8 pt-8 text-grey-darker text-center">
            &copy; <a href="/" class="text-grey-darker no-underline hover:underline">Nicky Woolf</a>
        </div>
    </div>
</body>
</html>
