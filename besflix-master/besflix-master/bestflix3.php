<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Bestflix</title>
</head>

<body>
    <style>
        form {
            padding: 15px;
        }

        .decalage {
            padding-left: 15px
        }

        .container {
            /* border: 1px solid red; */
            padding: 5px;
        }

        .titre {
            border: 1px solid blue;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 3px 3px 2px grey;
            padding: 10px;
        }

        .widget {
            /* border: dashed 2px green; */
            padding: 5px;
            margin-left: 0;

        }

        .stripe {
            /* border: 2px solid blue; */
            border-radius: 3px;
        }

        .recap {
            padding: 5px 5px 5px 0px;
            margin-left: 15px;
            border-radius: 3px;
        }

        .formule {
            background-color: cornflowerblue;
            width: 90%;

        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="logo">
                    <div class="d-flex justify-content-center">
                        <img src="bestflixlogo.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row titre">

            <div class="col-lg-6 col-md-12 col-sm-12 widget" id="MyForm">
                <div class="row decalage">
                    <form action="#">
                        <label for="">Formule d'abonnement</label><br>
                        <select class="custom-select" id="abonnement">
                            <option selected>Sélectionnez votre formule d'abonnement</option>
                            <option value="1" date-price="12">Standard 12€/mois</option>
                            <option value="2" date-price="24">Premium 24€/mois</option>
                            <option value="3" date-price="50">Platinium 50€/mois</option>
                        </select>

                        <div class="form-group">
                            <h3>Information Administrative</h3>
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nom</label>
                            <input type="text" class="form-control" id="nom" aria-describedby="emailHelp"
                                placeholder="Nom" required>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Prénom</label>
                            <input type="tex" class="form-control" id="prenom" aria-describedby="emailHelp"
                                placeholder="Prénom" required>

                        </div>
                        <h2>Adresse</h2>
                        <div class="form-row">
                            <div class="col-7">
                                <input id="adresse" type="text" class="form-control" placeholder="Adresse" required>
                            </div>
                            <div class="col-7">
                                <input id="city" type="text" class="form-control" placeholder="City" required>
                            </div>
                            <div class="col">
                                <input id="state" type="text" class="form-control" placeholder="State">
                            </div>
                            <div class="col">
                                <input id="zip" type="text" class="form-control" placeholder="Zip" required>
                            </div>
                        </div>


                    </form>
                </div>
            </div>



            <div class="col-lg-6 col-md-12 col-sm-12 widget">
                <div class="row decalage">
                    <div class="recap col-12">
                        <h2>Panier</h2>
                        <h3>Formule d'abonnement</h3>
                        <ul class="list-group">
                            <li class="list-group-item formule">Standard 12€/mois</li>
                        </ul>
                    </div>
                </div>
                <br>

                <div class="row decalage">
                    <div class="stripe col-12">
                        <h3>Paiement</h3>
                        <div class="form-group">
                            <label for="">Card number</label>
                            <input id="carte" type="text" class="form-control" placeholder="Numéro de la carte"
                                required>
                        </div>
                        <div class="row">

                            <div class="col-6">
                                <label for="">Mois</label>
                                <input id="mois" maxlength="2" type="text" class="form-control" placeholder="Mois"
                                    required>
                            </div>
                            <div class="col-6">
                                <label for="">Année</label>
                                <input id="annee" type="text" class="form-control" placeholder="Année" required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-6">
                                <label for="">CVC</label>
                                <input id="code" maxlength="3" type="text" class="form-control" placeholder="code"><br>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1" required>
                                    <label class="form-check-label" for="gridCheck1">
                                        J'accepte les CGV
                                    </label>
                                </div>



                                <input id="button" type="submit" class=" btn btn-primary" value="Valider">
                            </div>
                        </div>



                    </div>
                </div>
            </div>



        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

<script type = 'text/javascript'>
    $(document).ready(function () {
        $("#abonnement").change(function () {
            var selectedText = $(this).find("option:selected").text();
            $(".list-group-item.formule").text(selectedText);
        });


        function isValidEmail(email) {
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return emailRegex.test(email);
        }

        $("#button").on("click", function (event) {
            event.preventDefault();
            let email = $('#exampleInputEmail1').val();
            let nom = $('#nom').val();
            let prenom = $('#prenom').val();
            let adresse = $('#adresse').val();
            let city = $('#city').val();
            let state = $('#state').val();
            let zip = $('#zip').val();
            let carte = $('#carte').val();
            let mois = $('#mois').val();
            let annee = $('#annee').val();
            let code = $('#code').val();
            let cgv = $('#gridCheck1').is(':checked');
            console.log(cgv)

            if (!isValidEmail(email)) {
                alert("Veuillez remplir l'email correctement")
            } else if (nom == '') {
                alert("Veuillez remplir le nom correctement")
            } else if (prenom == '') {
                alert("Veuillez remplir le prenom correctement")
            } else if (adresse == '') {
                alert("Veuillez remplir l'adresse correctement")
            } else if (city == '') {
                alert("Veuillez remplir la ville correctement")
            } else if (state == '') {
                alert("Veuillez remplir la région correctement")
            } else if (zip == '') {
                alert("Veuillez remplir le code postal correctement")
            } else if (carte == '') {
                alert("Veuillez remplir la ligne du détenteur de la carte correctement")
            } else if (annee == '') {
                alert("Veuillez remplir l'année correctement")
            } else if (mois == '') {
                alert("Veuillez remplir le mois correctement")
            } else if (code == '') {
                alert("Veuillez rentrer le code de la")
            } else if (!cgv) {
                alert("Veuillez cocher les Conditions Générales de Vente")
            };





            let formData = {
                email: $("#exampleInputEmail1").val(),
                nom: $("#nom").val(),
                prenom: $("#prenom").val(),
                adresse: $("input[placeholder='Adresse']").val(),
                city: $("input[placeholder='City']").val(),
                state: $("input[placeholder='State']").val(),
                zip: $("input[placeholder='Zip']").val(),
                cardNumber: $("#cardNumber").val(),
                expMonth: $("#expMonth").val(),
                expYear: $("#expYear").val(),
                cvc: $("#cvc").val()
            };

            var stripe = Stripe('pk_test_51QBEQTLz3kjsRkUfcDfxfwxORiEG1NP7YxTqRNA7e0zCMo7MN4MgkiwZqp5Xv1fhcTE8Hy6NshkELkImx1WPoVSk00nU1788Uy');
  var elements = stripe.elements();

  // Custom styling can be passed to options when creating an Element.
  var style = {
    base: {
      // Add your base input styles here. For example:
      fontSize: '16px',
      color: '#32325d',
    },
  };

  // Create an instance of the card Element.
  var card = elements.create('card', {
    style: style
  });

  // Add an instance of the card Element into the `card-element` <div>.
  card.mount('#card-element');



  // Create a token or display an error when the form is submitted.
  var form = document.getElementById('payment-form');
  form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createToken(card).then(function(result) {
      if (result.error) {
        // Inform the customer that there was an error.
        var errorElement = document.getElementById('card-errors');
        errorElement.textContent = result.error.message;
      } else {
        console.log(result.id)
        // Send the token to your server.
        debugger
        stripeTokenHandler(result.token);
      }
    });
  });

  function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    // Submit the form
    form.submit();
  }

            $.ajax({
    url: '',
    apikey: process.env.STRIPE_PUBLIC_KEY,
    type: 'POST',
    data: formData,
    headers: {
        'Authorization': `Bearer ${process.env.STRIPE_SECRET_KEY}`
    },
    success: function (response) {
        alert('Paiement réussi! Merci pour votre inscription.');
    },
    error: function (response) {
        alert('Erreur lors du traitement du paiement. Veuillez réessayer.');
    }
});


        });
    });




</script>

</html>

<!--
check email integrity
check nom, prenom integrity
manage checkbox
manage drop down list, manage panier, total

-->