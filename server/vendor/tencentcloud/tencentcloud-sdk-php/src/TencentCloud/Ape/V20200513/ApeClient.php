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

namespace TencentCloud\Ape\V20200513;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ape\V20200513\Models as Models;

/**
 * @method Models\BatchDescribeOrderCertificateResponse BatchDescribeOrderCertificate(Models\BatchDescribeOrderCertificateRequest $req) 批量获取授权书下载地址
 * @method Models\BatchDescribeOrderImageResponse BatchDescribeOrderImage(Models\BatchDescribeOrderImageRequest $req) 批量获取图片下载地址
 * @method Models\CreateOrderAndDownloadsResponse CreateOrderAndDownloads(Models\CreateOrderAndDownloadsRequest $req) 核销图片，获取原图URL地址
 * @method Models\CreateOrderAndPayResponse CreateOrderAndPay(Models\CreateOrderAndPayRequest $req) 购买一张图片并且支付
 * @method Models\DescribeAuthUsersResponse DescribeAuthUsers(Models\DescribeAuthUsersRequest $req) 分页查询授权人列表
 * @method Models\DescribeDownloadInfosResponse DescribeDownloadInfos(Models\DescribeDownloadInfosRequest $req) 获取用户图片下载记录
 * @method Models\DescribeImageResponse DescribeImage(Models\DescribeImageRequest $req) 根据ID查询一张图片的详细信息
 * @method Models\DescribeImagesResponse DescribeImages(Models\DescribeImagesRequest $req) 根据关键字搜索图片列表
 */

class ApeClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ape.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ape";

    /**
     * @var string
     */
    protected $version = "2020-05-13";

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
        $respClass = "TencentCloud"."\\".ucfirst("ape")."\\"."V20200513\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
