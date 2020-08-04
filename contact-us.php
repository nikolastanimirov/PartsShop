
<html>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css"/>
    <script src="scripts/main.js"></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>
Авточасти Росен Петров
</title>
</head>
<body>
  <?php
require 'loginUser.php';
require 'errors.php';
?>
<?php
require 'header.php';?>
<div class="container">
  <div class="company-description">
    <p class="description">
      <h2>Авточасти Росен Петров</h2>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit
      Praesentium suscipit inventore nam a! Laboriosam beatae magni quis odit eaque natus assumenda asperiores voluptatibus, amet cumque quisquam quos tenetur incidunt reprehenderit.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus suscipit tenetur iusto distinctio dolores fugit voluptates eos obcaecati aliquam ea, dolor id ut fuga placeat debitis veritatis commodi quasi consectetur.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, facilis vitae. Modi laudantium tempore debitis dicta voluptatum quod obcaecati, ad nobis suscipit expedita earum iusto qui minus architecto reprehenderit id?Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quisquam perspiciatis ea, molestias voluptatem dolore perferendis dignissimos beatae aperiam minus sunt temporibus labore laboriosam autem nemo, corrupti id officiis quas!
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id sunt adipisci omnis laborum aperiam quos laboriosam, exercitationem aspernatur ipsam libero asperiores ea blanditiis. Minus alias voluptates, obcaecati nulla blanditiis nihil!
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, perspiciatis labore. Sunt, dicta perferendis! Nihil odit animi debitis, aliquam similique iusto consequatur quam. Rerum libero accusantium odio ipsa suscipit praesentium.
    </p>
    </div>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
    <div class="card" style="width: 30rem; height:14rem;">
      <div class="card-body">
        <h2 class="card-title">Собственик - Росен Петров</h2>
        <p class="card-text">GSM +359 985 8888 888.</p>
        <p class="card-text">Email: rosen.petrov@avto.com</p>
      </div>
    </div>
    <div class="card" style="width: 30rem; height:14rem;">
      <div class="card-body">
        <h2 class="card-title">Склад - Росен Петров</h2>
        <p class="card-text">GSM +359 985 134 888.</p>
        <p class="card-text">Email: sklad.petrov@avto.com</p>
      </div>
    </div>

    <form class="needs-validation" id="contact-us-form" novalidate>
      <h3>Направете запитване:</h3>
      <hr style="height:2px;border-width:0;color:gray;background-color:gray">
      <div class="form-row">

        <div class="col-md-4 mb-3">
          <label for="validationCustom01">Име</label>
          <input type="text" class="form-control" id="fname" placeholder="Име" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom02">Фамилия</label>
          <input type="text" class="form-control" id="lname" placeholder="Фамилия" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationCustom03">Град</label>
          <input type="text" class="form-control" id="city" placeholder="Град" required>
          <div class="invalid-feedback">
            Моля въведете град!
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationCustom04">Област</label>
          <input type="text" class="form-control" id="state" placeholder="Област" required>
          <div class="invalid-feedback">
          Моля въведете област!
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationCustom05">Пощенски код</label>
          <input type="text" class="form-control" id="zip" placeholder="Пощенски код" required>
          <div class="invalid-feedback">
          Моля въведете пощенски код!
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
          Съгласен съм с общите условия!
          </label>
          <div class="invalid-feedback">
            Трябва да се съгласите преди изпращане!
          </div>
        </div>
      </div>
      <button class="btn btn-success" type="submit">Изпрати</button>
    </form>
    <div style="width: 100%; padding-top:25px;"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0"  marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=sofia+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
  </div>

<?php
require 'footer.php';?>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>