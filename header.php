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
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  }

  document.addEventListener("scroll", function() {
    let navBar = document.querySelector("div.mh-main-nav-wrap");
    let headerImg = document.querySelector("header img.mh-header-image");
    let contentWrapper = document.querySelector("div.mh-wrapper");
    let toTopBtn = document.getElementById("back-to-top");
    if (window.pageYOffset >= headerImg.clientHeight) {
      navBar.classList.add("stick-to-top");
      contentWrapper.style.marginTop = navBar.clientHeight + "px";
      toTopBtn.classList.add("show");
      toTopBtn.classList.remove("hide");
    }
    else if (window.pageYOffset < headerImg.clientHeight) {
      navBar.classList.remove("stick-to-top");
      contentWrapper.style.marginTop = "";
      toTopBtn.classList.add("hide");
      toTopBtn.classList.remove("show");
    }
  });
</script>
</head>

<body id="mh-mobile" <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php mh_before_header();
get_template_part('content', 'header');
mh_after_header(); ?>
