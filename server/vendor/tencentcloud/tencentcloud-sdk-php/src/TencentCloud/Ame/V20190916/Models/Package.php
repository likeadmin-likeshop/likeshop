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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 曲库包信息
 *
 * @method string getOrderId() 获取订单id
 * @method void setOrderId(string $OrderId) 设置订单id
 * @method string getName() 获取曲库包名称
 * @method void setName(string $Name) 设置曲库包名称
 * @method string getAuthorizedArea() 获取授权地区-global: 全球  CN: 中国
 * @method void setAuthorizedArea(string $AuthorizedArea) 设置授权地区-global: 全球  CN: 中国
 * @method integer getAuthorizedLimit() 获取授权次数
 * @method void setAuthorizedLimit(integer $AuthorizedLimit) 设置授权次数
 * @method integer getTermOfValidity() 获取套餐有效期，单位:天
 * @method void setTermOfValidity(integer $TermOfValidity) 设置套餐有效期，单位:天
 * @method integer getCommercial() 获取0:不可商业化；1:可商业化
 * @method void setCommercial(integer $Commercial) 设置0:不可商业化；1:可商业化
 * @method float getPackagePrice() 获取套餐价格，单位：元
 * @method void setPackagePrice(float $PackagePrice) 设置套餐价格，单位：元
 * @method string getEffectTime() 获取生效开始时间,格式yyyy-MM-dd HH:mm:ss
 * @method void setEffectTime(string $EffectTime) 设置生效开始时间,格式yyyy-MM-dd HH:mm:ss
 * @method string getExpireTime() 获取生效结束时间,格式yyyy-MM-dd HH:mm:ss
 * @method void setExpireTime(string $ExpireTime) 设置生效结束时间,格式yyyy-MM-dd HH:mm:ss
 * @method integer getUsedCount() 获取剩余授权次数
 * @method void setUsedCount(integer $UsedCount) 设置剩余授权次数
 * @method array getUseRanges() 获取曲库包用途信息
 * @method void setUseRanges(array $UseRanges) 设置曲库包用途信息
 */
class Package extends AbstractModel
{
    /**
     * @var string 订单id
     */
    public $OrderId;

    /**
     * @var string 曲库包名称
     */
    public $Name;

    /**
     * @var string 授权地区-global: 全球  CN: 中国
     */
    public $AuthorizedArea;

    /**
     * @var integer 授权次数
     */
    public $AuthorizedLimit;

    /**
     * @var integer 套餐有效期，单位:天
     */
    public $TermOfValidity;

    /**
     * @var integer 0:不可商业化；1:可商业化
     */
    public $Commercial;

    /**
     * @var float 套餐价格，单位：元
     */
    public $PackagePrice;

    /**
     * @var string 生效开始时间,格式yyyy-MM-dd HH:mm:ss
     */
    public $EffectTime;

    /**
     * @var string 生效结束时间,格式yyyy-MM-dd HH:mm:ss
     */
    public $ExpireTime;

    /**
     * @var integer 剩余授权次数
     */
    public $UsedCount;

    /**
     * @var array 曲库包用途信息
     */
    public $UseRanges;

    /**
     * @param string $OrderId 订单id
     * @param string $Name 曲库包名称
     * @param string $AuthorizedArea 授权地区-global: 全球  CN: 中国
     * @param integer $AuthorizedLimit 授权次数
     * @param integer $TermOfValidity 套餐有效期，单位:天
     * @param integer $Commercial 0:不可商业化；1:可商业化
     * @param float $PackagePrice 套餐价格，单位：元
     * @param string $EffectTime 生效开始时间,格式yyyy-MM-dd HH:mm:ss
     * @param string $ExpireTime 生效结束时间,格式yyyy-MM-dd HH:mm:ss
     * @param integer $UsedCount 剩余授权次数
     * @param array $UseRanges 曲库包用途信息
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AuthorizedArea",$param) and $param["AuthorizedArea"] !== null) {
            $this->AuthorizedArea = $param["AuthorizedArea"];
        }

        if (array_key_exists("AuthorizedLimit",$param) and $param["AuthorizedLimit"] !== null) {
            $this->AuthorizedLimit = $param["AuthorizedLimit"];
        }

        if (array_key_exists("TermOfValidity",$param) and $param["TermOfValidity"] !== null) {
            $this->TermOfValidity = $param["TermOfValidity"];
        }

        if (array_key_exists("Commercial",$param) and $param["Commercial"] !== null) {
            $this->Commercial = $param["Commercial"];
        }

        if (array_key_exists("PackagePrice",$param) and $param["PackagePrice"] !== null) {
            $this->PackagePrice = $param["PackagePrice"];
        }

        if (array_key_exists("EffectTime",$param) and $param["EffectTime"] !== null) {
            $this->EffectTime = $param["EffectTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("UsedCount",$param) and $param["UsedCount"] !== null) {
            $this->UsedCount = $param["UsedCount"];
        }

        if (array_key_exists("UseRanges",$param) and $param["UseRanges"] !== null) {
            $this->UseRanges = [];
            foreach ($param["UseRanges"] as $key => $value){
                $obj = new UseRange();
                $obj->deserialize($value);
                array_push($this->UseRanges, $obj);
            }
        }
    }
}
