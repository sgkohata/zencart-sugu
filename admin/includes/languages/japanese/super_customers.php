<?php
/*
//////////////////////////////////////////////////////////
//  SUPER ORDERS                                        //
//                                                      //
//  By Frank Koehl (PM: BlindSide)                      //
//                                                      //
//  Powered by Zen-Cart (www.zen-cart.com)              //
//  Portions Copyright (c) 2005 The Zen-Cart Team       //
//                                                      //
//  Released under the GNU General Public License       //
//  available at www.zen-cart.com/license/2_0.txt       //
//  or see "license.txt" in the downloaded zip          //
//////////////////////////////////////////////////////////
//  DESCRIPTION:
//////////////////////////////////////////////////////////
// $Id: super_customers.php 25 2006-02-03 18:55:56Z BlindSide $
*/

define('HEADING_TITLE', '顧客管理');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', '姓');
define('TABLE_HEADING_LASTNAME', '名');
define('TABLE_HEADING_ACCOUNT_CREATED', '登録日');
define('TABLE_HEADING_LOGIN', '最終ログイン日');
define('TABLE_HEADING_ACTION', '操作');
define('TABLE_HEADING_PRICING_GROUP', '割引顧客グループ');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', '承認済');

define('TEXT_DATE_ACCOUNT_CREATED', '登録日:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', '更新日:');
define('TEXT_INFO_DATE_LAST_LOGON', '最終ログイン日:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'ログイン回数:');
define('TEXT_INFO_COUNTRY', '国名:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'レビュー投稿数:');
define('TEXT_DELETE_INTRO', 'この顧客を本当に削除しますか?');
define('TEXT_DELETE_REVIEWS', 'レビューも削除(投稿数 %s)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', '顧客を削除');
define('TYPE_BELOW', '以下に入力してください。');
define('PLEASE_SELECT', '選択してください。');
define('TEXT_INFO_NUMBER_OF_ORDERS', '注文数:');
define('TEXT_INFO_LAST_ORDER','最近の注文:');
define('TEXT_INFO_ORDERS_TOTAL', '合計:');
define('CUSTOMERS_REFERRAL', '顧客を紹介<br />割引券贈呈');

define('ENTRY_NONE', 'なし');

define('TABLE_HEADING_COMPANY','会社名');

define('CUSTOMERS_AUTHORIZATION', '顧客の承認状態');
define('CUSTOMERS_AUTHORIZATION_0', '承認');
define('CUSTOMERS_AUTHORIZATION_1', '未承認 - ブラウズするために認可する必要があります。');
define('CUSTOMERS_AUTHORIZATION_2', '未承認 - 価格のないブラウズかもしれません。');
define('CUSTOMERS_AUTHORIZATION_3', '未承認 - 価格とブラウズが一致していますが、購入はできないかもしれません。');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', '警告: あなたのお店はブラウズなしで承認セットアップされています。 顧客は未承認状態です - ブラウズなし');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', '警告: あなたのお店はブラウズの価格設定なしで承認セットアップされています. 顧客は未承認状態です - ブラウズの価格設定なし');
?>