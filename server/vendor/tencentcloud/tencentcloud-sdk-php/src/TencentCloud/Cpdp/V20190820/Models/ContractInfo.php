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
 * 合约信息
 *
 * @method string getChannelContractMerchantId() 获取米大师内部签约商户号
 * @method void setChannelContractMerchantId(string $ChannelContractMerchantId) 设置米大师内部签约商户号
 * @method string getChannelContractSubMerchantId() 获取米大师内部签约子商户号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelContractSubMerchantId(string $ChannelContractSubMerchantId) 设置米大师内部签约子商户号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelContractAppId() 获取米大师内部签约应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelContractAppId(string $ChannelContractAppId) 设置米大师内部签约应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelContractSubAppId() 获取米大师内部签约子应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelContractSubAppId(string $ChannelContractSubAppId) 设置米大师内部签约子应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutContractCode() 获取业务合约协议号
 * @method void setOutContractCode(string $OutContractCode) 设置业务合约协议号
 * @method array getExternalContractUserInfoList() 获取第三方渠道用户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalContractUserInfoList(array $ExternalContractUserInfoList) 设置第三方渠道用户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContractMethod() 获取签约方式，如 wechat_app ，使用app方式下的微信签
 * @method void setContractMethod(string $ContractMethod) 设置签约方式，如 wechat_app ，使用app方式下的微信签
 * @method string getContractSceneId() 获取合约场景id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContractSceneId(string $ContractSceneId) 设置合约场景id
注意：此字段可能返回 null，表示取不到有效值。
 * @method ContractUserInfo getUserInfo() 获取用户信息
 * @method void setUserInfo(ContractUserInfo $UserInfo) 设置用户信息
 * @method string getExternalContractData() 获取第三方渠道签约数据
 * @method void setExternalContractData(string $ExternalContractData) 设置第三方渠道签约数据
 */
class ContractInfo extends AbstractModel
{
    /**
     * @var string 米大师内部签约商户号
     */
    public $ChannelContractMerchantId;

    /**
     * @var string 米大师内部签约子商户号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelContractSubMerchantId;

    /**
     * @var string 米大师内部签约应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelContractAppId;

    /**
     * @var string 米大师内部签约子应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelContractSubAppId;

    /**
     * @var string 业务合约协议号
     */
    public $OutContractCode;

    /**
     * @var array 第三方渠道用户信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalContractUserInfoList;

    /**
     * @var string 签约方式，如 wechat_app ，使用app方式下的微信签
     */
    public $ContractMethod;

    /**
     * @var string 合约场景id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContractSceneId;

    /**
     * @var ContractUserInfo 用户信息
     */
    public $UserInfo;

    /**
     * @var string 第三方渠道签约数据
     */
    public $ExternalContractData;

    /**
     * @param string $ChannelContractMerchantId 米大师内部签约商户号
     * @param string $ChannelContractSubMerchantId 米大师内部签约子商户号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelContractAppId 米大师内部签约应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelContractSubAppId 米大师内部签约子应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutContractCode 业务合约协议号
     * @param array $ExternalContractUserInfoList 第三方渠道用户信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContractMethod 签约方式，如 wechat_app ，使用app方式下的微信签
     * @param string $ContractSceneId 合约场景id
注意：此字段可能返回 null，表示取不到有效值。
     * @param ContractUserInfo $UserInfo 用户信息
     * @param string $ExternalContractData 第三方渠道签约数据
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
        if (array_key_exists("ChannelContractMerchantId",$param) and $param["ChannelContractMerchantId"] !== null) {
            $this->ChannelContractMerchantId = $param["ChannelContractMerchantId"];
        }

        if (array_key_exists("ChannelContractSubMerchantId",$param) and $param["ChannelContractSubMerchantId"] !== null) {
            $this->ChannelContractSubMerchantId = $param["ChannelContractSubMerchantId"];
        }

        if (array_key_exists("ChannelContractAppId",$param) and $param["ChannelContractAppId"] !== null) {
            $this->ChannelContractAppId = $param["ChannelContractAppId"];
        }

        if (array_key_exists("ChannelContractSubAppId",$param) and $param["ChannelContractSubAppId"] !== null) {
            $this->ChannelContractSubAppId = $param["ChannelContractSubAppId"];
        }

        if (array_key_exists("OutContractCode",$param) and $param["OutContractCode"] !== null) {
            $this->OutContractCode = $param["OutContractCode"];
        }

        if (array_key_exists("ExternalContractUserInfoList",$param) and $param["ExternalContractUserInfoList"] !== null) {
            $this->ExternalContractUserInfoList = [];
            foreach ($param["ExternalContractUserInfoList"] as $key => $value){
                $obj = new ExternalContractUserInfo();
                $obj->deserialize($value);
                array_push($this->ExternalContractUserInfoList, $obj);
            }
        }

        if (array_key_exists("ContractMethod",$param) and $param["ContractMethod"] !== null) {
            $this->ContractMethod = $param["ContractMethod"];
        }

        if (array_key_exists("ContractSceneId",$param) and $param["ContractSceneId"] !== null) {
            $this->ContractSceneId = $param["ContractSceneId"];
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new ContractUserInfo();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("ExternalContractData",$param) and $param["ExternalContractData"] !== null) {
            $this->ExternalContractData = $param["ExternalContractData"];
        }
    }
}
