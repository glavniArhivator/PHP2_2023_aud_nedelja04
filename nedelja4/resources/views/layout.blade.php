<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    @include("common.head")
</head>

<body>
    @include("common.search")
    @include("common.nav")

<div class="container">
    @yield("content")
</div>

    @include("common.newsletter")
<!-- //newsletter -->
<!-- footer -->
    @include("common.footer")
</body>
</html>
