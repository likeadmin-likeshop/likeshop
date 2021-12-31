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
 * 点播文件雪碧图信息
 *
 * @method array getImageSpriteSet() 获取特定规格的雪碧图信息集合，每个元素代表一套相同规格的雪碧图。
 * @method void setImageSpriteSet(array $ImageSpriteSet) 设置特定规格的雪碧图信息集合，每个元素代表一套相同规格的雪碧图。
 */
class MediaImageSpriteInfo extends AbstractModel
{
    /**
     * @var array 特定规格的雪碧图信息集合，每个元素代表一套相同规格的雪碧图。
     */
    public $ImageSpriteSet;

    /**
     * @param array $ImageSpriteSet 特定规格的雪碧图信息集合，每个元素代表一套相同规格的雪碧图。
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
        if (array_key_exists("ImageSpriteSet",$param) and $param["ImageSpriteSet"] !== null) {
            $this->ImageSpriteSet = [];
            foreach ($param["ImageSpriteSet"] as $key => $value){
                $obj = new MediaImageSpriteItem();
                $obj->deserialize($value);
                array_push($this->ImageSpriteSet, $obj);
            }
        }
    }
}
