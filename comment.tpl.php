<div id="comment-<?php print $comment->cid; ?>" class="comment<?php print ($comment->new) ? ' comment-new' : ''; print ' '. $status; ?> clear-both">
  <?php print $picture; ?>

  <?php if ($new): ?>
    <span class="new"><?php print $new; ?></span>
  <?php endif; ?>

  <h3 class="comment-title"><?php print $title; ?></h3>

  <div class="submitted">
    <?php print $submitted; ?>
  </div>

  <div class="content">
    <?php print render($content); ?>

    <?php if ($signature): ?>
      <div class="user-signature clear-both">
        <?php print $signature; ?>
      </div>
    <?php endif; ?>
  </div>

  <?php if (!empty($links)): ?>
    <div class="comment-links clear-both">
      <?php print $links; ?>
    </div>
  <?php endif; ?>
</div>
