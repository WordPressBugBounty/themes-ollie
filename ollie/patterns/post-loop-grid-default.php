<?php
/**
 * Title: Post Loop Grid Default
 * Slug: ollie/post-loop-grid-default
 * Description: This post loop grid is best used on index and archive pages where the loop can inherit the query from the page.
 * Categories: ollie/posts
 * Keywords: blog, posts, query, loop
 * Viewport Width: 1280
 * Block Types: core/query
 * Post Types:
 * Inserter: false
 */
?>
<!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"align":"full"} -->
<div class="wp-block-query alignfull">
	<!-- wp:group {"metadata":{"name":"Post Grid"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)">
		<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":2}} -->
		<!-- wp:pattern {"slug":"ollie/blog-post-card"} /-->
		<!-- /wp:post-template -->

		<!-- wp:group {"metadata":{"name":"Pagination"},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--x-large)">
			<!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous {"className":"is-style-wp-block-button__link"} /-->

			<!-- wp:query-pagination-next {"className":"is-style-wp-block-button__link"} /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->
