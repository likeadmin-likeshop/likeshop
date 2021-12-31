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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetUpgradeGroupFaceModelVersionResult返回参数结构体
 *
 * @method integer getEndTimestamp() 获取人员升级任务预估结束时间。 StartTimestamp的值是自 Unix 纪元时间到人员查重任务预估结束的毫秒数。  
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
如果为0表示这个任务已经执行完毕。
 * @method void setEndTimestamp(integer $EndTimestamp) 设置人员升级任务预估结束时间。 StartTimestamp的值是自 Unix 纪元时间到人员查重任务预估结束的毫秒数。  
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
如果为0表示这个任务已经执行完毕。
 * @method float getProgress() 获取升级任务完成进度。取值[0.0，100.0]。
 * @method void setProgress(float $Progress) 设置升级任务完成进度。取值[0.0，100.0]。
 * @method integer getStatus() 获取0表示升级中，1表示升级完毕，2表示回滚完毕，3表示升级失败。
 * @method void setStatus(integer $Status) 设置0表示升级中，1表示升级完毕，2表示回滚完毕，3表示升级失败。
 * @method integer getStartTime() 获取升级起始时间。 
StartTime的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
有关更多信息，请参阅 Unix 时间。
 * @method void setStartTime(integer $StartTime) 设置升级起始时间。 
StartTime的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
有关更多信息，请参阅 Unix 时间。
 * @method string getFromFaceModelVersion() 获取当前算法模型版本。
 * @method void setFromFaceModelVersion(string $FromFaceModelVersion) 设置当前算法模型版本。
 * @method string getToFaceModelVersion() 获取目标算法模型版本。
 * @method void setToFaceModelVersion(string $ToFaceModelVersion) 设置目标算法模型版本。
 * @method string getGroupId() 获取人员库ID。
 * @method void setGroupId(string $GroupId) 设置人员库ID。
 * @method string getFailedFacesUrl() 获取无法升级的人脸Id信息，文件格式为json。内容参见下方示例。url有效期为半小时。
 * @method void setFailedFacesUrl(string $FailedFacesUrl) 设置无法升级的人脸Id信息，文件格式为json。内容参见下方示例。url有效期为半小时。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetUpgradeGroupFaceModelVersionResultResponse extends AbstractModel
{
    /**
     * @var integer 人员升级任务预估结束时间。 StartTimestamp的值是自 Unix 纪元时间到人员查重任务预估结束的毫秒数。  
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
如果为0表示这个任务已经执行完毕。
     */
    public $EndTimestamp;

    /**
     * @var float 升级任务完成进度。取值[0.0，100.0]。
     */
    public $Progress;

    /**
     * @var integer 0表示升级中，1表示升级完毕，2表示回滚完毕，3表示升级失败。
     */
    public $Status;

    /**
     * @var integer 升级起始时间。 
StartTime的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
有关更多信息，请参阅 Unix 时间。
     */
    public $StartTime;

    /**
     * @var string 当前算法模型版本。
     */
    public $FromFaceModelVersion;

    /**
     * @var string 目标算法模型版本。
     */
    public $ToFaceModelVersion;

    /**
     * @var string 人员库ID。
     */
    public $GroupId;

    /**
     * @var string 无法升级的人脸Id信息，文件格式为json。内容参见下方示例。url有效期为半小时。
     */
    public $FailedFacesUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $EndTimestamp 人员升级任务预估结束时间。 StartTimestamp的值是自 Unix 纪元时间到人员查重任务预估结束的毫秒数。  
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
如果为0表示这个任务已经执行完毕。
     * @param float $Progress 升级任务完成进度。取值[0.0，100.0]。
     * @param integer $Status 0表示升级中，1表示升级完毕，2表示回滚完毕，3表示升级失败。
     * @param integer $StartTime 升级起始时间。 
StartTime的值是自 Unix 纪元时间到Group创建时间的毫秒数。 
Unix 纪元时间是 1970 年 1 月 1 日星期四，协调世界时 (UTC) 00:00:00。 
有关更多信息，请参阅 Unix 时间。
     * @param string $FromFaceModelVersion 当前算法模型版本。
     * @param string $ToFaceModelVersion 目标算法模型版本。
     * @param string $GroupId 人员库ID。
     * @param string $FailedFacesUrl 无法升级的人脸Id信息，文件格式为json。内容参见下方示例。url有效期为半小时。
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
        if (array_key_exists("EndTimestamp",$param) and $param["EndTimestamp"] !== null) {
            $this->EndTimestamp = $param["EndTimestamp"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FromFaceModelVersion",$param) and $param["FromFaceModelVersion"] !== null) {
            $this->FromFaceModelVersion = $param["FromFaceModelVersion"];
        }

        if (array_key_exists("ToFaceModelVersion",$param) and $param["ToFaceModelVersion"] !== null) {
            $this->ToFaceModelVersion = $param["ToFaceModelVersion"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("FailedFacesUrl",$param) and $param["FailedFacesUrl"] !== null) {
            $this->FailedFacesUrl = $param["FailedFacesUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
