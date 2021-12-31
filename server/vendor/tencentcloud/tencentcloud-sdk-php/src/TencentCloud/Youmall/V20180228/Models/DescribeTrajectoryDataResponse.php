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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrajectoryData返回参数结构体
 *
 * @method string getCompanyId() 获取集团ID
 * @method void setCompanyId(string $CompanyId) 设置集团ID
 * @method integer getShopId() 获取店铺ID
 * @method void setShopId(integer $ShopId) 设置店铺ID
 * @method integer getTotalPerson() 获取总人数
 * @method void setTotalPerson(integer $TotalPerson) 设置总人数
 * @method integer getTotalTrajectory() 获取总动迹数目
 * @method void setTotalTrajectory(integer $TotalTrajectory) 设置总动迹数目
 * @method integer getPerson() 获取返回动迹中的总人数
 * @method void setPerson(integer $Person) 设置返回动迹中的总人数
 * @method integer getTrajectory() 获取返回动迹的数目
 * @method void setTrajectory(integer $Trajectory) 设置返回动迹的数目
 * @method array getData() 获取返回动迹的具体信息
 * @method void setData(array $Data) 设置返回动迹的具体信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTrajectoryDataResponse extends AbstractModel
{
    /**
     * @var string 集团ID
     */
    public $CompanyId;

    /**
     * @var integer 店铺ID
     */
    public $ShopId;

    /**
     * @var integer 总人数
     */
    public $TotalPerson;

    /**
     * @var integer 总动迹数目
     */
    public $TotalTrajectory;

    /**
     * @var integer 返回动迹中的总人数
     */
    public $Person;

    /**
     * @var integer 返回动迹的数目
     */
    public $Trajectory;

    /**
     * @var array 返回动迹的具体信息
     */
    public $Data;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CompanyId 集团ID
     * @param integer $ShopId 店铺ID
     * @param integer $TotalPerson 总人数
     * @param integer $TotalTrajectory 总动迹数目
     * @param integer $Person 返回动迹中的总人数
     * @param integer $Trajectory 返回动迹的数目
     * @param array $Data 返回动迹的具体信息
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }

        if (array_key_exists("TotalPerson",$param) and $param["TotalPerson"] !== null) {
            $this->TotalPerson = $param["TotalPerson"];
        }

        if (array_key_exists("TotalTrajectory",$param) and $param["TotalTrajectory"] !== null) {
            $this->TotalTrajectory = $param["TotalTrajectory"];
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = $param["Person"];
        }

        if (array_key_exists("Trajectory",$param) and $param["Trajectory"] !== null) {
            $this->Trajectory = $param["Trajectory"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new TrajectorySunData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
