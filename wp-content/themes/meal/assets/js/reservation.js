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
          if ("successful" == data) {
            alert("Reservation Successfull");
          } else if ("duplicate") {
            alert("You have already placed a reservation.");
          }
        }
      );
      return false;
    });
  });
})(jQuery);
