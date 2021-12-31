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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片大小
 *
 * @method integer getWide() 获取宽
 * @method void setWide(integer $Wide) 设置宽
 * @method integer getHigh() 获取高
 * @method void setHigh(integer $High) 设置高
 */
class QrcodeImgSize extends AbstractModel
{
    /**
     * @var integer 宽
     */
    public $Wide;

    /**
     * @var integer 高
     */
    public $High;

    /**
     * @param integer $Wide 宽
     * @param integer $High 高
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
        if (array_key_exists("Wide",$param) and $param["Wide"] !== null) {
            $this->Wide = $param["Wide"];
        }

        if (array_key_exists("High",$param) and $param["High"] !== null) {
            $this->High = $param["High"];
        }
    }
}
