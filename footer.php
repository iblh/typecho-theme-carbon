        <nav id="footer">
        <ul id="footer-links">
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while ($pages->next()): ?>
                <li>
                    <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>" class="zh">
                        <?php $pages->title(); ?>
                    </a>
                </li>
            <?php endwhile; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>" class="out-site">RSS</a></li>
            <li><a href="https://github.com/viosey/Carbon" target="_blank" class="out-site">Theme.Carbon</a></li>
            <li><a href="http://typecho.org" target="_blank" class="out-site">Typecho</a></li>
        </ul>
        </nav>
    </div>
</body>
<script src="<?php $this->options->themeUrl('js/jquery.min.js') ?>"></script>
<script src="<?php $this->options->themeUrl('js/jquery.pjax.min.js') ?>"></script>
<script src="<?php $this->options->themeUrl('js/carbon.js') ?>"></script>
<?php $this->footer(); ?>
</html>
