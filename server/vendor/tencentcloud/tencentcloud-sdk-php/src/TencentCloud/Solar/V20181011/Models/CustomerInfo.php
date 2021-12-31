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
namespace TencentCloud\Solar\V20181011\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户档案
 *
 * @method integer getActivity() 获取总活跃度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivity(integer $Activity) 设置总活跃度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAudienceUserId() 获取客户ID
 * @method void setAudienceUserId(string $AudienceUserId) 设置客户ID
 * @method string getAvatar() 获取头像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvatar(string $Avatar) 设置头像
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCity() 获取最近记录城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置最近记录城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastActiveTime() 获取最活跃时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastActiveTime(string $LastActiveTime) 设置最活跃时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMarkFlag() 获取是否星标客户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMarkFlag(string $MarkFlag) 设置是否星标客户
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonthActive() 获取30天活跃度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonthActive(integer $MonthActive) 设置30天活跃度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMonthRecommend() 获取30天推荐度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonthRecommend(integer $MonthRecommend) 设置30天推荐度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhone() 获取手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhone(string $Phone) 设置手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProvince() 获取最近记录省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvince(string $Province) 设置最近记录省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealName() 获取姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealName(string $RealName) 设置姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRelChannelFlag() 获取员工标识 0 未关联 1 已关联
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelChannelFlag(integer $RelChannelFlag) 设置员工标识 0 未关联 1 已关联
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSex() 获取性别 1男 2女
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSex(integer $Sex) 设置性别 1男 2女
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSpread() 获取传播力（好友数）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpread(integer $Spread) 设置传播力（好友数）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeekActive() 获取7天活跃度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeekActive(integer $WeekActive) 设置7天活跃度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeekRecommend() 获取7天推荐度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeekRecommend(integer $WeekRecommend) 设置7天推荐度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWxCity() 获取微信城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWxCity(string $WxCity) 设置微信城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWxCountry() 获取微信国家或地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWxCountry(string $WxCountry) 设置微信国家或地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWxNickname() 获取微信呢称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWxNickname(string $WxNickname) 设置微信呢称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWxProvince() 获取微信省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWxProvince(string $WxProvince) 设置微信省份
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomerInfo extends AbstractModel
{
    /**
     * @var integer 总活跃度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Activity;

    /**
     * @var string 客户ID
     */
    public $AudienceUserId;

    /**
     * @var string 头像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Avatar;

    /**
     * @var string 最近记录城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @var string 最活跃时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastActiveTime;

    /**
     * @var string 是否星标客户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MarkFlag;

    /**
     * @var integer 30天活跃度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonthActive;

    /**
     * @var integer 30天推荐度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonthRecommend;

    /**
     * @var string 手机号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phone;

    /**
     * @var string 最近记录省份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Province;

    /**
     * @var string 姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealName;

    /**
     * @var integer 员工标识 0 未关联 1 已关联
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelChannelFlag;

    /**
     * @var integer 性别 1男 2女
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sex;

    /**
     * @var integer 传播力（好友数）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Spread;

    /**
     * @var integer 7天活跃度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeekActive;

    /**
     * @var integer 7天推荐度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeekRecommend;

    /**
     * @var string 微信城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WxCity;

    /**
     * @var string 微信国家或地区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WxCountry;

    /**
     * @var string 微信呢称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WxNickname;

    /**
     * @var string 微信省份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WxProvince;

    /**
     * @param integer $Activity 总活跃度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AudienceUserId 客户ID
     * @param string $Avatar 头像
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $City 最近记录城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastActiveTime 最活跃时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MarkFlag 是否星标客户
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonthActive 30天活跃度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MonthRecommend 30天推荐度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phone 手机号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Province 最近记录省份
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealName 姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RelChannelFlag 员工标识 0 未关联 1 已关联
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Sex 性别 1男 2女
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Spread 传播力（好友数）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WeekActive 7天活跃度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WeekRecommend 7天推荐度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WxCity 微信城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WxCountry 微信国家或地区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WxNickname 微信呢称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WxProvince 微信省份
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
        if (array_key_exists("Activity",$param) and $param["Activity"] !== null) {
            $this->Activity = $param["Activity"];
        }

        if (array_key_exists("AudienceUserId",$param) and $param["AudienceUserId"] !== null) {
            $this->AudienceUserId = $param["AudienceUserId"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("LastActiveTime",$param) and $param["LastActiveTime"] !== null) {
            $this->LastActiveTime = $param["LastActiveTime"];
        }

        if (array_key_exists("MarkFlag",$param) and $param["MarkFlag"] !== null) {
            $this->MarkFlag = $param["MarkFlag"];
        }

        if (array_key_exists("MonthActive",$param) and $param["MonthActive"] !== null) {
            $this->MonthActive = $param["MonthActive"];
        }

        if (array_key_exists("MonthRecommend",$param) and $param["MonthRecommend"] !== null) {
            $this->MonthRecommend = $param["MonthRecommend"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("RealName",$param) and $param["RealName"] !== null) {
            $this->RealName = $param["RealName"];
        }

        if (array_key_exists("RelChannelFlag",$param) and $param["RelChannelFlag"] !== null) {
            $this->RelChannelFlag = $param["RelChannelFlag"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Spread",$param) and $param["Spread"] !== null) {
            $this->Spread = $param["Spread"];
        }

        if (array_key_exists("WeekActive",$param) and $param["WeekActive"] !== null) {
            $this->WeekActive = $param["WeekActive"];
        }

        if (array_key_exists("WeekRecommend",$param) and $param["WeekRecommend"] !== null) {
            $this->WeekRecommend = $param["WeekRecommend"];
        }

        if (array_key_exists("WxCity",$param) and $param["WxCity"] !== null) {
            $this->WxCity = $param["WxCity"];
        }

        if (array_key_exists("WxCountry",$param) and $param["WxCountry"] !== null) {
            $this->WxCountry = $param["WxCountry"];
        }

        if (array_key_exists("WxNickname",$param) and $param["WxNickname"] !== null) {
            $this->WxNickname = $param["WxNickname"];
        }

        if (array_key_exists("WxProvince",$param) and $param["WxProvince"] !== null) {
            $this->WxProvince = $param["WxProvince"];
        }
    }
}
