Öç„]<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:838:"SELECT DISTINCT wp_users.ID FROM wp_users LEFT JOIN wp_usermeta ON ( wp_users.ID = wp_usermeta.user_id )  LEFT JOIN wp_usermeta AS mt1 ON ( wp_users.ID = mt1.user_id )  LEFT JOIN wp_usermeta AS mt2 ON ( wp_users.ID = mt2.user_id )  LEFT JOIN wp_usermeta AS mt3 ON (wp_users.ID = mt3.user_id AND mt3.meta_key = 'wpseo_noindex_author' ) WHERE 1=1 AND wp_users.ID IN ( SELECT DISTINCT wp_posts.post_author FROM wp_posts WHERE wp_posts.post_status = 'publish' AND wp_posts.post_type IN ( 'post', 'page', 'attachment' ) ) AND ( 
  wp_usermeta.meta_key = '_yoast_wpseo_profile_updated' 
  AND 
  ( 
    ( mt1.meta_key = 'wp_user_level' AND mt1.meta_value != '0' ) 
    AND 
    ( 
      ( mt2.meta_key = 'wpseo_noindex_author' AND mt2.meta_value != 'on' ) 
      OR 
      mt3.user_id IS NULL
    )
  )
) ORDER BY wp_usermeta.meta_value+0 DESC ";s:11:"last_result";a:1:{i:0;O:8:"stdClass":1:{s:2:"ID";s:1:"1";}}s:8:"col_info";a:1:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:8:"wp_users";s:8:"orgtable";s:8:"wp_users";s:3:"def";s:0:"";s:2:"db";s:9:"rayder_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32801;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}