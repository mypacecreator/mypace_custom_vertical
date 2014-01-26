<?php
/* header.php *
　すべてのページにおいて共通で読み込むヘッダーテンプレート。
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<!--<meta name="description" content="サイトの説明とか" />
<meta name="keywords" content=",,,,,," />-->
<?php if ( is_front_page()): /* トップページでのタイトルタグ表記 */ ?>
<title><?php bloginfo('name'); ?>｜<?php bloginfo('description'); ?></title>
<?php else: /* それ以外のページでのタイトルタグ表記 */ ?>
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo '｜'; } ?><?php bloginfo('name'); ?></title>
<?php endif; ?>
<?php wp_enqueue_style( 'bace-style', //cssのID名（任意に指定）
	get_template_directory_uri() . '/style.css', //CSSファイルへのパス
	array(), //もし、依存CSSファイル（ここで指定したCSSより先に読みこまないといけないもの）があるなら、そのIDをarray内に記述。ファイルが1枚しかないなら空でOK
	date('Ymd'), //付与されるバージョン番号。ここでは日付をバージョン番号として使用。必要ないなら空でもOK
	'all' //CSSのmedia type（printとかscreenとか）。空だとallになる。
); ?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">

<div id="header">
	<div id="title"><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></div>
	<p><?php bloginfo('description'); ?></p>
</div><!-- /#header -->

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<!-- /header.php -->