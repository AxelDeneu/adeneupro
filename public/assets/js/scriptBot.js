function callBot() {
    botui.message.add({
        content: 'Bonjour !'
    }).then(function() {
        return botui.message.add({
            delay: 1000,
            content: 'Vous souhaitez me contacter ?'
        });
    }).then(function() {
        return botui.action.button({
            delay: 1000,
            action: [{
                    text: 'Oui !',
                    value: 'yes'
                }, {
                    text: 'Non, je ne sais même pas pourquoi je suis ici...',
                    value: 'no'
                }
            ]
        });
    }).then(function(res) {
        if (res.value == 'yes') {
            contact();
        }
        if (res.value == 'no') {
            ah();
        }
    });
}

function detectHide() {
    if ($("#my-botui-app").is(":hidden")) {
        console.log('delete');
        del();
    }
    else
    {
        console.log('keep');
    }
}

var ah = function() {
    botui.message.add({
        delay: 1000,
        type: 'embed',
        content: 'https://media.tenor.com/images/dfd5671e5d4847a48be0d024abd03e72/tenor.gif'
    }).then(function() {
        botui.message.add({
            delay: 1000,
            content: 'Dans ce cas, je vous laisse visiter 😉'
        });
    }).then(function() {
        $("#my-botui-app").delay('4000').toggle('hide');
    });
};

var contact = function() {

    var nom;
    var email;
    var msg;


    botui.message.add({
        delay: 1000,
        content: 'Super !'
    }).then(function() {
        return botui.message.add({
            delay: 1000,
            content: 'Commencez par me dire qui vous êtes 🤔'
        });
    }).then(function() {
        return botui.action.text({
            delay: 800,
            action: {
                value: '',
                placeholder: 'Je suis ton père...'
            }
        });
    }).then(function(res) {
        nom = res.value;
    }).then(function() {
        return botui.message.add({
            delay: 1000,
            content: 'Compris !'
        });
    }).then(function() {
        return botui.message.add({
            delay: 1000,
            content: 'A quelle adresse EMail êtes-vous joignable ? 📧'
        });
    }).then(function() {
        return botui.action.text({
            delay: 800,
            action: {
                value: '',
                placeholder: 'bonjour@aurevoir.web'
            }
        });
    }).then(function(res) {
        email = res.value;
    }).then(function() {
        return botui.message.add({
            delay: 1000,
            content: 'Un mail original.'
        });
    }).then(function() {
        return botui.message.add({
            delay: 1000,
            content: 'De quoi souhaitez-vous parler ?'
        });
    }).then(function() {
        return botui.action.text({
            delay: 800,
            action: {
                value: '',
                placeholder: 'Contrat'
            }
        });
    }).then(function(res) {
        msg = res.value;
    }).then(function() {
        return botui.message.add({
            delay: 1000,
            content: 'C\'est envoyé !'
        });
    }).then(function() {
        return botui.message.add({
            delay: 1000,
            content: 'Je vous recontacte très prochainement 👍'
        });
    }).then(function() {
        return botui.message.add({
            delay: 1000,
            content: 'Très bonne journée à vous 😀🌞'
        });
    }).then(function() {
        $("#my-botui-app").delay('4000').toggle('hide');
        $.ajax({
              method: 'POST',
              url: '/send',
              data: {
                  '_token': $("#token").val(),
                  'nom': nom,
                  'mail': email,
                  'message': msg
              }
          });
    });
};

var del = function() {
    $("#my-botui-app").html('<bot-ui id="myBot"></bot-ui>');
};