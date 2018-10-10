<?php mh_before_footer(); ?>
<?php mh_magazine_lite_footer_widgets(); ?>
<div class="mh-copyright-wrap">
  <div class="mh-container mh-container-inner mh-clearfix">
    <?php printf(esc_html__('%1$s'), '<a class="footer-link" href="' . esc_url('http://dkpnext.azurewebsites.net/impressum') . '">Impressum</a>'); ?>
    <?php printf(esc_html__('%1$s'), '<a class="footer-link" href="' . esc_url('http://dkpnext.azurewebsites.net/datenschutzerklaerung') . '">Datenschutzerklärung</a>'); ?>
  </div>
</div>
<?php mh_after_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
