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

namespace TencentCloud\Cms\V20190321;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cms\V20190321\Models as Models;

/**
 * @method Models\CreateFileSampleResponse CreateFileSample(Models\CreateFileSampleRequest $req) 本文档适用于图片内容安全、视频内容安全自定义识别库的管理。
<br>
通过该接口可以将图片新增到样本库。
 * @method Models\CreateTextSampleResponse CreateTextSample(Models\CreateTextSampleRequest $req) 本文档适用于文本内容安全、音频内容安全自定义识别库的管理。
<br>
通过该接口可以将文本新增到样本库。
 * @method Models\DeleteFileSampleResponse DeleteFileSample(Models\DeleteFileSampleRequest $req) 本文档适用于图片内容安全、视频内容安全自定义识别库的管理。
<br>
删除图片样本库，支持批量删除，一次提交不超过20个。
 * @method Models\DeleteTextSampleResponse DeleteTextSample(Models\DeleteTextSampleRequest $req) 本文档适用于文本内容安全、音频内容安全自定义识别库的管理。
<br>
删除文本样本库，暂时只支持单个删除。
 * @method Models\DescribeFileSampleResponse DescribeFileSample(Models\DescribeFileSampleRequest $req) 本文档适用于图片内容安全、视频内容安全自定义识别库的管理。
<br>
查询图片样本库，支持批量查询。
 * @method Models\DescribeTextSampleResponse DescribeTextSample(Models\DescribeTextSampleRequest $req) 本文档适用于文本内容安全、音频内容安全自定义识别库的管理。
<br>
支持批量查询文本样本库。
 * @method Models\ImageModerationResponse ImageModeration(Models\ImageModerationRequest $req) 图片内容检测服务（Image Moderation, IM）能自动扫描图片，识别涉黄、涉恐、涉政、涉毒等有害内容，同时支持用户配置图片黑名单，打击自定义的违规图片。
 * @method Models\ManualReviewResponse ManualReview(Models\ManualReviewRequest $req) 人工审核对外接口
 * @method Models\TextModerationResponse TextModeration(Models\TextModerationRequest $req) 文本内容检测（Text Moderation）服务使用了深度学习技术，识别涉黄、涉政、涉恐等有害内容，同时支持用户配置词库，打击自定义的违规文本。
 */

class CmsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cms.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cms";

    /**
     * @var string
     */
    protected $version = "2019-03-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("cms")."\\"."V20190321\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
