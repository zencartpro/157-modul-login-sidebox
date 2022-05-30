<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_login_box.php 2022-05-30 16:45:16Z webchills $
 */

$content = "<!-- loginSideBox -->" . "\n\n";
$content .= '<div id="' . str_replace('_', '-', $box_id . 'Content') . '" class="sideBoxContent">';

if (!zen_is_logged_in()) {

   $content .=zen_draw_form('login_box', zen_href_link(FILENAME_LOGIN, 'action=process', 'SSL'), 'post', 'id="loginFormSidebox"');
   $content .=LOGIN_BOX_EMAIL_ADDRESS . '<br />' . zen_draw_input_field('email_address', '', 'id="loginSideBoxInputEmail"').'<br />';
   $content .=LOGIN_BOX_PASSWORD . '<br />' . zen_draw_password_field('password', '', 'id="loginSideBoxInputPass"') . '<br />';   
   $content .= zen_draw_hidden_field('securityToken', $_SESSION['securityToken']);
   $content .='<br /><div class="centeredContent">'.zen_image_submit(BUTTON_IMAGE_LOGIN, BUTTON_LOGIN_ALT).'</div>';
   $content .='<br/><a href="' . zen_href_link(FILENAME_PASSWORD_FORGOTTEN, '', 'SSL') . '">' . LOGIN_BOX_PASSWORD_FORGOTTEN . '</a>' . '<br />' . '<a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">' . LOGIN_BOX_CREATE_ACCOUNT . '</a>' . '<br />';
   $content .='</form>';
}  else {
   
   $content .= '<div class="centeredContent">' . LOGIN_BOX_WELCOMEUSER . '</div>';
   $content .= '<div class="centeredContent">' . $_SESSION['customer_first_name'] . ' ' . $_SESSION['customer_last_name'] . '</div>';
   $content .= '<ul>';
   $content .= '<li><a class="loginBoxLinks" href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">' . LOGIN_BOX_ACCOUNT . '</a></li>';
   $content .= '<li><a class="loginBoxLinks" href="' . zen_href_link(FILENAME_SHOPPING_CART, '', 'SSL') . '">' . LOGIN_BOX_SHOPPING_CART . '</a></li>';
   $content .= '</ul>';
   $content .= '<div class="centeredContent"><a class="loginBoxLinks" href="' . zen_href_link(FILENAME_LOGOFF, '', 'SSL') . '">' . zen_image_button(BUTTON_IMAGE_LOG_OFF, BUTTON_LOG_OFF_ALT) . '</a></div>';
}

$content .= '</div>';