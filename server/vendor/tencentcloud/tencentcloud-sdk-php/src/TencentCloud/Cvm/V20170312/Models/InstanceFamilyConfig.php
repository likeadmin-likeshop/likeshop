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
 * 描述实例的机型族配置信息
形如：{'InstanceFamilyName': '标准型S1', 'InstanceFamily': 'S1'}、{'InstanceFamilyName': '网络优化型N1', 'InstanceFamily': 'N1'}、{'InstanceFamilyName': '高IO型I1', 'InstanceFamily': 'I1'}等。
 *
 * @method string getInstanceFamilyName() 获取机型族名称的中文全称。
 * @method void setInstanceFamilyName(string $InstanceFamilyName) 设置机型族名称的中文全称。
 * @method string getInstanceFamily() 获取机型族名称的英文简称。
 * @method void setInstanceFamily(string $InstanceFamily) 设置机型族名称的英文简称。
 */
class InstanceFamilyConfig extends AbstractModel
{
    /**
     * @var string 机型族名称的中文全称。
     */
    public $InstanceFamilyName;

    /**
     * @var string 机型族名称的英文简称。
     */
    public $InstanceFamily;

    /**
     * @param string $InstanceFamilyName 机型族名称的中文全称。
     * @param string $InstanceFamily 机型族名称的英文简称。
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
        if (array_key_exists("InstanceFamilyName",$param) and $param["InstanceFamilyName"] !== null) {
            $this->InstanceFamilyName = $param["InstanceFamilyName"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }
    }
}
