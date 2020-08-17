(function ($) {
  $(document).ready(function () {
    $("#reserveNow").on("click", function () {
      $.post(
        mealurl.ajaxurl,
        {
          action: "reservation",
          name: $("#name").val(),
          email: $("#email").val(),
          phone: $("#phone").val(),
          persons: $("#persons").val(),
          date: $("#date").val(),
          time: $("#time").val(),
          rn: $("#rn").val(),
        },
        function (data) {
          console.log(data);
          if ("duplicate" == data) {
            alert("You have already placed a reservation.");
          } else {
            $("#payNow").attr("href", data);
            $("#reserveNow").hide();
            $("#payNow").show();
          }
        }
      );
      return false;
    });
  });
})(jQuery);
