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
 * ModifyNamespace请求参数结构体
 *
 * @method string getNamespaceId() 获取环境id
 * @method void setNamespaceId(string $NamespaceId) 设置环境id
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getDescription() 获取命名空间描述
 * @method void setDescription(string $Description) 设置命名空间描述
 * @method string getVpc() 获取私有网络名称
 * @method void setVpc(string $Vpc) 设置私有网络名称
 * @method array getSubnetIds() 获取子网网络
 * @method void setSubnetIds(array $SubnetIds) 设置子网网络
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 */
class ModifyNamespaceRequest extends AbstractModel
{
    /**
     * @var string 环境id
     */
    public $NamespaceId;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string 命名空间描述
     */
    public $Description;

    /**
     * @var string 私有网络名称
     */
    public $Vpc;

    /**
     * @var array 子网网络
     */
    public $SubnetIds;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @param string $NamespaceId 环境id
     * @param string $NamespaceName 命名空间名称
     * @param string $Description 命名空间描述
     * @param string $Vpc 私有网络名称
     * @param array $SubnetIds 子网网络
     * @param integer $SourceChannel 来源渠道
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
