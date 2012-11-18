<?php
// $Id: views-view-list.tpl.php,v 1.3 2008/09/30 19:47:11 merlinofchaos Exp $
/**
 * @file views-view-list.tpl.php
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<?php
$rows_new = array();
foreach ($rows as $id => $row) {
  $rows_new[] = $row;
}
?>
<?php if (!empty($rows_new)): ?>
  <marquee behavior="scroll" scrollamount="1" direction="left" width="867"><?php print implode('&nbsp;&nbsp;&nbsp;&#8226;&nbsp;&nbsp;&nbsp;', $rows_new); ?></marquee>
<?php endif; ?>