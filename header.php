<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' | '); ?><?php $this->options->title(); ?></title>

    <link rel="proload" href="<?php $this->options->themeUrl('libs/sable-normalize.min.css'); ?>" as="style" />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('libs/sable-normalize.min.css'); ?>" />

    <link rel="proload" href="<?php $this->options->themeUrl('style.css'); ?>" as="style" />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>" />

    <link rel="proload" href="<?php $this->options->themeUrl('script.js'); ?>" as="script" />

    <meta name="author" content="<?php $this->author(); ?>">

    <?php $this->header(); ?>

    <style>
.page-shade {
  background-color: #FFFFFF;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
}
.default-text {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font-size: 18px;
  line-height: 24px;
  margin: 10%;
  width: 80%;
}
  </style>
</head>
<body>
  <noscript>
    <div class="page-shade">
      <div class="default-text">
      <p>We've detected that JavaScript is disabled in your browser.You will not be able use this.</p><!-- en -->
      <p>Hemos detectado que JavaScript está desactivado en su navegador. No podrá utilizarlo.</p><!-- es -->
      <p>Nous avons détecté que JavaScript est désactivé dans votre navigateur. Vous ne pourrez pas l'utiliser.</p><!-- fr -->
      <p>お使いのブラウザでJavaScriptが無効になっていることが検出されました。これは使用できません。</p><!-- ja -->
      <p>귀하의 브라우저에서 JavaScript가 비활성화되어 있음을 감지했습니다.이 기능을 사용할 수 없습니다.</p><!-- ko -->
      <p>我們檢測到您的瀏覽器禁用了JavaScript。您將無法使用它。</p><!-- zhTW -->
      <p>我们检测到您的浏览器禁用了JavaScript。您将无法使用它。</p><!-- zhCN -->
      </div>
    </div>
  </noscript>
<div id="app" class="w-full"> <!-- # body start -->
  <div class="min-h-screen flex flex-col">
    <header>
      <div class="header_title">
         <p><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></p>
      </div>
      <nav>
        <menu class="nav_menu">
        <?php $this->widget('Widget_Contents_Page_List')
                   ->parse('<li><a class="select-none" href="{permalink}">{title}</a></li>'); ?>
        </menu>
      </nav>
    </header>
    <div class="main-body"> <!-- # main start -->
