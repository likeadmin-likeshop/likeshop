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
namespace TencentCloud\Ds\V20180523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署坐标对象
 *
 * @method string getSignOnPage() 获取签名域页数
 * @method void setSignOnPage(string $SignOnPage) 设置签名域页数
 * @method string getSignLocationLBX() 获取签名域左下角X轴坐标轴
 * @method void setSignLocationLBX(string $SignLocationLBX) 设置签名域左下角X轴坐标轴
 * @method string getSignLocationLBY() 获取签名域左下角Y轴坐标轴
 * @method void setSignLocationLBY(string $SignLocationLBY) 设置签名域左下角Y轴坐标轴
 * @method string getSignLocationRUX() 获取签名域右上角X轴坐标轴
 * @method void setSignLocationRUX(string $SignLocationRUX) 设置签名域右上角X轴坐标轴
 * @method string getSignLocationRUY() 获取签名域右上角Y轴坐标轴
 * @method void setSignLocationRUY(string $SignLocationRUY) 设置签名域右上角Y轴坐标轴
 */
class SignLocation extends AbstractModel
{
    /**
     * @var string 签名域页数
     */
    public $SignOnPage;

    /**
     * @var string 签名域左下角X轴坐标轴
     */
    public $SignLocationLBX;

    /**
     * @var string 签名域左下角Y轴坐标轴
     */
    public $SignLocationLBY;

    /**
     * @var string 签名域右上角X轴坐标轴
     */
    public $SignLocationRUX;

    /**
     * @var string 签名域右上角Y轴坐标轴
     */
    public $SignLocationRUY;

    /**
     * @param string $SignOnPage 签名域页数
     * @param string $SignLocationLBX 签名域左下角X轴坐标轴
     * @param string $SignLocationLBY 签名域左下角Y轴坐标轴
     * @param string $SignLocationRUX 签名域右上角X轴坐标轴
     * @param string $SignLocationRUY 签名域右上角Y轴坐标轴
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
        if (array_key_exists("SignOnPage",$param) and $param["SignOnPage"] !== null) {
            $this->SignOnPage = $param["SignOnPage"];
        }

        if (array_key_exists("SignLocationLBX",$param) and $param["SignLocationLBX"] !== null) {
            $this->SignLocationLBX = $param["SignLocationLBX"];
        }

        if (array_key_exists("SignLocationLBY",$param) and $param["SignLocationLBY"] !== null) {
            $this->SignLocationLBY = $param["SignLocationLBY"];
        }

        if (array_key_exists("SignLocationRUX",$param) and $param["SignLocationRUX"] !== null) {
            $this->SignLocationRUX = $param["SignLocationRUX"];
        }

        if (array_key_exists("SignLocationRUY",$param) and $param["SignLocationRUY"] !== null) {
            $this->SignLocationRUY = $param["SignLocationRUY"];
        }
    }
}
