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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckDomain返回参数结构体
 *
 * @method string getDomainName() 获取所查询域名名称
 * @method void setDomainName(string $DomainName) 设置所查询域名名称
 * @method boolean getAvailable() 获取是否能够注册
 * @method void setAvailable(boolean $Available) 设置是否能够注册
 * @method string getReason() 获取不能注册原因
 * @method void setReason(string $Reason) 设置不能注册原因
 * @method boolean getPremium() 获取是否是溢价词
 * @method void setPremium(boolean $Premium) 设置是否是溢价词
 * @method integer getPrice() 获取域名价格
 * @method void setPrice(integer $Price) 设置域名价格
 * @method boolean getBlackWord() 获取是否是敏感词
 * @method void setBlackWord(boolean $BlackWord) 设置是否是敏感词
 * @method string getDescribe() 获取溢价词描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescribe(string $Describe) 设置溢价词描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFeeRenew() 获取溢价词的续费价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeeRenew(integer $FeeRenew) 设置溢价词的续费价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRealPrice() 获取域名真实价格, 溢价词时价格跟年限有关，非溢价词时价格为1年的价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealPrice(integer $RealPrice) 设置域名真实价格, 溢价词时价格跟年限有关，非溢价词时价格为1年的价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFeeTransfer() 获取溢价词的转入价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeeTransfer(integer $FeeTransfer) 设置溢价词的转入价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFeeRestore() 获取溢价词的赎回价格
 * @method void setFeeRestore(integer $FeeRestore) 设置溢价词的赎回价格
 * @method integer getPeriod() 获取检测年限
 * @method void setPeriod(integer $Period) 设置检测年限
 * @method boolean getRecordSupport() 获取是否支持北京备案  true 支持  false 不支持
 * @method void setRecordSupport(boolean $RecordSupport) 设置是否支持北京备案  true 支持  false 不支持
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CheckDomainResponse extends AbstractModel
{
    /**
     * @var string 所查询域名名称
     */
    public $DomainName;

    /**
     * @var boolean 是否能够注册
     */
    public $Available;

    /**
     * @var string 不能注册原因
     */
    public $Reason;

    /**
     * @var boolean 是否是溢价词
     */
    public $Premium;

    /**
     * @var integer 域名价格
     */
    public $Price;

    /**
     * @var boolean 是否是敏感词
     */
    public $BlackWord;

    /**
     * @var string 溢价词描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Describe;

    /**
     * @var integer 溢价词的续费价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeeRenew;

    /**
     * @var integer 域名真实价格, 溢价词时价格跟年限有关，非溢价词时价格为1年的价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealPrice;

    /**
     * @var integer 溢价词的转入价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeeTransfer;

    /**
     * @var integer 溢价词的赎回价格
     */
    public $FeeRestore;

    /**
     * @var integer 检测年限
     */
    public $Period;

    /**
     * @var boolean 是否支持北京备案  true 支持  false 不支持
     */
    public $RecordSupport;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DomainName 所查询域名名称
     * @param boolean $Available 是否能够注册
     * @param string $Reason 不能注册原因
     * @param boolean $Premium 是否是溢价词
     * @param integer $Price 域名价格
     * @param boolean $BlackWord 是否是敏感词
     * @param string $Describe 溢价词描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FeeRenew 溢价词的续费价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RealPrice 域名真实价格, 溢价词时价格跟年限有关，非溢价词时价格为1年的价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FeeTransfer 溢价词的转入价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FeeRestore 溢价词的赎回价格
     * @param integer $Period 检测年限
     * @param boolean $RecordSupport 是否支持北京备案  true 支持  false 不支持
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Premium",$param) and $param["Premium"] !== null) {
            $this->Premium = $param["Premium"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("BlackWord",$param) and $param["BlackWord"] !== null) {
            $this->BlackWord = $param["BlackWord"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("FeeRenew",$param) and $param["FeeRenew"] !== null) {
            $this->FeeRenew = $param["FeeRenew"];
        }

        if (array_key_exists("RealPrice",$param) and $param["RealPrice"] !== null) {
            $this->RealPrice = $param["RealPrice"];
        }

        if (array_key_exists("FeeTransfer",$param) and $param["FeeTransfer"] !== null) {
            $this->FeeTransfer = $param["FeeTransfer"];
        }

        if (array_key_exists("FeeRestore",$param) and $param["FeeRestore"] !== null) {
            $this->FeeRestore = $param["FeeRestore"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RecordSupport",$param) and $param["RecordSupport"] !== null) {
            $this->RecordSupport = $param["RecordSupport"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
