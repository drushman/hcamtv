<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> node-<?php print $type; ?> node<?php print ($page) ? '-page' : '-teaser'; ?> node-<?php print $type; ?><?php print ($page) ? '-page' : '-teaser'; ?> clear-both">
  <?php print $user_picture; ?>

  <?php if (!$page): ?>
    <h2 class="node-title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>

  <?php if ($display_submitted): ?>
    <div class="submitted"><?php print $submitted; ?></div>
  <?php endif; ?>

  <div class="content">
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php if ($content['links']): ?>
    <div class="node-links clear-both">
      <?php print render($content['links']); ?>
    </div>
  <?php endif; ?>
  <?php print render($content['comments']); ?>
</div>
