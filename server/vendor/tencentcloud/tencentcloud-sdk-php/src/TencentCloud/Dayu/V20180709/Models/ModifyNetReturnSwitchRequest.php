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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetReturnSwitch请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（net表示高防IP专业版）
 * @method string getId() 获取资源实例ID
 * @method void setId(string $Id) 设置资源实例ID
 * @method integer getStatus() 获取Status 表示回切开关，0: 关闭， 1:打开
 * @method void setStatus(integer $Status) 设置Status 表示回切开关，0: 关闭， 1:打开
 * @method integer getHour() 获取回切时长，单位：小时，取值[0,1,2,3,4,5,6;]当status=1时必选填写Hour>0
 * @method void setHour(integer $Hour) 设置回切时长，单位：小时，取值[0,1,2,3,4,5,6;]当status=1时必选填写Hour>0
 */
class ModifyNetReturnSwitchRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var string 资源实例ID
     */
    public $Id;

    /**
     * @var integer Status 表示回切开关，0: 关闭， 1:打开
     */
    public $Status;

    /**
     * @var integer 回切时长，单位：小时，取值[0,1,2,3,4,5,6;]当status=1时必选填写Hour>0
     */
    public $Hour;

    /**
     * @param string $Business 大禹子产品代号（net表示高防IP专业版）
     * @param string $Id 资源实例ID
     * @param integer $Status Status 表示回切开关，0: 关闭， 1:打开
     * @param integer $Hour 回切时长，单位：小时，取值[0,1,2,3,4,5,6;]当status=1时必选填写Hour>0
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }
    }
}
