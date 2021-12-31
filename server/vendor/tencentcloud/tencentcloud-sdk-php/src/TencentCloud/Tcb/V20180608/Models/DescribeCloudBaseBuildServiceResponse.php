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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudBaseBuildService返回参数结构体
 *
 * @method string getUploadUrl() 获取上传url
 * @method void setUploadUrl(string $UploadUrl) 设置上传url
 * @method array getUploadHeaders() 获取上传heder
 * @method void setUploadHeaders(array $UploadHeaders) 设置上传heder
 * @method string getPackageName() 获取包名
 * @method void setPackageName(string $PackageName) 设置包名
 * @method string getPackageVersion() 获取包版本
 * @method void setPackageVersion(string $PackageVersion) 设置包版本
 * @method string getDownloadUrl() 获取下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadUrl(string $DownloadUrl) 设置下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDownloadHeaders() 获取下载Httpheader
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadHeaders(array $DownloadHeaders) 设置下载Httpheader
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOutDate() 获取下载链接是否过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutDate(boolean $OutDate) 设置下载链接是否过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudBaseBuildServiceResponse extends AbstractModel
{
    /**
     * @var string 上传url
     */
    public $UploadUrl;

    /**
     * @var array 上传heder
     */
    public $UploadHeaders;

    /**
     * @var string 包名
     */
    public $PackageName;

    /**
     * @var string 包版本
     */
    public $PackageVersion;

    /**
     * @var string 下载链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadUrl;

    /**
     * @var array 下载Httpheader
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadHeaders;

    /**
     * @var boolean 下载链接是否过期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutDate;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $UploadUrl 上传url
     * @param array $UploadHeaders 上传heder
     * @param string $PackageName 包名
     * @param string $PackageVersion 包版本
     * @param string $DownloadUrl 下载链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DownloadHeaders 下载Httpheader
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $OutDate 下载链接是否过期
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
        if (array_key_exists("UploadUrl",$param) and $param["UploadUrl"] !== null) {
            $this->UploadUrl = $param["UploadUrl"];
        }

        if (array_key_exists("UploadHeaders",$param) and $param["UploadHeaders"] !== null) {
            $this->UploadHeaders = [];
            foreach ($param["UploadHeaders"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->UploadHeaders, $obj);
            }
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("DownloadHeaders",$param) and $param["DownloadHeaders"] !== null) {
            $this->DownloadHeaders = [];
            foreach ($param["DownloadHeaders"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->DownloadHeaders, $obj);
            }
        }

        if (array_key_exists("OutDate",$param) and $param["OutDate"] !== null) {
            $this->OutDate = $param["OutDate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
