(function ($) {
  $(document).ready(function () {
    $("#loadmore").on("click", function () {
      var nexturl = $(this).attr("href");
      $.get(nexturl, {}, function (data) {
        var posts = $(data).find("#posts-container").html();
        $("#posts-container").append(posts);

        var next_page_link = $(data).find("#loadmore").attr("href");
        if (next_page_link) {
          $("#loadmore").attr("href", next_page_link);
        } else {
          $("#loadmore").hide();
        }
      });
      return false;
    });
    var next_page_link = $("#loadmore").attr("href");
    if (!next_page_link) {
      $("#loadmore").hide();
    }
  });
})(jQuery);
