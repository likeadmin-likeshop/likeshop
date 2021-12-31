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
namespace TencentCloud\Tci\V20190318\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 双路混流视频集锦开关项
 *
 * @method boolean getEnableCoverPictures() 获取片头片尾增加图片开关
 * @method void setEnableCoverPictures(boolean $EnableCoverPictures) 设置片头片尾增加图片开关
 */
class DoubleVideoFunction extends AbstractModel
{
    /**
     * @var boolean 片头片尾增加图片开关
     */
    public $EnableCoverPictures;

    /**
     * @param boolean $EnableCoverPictures 片头片尾增加图片开关
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
        if (array_key_exists("EnableCoverPictures",$param) and $param["EnableCoverPictures"] !== null) {
            $this->EnableCoverPictures = $param["EnableCoverPictures"];
        }
    }
}
