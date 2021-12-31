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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 彩信实例信息
InstanceId   int
	InstanceName string
	Status       int
	StatusInfo   string
	AppSubId     string
	Title        string
	Sign         string
	Contents     string
	CreatedAt    string
 *
 * @method integer getInstanceId() 获取彩信实例id
 * @method void setInstanceId(integer $InstanceId) 设置彩信实例id
 * @method string getInstanceName() 获取彩信实例名称
 * @method void setInstanceName(string $InstanceName) 设置彩信实例名称
 * @method integer getStatus() 获取状态是否通知
 * @method void setStatus(integer $Status) 设置状态是否通知
 * @method array getStatusInfo() 获取实例审核状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusInfo(array $StatusInfo) 设置实例审核状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppSubId() 获取业务码
 * @method void setAppSubId(string $AppSubId) 设置业务码
 * @method string getTitle() 获取彩信标题
 * @method void setTitle(string $Title) 设置彩信标题
 * @method string getSign() 获取签名
 * @method void setSign(string $Sign) 设置签名
 * @method string getContents() 获取彩信内容
 * @method void setContents(string $Contents) 设置彩信内容
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method array getUrls() 获取样例配置的链接地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrls(array $Urls) 设置样例配置的链接地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPhoneType() 获取机型列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhoneType(array $PhoneType) 设置机型列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCommonParams() 获取普通参数序号数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommonParams(array $CommonParams) 设置普通参数序号数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUrlParams() 获取链接参数序号数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrlParams(array $UrlParams) 设置链接参数序号数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class MmsInstanceInfo extends AbstractModel
{
    /**
     * @var integer 彩信实例id
     */
    public $InstanceId;

    /**
     * @var string 彩信实例名称
     */
    public $InstanceName;

    /**
     * @var integer 状态是否通知
     */
    public $Status;

    /**
     * @var array 实例审核状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusInfo;

    /**
     * @var string 业务码
     */
    public $AppSubId;

    /**
     * @var string 彩信标题
     */
    public $Title;

    /**
     * @var string 签名
     */
    public $Sign;

    /**
     * @var string 彩信内容
     */
    public $Contents;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var array 样例配置的链接地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Urls;

    /**
     * @var array 机型列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhoneType;

    /**
     * @var array 普通参数序号数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommonParams;

    /**
     * @var array 链接参数序号数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UrlParams;

    /**
     * @param integer $InstanceId 彩信实例id
     * @param string $InstanceName 彩信实例名称
     * @param integer $Status 状态是否通知
     * @param array $StatusInfo 实例审核状态信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppSubId 业务码
     * @param string $Title 彩信标题
     * @param string $Sign 签名
     * @param string $Contents 彩信内容
     * @param string $CreatedAt 创建时间
     * @param array $Urls 样例配置的链接地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PhoneType 机型列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CommonParams 普通参数序号数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UrlParams 链接参数序号数组
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusInfo",$param) and $param["StatusInfo"] !== null) {
            $this->StatusInfo = [];
            foreach ($param["StatusInfo"] as $key => $value){
                $obj = new MmsInstanceStateInfo();
                $obj->deserialize($value);
                array_push($this->StatusInfo, $obj);
            }
        }

        if (array_key_exists("AppSubId",$param) and $param["AppSubId"] !== null) {
            $this->AppSubId = $param["AppSubId"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Sign",$param) and $param["Sign"] !== null) {
            $this->Sign = $param["Sign"];
        }

        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = $param["Contents"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }

        if (array_key_exists("PhoneType",$param) and $param["PhoneType"] !== null) {
            $this->PhoneType = $param["PhoneType"];
        }

        if (array_key_exists("CommonParams",$param) and $param["CommonParams"] !== null) {
            $this->CommonParams = $param["CommonParams"];
        }

        if (array_key_exists("UrlParams",$param) and $param["UrlParams"] !== null) {
            $this->UrlParams = $param["UrlParams"];
        }
    }
}
