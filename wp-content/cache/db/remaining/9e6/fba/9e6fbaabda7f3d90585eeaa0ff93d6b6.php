��]<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:406:"
			SELECT MAX(p.post_modified_gmt) AS lastmod
			FROM	wp_posts AS p
			INNER JOIN wp_term_relationships AS term_rel
				ON		term_rel.object_id = p.ID
			INNER JOIN wp_term_taxonomy AS term_tax
				ON		term_tax.term_taxonomy_id = term_rel.term_taxonomy_id
				AND		term_tax.taxonomy = 'category'
				AND		term_tax.term_id = 1
			WHERE	p.post_status IN ('publish','inherit')
				AND		p.post_password = ''
		";s:11:"last_result";a:1:{i:0;O:8:"stdClass":1:{s:7:"lastmod";s:19:"2019-08-27 09:21:11";}}s:8:"col_info";a:1:{i:0;O:8:"stdClass":13:{s:4:"name";s:7:"lastmod";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:76;s:9:"charsetnr";i:246;s:5:"flags";i:0;s:4:"type";i:12;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}