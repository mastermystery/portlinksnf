<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 

$(function () {
  $(document).scroll(function () {
    var $nav = $("#ast-desktop-header");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});</script>
<!-- end Simple Custom CSS and JS -->
