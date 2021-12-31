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
 * CreateHashDepositNoCert请求参数结构体
 *
 * @method string getEvidenceHash() 获取数据hash
 * @method void setEvidenceHash(string $EvidenceHash) 设置数据hash
 * @method string getBusinessId() 获取该字段为透传字段，方便调用方做业务处理， 长度最大不超过64
 * @method void setBusinessId(string $BusinessId) 设置该字段为透传字段，方便调用方做业务处理， 长度最大不超过64
 * @method integer getHashType() 获取算法类型 0 SM3, 1 SHA256, 2 SHA384 默认0
 * @method void setHashType(integer $HashType) 设置算法类型 0 SM3, 1 SHA256, 2 SHA384 默认0
 * @method string getEvidenceInfo() 获取业务扩展信息
 * @method void setEvidenceInfo(string $EvidenceInfo) 设置业务扩展信息
 */
class CreateHashDepositNoCertRequest extends AbstractModel
{
    /**
     * @var string 数据hash
     */
    public $EvidenceHash;

    /**
     * @var string 该字段为透传字段，方便调用方做业务处理， 长度最大不超过64
     */
    public $BusinessId;

    /**
     * @var integer 算法类型 0 SM3, 1 SHA256, 2 SHA384 默认0
     */
    public $HashType;

    /**
     * @var string 业务扩展信息
     */
    public $EvidenceInfo;

    /**
     * @param string $EvidenceHash 数据hash
     * @param string $BusinessId 该字段为透传字段，方便调用方做业务处理， 长度最大不超过64
     * @param integer $HashType 算法类型 0 SM3, 1 SHA256, 2 SHA384 默认0
     * @param string $EvidenceInfo 业务扩展信息
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
        if (array_key_exists("EvidenceHash",$param) and $param["EvidenceHash"] !== null) {
            $this->EvidenceHash = $param["EvidenceHash"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("HashType",$param) and $param["HashType"] !== null) {
            $this->HashType = $param["HashType"];
        }

        if (array_key_exists("EvidenceInfo",$param) and $param["EvidenceInfo"] !== null) {
            $this->EvidenceInfo = $param["EvidenceInfo"];
        }
    }
}
