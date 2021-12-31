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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetLayerVersion返回参数结构体
 *
 * @method array getCompatibleRuntimes() 获取适配的运行时
 * @method void setCompatibleRuntimes(array $CompatibleRuntimes) 设置适配的运行时
 * @method string getCodeSha256() 获取层中版本文件的SHA256编码
 * @method void setCodeSha256(string $CodeSha256) 设置层中版本文件的SHA256编码
 * @method string getLocation() 获取层中版本文件的下载地址
 * @method void setLocation(string $Location) 设置层中版本文件的下载地址
 * @method string getAddTime() 获取版本的创建时间
 * @method void setAddTime(string $AddTime) 设置版本的创建时间
 * @method string getDescription() 获取版本的描述
 * @method void setDescription(string $Description) 设置版本的描述
 * @method string getLicenseInfo() 获取许可证信息
 * @method void setLicenseInfo(string $LicenseInfo) 设置许可证信息
 * @method integer getLayerVersion() 获取版本号
 * @method void setLayerVersion(integer $LayerVersion) 设置版本号
 * @method string getLayerName() 获取层名称
 * @method void setLayerName(string $LayerName) 设置层名称
 * @method string getStatus() 获取层的具体版本当前状态，可能取值：
Active 正常
Publishing  发布中
PublishFailed  发布失败
Deleted 已删除
 * @method void setStatus(string $Status) 设置层的具体版本当前状态，可能取值：
Active 正常
Publishing  发布中
PublishFailed  发布失败
Deleted 已删除
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetLayerVersionResponse extends AbstractModel
{
    /**
     * @var array 适配的运行时
     */
    public $CompatibleRuntimes;

    /**
     * @var string 层中版本文件的SHA256编码
     */
    public $CodeSha256;

    /**
     * @var string 层中版本文件的下载地址
     */
    public $Location;

    /**
     * @var string 版本的创建时间
     */
    public $AddTime;

    /**
     * @var string 版本的描述
     */
    public $Description;

    /**
     * @var string 许可证信息
     */
    public $LicenseInfo;

    /**
     * @var integer 版本号
     */
    public $LayerVersion;

    /**
     * @var string 层名称
     */
    public $LayerName;

    /**
     * @var string 层的具体版本当前状态，可能取值：
Active 正常
Publishing  发布中
PublishFailed  发布失败
Deleted 已删除
     */
    public $Status;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CompatibleRuntimes 适配的运行时
     * @param string $CodeSha256 层中版本文件的SHA256编码
     * @param string $Location 层中版本文件的下载地址
     * @param string $AddTime 版本的创建时间
     * @param string $Description 版本的描述
     * @param string $LicenseInfo 许可证信息
     * @param integer $LayerVersion 版本号
     * @param string $LayerName 层名称
     * @param string $Status 层的具体版本当前状态，可能取值：
Active 正常
Publishing  发布中
PublishFailed  发布失败
Deleted 已删除
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
        if (array_key_exists("CompatibleRuntimes",$param) and $param["CompatibleRuntimes"] !== null) {
            $this->CompatibleRuntimes = $param["CompatibleRuntimes"];
        }

        if (array_key_exists("CodeSha256",$param) and $param["CodeSha256"] !== null) {
            $this->CodeSha256 = $param["CodeSha256"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LicenseInfo",$param) and $param["LicenseInfo"] !== null) {
            $this->LicenseInfo = $param["LicenseInfo"];
        }

        if (array_key_exists("LayerVersion",$param) and $param["LayerVersion"] !== null) {
            $this->LayerVersion = $param["LayerVersion"];
        }

        if (array_key_exists("LayerName",$param) and $param["LayerName"] !== null) {
            $this->LayerName = $param["LayerName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
