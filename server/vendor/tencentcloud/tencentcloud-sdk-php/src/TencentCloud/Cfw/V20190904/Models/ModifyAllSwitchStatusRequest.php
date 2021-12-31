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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAllSwitchStatus请求参数结构体
 *
 * @method integer getStatus() 获取状态，0：关闭，1：开启
 * @method void setStatus(integer $Status) 设置状态，0：关闭，1：开启
 * @method integer getType() 获取0: 互联网边界防火墙开关，1：vpc防火墙开关
 * @method void setType(integer $Type) 设置0: 互联网边界防火墙开关，1：vpc防火墙开关
 * @method array getIds() 获取选中的防火墙开关Id
 * @method void setIds(array $Ids) 设置选中的防火墙开关Id
 * @method integer getChangeType() 获取NAT开关切换类型，1,单个子网，2，同开同关，3，全部
 * @method void setChangeType(integer $ChangeType) 设置NAT开关切换类型，1,单个子网，2，同开同关，3，全部
 * @method string getArea() 获取NAT实例所在地域
 * @method void setArea(string $Area) 设置NAT实例所在地域
 */
class ModifyAllSwitchStatusRequest extends AbstractModel
{
    /**
     * @var integer 状态，0：关闭，1：开启
     */
    public $Status;

    /**
     * @var integer 0: 互联网边界防火墙开关，1：vpc防火墙开关
     */
    public $Type;

    /**
     * @var array 选中的防火墙开关Id
     */
    public $Ids;

    /**
     * @var integer NAT开关切换类型，1,单个子网，2，同开同关，3，全部
     */
    public $ChangeType;

    /**
     * @var string NAT实例所在地域
     */
    public $Area;

    /**
     * @param integer $Status 状态，0：关闭，1：开启
     * @param integer $Type 0: 互联网边界防火墙开关，1：vpc防火墙开关
     * @param array $Ids 选中的防火墙开关Id
     * @param integer $ChangeType NAT开关切换类型，1,单个子网，2，同开同关，3，全部
     * @param string $Area NAT实例所在地域
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("ChangeType",$param) and $param["ChangeType"] !== null) {
            $this->ChangeType = $param["ChangeType"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
