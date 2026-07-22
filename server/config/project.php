<?php

use think\facade\Env;

return [
    'file_domain'       => Env::get('project.file_domain', 'likeshop.yixiangonline.com'),
    'sms'               => Env::get('project.sms', true),
    'version'           => Env::get('project.version', '3.5.1.20250304'),
    'front_version'     => Env::get('project.version', '3.5.1.20250304'),

    // 文件上传限制 (图片)
    'file_image' => [
        'jpg', 'png', 'gif', 'jpeg', 'webp'
    ],

    // 文件上传限制 (视频)
    'file_video' => [
        'wmv', 'avi', 'mpg', 'mpeg', '3gp', 'mov', 'mp4', 'flv', 'f4v', 'rmvb', 'mkv'
    ],
];