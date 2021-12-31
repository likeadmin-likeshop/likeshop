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

namespace TencentCloud\Ie\V20200304;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ie\V20200304\Models as Models;

/**
 * @method Models\CreateEditingTaskResponse CreateEditingTask(Models\CreateEditingTaskRequest $req) 创建编辑理解任务，可以同时选择视频标签识别、分类识别、智能拆条、智能集锦、智能封面和片头片尾识别中的一项或者多项能力。
 * @method Models\CreateMediaProcessTaskResponse CreateMediaProcessTask(Models\CreateMediaProcessTaskRequest $req) 用于创建编辑处理任务，如媒体截取、媒体编辑、媒体拼接、媒体字幕。
 * @method Models\CreateMediaQualityRestorationTaskResponse CreateMediaQualityRestorationTask(Models\CreateMediaQualityRestorationTaskRequest $req) 创建画质重生任务，对视频进行转码、去噪、去划痕、去毛刺、超分、细节增强和色彩增强。
 * @method Models\CreateQualityControlTaskResponse CreateQualityControlTask(Models\CreateQualityControlTaskRequest $req) 通过接口可以智能检测视频画面中抖动重影、模糊、低光照、过曝光、黑边、白边、黑屏、白屏、花屏、噪点、马赛克、二维码等在内的多个场景，还可以自动检测视频无音频异常、无声音片段。
 * @method Models\DescribeEditingTaskResultResponse DescribeEditingTaskResult(Models\DescribeEditingTaskResultRequest $req) 获取编辑理解任务结果。
 * @method Models\DescribeMediaProcessTaskResultResponse DescribeMediaProcessTaskResult(Models\DescribeMediaProcessTaskResultRequest $req) 用于获取编辑处理任务的结果。
 * @method Models\DescribeMediaQualityRestorationTaskRusultResponse DescribeMediaQualityRestorationTaskRusult(Models\DescribeMediaQualityRestorationTaskRusultRequest $req) 获取画质重生任务结果，查看结束后的文件信息
 * @method Models\DescribeQualityControlTaskResultResponse DescribeQualityControlTaskResult(Models\DescribeQualityControlTaskResultRequest $req) 获取媒体质检任务结果
 * @method Models\StopMediaProcessTaskResponse StopMediaProcessTask(Models\StopMediaProcessTaskRequest $req) 用于停止正在进行中的编辑处理任务。
 * @method Models\StopMediaQualityRestorationTaskResponse StopMediaQualityRestorationTask(Models\StopMediaQualityRestorationTaskRequest $req) 删除正在进行的画质重生任务
 */

class IeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ie.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ie";

    /**
     * @var string
     */
    protected $version = "2020-03-04";

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
        $respClass = "TencentCloud"."\\".ucfirst("ie")."\\"."V20200304\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
