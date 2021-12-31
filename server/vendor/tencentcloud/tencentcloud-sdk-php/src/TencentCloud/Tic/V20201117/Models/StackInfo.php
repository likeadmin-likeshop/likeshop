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
namespace TencentCloud\Tic\V20201117\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源栈信息
 *
 * @method string getStackId() 获取资源栈ID
 * @method void setStackId(string $StackId) 设置资源栈ID
 * @method string getStackName() 获取资源栈名称
 * @method void setStackName(string $StackName) 设置资源栈名称
 * @method string getDescription() 获取资源栈描述
 * @method void setDescription(string $Description) 设置资源栈描述
 * @method string getRegion() 获取所处地域
 * @method void setRegion(string $Region) 设置所处地域
 * @method string getStatus() 获取资源栈状态
 * @method void setStatus(string $Status) 设置资源栈状态
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class StackInfo extends AbstractModel
{
    /**
     * @var string 资源栈ID
     */
    public $StackId;

    /**
     * @var string 资源栈名称
     */
    public $StackName;

    /**
     * @var string 资源栈描述
     */
    public $Description;

    /**
     * @var string 所处地域
     */
    public $Region;

    /**
     * @var string 资源栈状态
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $StackId 资源栈ID
     * @param string $StackName 资源栈名称
     * @param string $Description 资源栈描述
     * @param string $Region 所处地域
     * @param string $Status 资源栈状态
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("StackId",$param) and $param["StackId"] !== null) {
            $this->StackId = $param["StackId"];
        }

        if (array_key_exists("StackName",$param) and $param["StackName"] !== null) {
            $this->StackName = $param["StackName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
