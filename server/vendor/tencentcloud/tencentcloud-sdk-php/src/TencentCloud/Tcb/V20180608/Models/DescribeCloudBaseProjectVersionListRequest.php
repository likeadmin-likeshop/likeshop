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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudBaseProjectVersionList请求参数结构体
 *
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 * @method integer getPageSize() 获取页大小
 * @method void setPageSize(integer $PageSize) 设置页大小
 * @method integer getPageNum() 获取第几页,从0开始
 * @method void setPageNum(integer $PageNum) 设置第几页,从0开始
 * @method string getStartTime() 获取起始时间 2021-03-27 12:00:00
 * @method void setStartTime(string $StartTime) 设置起始时间 2021-03-27 12:00:00
 * @method string getEndTime() 获取终止时间 2021-03-27 12:00:00
 * @method void setEndTime(string $EndTime) 设置终止时间 2021-03-27 12:00:00
 */
class DescribeCloudBaseProjectVersionListRequest extends AbstractModel
{
    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @var integer 页大小
     */
    public $PageSize;

    /**
     * @var integer 第几页,从0开始
     */
    public $PageNum;

    /**
     * @var string 起始时间 2021-03-27 12:00:00
     */
    public $StartTime;

    /**
     * @var string 终止时间 2021-03-27 12:00:00
     */
    public $EndTime;

    /**
     * @param string $EnvId 环境id
     * @param string $ProjectName 项目名称
     * @param integer $PageSize 页大小
     * @param integer $PageNum 第几页,从0开始
     * @param string $StartTime 起始时间 2021-03-27 12:00:00
     * @param string $EndTime 终止时间 2021-03-27 12:00:00
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
