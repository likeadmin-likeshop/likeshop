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
 * DeleteAcRule请求参数结构体
 *
 * @method integer getId() 获取删除规则对应的id值, 对应获取规则列表接口的Id 值
 * @method void setId(integer $Id) 设置删除规则对应的id值, 对应获取规则列表接口的Id 值
 * @method integer getDirection() 获取方向，0：出站，1：入站
 * @method void setDirection(integer $Direction) 设置方向，0：出站，1：入站
 * @method string getEdgeId() 获取EdgeId值两个vpc间的边id
 * @method void setEdgeId(string $EdgeId) 设置EdgeId值两个vpc间的边id
 * @method string getArea() 获取NAT地域， 如ap-shanghai/ap-guangzhou/ap-chongqing等
 * @method void setArea(string $Area) 设置NAT地域， 如ap-shanghai/ap-guangzhou/ap-chongqing等
 */
class DeleteAcRuleRequest extends AbstractModel
{
    /**
     * @var integer 删除规则对应的id值, 对应获取规则列表接口的Id 值
     */
    public $Id;

    /**
     * @var integer 方向，0：出站，1：入站
     */
    public $Direction;

    /**
     * @var string EdgeId值两个vpc间的边id
     */
    public $EdgeId;

    /**
     * @var string NAT地域， 如ap-shanghai/ap-guangzhou/ap-chongqing等
     */
    public $Area;

    /**
     * @param integer $Id 删除规则对应的id值, 对应获取规则列表接口的Id 值
     * @param integer $Direction 方向，0：出站，1：入站
     * @param string $EdgeId EdgeId值两个vpc间的边id
     * @param string $Area NAT地域， 如ap-shanghai/ap-guangzhou/ap-chongqing等
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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
