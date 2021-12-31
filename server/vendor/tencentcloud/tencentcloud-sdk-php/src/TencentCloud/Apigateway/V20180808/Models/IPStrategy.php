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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ip策略
 *
 * @method string getStrategyId() 获取策略唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyId(string $StrategyId) 设置策略唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyName() 获取用户自定义策略名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyName(string $StrategyName) 设置用户自定义策略名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyType() 获取策略类型。支持WHITE（白名单）和BLACK（黑名单）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyType(string $StrategyType) 设置策略类型。支持WHITE（白名单）和BLACK（黑名单）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyData() 获取IP列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyData(string $StrategyData) 设置IP列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取修改时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置修改时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceId() 获取最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceId(string $ServiceId) 设置最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBindApiTotalCount() 获取策略绑定的API数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindApiTotalCount(integer $BindApiTotalCount) 设置策略绑定的API数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBindApis() 获取绑定的API详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindApis(array $BindApis) 设置绑定的API详情。
注意：此字段可能返回 null，表示取不到有效值。
 */
class IPStrategy extends AbstractModel
{
    /**
     * @var string 策略唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyId;

    /**
     * @var string 用户自定义策略名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyName;

    /**
     * @var string 策略类型。支持WHITE（白名单）和BLACK（黑名单）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyType;

    /**
     * @var string IP列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyData;

    /**
     * @var string 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 修改时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @var string 最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceId;

    /**
     * @var integer 策略绑定的API数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindApiTotalCount;

    /**
     * @var array 绑定的API详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindApis;

    /**
     * @param string $StrategyId 策略唯一ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyName 用户自定义策略名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyType 策略类型。支持WHITE（白名单）和BLACK（黑名单）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyData IP列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 修改时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceId 最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BindApiTotalCount 策略绑定的API数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BindApis 绑定的API详情。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("StrategyData",$param) and $param["StrategyData"] !== null) {
            $this->StrategyData = $param["StrategyData"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("BindApiTotalCount",$param) and $param["BindApiTotalCount"] !== null) {
            $this->BindApiTotalCount = $param["BindApiTotalCount"];
        }

        if (array_key_exists("BindApis",$param) and $param["BindApis"] !== null) {
            $this->BindApis = [];
            foreach ($param["BindApis"] as $key => $value){
                $obj = new DesApisStatus();
                $obj->deserialize($value);
                array_push($this->BindApis, $obj);
            }
        }
    }
}
