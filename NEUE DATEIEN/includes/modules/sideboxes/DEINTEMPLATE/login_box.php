<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: login_box.php 2022-05-30 16:45:16Z webchills $
 */

if (($_GET['main_page'] != FILENAME_LOGIN && $_GET['main_page'] != FILENAME_CREATE_ACCOUNT && $_GET['main_page'] != FILENAME_PASSWORD_FORGOTTEN)) {      

      if (!zen_is_logged_in()) {
            $title =  BOX_HEADING_LOGIN_BOX;
      } else {
            $title =  BOX_HEADING_LOGGEDIN_BOX;
      }

      require($template->get_template_dir('tpl_login_box.php',DIR_WS_TEMPLATE, $current_page_base,'sideboxes'). '/tpl_login_box.php');

      $left_corner = false;
      $right_corner = false;
      $right_arrow = false;
      $title_link = false;

      require($template->get_template_dir($column_box_default, DIR_WS_TEMPLATE, $current_page_base,'common') . '/' . $column_box_default);
 }