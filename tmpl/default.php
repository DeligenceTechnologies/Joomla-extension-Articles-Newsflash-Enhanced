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
<div class="newsflash<?php echo $moduleclass_sfx; ?>">
<?php
foreach ($list as $item) :
	require JModuleHelper::getLayoutPath('mod_articles_news_enhanced', '_item');
endforeach;
?>
</div>
