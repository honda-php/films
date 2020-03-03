<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
  <meta property='og:type' content='website'>
    <meta property='og:title' content='Kana Honda's Portfolio'>
  <meta property='og:url' content='URL入る'>
    <!--URL入れて-->
  <meta property='og:description' content=''>
  <meta property="og:image" content="">
  <meta name="description" content="" />
  <title>films</title>
  <link href="sass/css/uikit.min.css" media="all" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="img/favicon.ico" />
</head>
<body>
    @Include('commons.header')

    
    <div class="container">
        @Include('commons.error_messages')
        @yield('content')
    </div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/uikit.min.js"></script>
</body>
</html>