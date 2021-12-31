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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNamespace请求参数结构体
 *
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getVpc() 获取私有网络名称
 * @method void setVpc(string $Vpc) 设置私有网络名称
 * @method array getSubnetIds() 获取子网列表
 * @method void setSubnetIds(array $SubnetIds) 设置子网列表
 * @method string getDescription() 获取命名空间描述
 * @method void setDescription(string $Description) 设置命名空间描述
 * @method string getK8sVersion() 获取K8s version
 * @method void setK8sVersion(string $K8sVersion) 设置K8s version
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 * @method boolean getEnableTswTraceService() 获取是否开启tsw服务
 * @method void setEnableTswTraceService(boolean $EnableTswTraceService) 设置是否开启tsw服务
 */
class CreateNamespaceRequest extends AbstractModel
{
    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string 私有网络名称
     */
    public $Vpc;

    /**
     * @var array 子网列表
     */
    public $SubnetIds;

    /**
     * @var string 命名空间描述
     */
    public $Description;

    /**
     * @var string K8s version
     */
    public $K8sVersion;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @var boolean 是否开启tsw服务
     */
    public $EnableTswTraceService;

    /**
     * @param string $NamespaceName 命名空间名称
     * @param string $Vpc 私有网络名称
     * @param array $SubnetIds 子网列表
     * @param string $Description 命名空间描述
     * @param string $K8sVersion K8s version
     * @param integer $SourceChannel 来源渠道
     * @param boolean $EnableTswTraceService 是否开启tsw服务
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
        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("K8sVersion",$param) and $param["K8sVersion"] !== null) {
            $this->K8sVersion = $param["K8sVersion"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("EnableTswTraceService",$param) and $param["EnableTswTraceService"] !== null) {
            $this->EnableTswTraceService = $param["EnableTswTraceService"];
        }
    }
}
