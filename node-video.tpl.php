<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> node-<?php print $type; ?> node<?php print ($page) ? '-page' : '-teaser'; ?> node-<?php print $type; ?><?php print ($page) ? '-page' : '-teaser'; ?> clear-both">
  <?php print $picture; ?>

  <?php if (!$page): ?>
    <h2 class="node-title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>

  <?php if ($submitted): ?>
    <div class="submitted"><?php print $submitted; ?></div>
  <?php endif; ?>

  <div class="content">
    <?php
    global $base_url;
    $playlistFile = file_directory_path() . '/videos/playlists/' . $node->nid . '.xml';
    if (file_exists($playlistFile)):
    ?>
      <object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" name="player" width="850" height="450">
        <param name="movie" value="<?php print $base_url . '/' . path_to_theme() . '/mediaplayer/player.swf'; ?>" />
        <param name="allowfullscreen" value="true" />
        <param name="allowscriptaccess" value="always" />
        <param name="wmode" value="transparent">
        <?php if (count($node->field_video) == 1): ?>
          <param name="flashvars" value="file=<?php print $base_url . '/' . $node->field_video[0]['url']; ?><?php print (count($node->field_image) > 0) ? '&image=' . $base_url . '/' . $node->field_image[0]['filepath'] : '' ?>&skin=<?php print $base_url . '/' . path_to_theme() . '/mediaplayer/skins/beelden/beelden.xml'; ?>&autostart=false&volume=100&plugins=gapro-1&gapro.accountid=UA-7486791-1" />
          <embed type="application/x-shockwave-flash" id="player2" wmode="transparent" name="player2" src="<?php print $base_url . '/' . path_to_theme() . '/mediaplayer/player.swf'; ?>" width="850" height="450" allowscriptaccess="always" allowfullscreen="true" flashvars="file=<?php print $base_url . '/' . $node->field_video[0]['url']; ?><?php print (count($node->field_image) > 0) ? '&image=' . $base_url . '/' . $node->field_image[0]['filepath'] : '' ?>&skin=<?php print $base_url . '/' . path_to_theme() . '/mediaplayer/skins/beelden/beelden.xml'; ?>&autostart=false&volume=100&plugins=gapro-1&gapro.accountid=UA-7486791-1" />
        <?php else: ?>
          <param name="flashvars" value="playlistfile=<?php print $base_url . '/' . $playlistFile; ?>&playlist=right&playlistsize=240&skin=<?php print $base_url . '/' . path_to_theme() . '/mediaplayer/skins/beelden/beelden.xml'; ?>&autostart=false&volume=100&repeat=always&plugins=gapro-1&gapro.accountid=UA-7486791-1" />
          <embed type="application/x-shockwave-flash" id="player2" wmode="transparent" name="player2" src="<?php print $base_url . '/' . path_to_theme() . '/mediaplayer/player.swf'; ?>" width="850" height="450" allowscriptaccess="always" allowfullscreen="true" flashvars="playlistfile=<?php print $base_url . '/' . $playlistFile; ?>&playlist=right&playlistsize=240&skin=<?php print $base_url . '/' . path_to_theme() . '/mediaplayer/skins/beelden/beelden.xml'; ?>&autostart=false&volume=100&repeat=always&plugins=gapro-1&gapro.accountid=UA-7486791-1" />
        <?php endif ?>
      </object>
    <?php endif; clearstatcache(); ?>

    <?php print $node->content['body']['#value']; ?>
  </div>

  <?php if (!empty($links)): ?>
    <div class="node-links clear-both">
      <?php print $links; ?>
    </div>
  <?php endif; ?>
</div>
