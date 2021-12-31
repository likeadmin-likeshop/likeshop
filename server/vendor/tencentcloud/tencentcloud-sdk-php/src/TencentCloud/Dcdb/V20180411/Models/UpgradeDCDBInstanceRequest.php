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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDCDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取待升级的实例ID。形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。
 * @method void setInstanceId(string $InstanceId) 设置待升级的实例ID。形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。
 * @method string getUpgradeType() 获取升级类型，取值范围: 
<li> ADD: 新增分片 </li> 
 <li> EXPAND: 升级实例中的已有分片 </li> 
 <li> SPLIT: 将已有分片中的数据切分到新增分片上</li>
 * @method void setUpgradeType(string $UpgradeType) 设置升级类型，取值范围: 
<li> ADD: 新增分片 </li> 
 <li> EXPAND: 升级实例中的已有分片 </li> 
 <li> SPLIT: 将已有分片中的数据切分到新增分片上</li>
 * @method AddShardConfig getAddShardConfig() 获取新增分片配置，当UpgradeType为ADD时生效。
 * @method void setAddShardConfig(AddShardConfig $AddShardConfig) 设置新增分片配置，当UpgradeType为ADD时生效。
 * @method ExpandShardConfig getExpandShardConfig() 获取扩容分片配置，当UpgradeType为EXPAND时生效。
 * @method void setExpandShardConfig(ExpandShardConfig $ExpandShardConfig) 设置扩容分片配置，当UpgradeType为EXPAND时生效。
 * @method SplitShardConfig getSplitShardConfig() 获取切分分片配置，当UpgradeType为SPLIT时生效。
 * @method void setSplitShardConfig(SplitShardConfig $SplitShardConfig) 设置切分分片配置，当UpgradeType为SPLIT时生效。
 * @method boolean getAutoVoucher() 获取是否自动使用代金券进行支付，默认不使用。
 * @method void setAutoVoucher(boolean $AutoVoucher) 设置是否自动使用代金券进行支付，默认不使用。
 * @method array getVoucherIds() 获取代金券ID列表，目前仅支持指定一张代金券。
 * @method void setVoucherIds(array $VoucherIds) 设置代金券ID列表，目前仅支持指定一张代金券。
 */
class UpgradeDCDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 待升级的实例ID。形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。
     */
    public $InstanceId;

    /**
     * @var string 升级类型，取值范围: 
<li> ADD: 新增分片 </li> 
 <li> EXPAND: 升级实例中的已有分片 </li> 
 <li> SPLIT: 将已有分片中的数据切分到新增分片上</li>
     */
    public $UpgradeType;

    /**
     * @var AddShardConfig 新增分片配置，当UpgradeType为ADD时生效。
     */
    public $AddShardConfig;

    /**
     * @var ExpandShardConfig 扩容分片配置，当UpgradeType为EXPAND时生效。
     */
    public $ExpandShardConfig;

    /**
     * @var SplitShardConfig 切分分片配置，当UpgradeType为SPLIT时生效。
     */
    public $SplitShardConfig;

    /**
     * @var boolean 是否自动使用代金券进行支付，默认不使用。
     */
    public $AutoVoucher;

    /**
     * @var array 代金券ID列表，目前仅支持指定一张代金券。
     */
    public $VoucherIds;

    /**
     * @param string $InstanceId 待升级的实例ID。形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。
     * @param string $UpgradeType 升级类型，取值范围: 
<li> ADD: 新增分片 </li> 
 <li> EXPAND: 升级实例中的已有分片 </li> 
 <li> SPLIT: 将已有分片中的数据切分到新增分片上</li>
     * @param AddShardConfig $AddShardConfig 新增分片配置，当UpgradeType为ADD时生效。
     * @param ExpandShardConfig $ExpandShardConfig 扩容分片配置，当UpgradeType为EXPAND时生效。
     * @param SplitShardConfig $SplitShardConfig 切分分片配置，当UpgradeType为SPLIT时生效。
     * @param boolean $AutoVoucher 是否自动使用代金券进行支付，默认不使用。
     * @param array $VoucherIds 代金券ID列表，目前仅支持指定一张代金券。
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

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("AddShardConfig",$param) and $param["AddShardConfig"] !== null) {
            $this->AddShardConfig = new AddShardConfig();
            $this->AddShardConfig->deserialize($param["AddShardConfig"]);
        }

        if (array_key_exists("ExpandShardConfig",$param) and $param["ExpandShardConfig"] !== null) {
            $this->ExpandShardConfig = new ExpandShardConfig();
            $this->ExpandShardConfig->deserialize($param["ExpandShardConfig"]);
        }

        if (array_key_exists("SplitShardConfig",$param) and $param["SplitShardConfig"] !== null) {
            $this->SplitShardConfig = new SplitShardConfig();
            $this->SplitShardConfig->deserialize($param["SplitShardConfig"]);
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }
    }
}
