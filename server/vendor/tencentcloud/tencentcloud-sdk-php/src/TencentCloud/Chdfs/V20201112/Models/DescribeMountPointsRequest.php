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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMountPoints请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统ID
备注：入参只能指定AccessGroupId、FileSystemId和OwnerUin的其中一个
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
备注：入参只能指定AccessGroupId、FileSystemId和OwnerUin的其中一个
 * @method string getAccessGroupId() 获取权限组ID
 * @method void setAccessGroupId(string $AccessGroupId) 设置权限组ID
 * @method integer getOwnerUin() 获取资源所属者Uin
 * @method void setOwnerUin(integer $OwnerUin) 设置资源所属者Uin
 */
class DescribeMountPointsRequest extends AbstractModel
{
    /**
     * @var string 文件系统ID
备注：入参只能指定AccessGroupId、FileSystemId和OwnerUin的其中一个
     */
    public $FileSystemId;

    /**
     * @var string 权限组ID
     */
    public $AccessGroupId;

    /**
     * @var integer 资源所属者Uin
     */
    public $OwnerUin;

    /**
     * @param string $FileSystemId 文件系统ID
备注：入参只能指定AccessGroupId、FileSystemId和OwnerUin的其中一个
     * @param string $AccessGroupId 权限组ID
     * @param integer $OwnerUin 资源所属者Uin
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

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
