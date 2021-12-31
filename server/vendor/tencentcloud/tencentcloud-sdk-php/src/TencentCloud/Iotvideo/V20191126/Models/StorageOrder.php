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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云存订单信息
 *
 * @method string getOrderId() 获取定单唯一性ID
 * @method void setOrderId(string $OrderId) 设置定单唯一性ID
 * @method string getPkgId() 获取云存套餐ID
 * @method void setPkgId(string $PkgId) 设置云存套餐ID
 * @method integer getStatus() 获取定单服务状态
1;订单正在使用。
2:订单未开始。
3:订单已经使用过，现在暂时未开始使用(该订单从其他服务转移而来)。
4:订单已过期。
5:订单已被退订。
6:定单已被转移到其他云存服务。
 * @method void setStatus(integer $Status) 设置定单服务状态
1;订单正在使用。
2:订单未开始。
3:订单已经使用过，现在暂时未开始使用(该订单从其他服务转移而来)。
4:订单已过期。
5:订单已被退订。
6:定单已被转移到其他云存服务。
 * @method integer getStartTime() 获取定单服务生效时间
 * @method void setStartTime(integer $StartTime) 设置定单服务生效时间
 * @method integer getEndTime() 获取定单服务失效时间
 * @method void setEndTime(integer $EndTime) 设置定单服务失效时间
 */
class StorageOrder extends AbstractModel
{
    /**
     * @var string 定单唯一性ID
     */
    public $OrderId;

    /**
     * @var string 云存套餐ID
     */
    public $PkgId;

    /**
     * @var integer 定单服务状态
1;订单正在使用。
2:订单未开始。
3:订单已经使用过，现在暂时未开始使用(该订单从其他服务转移而来)。
4:订单已过期。
5:订单已被退订。
6:定单已被转移到其他云存服务。
     */
    public $Status;

    /**
     * @var integer 定单服务生效时间
     */
    public $StartTime;

    /**
     * @var integer 定单服务失效时间
     */
    public $EndTime;

    /**
     * @param string $OrderId 定单唯一性ID
     * @param string $PkgId 云存套餐ID
     * @param integer $Status 定单服务状态
1;订单正在使用。
2:订单未开始。
3:订单已经使用过，现在暂时未开始使用(该订单从其他服务转移而来)。
4:订单已过期。
5:订单已被退订。
6:定单已被转移到其他云存服务。
     * @param integer $StartTime 定单服务生效时间
     * @param integer $EndTime 定单服务失效时间
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
