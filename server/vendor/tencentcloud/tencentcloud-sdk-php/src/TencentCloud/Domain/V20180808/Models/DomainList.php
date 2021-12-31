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
 * 域名列表
 *
 * @method boolean getIsPremium() 获取是否是溢价域名：
ture 是    
false 不是
 * @method void setIsPremium(boolean $IsPremium) 设置是否是溢价域名：
ture 是    
false 不是
 * @method string getDomainId() 获取域名资源ID。
 * @method void setDomainId(string $DomainId) 设置域名资源ID。
 * @method string getDomainName() 获取域名名称。
 * @method void setDomainName(string $DomainName) 设置域名名称。
 * @method integer getAutoRenew() 获取是否已设置自动续费 。
0：未设置 
1：已设置
 * @method void setAutoRenew(integer $AutoRenew) 设置是否已设置自动续费 。
0：未设置 
1：已设置
 * @method string getCreationDate() 获取注册时间。
 * @method void setCreationDate(string $CreationDate) 设置注册时间。
 * @method string getExpirationDate() 获取到期时间。
 * @method void setExpirationDate(string $ExpirationDate) 设置到期时间。
 * @method string getTld() 获取域名后缀
 * @method void setTld(string $Tld) 设置域名后缀
 * @method string getCodeTld() 获取编码后的后缀（中文会进行编码）
 * @method void setCodeTld(string $CodeTld) 设置编码后的后缀（中文会进行编码）
 * @method string getBuyStatus() 获取域名购买状态。
ok：正常
AboutToExpire: 即将到期
RegisterPending：注册中
RegisterDoing：注册中
RegisterFailed：注册失败
RenewPending：续费期
RenewDoing：续费中
RedemptionPending：赎回期
RedemptionDoing：赎回中
TransferPending：转入中
TransferTransing：转入中
TransferFailed：转入失败
 * @method void setBuyStatus(string $BuyStatus) 设置域名购买状态。
ok：正常
AboutToExpire: 即将到期
RegisterPending：注册中
RegisterDoing：注册中
RegisterFailed：注册失败
RenewPending：续费期
RenewDoing：续费中
RedemptionPending：赎回期
RedemptionDoing：赎回中
TransferPending：转入中
TransferTransing：转入中
TransferFailed：转入失败
 */
class DomainList extends AbstractModel
{
    /**
     * @var boolean 是否是溢价域名：
ture 是    
false 不是
     */
    public $IsPremium;

    /**
     * @var string 域名资源ID。
     */
    public $DomainId;

    /**
     * @var string 域名名称。
     */
    public $DomainName;

    /**
     * @var integer 是否已设置自动续费 。
0：未设置 
1：已设置
     */
    public $AutoRenew;

    /**
     * @var string 注册时间。
     */
    public $CreationDate;

    /**
     * @var string 到期时间。
     */
    public $ExpirationDate;

    /**
     * @var string 域名后缀
     */
    public $Tld;

    /**
     * @var string 编码后的后缀（中文会进行编码）
     */
    public $CodeTld;

    /**
     * @var string 域名购买状态。
ok：正常
AboutToExpire: 即将到期
RegisterPending：注册中
RegisterDoing：注册中
RegisterFailed：注册失败
RenewPending：续费期
RenewDoing：续费中
RedemptionPending：赎回期
RedemptionDoing：赎回中
TransferPending：转入中
TransferTransing：转入中
TransferFailed：转入失败
     */
    public $BuyStatus;

    /**
     * @param boolean $IsPremium 是否是溢价域名：
ture 是    
false 不是
     * @param string $DomainId 域名资源ID。
     * @param string $DomainName 域名名称。
     * @param integer $AutoRenew 是否已设置自动续费 。
0：未设置 
1：已设置
     * @param string $CreationDate 注册时间。
     * @param string $ExpirationDate 到期时间。
     * @param string $Tld 域名后缀
     * @param string $CodeTld 编码后的后缀（中文会进行编码）
     * @param string $BuyStatus 域名购买状态。
ok：正常
AboutToExpire: 即将到期
RegisterPending：注册中
RegisterDoing：注册中
RegisterFailed：注册失败
RenewPending：续费期
RenewDoing：续费中
RedemptionPending：赎回期
RedemptionDoing：赎回中
TransferPending：转入中
TransferTransing：转入中
TransferFailed：转入失败
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
        if (array_key_exists("IsPremium",$param) and $param["IsPremium"] !== null) {
            $this->IsPremium = $param["IsPremium"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("CreationDate",$param) and $param["CreationDate"] !== null) {
            $this->CreationDate = $param["CreationDate"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("Tld",$param) and $param["Tld"] !== null) {
            $this->Tld = $param["Tld"];
        }

        if (array_key_exists("CodeTld",$param) and $param["CodeTld"] !== null) {
            $this->CodeTld = $param["CodeTld"];
        }

        if (array_key_exists("BuyStatus",$param) and $param["BuyStatus"] !== null) {
            $this->BuyStatus = $param["BuyStatus"];
        }
    }
}
