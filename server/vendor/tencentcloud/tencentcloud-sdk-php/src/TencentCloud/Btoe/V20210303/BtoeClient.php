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

namespace TencentCloud\Btoe\V20210303;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Btoe\V20210303\Models as Models;

/**
 * @method Models\CreateAudioDepositResponse CreateAudioDeposit(Models\CreateAudioDepositRequest $req) 用户通过本接口向BTOE写入待存证的音频原文件或下载URL，BTOE对音频原文件存储后，将其Hash值存证上链，并生成含有电子签章的区块链存证电子凭证。音频类型支持格式：mp3、wav、wma、midi、flac；原文件上传大小不超过5 MB，下载URL文件大小不超过25 MB。
 * @method Models\CreateDataDepositResponse CreateDataDeposit(Models\CreateDataDepositRequest $req) 用户通过本接口向BTOE写入待存证的业务数据明文，业务数据明文存证写入后不可修改，BTOE对业务数据明文存证生成含有电子签章的区块链存证电子凭证。
 * @method Models\CreateDocDepositResponse CreateDocDeposit(Models\CreateDocDepositRequest $req) 用户通过本接口向BTOE写入待存证的文档原文件或下载URL，BTOE对文档原文件存储后，将其Hash值存证上链，并生成含有电子签章的区块链存证电子凭证。文档类型支持格式：doc、docx、xls、xlsx、ppt、pptx、 pdf、html、txt、md、csv；原文件上传大小不超过5 MB，下载URL文件大小不超过10 MB。
 * @method Models\CreateHashDepositResponse CreateHashDeposit(Models\CreateHashDepositRequest $req) 用户通过本接口向BTOE写入待存证的原文数据Hash值，BTOE对业务数据Hash值存证上链，并生成含有电子签章的区块链存证电子凭证。
 * @method Models\CreateHashDepositNoCertResponse CreateHashDepositNoCert(Models\CreateHashDepositNoCertRequest $req) 用户通过本接口向BTOE写入待存证的原文数据Hash值，BTOE对业务数据Hash值存证上链，本接口不生成区块链存证电子凭证。
 * @method Models\CreateHashDepositNoSealResponse CreateHashDepositNoSeal(Models\CreateHashDepositNoSealRequest $req) 用户通过本接口向BTOE写入待存证的原文数据Hash值，BTOE对业务数据Hash值存证上链，并生成无电子签章的区块链存证电子凭证。
 * @method Models\CreateImageDepositResponse CreateImageDeposit(Models\CreateImageDepositRequest $req) 用户通过本接口向BTOE写入待存证的图片原文件或下载URL，BTOE对图片原文件存储后，将其Hash值存证上链，并生成含有电子签章的区块链存证电子凭证。图片类型支持格式：png、jpg、jpeg、bmp、gif、svg；原文件上传大小不超过5 MB，下载URL文件大小不超过10 MB。
 * @method Models\CreateVideoDepositResponse CreateVideoDeposit(Models\CreateVideoDepositRequest $req) 用户通过本接口向BTOE写入待存证的视频的原文件或下载URL，BTOE对视频原文件存储后，将其Hash值存证上链，并生成含有电子签章的区块链存证电子凭证。视频文件支持格式：mp4、avi、mkv、mov、flv,wmv,rmvb,3gp；文件大小限制：直接上传原文件不大于5MB，下载URL文件大小不大于200 MB。
 * @method Models\CreateWebpageDepositResponse CreateWebpageDeposit(Models\CreateWebpageDepositRequest $req) 用户通过本接口向BTOE提交待存证网页的URL，BTOE对URL进行网页快照，并将快照图片存储，将网页快照Hash值存证上链，并生成含有电子签章的区块链存证电子凭证。URL格式必须以http、https开头。
 * @method Models\GetDepositCertResponse GetDepositCert(Models\GetDepositCertRequest $req) 用户通过存证编码向BTOE查询存证电子凭证信息。
 * @method Models\GetDepositFileResponse GetDepositFile(Models\GetDepositFileRequest $req) 用户通过存证编码向BTOE获取存证文件的下载URL。
-注：Hash类存证、业务数据明文存证不产生存证文件。
 * @method Models\GetDepositInfoResponse GetDepositInfo(Models\GetDepositInfoRequest $req) 用户通过存证编码向BTOE查询存证基本信息。
 */

class BtoeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "btoe.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "btoe";

    /**
     * @var string
     */
    protected $version = "2021-03-03";

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
        $respClass = "TencentCloud"."\\".ucfirst("btoe")."\\"."V20210303\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
