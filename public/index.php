<?php
/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 2/11/2017
 * Time: 1:34 PM
 */
require ($_SERVER[ 'DOCUMENT_ROOT'] . "/Includes/config.php");

require_once(FS_TEMPLATES . 'Layout.php');



layout::pageTop();

layout::container($Title, $Content);
$Title = 'Kronovi';
$Content = 'Donec quis viverra odio, quis sagittis massa. Proin ut sem risus. Curabitur massa lectus, scelerisque vel scelerisque in, eleifend non libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis suscipit quam purus, sit amet pulvinar felis viverra vitae. Maecenas venenatis sem et egestas aliquam. Integer ex tellus, euismod eu mi quis, luctus imperdiet mi. Ut id ligula et turpis fringilla rutrum sit amet at ipsum. Donec lorem mi, mollis non vulputate vel, sodales sit amet lacus. Suspendisse vitae eros purus. In hac habitasse platea dictumst. Nulla nec pretium mauris. Quisque congue, elit non tempus porttitor, magna est ullamcorper ante, in molestie erat dolor a metus. Maecenas felis ipsum, sodales bibendum gravida at, egestas sit amet augue.

Duis nec auctor arcu. Proin auctor a diam sit amet semper. Phasellus dictum tellus mauris, et gravida ipsum bibendum ac. Nullam mollis eget quam ut facilisis. Etiam vitae ipsum bibendum, interdum neque eu, hendrerit elit. Maecenas hendrerit, eros id rhoncus finibus, enim nisi bibendum mauris, in cursus nisi nulla ac massa. Mauris dignissim purus ex, non accumsan lacus sodales ut. Vivamus non placerat orci. Nulla vitae velit sit amet lacus tempus dictum in id orci. Aenean suscipit commodo nibh ut ultrices. Etiam vestibulum ante at mi laoreet euismod. Phasellus scelerisque, nulla sagittis lobortis condimentum, eros metus semper felis, a porttitor eros metus sed turpis. Donec vehicula suscipit quam et consequat.';

layout::pageBottom();



