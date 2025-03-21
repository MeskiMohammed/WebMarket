<!DOCTYPE html>
<html lang="en">

@include("client.Layout.head")

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    @include("client.Layout.nav")

    @include("client.Layout.slides")

    @yield("content")

    @include("client.Layout.footer")

</body>

</html>
