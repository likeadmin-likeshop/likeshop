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

namespace TencentCloud\Apcas\V20201127;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Apcas\V20201127\Models as Models;

/**
 * @method Models\GetTaskDetailResponse GetTaskDetail(Models\GetTaskDetailRequest $req) 查询画像洞察任务详情
 * @method Models\GetTaskListResponse GetTaskList(Models\GetTaskListRequest $req) 查询当前账号AppID下的画像洞察任务列表
 * @method Models\PredictRatingResponse PredictRating(Models\PredictRatingRequest $req) 根据传入的设备号（IMEI、IDFA、手机号、手机号MD5），返回意向评级结果
 * @method Models\QueryCallDetailsResponse QueryCallDetails(Models\QueryCallDetailsRequest $req) 查询调用明细
 * @method Models\QueryCallStatResponse QueryCallStat(Models\QueryCallStatRequest $req) 按时间维度获取调用量统计
 * @method Models\QueryGeneralStatResponse QueryGeneralStat(Models\QueryGeneralStatRequest $req) 获取日/月/周/总调用量统计数据
 * @method Models\UploadIdResponse UploadId(Models\UploadIdRequest $req) 上传群体画像的ID列表（支持的ID类型：0:imei 7:IDFA 8:MD5(imei)），后台返回生成的画像分析任务ID
 */

class ApcasClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "apcas.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "apcas";

    /**
     * @var string
     */
    protected $version = "2020-11-27";

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
        $respClass = "TencentCloud"."\\".ucfirst("apcas")."\\"."V20201127\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
