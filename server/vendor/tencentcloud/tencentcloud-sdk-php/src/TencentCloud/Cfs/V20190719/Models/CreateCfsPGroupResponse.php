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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCfsPGroup返回参数结构体
 *
 * @method string getPGroupId() 获取权限组 ID
 * @method void setPGroupId(string $PGroupId) 设置权限组 ID
 * @method string getName() 获取权限组名字
 * @method void setName(string $Name) 设置权限组名字
 * @method string getDescInfo() 获取权限组描述信息
 * @method void setDescInfo(string $DescInfo) 设置权限组描述信息
 * @method integer getBindCfsNum() 获取已经与该权限组绑定的文件系统个数
 * @method void setBindCfsNum(integer $BindCfsNum) 设置已经与该权限组绑定的文件系统个数
 * @method string getCDate() 获取权限组创建时间
 * @method void setCDate(string $CDate) 设置权限组创建时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateCfsPGroupResponse extends AbstractModel
{
    /**
     * @var string 权限组 ID
     */
    public $PGroupId;

    /**
     * @var string 权限组名字
     */
    public $Name;

    /**
     * @var string 权限组描述信息
     */
    public $DescInfo;

    /**
     * @var integer 已经与该权限组绑定的文件系统个数
     */
    public $BindCfsNum;

    /**
     * @var string 权限组创建时间
     */
    public $CDate;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PGroupId 权限组 ID
     * @param string $Name 权限组名字
     * @param string $DescInfo 权限组描述信息
     * @param integer $BindCfsNum 已经与该权限组绑定的文件系统个数
     * @param string $CDate 权限组创建时间
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
        if (array_key_exists("PGroupId",$param) and $param["PGroupId"] !== null) {
            $this->PGroupId = $param["PGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DescInfo",$param) and $param["DescInfo"] !== null) {
            $this->DescInfo = $param["DescInfo"];
        }

        if (array_key_exists("BindCfsNum",$param) and $param["BindCfsNum"] !== null) {
            $this->BindCfsNum = $param["BindCfsNum"];
        }

        if (array_key_exists("CDate",$param) and $param["CDate"] !== null) {
            $this->CDate = $param["CDate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
