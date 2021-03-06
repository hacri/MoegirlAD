<?php

$wgExtensionCredits['parserhook'][] = array(
    'path' => __FILE__,
    'name' => 'MoegirlAD',
    'author' => 'Fish Thirteen', 
    'url' => 'https://github.com/FishThirteen/MoegirlAD', 
    'description' => 'Show advertisement in the page header and page footer in moegirl',
    'version'  => 0.1,
    'license-name' => "Apache-2.0+",   // Short name of the license, links LICENSE or COPYING file if existing - string, added in 1.23.0
);


/*
 * Options: (Check these settings in LocalSettings.php file)
 *
 * $wgMoegirlADEnabled 
 *      - determine if show advertisement in moegirl.
 *
 * $wgMoegirlADTopADCode
 *      - the adverticement code form the advertising company in top bar
 *      E.g.
 *      $wgMoegirlADADCode = <<<EOD
 * <!-- 728*90 -->
 * <div id='div-gpt-ad-1388996185454-0' style='width:728px; height:90px;'>
 *   <script type='text/javascript'>
 *     googletag.cmd.push(function() { googletag.display('div-gpt-ad-1388996185454-0'); });
 *   </script>
 * </div>
 * EOD;
 *
 * $wgMoegirlADBottomADCode
 *      - the adverticement code in bottom bar
 *
 * $wgMoegirlADFooterEnabled
 *      - show/hide the footer adverticement
 *
 * $wgMoegirlADFooterADCode
 *      - the adverticement code used to show in below of the footer
 *
 *$wgMoegirlADSideBarEnabled
 *      - show/hide the sidebar adverticement
 * 
 * $wgMoegirlADSideBarADName
 *      - the side bar group name
 *
 * $wgMoegirlADSideBarADCode
 *      - the adverticement code used to show in the bottom of the side bar
 * 
 */
$wgMoegirlADEnabled  = true;
$wgMoegirlADTopADCode = "Top Adverticement";
$wgMoegirlADBottomADCode = "Bottom Adverticement";
$wgMoegirlADFooterEnabled = true;
$wgMoegirlADFooterADCode = "Foot Adverticement";
$wgMoegirlADSideBarEnabled = true;
$wgMoegirlADSideBarADName = "Sidebar group name";
$wgMoegirlADSideBarADCode = "Sidebar Adverticement";



$wgAutoloadClasses['MoegirlADHooks'] = __DIR__ . '/MoegirlAD.hooks.php';


$wgHooks['SkinAfterContent'][] = 'MoegirlADHooks::onSkinAfterContent';
$wgHooks['SiteNoticeAfter'][] = 'MoegirlADHooks::onSiteNoticeAfter';
$wgHooks['SkinAfterBottomScripts'][] = 'MoegirlADHooks::onSkinAfterBottomScripts';
$wgHooks['SkinBuildSidebar'][] = 'MoegirlADHooks::onSkinBuildSidebar';
$wgHooks['BeforePageDisplayMobile'][] = 'MoegirlADHooks::onBeforePageDisplayMobile';

