<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> node-<?php print $type; ?> node<?php print ($page) ? '-page' : '-teaser'; ?> node-<?php print $type; ?><?php print ($page) ? '-page' : '-teaser'; ?> clear-both">
  <?php if (!$page): ?>
    <h2 class="node-title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>

  <?php print $user_picture; dsm($content['field_image']);?>

  <?php if ($display_submitted): ?>
    <div class="meta">
      <div class="submitted">
        <?php
          $user = user_load($node->uid);  // Get the node creator's user object array.
          print '<div class="submitted-by">'. t('by ') . ((!empty($user->profile_name)) ? $user->profile_name : $user->name) . ((!empty($user->profile_position)) ? ', '. $user->profile_position : '') .'</div>';
          print '<div class="submitted-date">'. format_date($node->created, 'custom', 'j F, Y') .'</div>';
        ?>
      </div>
      <div class="fb-like">
        <iframe src="http://www.facebook.com/plugins/like.php?href=<?php print url(variable_get('file_public_path', conf_path() . '/files'), array('absolute' => TRUE)); ?>&layout=standard&show_faces=false&width=300&action=recommend&font&colorscheme=light&height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:35px;" allowTransparency="true"></iframe>
      </div>
      <div class="clear-both"><!-- --></div>
    </div>
  <?php endif; ?>

  <div class="content clear-both">
    <?php (($teaser) ? print '<div class="field-field-image">'. render($content['field_image']) .'</div>' : ''); ?>
    <?php print render($content); ?>
  </div>

  <?php if ($content['links']): ?>
    <div class="node-links clear-both">
      <?php print render($content['links']); ?>
    </div>
  <?php endif; ?>
</div>
