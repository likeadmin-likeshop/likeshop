<?php
return [
    'file_domain' => \think\facade\Env::get('project.file_domain', 'likeshop.yixiangonline.com'),
    'sms' => \think\facade\Env::get('project.sms', true),
    'version' => \think\facade\Env::get('project.version', '3.0.3.20231204'),
    'front_version' => \think\facade\Env::get('project.version', '3.0.3.20231204'),

    // 文件上传限制 (图片)
    'file_image' => [
        'jpg', 'png', 'gif', 'jpeg', 'webp'
    ],

    // 文件上传限制 (视频)
    'file_video' => [
        'wmv', 'avi', 'mpg', 'mpeg', '3gp', 'mov', 'mp4', 'flv', 'f4v', 'rmvb', 'mkv'
    ],
];