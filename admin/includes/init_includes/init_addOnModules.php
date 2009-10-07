<?php
/**
 * addOnModules init file loader
 * see {@link  http://www.zen-cart.com/wiki/index.php/Developers_API_Tutorials#InitSystem wikitutorials} for more details.
 *
 * @package initSystem
 * @copyright Copyright 2009 Liquid System Technology, Inc.
 * @author Koji Sasaki
 * @copyright Portions Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: init_addOnModules.php $
 */
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
}

  $addon_module_init_files = zen_addOnModules_get_module_init_files(true);
  for ($i = 0, $n = count($addon_module_init_files); $i < $n; $i++) {
    require($addon_module_init_files[$i]);
  }
