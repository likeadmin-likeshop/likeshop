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

namespace TencentCloud\Ds\V20180523;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ds\V20180523\Models as Models;

/**
 * @method Models\CheckVcodeResponse CheckVcode(Models\CheckVcodeRequest $req) 检测验证码接口。此接口用于企业电子合同平台通过给用户发送短信验证码，以短信授权方式签署合同。此接口配合发送验证码接口使用。

用户在企业电子合同平台输入收到的验证码后，由企业电子合同平台调用该接口向腾讯云提交确认受托签署合同验证码命令。验证码验证正确时，本次合同签署的授权成功。
 * @method Models\CreateContractByUploadResponse CreateContractByUpload(Models\CreateContractByUploadRequest $req) 此接口适用于：客户平台通过上传PDF文件作为合同，以备未来进行签署。接口返回任务号，可调用DescribeTaskStatus接口查看任务执行结果。
 * @method Models\CreateEnterpriseAccountResponse CreateEnterpriseAccount(Models\CreateEnterpriseAccountRequest $req) 为企业电子合同平台的最终企业用户进行开户。在企业电子合同平台进行操作的企业用户，企业电子合同平台向腾讯云发送企业用户的信息，提交开户命令。腾讯云接到请求后，自动为企业电子合同平台的企业用户生成一张数字证书。
 * @method Models\CreatePersonalAccountResponse CreatePersonalAccount(Models\CreatePersonalAccountRequest $req) 为企业电子合同平台的最终个人用户进行开户。在企业电子合同平台进行操作的个人用户，企业电子合同平台向腾讯云发送个人用户的信息，提交开户命令。腾讯云接到请求后，自动为企业电子合同平台的个人用户生成一张数字证书。
 * @method Models\CreateSealResponse CreateSeal(Models\CreateSealRequest $req) 此接口用于客户电子合同平台增加某用户的印章图片。客户平台可以调用此接口增加某用户的印章图片。
 * @method Models\DeleteAccountResponse DeleteAccount(Models\DeleteAccountRequest $req) 删除企业电子合同平台的最终用户。调用该接口后，腾讯云将删除该用户账号。删除账号后，已经签名的合同不受影响。
 * @method Models\DeleteSealResponse DeleteSeal(Models\DeleteSealRequest $req) 删除印章接口，删除指定账号的某个印章
 * @method Models\DescribeTaskStatusResponse DescribeTaskStatus(Models\DescribeTaskStatusRequest $req) 接口使用于：客户平台可使用该接口查询任务执行状态或者执行结果
 * @method Models\DownloadContractResponse DownloadContract(Models\DownloadContractRequest $req) 下载合同接口。调用该接口可以下载签署中和签署完成的合同。接口返回任务号，可调用DescribeTaskStatus接口查看任务执行结果。
 * @method Models\SendVcodeResponse SendVcode(Models\SendVcodeRequest $req) 发送验证码接口。此接口用于：企业电子合同平台需要腾讯云发送验证码对其用户进行验证时调用，腾讯云将向其用户联系手机(企业电子合同平台为用户开户时通过接口传入)发送验证码，以验证码授权方式签署合同。用户验证工作由企业电子合同平台自身完成。
 * @method Models\SignContractByCoordinateResponse SignContractByCoordinate(Models\SignContractByCoordinateRequest $req) 此接口适用于：客户平台在创建好合同后，由合同签署方对创建的合同内容进行确认，无误后再进行签署。客户平台使用该接口提供详细的PDF文档签名坐标进行签署。
 * @method Models\SignContractByKeywordResponse SignContractByKeyword(Models\SignContractByKeywordRequest $req) 此接口适用于：客户平台在创建好合同后，由合同签署方对创建的合同内容进行确认，无误后再进行签署。客户平台使用该接口对PDF合同文档按照关键字和坐标进行签署。
 */

class DsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ds.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ds";

    /**
     * @var string
     */
    protected $version = "2018-05-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("ds")."\\"."V20180523\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
