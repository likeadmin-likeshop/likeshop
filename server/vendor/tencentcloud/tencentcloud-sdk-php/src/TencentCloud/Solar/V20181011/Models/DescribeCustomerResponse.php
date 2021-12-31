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
 * DescribeCustomer返回参数结构体
 *
 * @method array getAddressList() 获取地址列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddressList(array $AddressList) 设置地址列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAvatar() 获取头像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvatar(string $Avatar) 设置头像
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBirthday() 获取生日
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthday(string $Birthday) 设置生日
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCity() 获取城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCity(string $City) 设置城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDevice() 获取设备
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDevice(string $Device) 设置设备
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndustrys() 获取行业
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndustrys(array $Industrys) 设置行业
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastActiveTime() 获取上次登录时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastActiveTime(string $LastActiveTime) 设置上次登录时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMarkFlag() 获取是否星标 1是 0否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMarkFlag(string $MarkFlag) 设置是否星标 1是 0否
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModel() 获取手机型号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModel(string $Model) 设置手机型号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOpenId() 获取微信openid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenId(string $OpenId) 设置微信openid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayFeature() 获取消费特点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayFeature(string $PayFeature) 设置消费特点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhone() 获取手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhone(string $Phone) 设置手机号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPhoneList() 获取手机号码列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneList(string $PhoneList) 设置手机号码列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProvince() 获取最近记录省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvince(string $Province) 设置最近记录省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealName() 获取姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealName(string $RealName) 设置姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRelChannelFlag() 获取员工标识 0：非员工 1：员工
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelChannelFlag(string $RelChannelFlag) 设置员工标识 0：非员工 1：员工
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSex() 获取性别 1男 2女
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSex(string $Sex) 设置性别 1男 2女
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceAudienceVo() 获取最初来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceAudienceVo(string $SourceAudienceVo) 设置最初来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubWechats() 获取关注公众号列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubWechats(array $SubWechats) 设置关注公众号列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnionId() 获取微信unionid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnionId(string $UnionId) 设置微信unionid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserTypes() 获取用户类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserTypes(array $UserTypes) 设置用户类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWxCity() 获取城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWxCity(string $WxCity) 设置城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWxCountry() 获取国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWxCountry(string $WxCountry) 设置国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWxNickname() 获取昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWxNickname(string $WxNickname) 设置昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWxProvince() 获取省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWxProvince(string $WxProvince) 设置省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCustomerResponse extends AbstractModel
{
    /**
     * @var array 地址列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddressList;

    /**
     * @var string 用户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 头像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Avatar;

    /**
     * @var string 生日
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Birthday;

    /**
     * @var string 城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $City;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 设备
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Device;

    /**
     * @var array 行业
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Industrys;

    /**
     * @var string 上次登录时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastActiveTime;

    /**
     * @var string 是否星标 1是 0否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MarkFlag;

    /**
     * @var string 手机型号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Model;

    /**
     * @var string 微信openid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenId;

    /**
     * @var string 消费特点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayFeature;

    /**
     * @var string 手机号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Phone;

    /**
     * @var string 手机号码列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneList;

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
     * @var string 员工标识 0：非员工 1：员工
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelChannelFlag;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 性别 1男 2女
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sex;

    /**
     * @var string 最初来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceAudienceVo;

    /**
     * @var array 关注公众号列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubWechats;

    /**
     * @var string 微信unionid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnionId;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array 用户类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserTypes;

    /**
     * @var string 城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WxCity;

    /**
     * @var string 国家
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WxCountry;

    /**
     * @var string 昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WxNickname;

    /**
     * @var string 省份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WxProvince;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $AddressList 地址列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 用户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Avatar 头像
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Birthday 生日
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $City 城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Device 设备
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Industrys 行业
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastActiveTime 上次登录时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MarkFlag 是否星标 1是 0否
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Model 手机型号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OpenId 微信openid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayFeature 消费特点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Phone 手机号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PhoneList 手机号码列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Province 最近记录省份
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealName 姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RelChannelFlag 员工标识 0：非员工 1：员工
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sex 性别 1男 2女
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceAudienceVo 最初来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubWechats 关注公众号列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UnionId 微信unionid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserTypes 用户类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WxCity 城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WxCountry 国家
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WxNickname 昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WxProvince 省份
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AddressList",$param) and $param["AddressList"] !== null) {
            $this->AddressList = $param["AddressList"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = $param["Device"];
        }

        if (array_key_exists("Industrys",$param) and $param["Industrys"] !== null) {
            $this->Industrys = $param["Industrys"];
        }

        if (array_key_exists("LastActiveTime",$param) and $param["LastActiveTime"] !== null) {
            $this->LastActiveTime = $param["LastActiveTime"];
        }

        if (array_key_exists("MarkFlag",$param) and $param["MarkFlag"] !== null) {
            $this->MarkFlag = $param["MarkFlag"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("PayFeature",$param) and $param["PayFeature"] !== null) {
            $this->PayFeature = $param["PayFeature"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("PhoneList",$param) and $param["PhoneList"] !== null) {
            $this->PhoneList = $param["PhoneList"];
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("SourceAudienceVo",$param) and $param["SourceAudienceVo"] !== null) {
            $this->SourceAudienceVo = $param["SourceAudienceVo"];
        }

        if (array_key_exists("SubWechats",$param) and $param["SubWechats"] !== null) {
            $this->SubWechats = $param["SubWechats"];
        }

        if (array_key_exists("UnionId",$param) and $param["UnionId"] !== null) {
            $this->UnionId = $param["UnionId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UserTypes",$param) and $param["UserTypes"] !== null) {
            $this->UserTypes = $param["UserTypes"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
