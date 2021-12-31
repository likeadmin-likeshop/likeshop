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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例可回档时间范围
 *
 * @method integer getCode() 获取查询数据库错误码
 * @method void setCode(integer $Code) 设置查询数据库错误码
 * @method string getMessage() 获取查询数据库错误信息
 * @method void setMessage(string $Message) 设置查询数据库错误信息
 * @method string getInstanceId() 获取实例ID列表，单个实例Id的格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同
 * @method void setInstanceId(string $InstanceId) 设置实例ID列表，单个实例Id的格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同
 * @method array getTimes() 获取可回档时间范围
 * @method void setTimes(array $Times) 设置可回档时间范围
 */
class InstanceRollbackRangeTime extends AbstractModel
{
    /**
     * @var integer 查询数据库错误码
     */
    public $Code;

    /**
     * @var string 查询数据库错误信息
     */
    public $Message;

    /**
     * @var string 实例ID列表，单个实例Id的格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同
     */
    public $InstanceId;

    /**
     * @var array 可回档时间范围
     */
    public $Times;

    /**
     * @param integer $Code 查询数据库错误码
     * @param string $Message 查询数据库错误信息
     * @param string $InstanceId 实例ID列表，单个实例Id的格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同
     * @param array $Times 可回档时间范围
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Times",$param) and $param["Times"] !== null) {
            $this->Times = [];
            foreach ($param["Times"] as $key => $value){
                $obj = new RollbackTimeRange();
                $obj->deserialize($value);
                array_push($this->Times, $obj);
            }
        }
    }
}
