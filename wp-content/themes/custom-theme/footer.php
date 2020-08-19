<script>
  $(function() {
    $('#style').multiSelect({ noneText: 'Style' });
    $('#type').multiSelect({ noneText: 'Type' });
    $('#gender').multiSelect({ noneText: 'Gender' });
    $('#cabinet').multiSelect({ noneText: 'Cabinet Style' });
    $('#cabinet-finish').multiSelect({ noneText: 'Cabinet Finish' });
    $('#accessory').multiSelect({ noneText: 'Accessory' });
    $('#carousel-a, #carousel-b').carousel({
      pause: true,
      interval: false
    });
    $('div.parallelogram-mobile-default').click(function() {
      if ($('section.home-mobile-menu').hasClass('hide-mobile')) {
        $('section.home-mobile-menu').removeClass('hide-mobile');
        $('section.home-mobile-menu').addClass('show-mobile');
      } else {
        $('section.home-mobile-menu').addClass('hide-mobile');
        $('section.home-mobile-menu').removeClass('show-mobile');
      }
    });
    // add jquery code here
  });
</script>
<?php wp_footer();?>
</body>
</html>
