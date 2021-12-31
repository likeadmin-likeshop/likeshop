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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCertificateProject请求参数结构体
 *
 * @method array getCertificateIdList() 获取需要修改所属项目的证书 ID 集合，最多100个证书。
 * @method void setCertificateIdList(array $CertificateIdList) 设置需要修改所属项目的证书 ID 集合，最多100个证书。
 * @method integer getProjectId() 获取项目 ID。
 * @method void setProjectId(integer $ProjectId) 设置项目 ID。
 */
class ModifyCertificateProjectRequest extends AbstractModel
{
    /**
     * @var array 需要修改所属项目的证书 ID 集合，最多100个证书。
     */
    public $CertificateIdList;

    /**
     * @var integer 项目 ID。
     */
    public $ProjectId;

    /**
     * @param array $CertificateIdList 需要修改所属项目的证书 ID 集合，最多100个证书。
     * @param integer $ProjectId 项目 ID。
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
        if (array_key_exists("CertificateIdList",$param) and $param["CertificateIdList"] !== null) {
            $this->CertificateIdList = $param["CertificateIdList"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
