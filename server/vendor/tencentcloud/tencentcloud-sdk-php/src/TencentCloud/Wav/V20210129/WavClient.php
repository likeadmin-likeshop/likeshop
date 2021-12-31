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

namespace TencentCloud\Wav\V20210129;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Wav\V20210129\Models as Models;

/**
 * @method Models\CreateChannelCodeResponse CreateChannelCode(Models\CreateChannelCodeRequest $req) 新增渠道活码接口
 * @method Models\CreateCorpTagResponse CreateCorpTag(Models\CreateCorpTagRequest $req) 该接口用户设置标签库, 每个企业最多可配置3000个企业标签。
 * @method Models\QueryActivityJoinListResponse QueryActivityJoinList(Models\QueryActivityJoinListRequest $req) 根据游标拉取活动参与列表信息
 * @method Models\QueryActivityListResponse QueryActivityList(Models\QueryActivityListRequest $req) 根据游标拉取活动列表信息
 * @method Models\QueryActivityLiveCodeListResponse QueryActivityLiveCodeList(Models\QueryActivityLiveCodeListRequest $req) 根据游标拉取活动活码列表信息
 * @method Models\QueryChannelCodeListResponse QueryChannelCodeList(Models\QueryChannelCodeListRequest $req) 根据游标拉取渠道活码列表信息
 * @method Models\QueryChatArchivingListResponse QueryChatArchivingList(Models\QueryChatArchivingListRequest $req) 根据游标拉取会话存档列表信息
 * @method Models\QueryExternalContactDetailResponse QueryExternalContactDetail(Models\QueryExternalContactDetailRequest $req) 企业可通过此接口，根据外部联系人的userid，拉取客户详情
 * @method Models\QueryExternalContactListResponse QueryExternalContactList(Models\QueryExternalContactListRequest $req) 企业可通过此接口获取指定成员添加的客户列表。客户是指配置了客户联系功能的成员所添加的外部联系人。没有配置客户联系功能的成员，所添加的外部联系人将不会作为客户返回。
 * @method Models\QueryMiniAppCodeListResponse QueryMiniAppCodeList(Models\QueryMiniAppCodeListRequest $req) 查询小程序码列表接口
 */

class WavClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "wav.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "wav";

    /**
     * @var string
     */
    protected $version = "2021-01-29";

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
        $respClass = "TencentCloud"."\\".ucfirst("wav")."\\"."V20210129\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
