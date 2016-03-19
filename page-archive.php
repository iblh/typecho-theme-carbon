<?php
/**
* 归档模板
*
* @package custom
*/
 $this->need('header.php'); ?>
     <div id="content">
         <div class="meta">
             <h2 class="article-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
         </div>

        <div class="meta">
            <div class="post-content pl18" itemprop="articleBody">
                <?php $this->widget('Widget_Contents_Post_Recent')->to($recent); ?>
                <?php while($recent->next()):?>
                    <h2 class="article-title"><a href="<?php $recent->permalink() ?>"><?php $recent->title() ?></a></h2>

                    <div class="article-date">
                        <a href="javascript:void(0);" class="extra-switch"><?php $recent->date('F j, Y'); ?></a>
                    </div>

                    <div class="extra">
                        Tags: <?php $recent->tags(' ', true, NULL); ?>
                    </div>
                    <div class="extra">
                        Categorias: <?php $recent->category(' '); ?>
                    </div>
                <?php endwhile; ?>

            </div>

        </div>

         <div class="article-content">
             <?php $this->content(); ?>
         </div>
     </div>
<?php $this->need('footer.php'); ?>
