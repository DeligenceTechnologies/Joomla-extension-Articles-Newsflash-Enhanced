<?php
/**
 * @package     Deligence.Technologies
 * @subpackage  mod_articles_news_enhanced
 *
 * @copyright   Copyright (C) 2014 Deligence Technologies Pvt. Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$list = ModArticlesNewsEnhancedHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_articles_news_enhanced', $params->get('layout', 'horizontal'));
