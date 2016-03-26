<!DOCTYPE html>

<html lang="zh-CN">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="icylogic">
        <meta name="desciption" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ante.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php $this->archiveTitle('','',' - '); ?>
            <?php $this->options->title(); ?>
        </title>
        <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/normalize.min.css') ?> ">
        <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/carbon.css') ?>">
        <?php $this->header(); ?>
    </head>
    <body>
    <div id="container">
    	<div id="banner">
    		<h1 id="site-title"><a href="<?php $this->options->siteUrl() ?>"><?php $this->options->title(); ?></a></h1>
    		<span id="site-subtitle">
    			<?php $this->options->slogan() ?>
    		</span>

            <div id="search">
                <form method="post" action="#" class="panel-body" id="search-form">
    				<input type="text" name="s" id="search-input" placeholder="What're you looking for?" />
            	</form>
            </div>

    	</div>
