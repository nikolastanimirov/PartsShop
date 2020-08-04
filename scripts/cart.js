$(document).ready(function () {
  load_product();

  load_cart_data();

  function load_product() {
    $.ajax({
      url: "fetch_item.php",
      method: "POST",
      success: function (data) {
        $("#display_item").html(data);
      },
    });
  }

  function load_cart_data() {
    $.ajax({
      url: "fetch_cart.php",
      method: "POST",
      success: function (data) {
        $("#shopping_cart").html(data);
      },
    });
  }
  //Test
  function load_cart_data() {
    $.ajax({
      url: "sendOrder.php",
      method: "POST",
      success: function (data) {
        $("#order_cart").html(data);
      },
    });
  }

  $("#add_to_cart").click(function () {
    var product_id = [];
    var product_name = [];
    var product_price = [];
    var action = "add";
    $(".select_product").each(function () {
      if ($(this).prop("checked") == true) {
        product_id.push($(this).data("product_id"));
        product_name.push($(this).data("product_name"));
        product_price.push($(this).data("product_price"));
      }
    });

    if (product_id.length > 0) {
      $.ajax({
        url: "action.php",
        method: "POST",
        data: {
          product_id: product_id,
          product_name: product_name,
          product_price: product_price,
          action: action,
        },
        success: function (data) {
          $(".select_product").each(function () {
            if ($(this).prop("checked") == true) {
              $(this).attr("checked", false);
              var temp_product_id = $(this).data("product_id");
              $("#product_" + temp_product_id).css(
                "background-color",
                "transparent"
              );
              $("#product_" + temp_product_id).css("border-color", "#ccc");
            }
          });

          load_cart_data();
          alert("Вие успешно добавихте в количката");
        },
      });
    } else {
      alert("Изберете продукт");
    }
  });

  $(document).on("click", ".delete", function () {
    var product_id = $(this).attr("id");
    var action = "remove";
    if (confirm("Сигурну ли сте, че иската да изтриете продукта")) {
      $.ajax({
        url: "action.php",
        method: "POST",
        data: { product_id: product_id, action: action },
        success: function () {
          load_cart_data();
          alert("Продуктът беше успешно премахнат");
        },
      });
    } else {
      return false;
    }
  });

  $(document).on("click", "#clear_cart", function () {
    var action = "empty";
    $.ajax({
      url: "action.php",
      method: "POST",
      data: { action: action },
      success: function () {
        load_cart_data();
      },
    });
  });
});
