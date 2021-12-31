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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNamespace请求参数结构体
 *
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNamespaceDesc() 获取命名空间描述
 * @method void setNamespaceDesc(string $NamespaceDesc) 设置命名空间描述
 * @method string getNamespaceResourceType() 获取命名空间资源类型(默认值为DEF)
 * @method void setNamespaceResourceType(string $NamespaceResourceType) 设置命名空间资源类型(默认值为DEF)
 * @method string getNamespaceType() 获取是否是全局命名空间(默认是DEF，表示普通命名空间；GLOBAL表示全局命名空间)
 * @method void setNamespaceType(string $NamespaceType) 设置是否是全局命名空间(默认是DEF，表示普通命名空间；GLOBAL表示全局命名空间)
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 * @method string getIsHaEnable() 获取是否开启高可用
 * @method void setIsHaEnable(string $IsHaEnable) 设置是否开启高可用
 * @method string getProgramId() 获取需要绑定的数据集ID
 * @method void setProgramId(string $ProgramId) 设置需要绑定的数据集ID
 */
class CreateNamespaceRequest extends AbstractModel
{
    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 命名空间描述
     */
    public $NamespaceDesc;

    /**
     * @var string 命名空间资源类型(默认值为DEF)
     */
    public $NamespaceResourceType;

    /**
     * @var string 是否是全局命名空间(默认是DEF，表示普通命名空间；GLOBAL表示全局命名空间)
     */
    public $NamespaceType;

    /**
     * @var string 命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 是否开启高可用
     */
    public $IsHaEnable;

    /**
     * @var string 需要绑定的数据集ID
     */
    public $ProgramId;

    /**
     * @param string $NamespaceName 命名空间名称
     * @param string $ClusterId 集群ID
     * @param string $NamespaceDesc 命名空间描述
     * @param string $NamespaceResourceType 命名空间资源类型(默认值为DEF)
     * @param string $NamespaceType 是否是全局命名空间(默认是DEF，表示普通命名空间；GLOBAL表示全局命名空间)
     * @param string $NamespaceId 命名空间ID
     * @param string $IsHaEnable 是否开启高可用
     * @param string $ProgramId 需要绑定的数据集ID
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

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceDesc",$param) and $param["NamespaceDesc"] !== null) {
            $this->NamespaceDesc = $param["NamespaceDesc"];
        }

        if (array_key_exists("NamespaceResourceType",$param) and $param["NamespaceResourceType"] !== null) {
            $this->NamespaceResourceType = $param["NamespaceResourceType"];
        }

        if (array_key_exists("NamespaceType",$param) and $param["NamespaceType"] !== null) {
            $this->NamespaceType = $param["NamespaceType"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("IsHaEnable",$param) and $param["IsHaEnable"] !== null) {
            $this->IsHaEnable = $param["IsHaEnable"];
        }

        if (array_key_exists("ProgramId",$param) and $param["ProgramId"] !== null) {
            $this->ProgramId = $param["ProgramId"];
        }
    }
}
