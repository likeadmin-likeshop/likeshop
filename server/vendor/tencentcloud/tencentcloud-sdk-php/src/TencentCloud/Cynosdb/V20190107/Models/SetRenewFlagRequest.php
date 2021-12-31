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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetRenewFlag请求参数结构体
 *
 * @method array getResourceIds() 获取需操作的实例ID
 * @method void setResourceIds(array $ResourceIds) 设置需操作的实例ID
 * @method integer getAutoRenewFlag() 获取自动续费标志位
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标志位
 */
class SetRenewFlagRequest extends AbstractModel
{
    /**
     * @var array 需操作的实例ID
     */
    public $ResourceIds;

    /**
     * @var integer 自动续费标志位
     */
    public $AutoRenewFlag;

    /**
     * @param array $ResourceIds 需操作的实例ID
     * @param integer $AutoRenewFlag 自动续费标志位
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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
