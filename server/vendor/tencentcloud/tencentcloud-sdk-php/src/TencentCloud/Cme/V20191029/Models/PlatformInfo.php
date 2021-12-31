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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 平台信息。
 *
 * @method string getPlatform() 获取平台名称。
 * @method void setPlatform(string $Platform) 设置平台名称。
 * @method string getDescription() 获取平台描述。
 * @method void setDescription(string $Description) 设置平台描述。
 * @method integer getVodSubAppId() 获取云点播子应用 Id。
 * @method void setVodSubAppId(integer $VodSubAppId) 设置云点播子应用 Id。
 * @method string getLicenseId() 获取平台绑定的 license Id。
 * @method void setLicenseId(string $LicenseId) 设置平台绑定的 license Id。
 * @method string getCreateTime() 获取创建时间，格式按照 ISO 8601 标准表示。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，格式按照 ISO 8601 标准表示。
 * @method string getUpdateTime() 获取更新时间，格式按照 ISO 8601 标准表示。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间，格式按照 ISO 8601 标准表示。
 */
class PlatformInfo extends AbstractModel
{
    /**
     * @var string 平台名称。
     */
    public $Platform;

    /**
     * @var string 平台描述。
     */
    public $Description;

    /**
     * @var integer 云点播子应用 Id。
     */
    public $VodSubAppId;

    /**
     * @var string 平台绑定的 license Id。
     */
    public $LicenseId;

    /**
     * @var string 创建时间，格式按照 ISO 8601 标准表示。
     */
    public $CreateTime;

    /**
     * @var string 更新时间，格式按照 ISO 8601 标准表示。
     */
    public $UpdateTime;

    /**
     * @param string $Platform 平台名称。
     * @param string $Description 平台描述。
     * @param integer $VodSubAppId 云点播子应用 Id。
     * @param string $LicenseId 平台绑定的 license Id。
     * @param string $CreateTime 创建时间，格式按照 ISO 8601 标准表示。
     * @param string $UpdateTime 更新时间，格式按照 ISO 8601 标准表示。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VodSubAppId",$param) and $param["VodSubAppId"] !== null) {
            $this->VodSubAppId = $param["VodSubAppId"];
        }

        if (array_key_exists("LicenseId",$param) and $param["LicenseId"] !== null) {
            $this->LicenseId = $param["LicenseId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
