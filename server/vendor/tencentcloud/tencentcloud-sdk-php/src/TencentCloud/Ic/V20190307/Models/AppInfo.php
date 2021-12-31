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
namespace TencentCloud\Ic\V20190307\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 物联网卡应用信息详情
 *
 * @method string getSdkappid() 获取应用ID
 * @method void setSdkappid(string $Sdkappid) 设置应用ID
 * @method string getAppkey() 获取应用key
 * @method void setAppkey(string $Appkey) 设置应用key
 * @method string getCloudAppid() 获取用户appid
 * @method void setCloudAppid(string $CloudAppid) 设置用户appid
 * @method string getName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取应用描述
 * @method void setDescription(string $Description) 设置应用描述
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method integer getBizType() 获取应用类型
 * @method void setBizType(integer $BizType) 设置应用类型
 * @method string getUin() 获取用户Uin
 * @method void setUin(string $Uin) 设置用户Uin
 */
class AppInfo extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $Sdkappid;

    /**
     * @var string 应用key
     */
    public $Appkey;

    /**
     * @var string 用户appid
     */
    public $CloudAppid;

    /**
     * @var string 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 应用描述
     */
    public $Description;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var integer 应用类型
     */
    public $BizType;

    /**
     * @var string 用户Uin
     */
    public $Uin;

    /**
     * @param string $Sdkappid 应用ID
     * @param string $Appkey 应用key
     * @param string $CloudAppid 用户appid
     * @param string $Name 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 应用描述
     * @param string $CreatedTime 创建时间
     * @param integer $BizType 应用类型
     * @param string $Uin 用户Uin
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
        if (array_key_exists("Sdkappid",$param) and $param["Sdkappid"] !== null) {
            $this->Sdkappid = $param["Sdkappid"];
        }

        if (array_key_exists("Appkey",$param) and $param["Appkey"] !== null) {
            $this->Appkey = $param["Appkey"];
        }

        if (array_key_exists("CloudAppid",$param) and $param["CloudAppid"] !== null) {
            $this->CloudAppid = $param["CloudAppid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
