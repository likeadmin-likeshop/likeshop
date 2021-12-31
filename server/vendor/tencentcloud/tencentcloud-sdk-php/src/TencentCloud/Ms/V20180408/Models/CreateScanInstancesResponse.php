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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateScanInstances返回参数结构体
 *
 * @method string getItemId() 获取任务唯一标识
 * @method void setItemId(string $ItemId) 设置任务唯一标识
 * @method integer getProgress() 获取任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
 * @method void setProgress(integer $Progress) 设置任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
 * @method array getAppMd5s() 获取提交成功的app的md5集合
 * @method void setAppMd5s(array $AppMd5s) 设置提交成功的app的md5集合
 * @method integer getLimitCount() 获取剩余可用次数
 * @method void setLimitCount(integer $LimitCount) 设置剩余可用次数
 * @method integer getLimitTime() 获取到期时间
 * @method void setLimitTime(integer $LimitTime) 设置到期时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateScanInstancesResponse extends AbstractModel
{
    /**
     * @var string 任务唯一标识
     */
    public $ItemId;

    /**
     * @var integer 任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
     */
    public $Progress;

    /**
     * @var array 提交成功的app的md5集合
     */
    public $AppMd5s;

    /**
     * @var integer 剩余可用次数
     */
    public $LimitCount;

    /**
     * @var integer 到期时间
     */
    public $LimitTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ItemId 任务唯一标识
     * @param integer $Progress 任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
     * @param array $AppMd5s 提交成功的app的md5集合
     * @param integer $LimitCount 剩余可用次数
     * @param integer $LimitTime 到期时间
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("AppMd5s",$param) and $param["AppMd5s"] !== null) {
            $this->AppMd5s = $param["AppMd5s"];
        }

        if (array_key_exists("LimitCount",$param) and $param["LimitCount"] !== null) {
            $this->LimitCount = $param["LimitCount"];
        }

        if (array_key_exists("LimitTime",$param) and $param["LimitTime"] !== null) {
            $this->LimitTime = $param["LimitTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
