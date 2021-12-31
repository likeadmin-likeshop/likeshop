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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOtaVersions请求参数结构体
 *
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method integer getLimit() 获取每页数量，0<取值范围<=100
 * @method void setLimit(integer $Limit) 设置每页数量，0<取值范围<=100
 * @method string getProductId() 获取产品ID，为空时查询客户所有产品的版本信息
 * @method void setProductId(string $ProductId) 设置产品ID，为空时查询客户所有产品的版本信息
 * @method string getOtaVersion() 获取版本号，支持模糊匹配
 * @method void setOtaVersion(string $OtaVersion) 设置版本号，支持模糊匹配
 * @method integer getPubStatus() 获取版本类型 1未发布 2测试发布 3正式发布 4禁用
 * @method void setPubStatus(integer $PubStatus) 设置版本类型 1未发布 2测试发布 3正式发布 4禁用
 */
class DescribeOtaVersionsRequest extends AbstractModel
{
    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var integer 每页数量，0<取值范围<=100
     */
    public $Limit;

    /**
     * @var string 产品ID，为空时查询客户所有产品的版本信息
     */
    public $ProductId;

    /**
     * @var string 版本号，支持模糊匹配
     */
    public $OtaVersion;

    /**
     * @var integer 版本类型 1未发布 2测试发布 3正式发布 4禁用
     */
    public $PubStatus;

    /**
     * @param integer $Offset 分页偏移量
     * @param integer $Limit 每页数量，0<取值范围<=100
     * @param string $ProductId 产品ID，为空时查询客户所有产品的版本信息
     * @param string $OtaVersion 版本号，支持模糊匹配
     * @param integer $PubStatus 版本类型 1未发布 2测试发布 3正式发布 4禁用
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("OtaVersion",$param) and $param["OtaVersion"] !== null) {
            $this->OtaVersion = $param["OtaVersion"];
        }

        if (array_key_exists("PubStatus",$param) and $param["PubStatus"] !== null) {
            $this->PubStatus = $param["PubStatus"];
        }
    }
}
