<?php
/**
 * @package     Deligence.Technologies
 * @subpackage  mod_articles_news_enhanced
 *
 * @copyright   Copyright (C) 2014 Deligence Technologies Pvt. Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$enhanced=0;
?>
<ul class="newsflash-vert<?php echo $params->get('moduleclass_sfx'); ?>">
<?php for ($i = 0, $n = count($list); $i < $n; $i ++) :
	$item = $list[$i]; ?>
	<li class="newsflash-item">
	<?php require JModuleHelper::getLayoutPath('mod_articles_news_enhanced', '_item');
	if ($n > 1 && (($i < $n - 1) || $params->get('showLastSeparator'))) : ?>
		<span class="article-separator">&#160;</span>
	<?php endif; ?>
	</li>
<?php endfor; ?>
</ul>
