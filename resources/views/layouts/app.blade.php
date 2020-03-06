<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
  <meta property='og:type' content='website'>
    <meta property='og:title' content=''>
  <meta property='og:url' content='URL入る'>
    <!--URL入れて-->
  <meta property='og:description' content=''>
  <meta property="og:image" content="">
  <meta name="description" content="" />
  <title>films</title>
  <link rel="stylesheet" href="../../css/reset.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
    @Include('commons.header')

    <div class="container">
        @Include('commons.error_messages')
        @yield('content')
    </div>
</body>
</html>