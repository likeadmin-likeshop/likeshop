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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSegmentationTask返回参数结构体
 *
 * @method string getTaskStatus() 获取当前任务状态：
QUEUING 排队中
PROCESSING 处理中
FINISHED 处理完成
 * @method void setTaskStatus(string $TaskStatus) 设置当前任务状态：
QUEUING 排队中
PROCESSING 处理中
FINISHED 处理完成
 * @method string getResultVideoUrl() 获取分割后视频URL, 存储于腾讯云COS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultVideoUrl(string $ResultVideoUrl) 设置分割后视频URL, 存储于腾讯云COS
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultVideoMD5() 获取分割后视频MD5，用于校验
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultVideoMD5(string $ResultVideoMD5) 设置分割后视频MD5，用于校验
注意：此字段可能返回 null，表示取不到有效值。
 * @method VideoBasicInformation getVideoBasicInformation() 获取视频基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoBasicInformation(VideoBasicInformation $VideoBasicInformation) 设置视频基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMsg() 获取分割任务错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMsg(string $ErrorMsg) 设置分割任务错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSegmentationTaskResponse extends AbstractModel
{
    /**
     * @var string 当前任务状态：
QUEUING 排队中
PROCESSING 处理中
FINISHED 处理完成
     */
    public $TaskStatus;

    /**
     * @var string 分割后视频URL, 存储于腾讯云COS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultVideoUrl;

    /**
     * @var string 分割后视频MD5，用于校验
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultVideoMD5;

    /**
     * @var VideoBasicInformation 视频基本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoBasicInformation;

    /**
     * @var string 分割任务错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskStatus 当前任务状态：
QUEUING 排队中
PROCESSING 处理中
FINISHED 处理完成
     * @param string $ResultVideoUrl 分割后视频URL, 存储于腾讯云COS
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultVideoMD5 分割后视频MD5，用于校验
注意：此字段可能返回 null，表示取不到有效值。
     * @param VideoBasicInformation $VideoBasicInformation 视频基本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMsg 分割任务错误信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("ResultVideoUrl",$param) and $param["ResultVideoUrl"] !== null) {
            $this->ResultVideoUrl = $param["ResultVideoUrl"];
        }

        if (array_key_exists("ResultVideoMD5",$param) and $param["ResultVideoMD5"] !== null) {
            $this->ResultVideoMD5 = $param["ResultVideoMD5"];
        }

        if (array_key_exists("VideoBasicInformation",$param) and $param["VideoBasicInformation"] !== null) {
            $this->VideoBasicInformation = new VideoBasicInformation();
            $this->VideoBasicInformation->deserialize($param["VideoBasicInformation"]);
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
