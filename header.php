<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php if (is_singular() && pings_open(get_queried_object())) : ?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php endif; ?>
<?php wp_head(); ?>
<script>
    //header-image.removeAttribute("height");
    //header-image.removeAttribute("width");
    document.addEventListener("scroll", function () {
      var trigger_offset = 5;
      function recurse_collapse(node) {
        for (el of node) {
          el.setAttribute("style", "max-height: 0px;");
          recurse_collapse(el.children);
        }
      }
      function recurse_expand(node) {
        for (el of node) {
          el.removeAttribute("style");
          recurse_expand(el.children);
        }
      }
      var header_image_wrapper = document.getElementsByClassName("collapse");
      var header_image = document.querySelector(".mh-header-image");
      if (window.pageYOffset > trigger_offset) {
        recurse_collapse(header_image_wrapper);
      }
      if (window.pageYOffset < trigger_offset) {
        recurse_expand(header_image_wrapper);
      }
    });
</script>
</head>

<body id="mh-mobile" <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php mh_before_header();
get_template_part('content', 'header');
mh_after_header(); ?>
