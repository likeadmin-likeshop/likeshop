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
namespace TencentCloud\Btoe\V20210514\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDataDeposit请求参数结构体
 *
 * @method string getEvidenceInfo() 获取业务数据明文(json格式字符串)，最大256kb
 * @method void setEvidenceInfo(string $EvidenceInfo) 设置业务数据明文(json格式字符串)，最大256kb
 * @method string getEvidenceName() 获取存证名称(长度最大30)
 * @method void setEvidenceName(string $EvidenceName) 设置存证名称(长度最大30)
 * @method string getBusinessId() 获取业务ID 透传 长度最大不超过64
 * @method void setBusinessId(string $BusinessId) 设置业务ID 透传 长度最大不超过64
 * @method integer getHashType() 获取算法类型 0 SM3, 1 SHA256, 2 SHA384 默认0
 * @method void setHashType(integer $HashType) 设置算法类型 0 SM3, 1 SHA256, 2 SHA384 默认0
 * @method string getEvidenceDescription() 获取存证描述
 * @method void setEvidenceDescription(string $EvidenceDescription) 设置存证描述
 */
class CreateDataDepositRequest extends AbstractModel
{
    /**
     * @var string 业务数据明文(json格式字符串)，最大256kb
     */
    public $EvidenceInfo;

    /**
     * @var string 存证名称(长度最大30)
     */
    public $EvidenceName;

    /**
     * @var string 业务ID 透传 长度最大不超过64
     */
    public $BusinessId;

    /**
     * @var integer 算法类型 0 SM3, 1 SHA256, 2 SHA384 默认0
     */
    public $HashType;

    /**
     * @var string 存证描述
     */
    public $EvidenceDescription;

    /**
     * @param string $EvidenceInfo 业务数据明文(json格式字符串)，最大256kb
     * @param string $EvidenceName 存证名称(长度最大30)
     * @param string $BusinessId 业务ID 透传 长度最大不超过64
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
        if (array_key_exists("EvidenceInfo",$param) and $param["EvidenceInfo"] !== null) {
            $this->EvidenceInfo = $param["EvidenceInfo"];
        }

        if (array_key_exists("EvidenceName",$param) and $param["EvidenceName"] !== null) {
            $this->EvidenceName = $param["EvidenceName"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("HashType",$param) and $param["HashType"] !== null) {
            $this->HashType = $param["HashType"];
        }

        if (array_key_exists("EvidenceDescription",$param) and $param["EvidenceDescription"] !== null) {
            $this->EvidenceDescription = $param["EvidenceDescription"];
        }
    }
}
