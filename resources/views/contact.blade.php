<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <title>Axel DENEU</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
  <meta name="description" content="Site personnel d'Axel DENEU, développeur WEB back-end" />
  <meta property="og:site_name" content="adeneu.pro" />
  <meta property="og:title" content="Axel DENEU" />
  <meta property="og:type" content="profile" />
  <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200" rel="stylesheet" type="text/css" />

  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/styleContact.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div id="wrapper">
    <div id="main">
      <div class="inner">
        <h1 id="title">Me contacter</h1>
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <div class="field">
          <label for="nom" class="field-label" style="text-align:left;">Nom</label>
          <input type="text" id="nom" name="nom" class="field-input"/>
        </div>
        <div class="field">
          <label for="prenom" class="field-label" style="text-align:left;">Prénom</label>
          <input type="text" id="prenom" name="prenom" class="field-input"/>
        </div>
        <div class="field">
          <label for="mail" class="field-label" style="text-align:left;">EMail</label>
          <input type="email" id="mail" name="mail" class="field-input"/>
        </div>
        <div class="field">
          <label for="sujet" class="field-label" style="text-align:left;">Sujet</label>
          <input type="text" id="sujet" name="sujet" class="field-input"/>
        </div>
        <div class="field">
          <label for="message" class="field-label" style="text-align:left;">Message</label>
          <input type="textbox" id="message" name="message" class="field-input"/>
        </div>
        <div id="buttons">
          <a id="valid" href="#" class="btn green">Valider</a>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
  <script src="assets/js/particles.js"></script>
  <script>
       particlesJS.load('wrapper', 'assets/js/particlesjs-config.json', function() {
          console.log('callback - particles.js config loaded');
      });
       //  Au focus
      $('.field-input').focus(function() {
          $(this).parent().addClass('is-focused has-label');
      });

       // à la perte du focus
      $('.field-input').blur(function() {
          $parent = $(this).parent();
          if ($(this).val() == '') {
              $parent.removeClass('has-label');
          }
          $parent.removeClass('is-focused');
      });

       // si un champs est rempli on rajoute directement la class has-label
      $('.field-input').each(function() {
          if ($(this).val() != '') {
              $(this).parent().addClass('has-label');
          }
      });


      $("#valid").click(function() {
          console.log('click');
          $.ajax({
              method: 'POST',
              url: '/send',
              data: {
                  '_token': $("#token").val(),
                  'nom': $("#nom").val(),
                  'prenom': $("#prenom").val(),
                  'mail': $("#mail").val(),
                  'sujet': $("#sujet").val(),
                  'message': $("#message").val()
              }
          })
              .done(function(msg) {
              alert(msg);
          });

      });</script>
</body>

</html>
