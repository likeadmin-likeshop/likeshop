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

namespace TencentCloud\Zj\V20190121;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Zj\V20190121\Models as Models;

/**
 * @method Models\AddCrowdPackInfoResponse AddCrowdPackInfo(Models\AddCrowdPackInfoRequest $req) 添加短信人群包信息
 * @method Models\AddSmsSignResponse AddSmsSign(Models\AddSmsSignRequest $req) 创建普通短信签名信息
 * @method Models\AddSmsTemplateResponse AddSmsTemplate(Models\AddSmsTemplateRequest $req) 根据短信标题、模板内容等创建短信模板
 * @method Models\CancelCampaignResponse CancelCampaign(Models\CancelCampaignRequest $req) 取消短信推送活动
 * @method Models\CreateCampaignResponse CreateCampaign(Models\CreateCampaignRequest $req) 创建短信推送活动
 * @method Models\CreateMmsInstanceResponse CreateMmsInstance(Models\CreateMmsInstanceRequest $req) 创建超级短信的素材样例内容
 * @method Models\DelCrowdPackResponse DelCrowdPack(Models\DelCrowdPackRequest $req) 删除人群包
 * @method Models\DelTemplateResponse DelTemplate(Models\DelTemplateRequest $req) 删除短信模板
 * @method Models\DeleteMmsInstanceResponse DeleteMmsInstance(Models\DeleteMmsInstanceRequest $req) 删除超级短信样例
 * @method Models\DescribeMmsInstanceInfoResponse DescribeMmsInstanceInfo(Models\DescribeMmsInstanceInfoRequest $req) 获取彩信实例信息
 * @method Models\DescribeMmsInstanceListResponse DescribeMmsInstanceList(Models\DescribeMmsInstanceListRequest $req) 获取彩信实例列表
 * @method Models\DescribeSmsCampaignStatisticsResponse DescribeSmsCampaignStatistics(Models\DescribeSmsCampaignStatisticsRequest $req) 获取短信超短活动统计数据
 * @method Models\DescribeSmsSignListResponse DescribeSmsSignList(Models\DescribeSmsSignListRequest $req) 获取普通短信签名信息
 * @method Models\DescribeSmsTemplateListResponse DescribeSmsTemplateList(Models\DescribeSmsTemplateListRequest $req) 获取模板信息
 * @method Models\GetCrowdPackListResponse GetCrowdPackList(Models\GetCrowdPackListRequest $req) 获取人群包列表接口
 * @method Models\GetCrowdUploadInfoResponse GetCrowdUploadInfo(Models\GetCrowdUploadInfoRequest $req) 获取短信人群包cos上传需要的信息
 * @method Models\GetSmsAmountInfoResponse GetSmsAmountInfo(Models\GetSmsAmountInfoRequest $req) 获取账号短信额度配置信息
 * @method Models\GetSmsCampaignStatusResponse GetSmsCampaignStatus(Models\GetSmsCampaignStatusRequest $req) 获取短信活动状态信息
 * @method Models\ModifySmsTemplateResponse ModifySmsTemplate(Models\ModifySmsTemplateRequest $req) 对未审核或者审核未通过的短信模板内容进行编辑修改
 * @method Models\PushMmsContentResponse PushMmsContent(Models\PushMmsContentRequest $req) 推送超级短信
 * @method Models\SendSmsResponse SendSms(Models\SendSmsRequest $req) 发送短信
 */

class ZjClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "zj.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "zj";

    /**
     * @var string
     */
    protected $version = "2019-01-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("zj")."\\"."V20190121\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
