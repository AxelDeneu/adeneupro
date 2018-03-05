<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
  	<title>Axel DENEU</title>
  	<meta charset="utf-8" />
  	<meta name="viewport" content="width=device-width,initial-scale=1" />
  	<meta name="description" content="Site personnel d'Axel DENEU, développeur WEB back-end dans la region Angevine. Retrouvez ici toute mes créations N'hésitez paa me contacter pour tout renseignements." />
  	<meta property="og:site_name" content="adeneu.pro" />
  	<meta property="og:title" content="Axel DENEU | Développeur Web à Angers" />
  	<meta property="og:type" content="profile" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="assets/img/favicon.png" type="image/x-icon" rel="icon"/>
    <link href="assets/img/favicon.png" type="image/x-icon" rel="shortcut icon"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  	@yield('style')
	{!! Analytics::render() !!}
  </head>
  <body>
  	@yield('body')

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.6.1/pixi.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script async src='https://pepper.swat.io/embed.js?eyJwb3NpdGlvbiI6InJpZ2h0IiwiY29sb3IiOiIzNTYxZmQiLCJjdXN0b21Db2xvciI6dHJ1ZSwiaWNvbiI6ImVtYWlsIiwicHJvbm91biI6Im1lIiwibGFuZ3VhZ2UiOiJmciIsImJyYW5kZWQiOmZhbHNlLCJpbnRyb1RleHQiOiIiLCJjaGFubmVscyI6W1sibGlua2VkaW4iLCJodHRwczovL3d3dy5saW5rZWRpbi5jb20vaW4vQXhlbERlbmV1Iiwic29jaWFsIl0sWyJnaXRodWIiLCJodHRwczovL2dpdGh1Yi5jb20vQXhlbERlbmV1Iiwic29jaWFsIl0sWyJlbWFpbCIsImNvbnRhY3RAYWRlbmV1LnBybyIsImNsYXNzaWMiXV19'></script>
    @yield('script')
  </body>
</html>
