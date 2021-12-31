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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签约数据
 *
 * @method string getExternalReturnCode() 获取第三方渠道错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnCode(string $ExternalReturnCode) 设置第三方渠道错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalReturnMessage() 获取第三方渠道错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnMessage(string $ExternalReturnMessage) 设置第三方渠道错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalReturnData() 获取第三方渠道返回的原始数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnData(string $ExternalReturnData) 设置第三方渠道返回的原始数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelMerchantId() 获取米大师内部商户号
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置米大师内部商户号
 * @method string getChannelSubMerchantId() 获取米大师内部子商户号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置米大师内部子商户号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelAppId() 获取米大师内部应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelAppId(string $ChannelAppId) 设置米大师内部应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelSubAppId() 获取米大师内部子应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelSubAppId(string $ChannelSubAppId) 设置米大师内部子应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelName() 获取渠道名称
 * @method void setChannelName(string $ChannelName) 设置渠道名称
 * @method ReturnContractInfo getReturnContractInfo() 获取返回的合约信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReturnContractInfo(ReturnContractInfo $ReturnContractInfo) 设置返回的合约信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNotifyUrl() 获取签约通知地址
 * @method void setNotifyUrl(string $NotifyUrl) 设置签约通知地址
 */
class ResponseQueryContract extends AbstractModel
{
    /**
     * @var string 第三方渠道错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnCode;

    /**
     * @var string 第三方渠道错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnMessage;

    /**
     * @var string 第三方渠道返回的原始数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnData;

    /**
     * @var string 米大师内部商户号
     */
    public $ChannelMerchantId;

    /**
     * @var string 米大师内部子商户号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelSubMerchantId;

    /**
     * @var string 米大师内部应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelAppId;

    /**
     * @var string 米大师内部子应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelSubAppId;

    /**
     * @var string 渠道名称
     */
    public $ChannelName;

    /**
     * @var ReturnContractInfo 返回的合约信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReturnContractInfo;

    /**
     * @var string 签约通知地址
     */
    public $NotifyUrl;

    /**
     * @param string $ExternalReturnCode 第三方渠道错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalReturnMessage 第三方渠道错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalReturnData 第三方渠道返回的原始数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelMerchantId 米大师内部商户号
     * @param string $ChannelSubMerchantId 米大师内部子商户号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelAppId 米大师内部应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelSubAppId 米大师内部子应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelName 渠道名称
     * @param ReturnContractInfo $ReturnContractInfo 返回的合约信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NotifyUrl 签约通知地址
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
        if (array_key_exists("ExternalReturnCode",$param) and $param["ExternalReturnCode"] !== null) {
            $this->ExternalReturnCode = $param["ExternalReturnCode"];
        }

        if (array_key_exists("ExternalReturnMessage",$param) and $param["ExternalReturnMessage"] !== null) {
            $this->ExternalReturnMessage = $param["ExternalReturnMessage"];
        }

        if (array_key_exists("ExternalReturnData",$param) and $param["ExternalReturnData"] !== null) {
            $this->ExternalReturnData = $param["ExternalReturnData"];
        }

        if (array_key_exists("ChannelMerchantId",$param) and $param["ChannelMerchantId"] !== null) {
            $this->ChannelMerchantId = $param["ChannelMerchantId"];
        }

        if (array_key_exists("ChannelSubMerchantId",$param) and $param["ChannelSubMerchantId"] !== null) {
            $this->ChannelSubMerchantId = $param["ChannelSubMerchantId"];
        }

        if (array_key_exists("ChannelAppId",$param) and $param["ChannelAppId"] !== null) {
            $this->ChannelAppId = $param["ChannelAppId"];
        }

        if (array_key_exists("ChannelSubAppId",$param) and $param["ChannelSubAppId"] !== null) {
            $this->ChannelSubAppId = $param["ChannelSubAppId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("ReturnContractInfo",$param) and $param["ReturnContractInfo"] !== null) {
            $this->ReturnContractInfo = new ReturnContractInfo();
            $this->ReturnContractInfo->deserialize($param["ReturnContractInfo"]);
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }
    }
}
