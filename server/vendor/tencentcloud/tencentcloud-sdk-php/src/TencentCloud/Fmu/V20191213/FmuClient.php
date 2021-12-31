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

namespace TencentCloud\Fmu\V20191213;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Fmu\V20191213\Models as Models;

/**
 * @method Models\BeautifyPicResponse BeautifyPic(Models\BeautifyPicRequest $req) 用户上传一张人脸图片，精准定位五官，实现美肤、亮肤、祛痘等美颜功能。
 * @method Models\BeautifyVideoResponse BeautifyVideo(Models\BeautifyVideoRequest $req) 视频美颜
 * @method Models\CancelBeautifyVideoJobResponse CancelBeautifyVideoJob(Models\CancelBeautifyVideoJobRequest $req) 撤销视频美颜任务请求
 * @method Models\CreateModelResponse CreateModel(Models\CreateModelRequest $req) 在使用LUT素材的modelid实现试唇色前，您需要先上传 LUT 格式的cube文件注册唇色ID。查看 [LUT文件的使用说明](https://cloud.tencent.com/document/product/1172/41701)。

注：您也可以直接使用 [试唇色接口](https://cloud.tencent.com/document/product/1172/40706)，通过输入RGBA模型数值的方式指定唇色，更简单易用。

 * @method Models\DeleteModelResponse DeleteModel(Models\DeleteModelRequest $req) 删除已注册的唇色素材。
 * @method Models\GetModelListResponse GetModelList(Models\GetModelListRequest $req) 查询已注册的唇色素材。
 * @method Models\QueryBeautifyVideoJobResponse QueryBeautifyVideoJob(Models\QueryBeautifyVideoJobRequest $req) 查询视频美颜处理进度
 * @method Models\StyleImageResponse StyleImage(Models\StyleImageRequest $req) 上传一张照片，输出滤镜处理后的图片。
 * @method Models\StyleImageProResponse StyleImagePro(Models\StyleImageProRequest $req) 上传一张照片，输出滤镜处理后的图片。
 * @method Models\TryLipstickPicResponse TryLipstickPic(Models\TryLipstickPicRequest $req) 对图片中的人脸嘴唇进行着色，最多支持同时对一张图中的3张人脸进行试唇色。

您可以通过事先注册在腾讯云的唇色素材（LUT文件）改变图片中的人脸唇色，也可以输入RGBA模型数值。

为了更好的效果，建议您使用事先注册在腾讯云的唇色素材（LUT文件）。

>     
- 公共参数中的签名方式请使用V3版本，即配置SignatureMethod参数为TC3-HMAC-SHA256。
 */

class FmuClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "fmu.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "fmu";

    /**
     * @var string
     */
    protected $version = "2019-12-13";

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
        $respClass = "TencentCloud"."\\".ucfirst("fmu")."\\"."V20191213\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
