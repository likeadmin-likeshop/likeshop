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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertDetail返回参数结构体
 *
 * @method string getCertId() 获取证书ID。
 * @method void setCertId(string $CertId) 设置证书ID。
 * @method string getCertName() 获取证书名称。
 * @method void setCertName(string $CertName) 设置证书名称。
 * @method string getCertType() 获取证书类型（SVR=服务器证书，CA=客户端证书）。
 * @method void setCertType(string $CertType) 设置证书类型（SVR=服务器证书，CA=客户端证书）。
 * @method string getCertContent() 获取证书内容。
 * @method void setCertContent(string $CertContent) 设置证书内容。
 * @method string getCertDomain() 获取证书主域名。
 * @method void setCertDomain(string $CertDomain) 设置证书主域名。
 * @method array getCertSubjectDomain() 获取证书子域名列表。
 * @method void setCertSubjectDomain(array $CertSubjectDomain) 设置证书子域名列表。
 * @method string getCertUploadTime() 获取证书上传时间。
 * @method void setCertUploadTime(string $CertUploadTime) 设置证书上传时间。
 * @method string getCertBeginTime() 获取证书生效时间。
 * @method void setCertBeginTime(string $CertBeginTime) 设置证书生效时间。
 * @method string getCertEndTime() 获取证书失效时间。
 * @method void setCertEndTime(string $CertEndTime) 设置证书失效时间。
 * @method array getCertLoadBalancerSet() 获取该证书关联的黑石负载均衡对象列表。
 * @method void setCertLoadBalancerSet(array $CertLoadBalancerSet) 设置该证书关联的黑石负载均衡对象列表。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCertDetailResponse extends AbstractModel
{
    /**
     * @var string 证书ID。
     */
    public $CertId;

    /**
     * @var string 证书名称。
     */
    public $CertName;

    /**
     * @var string 证书类型（SVR=服务器证书，CA=客户端证书）。
     */
    public $CertType;

    /**
     * @var string 证书内容。
     */
    public $CertContent;

    /**
     * @var string 证书主域名。
     */
    public $CertDomain;

    /**
     * @var array 证书子域名列表。
     */
    public $CertSubjectDomain;

    /**
     * @var string 证书上传时间。
     */
    public $CertUploadTime;

    /**
     * @var string 证书生效时间。
     */
    public $CertBeginTime;

    /**
     * @var string 证书失效时间。
     */
    public $CertEndTime;

    /**
     * @var array 该证书关联的黑石负载均衡对象列表。
     */
    public $CertLoadBalancerSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CertId 证书ID。
     * @param string $CertName 证书名称。
     * @param string $CertType 证书类型（SVR=服务器证书，CA=客户端证书）。
     * @param string $CertContent 证书内容。
     * @param string $CertDomain 证书主域名。
     * @param array $CertSubjectDomain 证书子域名列表。
     * @param string $CertUploadTime 证书上传时间。
     * @param string $CertBeginTime 证书生效时间。
     * @param string $CertEndTime 证书失效时间。
     * @param array $CertLoadBalancerSet 该证书关联的黑石负载均衡对象列表。
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("CertContent",$param) and $param["CertContent"] !== null) {
            $this->CertContent = $param["CertContent"];
        }

        if (array_key_exists("CertDomain",$param) and $param["CertDomain"] !== null) {
            $this->CertDomain = $param["CertDomain"];
        }

        if (array_key_exists("CertSubjectDomain",$param) and $param["CertSubjectDomain"] !== null) {
            $this->CertSubjectDomain = $param["CertSubjectDomain"];
        }

        if (array_key_exists("CertUploadTime",$param) and $param["CertUploadTime"] !== null) {
            $this->CertUploadTime = $param["CertUploadTime"];
        }

        if (array_key_exists("CertBeginTime",$param) and $param["CertBeginTime"] !== null) {
            $this->CertBeginTime = $param["CertBeginTime"];
        }

        if (array_key_exists("CertEndTime",$param) and $param["CertEndTime"] !== null) {
            $this->CertEndTime = $param["CertEndTime"];
        }

        if (array_key_exists("CertLoadBalancerSet",$param) and $param["CertLoadBalancerSet"] !== null) {
            $this->CertLoadBalancerSet = [];
            foreach ($param["CertLoadBalancerSet"] as $key => $value){
                $obj = new CertDetailLoadBalancer();
                $obj->deserialize($value);
                array_push($this->CertLoadBalancerSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
