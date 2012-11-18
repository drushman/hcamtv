<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!--[if lte IE 8]>
    <style type="text/css">
      body { behavior: url(<?php print $base_path . path_to_theme() .'/csshover3.htc'; ?>); }
    </style>
  <![endif]-->
  <!--[if lte IE 6]>
    <style type="text/css">
      .pngfix { behavior: url(<?php print $base_path . path_to_theme() .'/iepngfix.htc'; ?>); }
      /* ___________ IE6 IFRAME FIX ________ */
      .ui-datepicker-cover {
        display: none; /*sorry for IE5*/
        display/**/: block; /*sorry for IE5*/
        position: absolute; /*must have*/
        z-index: -1; /*must have*/
        filter: mask(); /*must have*/
        top: -4px; /*must have*/
        left: -4px; /*must have*/ /* LTR */
        width: 200px; /*must have*/
        height: 200px; /*must have*/
      }
    </style>
    <script type="text/javascript" src="<?php print $base_path . path_to_theme() .'/iepngfix-tilebg.js'; ?>"></script>
  <![endif]-->
  <?php print $scripts; ?>
</head>
<body class="<?php print hcamtv_body_class($is_front, $logged_in, $is_admin, $node, $sidebar_right, $banner_right); ?>">
  <div id="page">
    <?php /* if (!empty($navigation)): ?>
      <div id="navigation">
        <?php print $navigation; ?>
      </div>
    <?php endif; */ ?>

    <div id="left">
      <div id="header" class="clear-both">
        <div id="site-title">
          <?php if (!empty($logo)): ?>
            <div id="logo">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            </div>
          <?php endif; ?>
        </div>

        <?php if (!empty($header)): ?>
          <div id="header-region">
            <?php print $header; ?>
          </div>
        <?php endif; ?>

        <div class="clear-both"><!-- --></div>
      </div>

      <div id="wrapper" class="clear-both"><div id="wrapper-inner">
        <?php if (!empty($primary_links)): ?>
          <div id="primary">
            <?php print menu_tree($menu_name = 'primary-links'); ?>
            <div class="clear-both"><!-- --></div>
          </div>
          <div class="clear-both"><!-- --></div>
        <?php endif; ?>

        <div id="main">
          <?php if (!empty($content_top)): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div>
          <?php endif; ?>

          <?php if (!$is_front): ?>
            <div id="content" class="clear-both">
              <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
              <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
              <div class="clear-both"><!-- --></div>
              <?php if (!empty($messages)): print $messages; endif; ?>
              <?php if (!empty($help)): print $help; endif; ?>
              <div id="content-content" class="clear-both">
                <?php print $content; ?>
              </div>
              <?php print $feed_icons; ?>
            </div>
          <?php endif; ?>

          <?php if (!empty($content_split_left) || !empty($content_split_right)): ?>
            <div id="content-split" class="clear-both">
              <div id="content-split-left">
                <?php print $content_split_left; ?>
              </div>

              <div id="content-split-right">
                <?php print $content_split_right; ?>
              </div>

              <div class="clear-both"><!-- --></div>
            </div>
          <?php endif; ?>

          <?php if (!empty($content_bottom)): ?>
            <div id="content-bottom" class="clear-both">
              <?php print $content_bottom; ?>
            </div>
          <?php endif; ?>
        </div>

        <?php if (!empty($sidebar_right)): ?>
          <div id="sidebar-right">
            <?php print $sidebar_right; ?>
          </div>
        <?php endif; ?>

        <div class="clear-both"><!-- --></div>
      </div></div>
    </div>

    <?php if (!empty($banner_right)): ?>
      <div id="right">
        <div id="banner-right">
          <?php print $banner_right; ?>
        </div>
      </div>

      <div class="clear-both"><!-- --></div>
    <?php endif; ?>

    <?php if (!empty($footer_message)): ?>
      <div id="footer-message" class="clear-both">
        <?php print $footer_message; ?>
      </div>
    <?php endif; ?>
  </div>

  <?php print $closure; ?>
</body>
</html>
