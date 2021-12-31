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
namespace TencentCloud\Chdfs\V20190718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMountPoints请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统ID
注意：若根据AccessGroupId查看挂载点列表，则无需设置FileSystemId
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
注意：若根据AccessGroupId查看挂载点列表，则无需设置FileSystemId
 * @method string getAccessGroupId() 获取权限组ID
注意：若根据FileSystemId查看挂载点列表，则无需设置AccessGroupId
 * @method void setAccessGroupId(string $AccessGroupId) 设置权限组ID
注意：若根据FileSystemId查看挂载点列表，则无需设置AccessGroupId
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回数量，默认为所有
 * @method void setLimit(integer $Limit) 设置返回数量，默认为所有
 */
class DescribeMountPointsRequest extends AbstractModel
{
    /**
     * @var string 文件系统ID
注意：若根据AccessGroupId查看挂载点列表，则无需设置FileSystemId
     */
    public $FileSystemId;

    /**
     * @var string 权限组ID
注意：若根据FileSystemId查看挂载点列表，则无需设置AccessGroupId
     */
    public $AccessGroupId;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为所有
     */
    public $Limit;

    /**
     * @param string $FileSystemId 文件系统ID
注意：若根据AccessGroupId查看挂载点列表，则无需设置FileSystemId
     * @param string $AccessGroupId 权限组ID
注意：若根据FileSystemId查看挂载点列表，则无需设置AccessGroupId
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回数量，默认为所有
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            $this->AccessGroupId = $param["AccessGroupId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
