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

namespace TencentCloud\Ump\V20200918;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ump\V20200918\Models as Models;

/**
 * @method Models\CreateCameraAlertsResponse CreateCameraAlerts(Models\CreateCameraAlertsRequest $req) 上报相机移动、遮挡等告警信息


 * @method Models\CreateCameraStateResponse CreateCameraState(Models\CreateCameraStateRequest $req) 上报当前场内所有相机的当前状态
 * @method Models\CreateCaptureResponse CreateCapture(Models\CreateCaptureRequest $req) 场内抓拍上报接口
 * @method Models\CreateMultiBizAlertResponse CreateMultiBizAlert(Models\CreateMultiBizAlertRequest $req) 集团广场的多经点位告警
 * @method Models\CreateProgramStateResponse CreateProgramState(Models\CreateProgramStateRequest $req) 上报所有进程监控信息
 * @method Models\CreateServerStateResponse CreateServerState(Models\CreateServerStateRequest $req) 上报所有服务器硬件监控信息
 * @method Models\DeleteMultiBizAlertResponse DeleteMultiBizAlert(Models\DeleteMultiBizAlertRequest $req) 集团广场的多经点位消警
 * @method Models\DeleteTaskResponse DeleteTask(Models\DeleteTaskRequest $req) 删除集团广场对应的任务
 * @method Models\DescribeCamerasResponse DescribeCameras(Models\DescribeCamerasRequest $req) 获取集团广场对应的摄像头列表
 * @method Models\DescribeConfigResponse DescribeConfig(Models\DescribeConfigRequest $req) 获取摄像头配置信息
mac不为空返回指定相机配置
mac为空返回对应GroupCode和MallId全量配置
 * @method Models\DescribeImageResponse DescribeImage(Models\DescribeImageRequest $req) 实时获取底图接口
 * @method Models\DescribeMultiBizBaseImageResponse DescribeMultiBizBaseImage(Models\DescribeMultiBizBaseImageRequest $req) 获取多经点位底图
 * @method Models\DescribeTasksResponse DescribeTasks(Models\DescribeTasksRequest $req) 查询集团广场对应的任务列表
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) 获取集团广场的点位列表
 * @method Models\ModifyMultiBizConfigResponse ModifyMultiBizConfig(Models\ModifyMultiBizConfigRequest $req) 集团广场的多经点位配置更新
 * @method Models\ReportServiceRegisterResponse ReportServiceRegister(Models\ReportServiceRegisterRequest $req) 上报服务注册自身的服务地址作为回调地址, 用于信息回传。
 * @method Models\SearchImageResponse SearchImage(Models\SearchImageRequest $req) 以图搜图
 */

class UmpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ump.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ump";

    /**
     * @var string
     */
    protected $version = "2020-09-18";

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
        $respClass = "TencentCloud"."\\".ucfirst("ump")."\\"."V20200918\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
