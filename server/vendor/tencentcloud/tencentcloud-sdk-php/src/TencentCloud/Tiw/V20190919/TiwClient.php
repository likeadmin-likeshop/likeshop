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

namespace TencentCloud\Tiw\V20190919;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tiw\V20190919\Models as Models;

/**
 * @method Models\CreateTranscodeResponse CreateTranscode(Models\CreateTranscodeRequest $req) 创建一个文档转码任务
 * @method Models\CreateVideoGenerationTaskResponse CreateVideoGenerationTask(Models\CreateVideoGenerationTaskRequest $req) 创建视频生成任务
 * @method Models\DescribeOnlineRecordResponse DescribeOnlineRecord(Models\DescribeOnlineRecordRequest $req) 查询录制任务状态与结果
 * @method Models\DescribeOnlineRecordCallbackResponse DescribeOnlineRecordCallback(Models\DescribeOnlineRecordCallbackRequest $req) 查询实时录制回调地址
 * @method Models\DescribeQualityMetricsResponse DescribeQualityMetrics(Models\DescribeQualityMetricsRequest $req) 查询互动白板质量数据
 * @method Models\DescribeTranscodeResponse DescribeTranscode(Models\DescribeTranscodeRequest $req) 查询文档转码任务的执行进度与转码结果
 * @method Models\DescribeTranscodeCallbackResponse DescribeTranscodeCallback(Models\DescribeTranscodeCallbackRequest $req) 查询文档转码回调地址
 * @method Models\DescribeVideoGenerationTaskResponse DescribeVideoGenerationTask(Models\DescribeVideoGenerationTaskRequest $req) 查询录制视频生成任务状态与结果
 * @method Models\DescribeVideoGenerationTaskCallbackResponse DescribeVideoGenerationTaskCallback(Models\DescribeVideoGenerationTaskCallbackRequest $req) 查询录制视频生成回调地址
 * @method Models\DescribeWhiteboardPushResponse DescribeWhiteboardPush(Models\DescribeWhiteboardPushRequest $req) 查询推流任务状态与结果
 * @method Models\DescribeWhiteboardPushCallbackResponse DescribeWhiteboardPushCallback(Models\DescribeWhiteboardPushCallbackRequest $req) 查询白板推流回调地址
 * @method Models\PauseOnlineRecordResponse PauseOnlineRecord(Models\PauseOnlineRecordRequest $req) 暂停实时录制
 * @method Models\ResumeOnlineRecordResponse ResumeOnlineRecord(Models\ResumeOnlineRecordRequest $req) 恢复实时录制
 * @method Models\SetOnlineRecordCallbackResponse SetOnlineRecordCallback(Models\SetOnlineRecordCallbackRequest $req) 设置实时录制回调地址，回调数据格式请参考文档：https://cloud.tencent.com/document/product/1137/40258
 * @method Models\SetOnlineRecordCallbackKeyResponse SetOnlineRecordCallbackKey(Models\SetOnlineRecordCallbackKeyRequest $req) 设置实时录制回调鉴权密钥，回调鉴权方式请参考文档：https://cloud.tencent.com/document/product/1137/40257
 * @method Models\SetTranscodeCallbackResponse SetTranscodeCallback(Models\SetTranscodeCallbackRequest $req) 设置文档转码回调地址，回调数据格式请参考文档：https://cloud.tencent.com/document/product/1137/40260
 * @method Models\SetTranscodeCallbackKeyResponse SetTranscodeCallbackKey(Models\SetTranscodeCallbackKeyRequest $req) 设置文档转码回调鉴权密钥，回调鉴权方式请参考文档：https://cloud.tencent.com/document/product/1137/40257
 * @method Models\SetVideoGenerationTaskCallbackResponse SetVideoGenerationTaskCallback(Models\SetVideoGenerationTaskCallbackRequest $req) 设置录制视频生成回调地址
 * @method Models\SetVideoGenerationTaskCallbackKeyResponse SetVideoGenerationTaskCallbackKey(Models\SetVideoGenerationTaskCallbackKeyRequest $req) 设置视频生成回调鉴权密钥
 * @method Models\SetWhiteboardPushCallbackResponse SetWhiteboardPushCallback(Models\SetWhiteboardPushCallbackRequest $req) 设置白板推流回调地址，回调数据格式请参考文档：https://cloud.tencent.com/document/product/1137/40257
 * @method Models\SetWhiteboardPushCallbackKeyResponse SetWhiteboardPushCallbackKey(Models\SetWhiteboardPushCallbackKeyRequest $req) 设置白板推流回调鉴权密钥，回调鉴权方式请参考文档：https://cloud.tencent.com/document/product/1137/40257
 * @method Models\StartOnlineRecordResponse StartOnlineRecord(Models\StartOnlineRecordRequest $req) 发起一个实时录制任务
 * @method Models\StartWhiteboardPushResponse StartWhiteboardPush(Models\StartWhiteboardPushRequest $req) 发起一个白板推流任务
 * @method Models\StopOnlineRecordResponse StopOnlineRecord(Models\StopOnlineRecordRequest $req) 停止实时录制
 * @method Models\StopWhiteboardPushResponse StopWhiteboardPush(Models\StopWhiteboardPushRequest $req) 停止白板推流任务
 */

class TiwClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tiw.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tiw";

    /**
     * @var string
     */
    protected $version = "2019-09-19";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("tiw")."\\"."V20190919\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
