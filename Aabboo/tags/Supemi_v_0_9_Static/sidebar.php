<form id="shorten_search_supemi" method="get" action="<?php bloginfo('url'); ?>/">
<label class="hidden"><input size="15" type="text" value="<?php the_search_query(); ?>" name="s" />
<input type="submit" value="Where?" /></label>
</form>
<ul id="pullmenuback_css"><?php wp_list_pages('title_li='); ?></ul>