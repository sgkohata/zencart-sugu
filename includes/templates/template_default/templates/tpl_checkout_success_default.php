<?php
/**
 * Page Template
 *
 * Loaded automatically by index.php?main_page=checkout_success.<br />
 * Displays confirmation details after order has been successfully processed.
 *
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_checkout_success_default.php 3799 2006-06-18 17:07:40Z ajeh $
 */
?>
<div class="centerColumn" id="checkoutSuccess">

<!--bof -gift certificate- send or spend box-->
<?php
// only show when there is a GV balance
  if ($customer_has_gv_balance ) {
?>
<div id="sendSpendWrapper">
<?php require($template->get_template_dir('tpl_modules_send_or_spend.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_send_or_spend.php'); ?>
</div>
<?php
  }
?>
<!--eof -gift certificate- send or spend box-->

<h1 id="checkoutSuccessHeading"><?php echo HEADING_TITLE; ?></h1>

<?php if (DEFINE_CHECKOUT_SUCCESS_STATUS >= 1 and DEFINE_CHECKOUT_SUCCESS_STATUS <= 2) { ?>
<div id="checkoutSuccessMainContent" class="content">
<?php
/**
 * require the html_defined text for checkout success
 */
  require($define_page);
?>
</div>
<?php } ?>

<!--bof -product notifications box-->
<?php
/**
 * The following creates a list of checkboxes for the customer to select if they wish to be included in product-notification
 * announcements related to products they've just purchased.
 **/
    if ($flag_show_products_notification == true) {
?>
<fieldset id="csNotifications">
<legend><?php echo TEXT_NOTIFY_PRODUCTS; ?></legend>
<?php if (isset($_SESSION['kuroneko_at_payment'])) echo $_SESSION['kuroneko_at_payment']['box']; ?>
<?php echo zen_draw_form('order', zen_href_link(FILENAME_CHECKOUT_SUCCESS, 'action=update', 'SSL')); ?>

<?php foreach ($notificationsArray as $notifications) { ?>
<?php echo zen_draw_checkbox_field('notify[]', $notifications['products_id'], true, 'id="notify-' . $notifications['counter'] . '"') ;?>
<label class="checkboxLabel" for="<?php echo 'notify-' . $notifications['counter']; ?>"><?php echo $notifications['products_name']; ?></label>
<br />
<?php } ?>
<div class="buttonRow forward"><?php echo zen_image_submit(BUTTON_IMAGE_UPDATE, BUTTON_UPDATE_ALT); ?></div>
</form>
</fieldset>
<?php
    }
?>
<!--eof -product notifications box-->

<div id="checkoutSuccessOrderNumber"><?php echo TEXT_YOUR_ORDER_NUMBER . $zv_orders_id; ?></div>

<!--bof -product downloads module-->
<?php
  if (DOWNLOAD_ENABLED == 'true') require($template->get_template_dir('tpl_modules_downloads.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_downloads.php');
?>
<!--eof -product downloads module-->

<div id="checkoutSuccessOrderLink"><?php echo TEXT_SEE_ORDERS;?></div>

<div id="checkoutSuccessContactLink"><?php echo TEXT_CONTACT_STORE_OWNER;?></div>

<h3 id="checkoutSuccessThanks" class="centeredContent"><?php echo TEXT_THANKS_FOR_SHOPPING; ?></h3>

</div>