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
 * ModifyAllRuleStatus请求参数结构体
 *
 * @method integer getStatus() 获取状态，0：全部停用，1：全部启用
 * @method void setStatus(integer $Status) 设置状态，0：全部停用，1：全部启用
 * @method integer getDirection() 获取方向，0：出站，1：入站
 * @method void setDirection(integer $Direction) 设置方向，0：出站，1：入站
 * @method string getEdgeId() 获取Edge ID值
 * @method void setEdgeId(string $EdgeId) 设置Edge ID值
 * @method string getArea() 获取NAT地域
 * @method void setArea(string $Area) 设置NAT地域
 */
class ModifyAllRuleStatusRequest extends AbstractModel
{
    /**
     * @var integer 状态，0：全部停用，1：全部启用
     */
    public $Status;

    /**
     * @var integer 方向，0：出站，1：入站
     */
    public $Direction;

    /**
     * @var string Edge ID值
     */
    public $EdgeId;

    /**
     * @var string NAT地域
     */
    public $Area;

    /**
     * @param integer $Status 状态，0：全部停用，1：全部启用
     * @param integer $Direction 方向，0：出站，1：入站
     * @param string $EdgeId Edge ID值
     * @param string $Area NAT地域
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

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
