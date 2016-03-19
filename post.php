<?php $this->need('header.php'); ?>

    <div id="content">
        <div class="meta">
            <h2 class="article-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
            <div class="article-date">
                <a href="javascript:void(0);" class="extra-switch"><?php $this->date('F j, Y'); ?></a>
            </div>
        </div>
        <div class="extra">
            Tags: <?php $this->tags(' ', true, 'none'); ?>
        </div>
        <div class="extra">
            Categorias: <?php $this->category(' '); ?>
        </div>
        <div class="article-content">
            <?php $this->content(); ?>
        </div>

        <nav class="pagination">
            <?php $this->theNext('<span id="left-navigator">%s</span>', NULL); ?>
            <?php $this->thePrev('<span id="right-navigator">%s</span>', NULL); ?>
        </nav><!--mathjax config similar to math.stackexchange-->

        <?php $this->need('comments.php'); ?>
    </div>
</body>
<?php $this->need('footer.php'); ?>
