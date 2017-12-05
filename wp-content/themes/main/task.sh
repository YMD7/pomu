#!/bin/sh
#index.html を index.php にリネームする
mv index.html index.php

#ローカルでの相対パスをWPの絶対パスに置換する
sed -i".bak" -e "s/=\"assets/=\"<?php echo get_template_directory_uri(); ?>\/assets/g" index.php

#bootstrapのパスをWPの絶対パスにする
sed -i -e "s/=\"bootstrap/=\"<?php echo get_template_directory_uri(); ?>\/bootstrap/g" index.php

#画像の権限を修正する
chmod -R 757 /var/www/site/dev/pomu/wp-content/themes/main/assets/image/
