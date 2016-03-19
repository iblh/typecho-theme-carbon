<?php
/**
 * 这是 Viosey 开发的极简Typecho主题
 *
 * @package carbon
 * @author viosey
 * @version 1.0.0
 * @link https://viosey.com
 */
$this->need('header.php');?>

	<div id="content">
		<ul class="abstract-list">
			<?php while($this->next()): ?>
			<li>
				<div class="meta">
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
				</div>

				<div class="excerpt">
				</div>
			</li>
			<?php endwhile; ?>
		</ul>
		<nav class="pagination">
			<?php $this->pageLink('<span id="left-navigator">新</span>','prev'); ?>
			<?php $this->pageLink('<span id="right-navigator">旧</span>','next'); ?>
		</nav>
	</div>

<?php $this->need('footer.php') ?>
