(function($) {
  $(document).ready(function() {
    $(".wp-lity").each(function() {
      if ($(this).is("a")) $(this).attr("data-lity", "");
      else
        $(this)
          .find("a")
          .attr("data-lity", "");
    });
  });
})(jQuery);
