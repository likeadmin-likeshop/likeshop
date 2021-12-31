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
 * CreateTransferBatch请求参数结构体
 *
 * @method string getMerchantId() 获取商户号。
示例值：129284394
 * @method void setMerchantId(string $MerchantId) 设置商户号。
示例值：129284394
 * @method array getTransferDetails() 获取转账明细列表。
发起批量转账的明细列表，最多三千笔
 * @method void setTransferDetails(array $TransferDetails) 设置转账明细列表。
发起批量转账的明细列表，最多三千笔
 * @method string getMerchantAppId() 获取直连商户appId。
即商户号绑定的appid。
示例值：wxf636efh567hg4356
 * @method void setMerchantAppId(string $MerchantAppId) 设置直连商户appId。
即商户号绑定的appid。
示例值：wxf636efh567hg4356
 * @method string getMerchantBatchNo() 获取商家批次单号。
商户系统内部的商家批次单号，此参数只能由数字、字母组成，商户系统内部唯一，UTF8编码，最多32个字符。
示例值：plfk2020042013
 * @method void setMerchantBatchNo(string $MerchantBatchNo) 设置商家批次单号。
商户系统内部的商家批次单号，此参数只能由数字、字母组成，商户系统内部唯一，UTF8编码，最多32个字符。
示例值：plfk2020042013
 * @method string getBatchName() 获取批次名称。
批量转账的名称。
示例值：2019年1月深圳分部报销单
 * @method void setBatchName(string $BatchName) 设置批次名称。
批量转账的名称。
示例值：2019年1月深圳分部报销单
 * @method string getBatchRemark() 获取转账说明。
UTF8编码，最多32个字符。
示例值：2019年深圳分部报销单
 * @method void setBatchRemark(string $BatchRemark) 设置转账说明。
UTF8编码，最多32个字符。
示例值：2019年深圳分部报销单
 * @method integer getTotalAmount() 获取转账总金额。
转账金额，单位为分。
示例值：4000000
 * @method void setTotalAmount(integer $TotalAmount) 设置转账总金额。
转账金额，单位为分。
示例值：4000000
 * @method integer getTotalNum() 获取转账总笔数。
一个转账批次最多允许发起三千笔转账。
示例值：200
 * @method void setTotalNum(integer $TotalNum) 设置转账总笔数。
一个转账批次最多允许发起三千笔转账。
示例值：200
 * @method string getProfile() 获取环境名。
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 * @method void setProfile(string $Profile) 设置环境名。
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 */
class CreateTransferBatchRequest extends AbstractModel
{
    /**
     * @var string 商户号。
示例值：129284394
     */
    public $MerchantId;

    /**
     * @var array 转账明细列表。
发起批量转账的明细列表，最多三千笔
     */
    public $TransferDetails;

    /**
     * @var string 直连商户appId。
即商户号绑定的appid。
示例值：wxf636efh567hg4356
     */
    public $MerchantAppId;

    /**
     * @var string 商家批次单号。
商户系统内部的商家批次单号，此参数只能由数字、字母组成，商户系统内部唯一，UTF8编码，最多32个字符。
示例值：plfk2020042013
     */
    public $MerchantBatchNo;

    /**
     * @var string 批次名称。
批量转账的名称。
示例值：2019年1月深圳分部报销单
     */
    public $BatchName;

    /**
     * @var string 转账说明。
UTF8编码，最多32个字符。
示例值：2019年深圳分部报销单
     */
    public $BatchRemark;

    /**
     * @var integer 转账总金额。
转账金额，单位为分。
示例值：4000000
     */
    public $TotalAmount;

    /**
     * @var integer 转账总笔数。
一个转账批次最多允许发起三千笔转账。
示例值：200
     */
    public $TotalNum;

    /**
     * @var string 环境名。
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     */
    public $Profile;

    /**
     * @param string $MerchantId 商户号。
示例值：129284394
     * @param array $TransferDetails 转账明细列表。
发起批量转账的明细列表，最多三千笔
     * @param string $MerchantAppId 直连商户appId。
即商户号绑定的appid。
示例值：wxf636efh567hg4356
     * @param string $MerchantBatchNo 商家批次单号。
商户系统内部的商家批次单号，此参数只能由数字、字母组成，商户系统内部唯一，UTF8编码，最多32个字符。
示例值：plfk2020042013
     * @param string $BatchName 批次名称。
批量转账的名称。
示例值：2019年1月深圳分部报销单
     * @param string $BatchRemark 转账说明。
UTF8编码，最多32个字符。
示例值：2019年深圳分部报销单
     * @param integer $TotalAmount 转账总金额。
转账金额，单位为分。
示例值：4000000
     * @param integer $TotalNum 转账总笔数。
一个转账批次最多允许发起三千笔转账。
示例值：200
     * @param string $Profile 环境名。
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
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
        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("TransferDetails",$param) and $param["TransferDetails"] !== null) {
            $this->TransferDetails = [];
            foreach ($param["TransferDetails"] as $key => $value){
                $obj = new TransferDetailRequest();
                $obj->deserialize($value);
                array_push($this->TransferDetails, $obj);
            }
        }

        if (array_key_exists("MerchantAppId",$param) and $param["MerchantAppId"] !== null) {
            $this->MerchantAppId = $param["MerchantAppId"];
        }

        if (array_key_exists("MerchantBatchNo",$param) and $param["MerchantBatchNo"] !== null) {
            $this->MerchantBatchNo = $param["MerchantBatchNo"];
        }

        if (array_key_exists("BatchName",$param) and $param["BatchName"] !== null) {
            $this->BatchName = $param["BatchName"];
        }

        if (array_key_exists("BatchRemark",$param) and $param["BatchRemark"] !== null) {
            $this->BatchRemark = $param["BatchRemark"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }
    }
}
