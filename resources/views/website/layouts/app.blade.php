<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LMS</title>

    @include('website.layouts.styles')

</head>
<body class="home page-template-default page page-id-7684 theme-mediz gdlr-core-body woocommerce-no-js mediz-body mediz-body-front mediz-full  mediz-with-sticky-navigation  mediz-sticky-navigation-no-logo  mediz-blockquote-style-1 gdlr-core-link-to-lightbox" data-home-url="index.html">

    @include('website.layouts.mobileview')
    @include('website.layouts.header')
    @include('website.layouts.navbar')


            <!-- mediz-navigation-bar-wrap -->
            @yield('content')

    @include('website.layouts.footer')

    </div>
    </div>

    @include('website.layouts.scripts')

</body>
</html>
