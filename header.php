<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <link rel="proload" href="<?php $this->options->themeUrl('libs/base.css'); ?>" as="style">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('libs/base.css'); ?>">

    <link rel="proload" href="<?php $this->options->themeUrl('style.css'); ?>" as="style">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <?php $this->header(); ?>
</head>
<body>
  <div class=""> <!-- # body start -->
<header>
  <div class="header_title">
     <p><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></p>
  </div>
  <nav>
    <ul class="nav_menu">
      <li><a href="<?php $this->options->siteUrl(); ?>">主页</a></li>
      <?php $this->widget('Widget_Contents_Page_List')
                 ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
    </ul>
  </nav>
</header>
