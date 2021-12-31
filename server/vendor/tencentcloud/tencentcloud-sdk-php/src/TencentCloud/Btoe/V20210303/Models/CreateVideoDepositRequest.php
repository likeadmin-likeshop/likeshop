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
namespace TencentCloud\Btoe\V20210303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVideoDeposit请求参数结构体
 *
 * @method string getEvidenceName() 获取存证名称(长度最大30)
 * @method void setEvidenceName(string $EvidenceName) 设置存证名称(长度最大30)
 * @method string getFileName() 获取对应数据Base64文件名称
 * @method void setFileName(string $FileName) 设置对应数据Base64文件名称
 * @method string getEvidenceHash() 获取文件hash
 * @method void setEvidenceHash(string $EvidenceHash) 设置文件hash
 * @method string getBusinessId() 获取业务ID 透传 长度最大不超过64
 * @method void setBusinessId(string $BusinessId) 设置业务ID 透传 长度最大不超过64
 * @method string getFileContent() 获取数据Base64编码，大小不超过5M
 * @method void setFileContent(string $FileContent) 设置数据Base64编码，大小不超过5M
 * @method string getFileUrl() 获取资源访问链接 与fileContent必须二选一
 * @method void setFileUrl(string $FileUrl) 设置资源访问链接 与fileContent必须二选一
 * @method integer getHashType() 获取算法类型 0 SM3, 1 SHA256, 2 SHA384 默认0
 * @method void setHashType(integer $HashType) 设置算法类型 0 SM3, 1 SHA256, 2 SHA384 默认0
 * @method string getEvidenceDescription() 获取存证描述
 * @method void setEvidenceDescription(string $EvidenceDescription) 设置存证描述
 */
class CreateVideoDepositRequest extends AbstractModel
{
    /**
     * @var string 存证名称(长度最大30)
     */
    public $EvidenceName;

    /**
     * @var string 对应数据Base64文件名称
     */
    public $FileName;

    /**
     * @var string 文件hash
     */
    public $EvidenceHash;

    /**
     * @var string 业务ID 透传 长度最大不超过64
     */
    public $BusinessId;

    /**
     * @var string 数据Base64编码，大小不超过5M
     */
    public $FileContent;

    /**
     * @var string 资源访问链接 与fileContent必须二选一
     */
    public $FileUrl;

    /**
     * @var integer 算法类型 0 SM3, 1 SHA256, 2 SHA384 默认0
     */
    public $HashType;

    /**
     * @var string 存证描述
     */
    public $EvidenceDescription;

    /**
     * @param string $EvidenceName 存证名称(长度最大30)
     * @param string $FileName 对应数据Base64文件名称
     * @param string $EvidenceHash 文件hash
     * @param string $BusinessId 业务ID 透传 长度最大不超过64
     * @param string $FileContent 数据Base64编码，大小不超过5M
     * @param string $FileUrl 资源访问链接 与fileContent必须二选一
     * @param integer $HashType 算法类型 0 SM3, 1 SHA256, 2 SHA384 默认0
     * @param string $EvidenceDescription 存证描述
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
        if (array_key_exists("EvidenceName",$param) and $param["EvidenceName"] !== null) {
            $this->EvidenceName = $param["EvidenceName"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("EvidenceHash",$param) and $param["EvidenceHash"] !== null) {
            $this->EvidenceHash = $param["EvidenceHash"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("HashType",$param) and $param["HashType"] !== null) {
            $this->HashType = $param["HashType"];
        }

        if (array_key_exists("EvidenceDescription",$param) and $param["EvidenceDescription"] !== null) {
            $this->EvidenceDescription = $param["EvidenceDescription"];
        }
    }
}
