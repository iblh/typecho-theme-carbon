<?php $this->need('header.php'); ?>

    <div id="content">
        <div class="meta">
            <h2 class="article-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
            <div class="article-date">
                <a href="javascript:void(0);" class="extra-switch"><?php $this->date('F j, Y'); ?></a>
            </div>
        </div>
        <div class="extra">
            Tags: <?php $this->tags(' ', true, NULL); ?>
        </div>
        <div class="extra">
            Categorias: <?php $this->category(' '); ?>
        </div>
        <div class="article-content">
            <?php $this->content(); ?>
        </div>
    </div>
</body>
<?php //$this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
