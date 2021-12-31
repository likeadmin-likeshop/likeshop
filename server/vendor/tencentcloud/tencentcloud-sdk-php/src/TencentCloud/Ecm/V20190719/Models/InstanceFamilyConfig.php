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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机型族配置
 *
 * @method string getInstanceFamilyName() 获取机型名称
 * @method void setInstanceFamilyName(string $InstanceFamilyName) 设置机型名称
 * @method string getInstanceFamily() 获取机型ID
 * @method void setInstanceFamily(string $InstanceFamily) 设置机型ID
 */
class InstanceFamilyConfig extends AbstractModel
{
    /**
     * @var string 机型名称
     */
    public $InstanceFamilyName;

    /**
     * @var string 机型ID
     */
    public $InstanceFamily;

    /**
     * @param string $InstanceFamilyName 机型名称
     * @param string $InstanceFamily 机型ID
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
