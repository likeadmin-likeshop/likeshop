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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了网络计费
 *
 * @method string getInternetChargeType() 获取网络计费模式。
 * @method void setInternetChargeType(string $InternetChargeType) 设置网络计费模式。
 * @method string getDescription() 获取网络计费模式描述信息。
 * @method void setDescription(string $Description) 设置网络计费模式描述信息。
 */
class InternetChargeTypeConfig extends AbstractModel
{
    /**
     * @var string 网络计费模式。
     */
    public $InternetChargeType;

    /**
     * @var string 网络计费模式描述信息。
     */
    public $Description;

    /**
     * @param string $InternetChargeType 网络计费模式。
     * @param string $Description 网络计费模式描述信息。
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
        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
