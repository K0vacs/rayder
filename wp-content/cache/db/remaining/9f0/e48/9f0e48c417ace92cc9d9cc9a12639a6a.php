��]<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:850:"SELECT DISTINCT wp_users.* FROM wp_users LEFT JOIN wp_usermeta ON ( wp_users.ID = wp_usermeta.user_id )  LEFT JOIN wp_usermeta AS mt1 ON ( wp_users.ID = mt1.user_id )  LEFT JOIN wp_usermeta AS mt2 ON ( wp_users.ID = mt2.user_id )  LEFT JOIN wp_usermeta AS mt3 ON (wp_users.ID = mt3.user_id AND mt3.meta_key = 'wpseo_noindex_author' ) WHERE 1=1 AND wp_users.ID IN ( SELECT DISTINCT wp_posts.post_author FROM wp_posts WHERE wp_posts.post_status = 'publish' AND wp_posts.post_type IN ( 'post', 'page', 'attachment' ) ) AND ( 
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
) ORDER BY wp_usermeta.meta_value+0 DESC LIMIT 0, 1000";s:11:"last_result";a:1:{i:0;O:8:"stdClass":10:{s:2:"ID";s:1:"1";s:10:"user_login";s:6:"Ferenc";s:9:"user_pass";s:34:"$P$BRZCEjHiR.V893OiFj3KAYc5axgl0v/";s:13:"user_nicename";s:6:"ferenc";s:10:"user_email";s:21:"mr.f.kovacs@gmail.com";s:8:"user_url";s:0:"";s:15:"user_registered";s:19:"2019-08-27 09:07:47";s:19:"user_activation_key";s:0:"";s:11:"user_status";s:1:"0";s:12:"display_name";s:6:"Ferenc";}}s:8:"col_info";a:10:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:8:"wp_users";s:8:"orgtable";s:8:"wp_users";s:3:"def";s:0:"";s:2:"db";s:9:"rayder_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32801;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:10:"user_login";s:7:"orgname";s:10:"user_login";s:5:"table";s:8:"wp_users";s:8:"orgtable";s:8:"wp_users";s:3:"def";s:0:"";s:2:"db";s:9:"rayder_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:6;s:6:"length";i:240;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"user_pass";s:7:"orgname";s:9:"user_pass";s:5:"table";s:8:"wp_users";s:8:"orgtable";s:8:"wp_users";s:3:"def";s:0:"";s:2:"db";s:9:"rayder_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:34;s:6:"length";i:1020;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"user_nicename";s:7:"orgname";s:13:"user_nicename";s:5:"table";s:8:"wp_users";s:8:"orgtable";s:8:"wp_users";s:3:"def";s:0:"";s:2:"db";s:9:"rayder_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:6;s:6:"length";i:200;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:10:"user_email";s:7:"orgname";s:10:"user_email";s:5:"table";s:8:"wp_users";s:8:"orgtable";s:8:"wp_users";s:3:"def";s:0:"";s:2:"db";s:9:"rayder_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:21;s:6:"length";i:400;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:8:"user_url";s:7:"orgname";s:8:"user_url";s:5:"table";s:8:"wp_users";s:8:"orgtable";s:8:"wp_users";s:3:"def";s:0:"";s:2:"db";s:9:"rayder_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:15:"user_registered";s:7:"orgname";s:15:"user_registered";s:5:"table";s:8:"wp_users";s:8:"orgtable";s:8:"wp_users";s:3:"def";s:0:"";s:2:"db";s:9:"rayder_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:19:"user_activation_key";s:7:"orgname";s:19:"user_activation_key";s:5:"table";s:8:"wp_users";s:8:"orgtable";s:8:"wp_users";s:3:"def";s:0:"";s:2:"db";s:9:"rayder_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:1020;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:11:"user_status";s:7:"orgname";s:11:"user_status";s:5:"table";s:8:"wp_users";s:8:"orgtable";s:8:"wp_users";s:3:"def";s:0:"";s:2:"db";s:9:"rayder_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:12:"display_name";s:7:"orgname";s:12:"display_name";s:5:"table";s:8:"wp_users";s:8:"orgtable";s:8:"wp_users";s:3:"def";s:0:"";s:2:"db";s:9:"rayder_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:6;s:6:"length";i:1000;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}