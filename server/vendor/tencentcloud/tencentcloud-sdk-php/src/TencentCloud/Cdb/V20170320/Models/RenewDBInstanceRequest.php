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
 * RenewDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取待续费的实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872)。
 * @method void setInstanceId(string $InstanceId) 设置待续费的实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872)。
 * @method integer getTimeSpan() 获取续费时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
 * @method void setTimeSpan(integer $TimeSpan) 设置续费时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
 * @method string getModifyPayType() 获取如果需要将按量计费实例续费为包年包月的实例，该入参的值需要指定为 "PREPAID" 。
 * @method void setModifyPayType(string $ModifyPayType) 设置如果需要将按量计费实例续费为包年包月的实例，该入参的值需要指定为 "PREPAID" 。
 */
class RenewDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 待续费的实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872)。
     */
    public $InstanceId;

    /**
     * @var integer 续费时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
     */
    public $TimeSpan;

    /**
     * @var string 如果需要将按量计费实例续费为包年包月的实例，该入参的值需要指定为 "PREPAID" 。
     */
    public $ModifyPayType;

    /**
     * @param string $InstanceId 待续费的实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同，可使用 [查询实例列表](https://cloud.tencent.com/document/api/236/15872)。
     * @param integer $TimeSpan 续费时长，单位：月，可选值包括 [1,2,3,4,5,6,7,8,9,10,11,12,24,36]。
     * @param string $ModifyPayType 如果需要将按量计费实例续费为包年包月的实例，该入参的值需要指定为 "PREPAID" 。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("ModifyPayType",$param) and $param["ModifyPayType"] !== null) {
            $this->ModifyPayType = $param["ModifyPayType"];
        }
    }
}
