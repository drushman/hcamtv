<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> node-<?php print $type; ?> node<?php print ($page) ? '-page' : '-teaser'; ?> node-<?php print $type; ?><?php print ($page) ? '-page' : '-teaser'; ?> clear-both">
  <?php print $user_picture; dsm($node);?>

  <?php if (!$page): ?>
    <h2 class="node-title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
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
        <iframe src="http://www.facebook.com/plugins/like.php?href=<?php print url(drupal_lookup_path('alias',"node/".$node->nid), array('absolute' => TRUE)); ?>&layout=standard&show_faces=false&width=300&action=recommend&font&colorscheme=light&height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:35px;" allowTransparency="true"></iframe>
      </div>
      <div class="clear-both"><!-- --></div>
    </div>
  <?php endif; ?>

  <div class="content">
    <?php (($teaser) ? print '<div class="field-field-image">'. $node->field_image[0]['view'] .'</div>' : ''); ?>
    <?php print $node->body['und'][0]['value']; ?>

    <?php if ($page): ?>
      <?php
      global $base_url;
      $playlistFile = variable_get('file_public_path', conf_path() . '/files')  . '/videos/playlists/' . $node->nid . '.xml';
      dsm($playlistFile);dsm($node->field_video['und'][0]['url']);
      $image_url = file_create_url($node->field_image['und'][0]['uri']);
      if (file_exists($playlistFile)):
      ?>
        <object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" name="player" width="850" height="450">
          <param name="movie" value="<?php print $base_url . '/' . path_to_theme() . '/mediaplayer/player.swf'; ?>" />
          <param name="allowfullscreen" value="true" />
          <param name="allowscriptaccess" value="always" />
          <param name="wmode" value="transparent">
          <?php if (count($node->field_video) == 1): ?>
            <param name="flashvars" value="file=<?php print $base_url . '/' . $node->field_video['und'][0]['url']; ?><?php print (count($node->field_image) > 0) ? '&image=' . $image_url : '' ?>&skin=<?php print $base_url . '/' . path_to_theme() . '/mediaplayer/skins/beelden/beelden.xml'; ?>&autostart=false&volume=100&plugins=gapro-1&gapro.accountid=UA-7486791-1" />
            <embed type="application/x-shockwave-flash" id="player2" wmode="transparent" name="player2" src="<?php print $base_url . '/' . path_to_theme() . '/mediaplayer/player.swf'; ?>" width="850" height="450" allowscriptaccess="always" allowfullscreen="true" flashvars="file=<?php print $base_url . '/' . $node->field_video['und'][0]['url']; ?><?php print (count($node->field_image) > 0) ? '&image=' . $image_url : '' ?>&skin=<?php print $base_url . '/' . path_to_theme() . '/mediaplayer/skins/beelden/beelden.xml'; ?>&autostart=false&volume=100&plugins=gapro-1&gapro.accountid=UA-7486791-1" />
          <?php else: ?>
            <param name="flashvars" value="playlistfile=<?php print $base_url . '/' . $playlistFile; ?>&playlist=right&playlistsize=240&skin=<?php print $base_url . '/' . path_to_theme() . '/mediaplayer/skins/beelden/beelden.xml'; ?>&autostart=false&volume=100&repeat=always&plugins=gapro-1&gapro.accountid=UA-7486791-1" />
            <embed type="application/x-shockwave-flash" id="player2" wmode="transparent" name="player2" src="<?php print $base_url . '/' . path_to_theme() . '/mediaplayer/player.swf'; ?>" width="850" height="450" allowscriptaccess="always" allowfullscreen="true" flashvars="playlistfile=<?php print $base_url . '/' . $playlistFile; ?>&playlist=right&playlistsize=240&skin=<?php print $base_url . '/' . path_to_theme() . '/mediaplayer/skins/beelden/beelden.xml'; ?>&autostart=false&volume=100&repeat=always&plugins=gapro-1&gapro.accountid=UA-7486791-1" />
          <?php endif ?>
        </object>
      <?php endif; clearstatcache(); ?>
    <?php endif; ?>
  </div>

  <?php if ($content['links']): ?>
    <div class="node-links clear-both">
      <?php print render($content['links']); ?>
    </div>
  <?php endif; ?>
</div>
