<?php mh_before_footer(); ?>
<?php mh_magazine_lite_footer_widgets(); ?>
<div class="mh-copyright-wrap">
  <div class="mh-container mh-container-inner mh-clearfix">
    <p class="mh-copyright"><?php printf(esc_html__('Copyright &copy; %1$s | WordPress Theme based on MH Magazine lite by %2$s', 'mh-magazine-lite'), date("Y"), '<a href="' . esc_url('https://www.mhthemes.com/') . '" rel="nofollow">MH Themes</a>'); ?></p>
  </div>
</div>
<?php mh_after_footer(); ?>
<?php wp_footer(); ?>
<a title="Zurück nach oben" href="javascript:void(0)" onclick="scrollToTop()" id="back-to-top" class="hide">
  <svg xmlns="https://www.w3.org/2000/svg" viewbox="0 0 50 50">
    <polygon points="0,25 25,0 50,25" fill="white"/>
    <rect x="15" y="25" width="20" height="25" fill="white"/>
  </svg>
</a>
<script>
  jQuery(document).ready(function() {
    setTimeout(function(){
      let searchWidget = document.querySelector("[id^='search'].widget_search");
      let slickSearch = searchWidget.cloneNode(true);
      slickSearch.classList.add("slick-search");
      let slickNav = document.querySelector("header.mh-header div.slicknav_menu");
      slickNav.insertBefore(slickSearch, slickNav.firstChild);
    }, 1);
  });
</script>
</body>
</html>
