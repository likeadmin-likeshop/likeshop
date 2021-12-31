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
 * 签约同步信息
 *
 * @method ExternalReturnContractInfo getExternalReturnContractInfo() 获取第三方渠道合约信息
 * @method void setExternalReturnContractInfo(ExternalReturnContractInfo $ExternalReturnContractInfo) 设置第三方渠道合约信息
 * @method array getExternalContractUserInfo() 获取第三方渠道用户信息
 * @method void setExternalContractUserInfo(array $ExternalContractUserInfo) 设置第三方渠道用户信息
 * @method string getContractMethod() 获取签约方式，枚举值，
<br/>CONTRACT_METHOD_WECHAT_INVALID: 无效
CONTRACT_METHOD_WECHAT_APP: 微信APP
CONTRACT_METHOD_WECHAT_PUBLIC: 微信公众号
CONTRACT_METHOD_WECHAT_MINIPROGRAM: 微信小程序
CONTRACT_METHOD_WECHAT_H5: 微信H5
 * @method void setContractMethod(string $ContractMethod) 设置签约方式，枚举值，
<br/>CONTRACT_METHOD_WECHAT_INVALID: 无效
CONTRACT_METHOD_WECHAT_APP: 微信APP
CONTRACT_METHOD_WECHAT_PUBLIC: 微信公众号
CONTRACT_METHOD_WECHAT_MINIPROGRAM: 微信小程序
CONTRACT_METHOD_WECHAT_H5: 微信H5
 * @method string getContractSceneId() 获取在米大师侧分配的场景id
 * @method void setContractSceneId(string $ContractSceneId) 设置在米大师侧分配的场景id
 * @method string getExternalReturnContractData() 获取调用方从第三方渠道查询到的签约数据，由各个渠道定义
 * @method void setExternalReturnContractData(string $ExternalReturnContractData) 设置调用方从第三方渠道查询到的签约数据，由各个渠道定义
 */
class ContractSyncInfo extends AbstractModel
{
    /**
     * @var ExternalReturnContractInfo 第三方渠道合约信息
     */
    public $ExternalReturnContractInfo;

    /**
     * @var array 第三方渠道用户信息
     */
    public $ExternalContractUserInfo;

    /**
     * @var string 签约方式，枚举值，
<br/>CONTRACT_METHOD_WECHAT_INVALID: 无效
CONTRACT_METHOD_WECHAT_APP: 微信APP
CONTRACT_METHOD_WECHAT_PUBLIC: 微信公众号
CONTRACT_METHOD_WECHAT_MINIPROGRAM: 微信小程序
CONTRACT_METHOD_WECHAT_H5: 微信H5
     */
    public $ContractMethod;

    /**
     * @var string 在米大师侧分配的场景id
     */
    public $ContractSceneId;

    /**
     * @var string 调用方从第三方渠道查询到的签约数据，由各个渠道定义
     */
    public $ExternalReturnContractData;

    /**
     * @param ExternalReturnContractInfo $ExternalReturnContractInfo 第三方渠道合约信息
     * @param array $ExternalContractUserInfo 第三方渠道用户信息
     * @param string $ContractMethod 签约方式，枚举值，
<br/>CONTRACT_METHOD_WECHAT_INVALID: 无效
CONTRACT_METHOD_WECHAT_APP: 微信APP
CONTRACT_METHOD_WECHAT_PUBLIC: 微信公众号
CONTRACT_METHOD_WECHAT_MINIPROGRAM: 微信小程序
CONTRACT_METHOD_WECHAT_H5: 微信H5
     * @param string $ContractSceneId 在米大师侧分配的场景id
     * @param string $ExternalReturnContractData 调用方从第三方渠道查询到的签约数据，由各个渠道定义
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
        if (array_key_exists("ExternalReturnContractInfo",$param) and $param["ExternalReturnContractInfo"] !== null) {
            $this->ExternalReturnContractInfo = new ExternalReturnContractInfo();
            $this->ExternalReturnContractInfo->deserialize($param["ExternalReturnContractInfo"]);
        }

        if (array_key_exists("ExternalContractUserInfo",$param) and $param["ExternalContractUserInfo"] !== null) {
            $this->ExternalContractUserInfo = [];
            foreach ($param["ExternalContractUserInfo"] as $key => $value){
                $obj = new ExternalContractUserInfo();
                $obj->deserialize($value);
                array_push($this->ExternalContractUserInfo, $obj);
            }
        }

        if (array_key_exists("ContractMethod",$param) and $param["ContractMethod"] !== null) {
            $this->ContractMethod = $param["ContractMethod"];
        }

        if (array_key_exists("ContractSceneId",$param) and $param["ContractSceneId"] !== null) {
            $this->ContractSceneId = $param["ContractSceneId"];
        }

        if (array_key_exists("ExternalReturnContractData",$param) and $param["ExternalReturnContractData"] !== null) {
            $this->ExternalReturnContractData = $param["ExternalReturnContractData"];
        }
    }
}
