<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点播文件视频转动图结果信息
 *
 * @method array getAnimatedGraphicsSet() 获取视频转动图结果信息
 * @method void setAnimatedGraphicsSet(array $AnimatedGraphicsSet) 设置视频转动图结果信息
 */
class MediaAnimatedGraphicsInfo extends AbstractModel
{
    /**
     * @var array 视频转动图结果信息
     */
    public $AnimatedGraphicsSet;

    /**
     * @param array $AnimatedGraphicsSet 视频转动图结果信息
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AnimatedGraphicsSet",$param) and $param["AnimatedGraphicsSet"] !== null) {
            $this->AnimatedGraphicsSet = [];
            foreach ($param["AnimatedGraphicsSet"] as $key => $value){
                $obj = new MediaAnimatedGraphicsItem();
                $obj->deserialize($value);
                array_push($this->AnimatedGraphicsSet, $obj);
            }
        }
    }
}
