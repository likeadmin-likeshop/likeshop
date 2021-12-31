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
 * ModifyTableStatus请求参数结构体
 *
 * @method string getEdgeId() 获取EdgeId值两个vpc间的边id
 * @method void setEdgeId(string $EdgeId) 设置EdgeId值两个vpc间的边id
 * @method integer getStatus() 获取状态值，1：锁表，2：解锁表
 * @method void setStatus(integer $Status) 设置状态值，1：锁表，2：解锁表
 * @method string getArea() 获取Nat所在地域
 * @method void setArea(string $Area) 设置Nat所在地域
 * @method integer getDirection() 获取0： 出向，1：入向
 * @method void setDirection(integer $Direction) 设置0： 出向，1：入向
 */
class ModifyTableStatusRequest extends AbstractModel
{
    /**
     * @var string EdgeId值两个vpc间的边id
     */
    public $EdgeId;

    /**
     * @var integer 状态值，1：锁表，2：解锁表
     */
    public $Status;

    /**
     * @var string Nat所在地域
     */
    public $Area;

    /**
     * @var integer 0： 出向，1：入向
     */
    public $Direction;

    /**
     * @param string $EdgeId EdgeId值两个vpc间的边id
     * @param integer $Status 状态值，1：锁表，2：解锁表
     * @param string $Area Nat所在地域
     * @param integer $Direction 0： 出向，1：入向
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
        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
