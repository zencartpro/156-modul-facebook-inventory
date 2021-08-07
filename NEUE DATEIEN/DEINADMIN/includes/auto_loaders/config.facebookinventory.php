<?php
/**
 * @package Facebook Inventory
 * based on Google Merchant Center Feeder Copyright 2007 Numinix Technology (www.numinix.com)
 * @copyright Copyright 2011-2021 webchills (www.webchills.at)
 * @copyright Portions Copyright 2003-2021 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: config.facebookinventory.php 2021-08-05 08:33:54Z webchills $
 */
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
} 

$autoLoadConfig[999][] = array(
  'autoType' => 'init_script',
  'loadFile' => 'init_facebookinventory.php'
);
