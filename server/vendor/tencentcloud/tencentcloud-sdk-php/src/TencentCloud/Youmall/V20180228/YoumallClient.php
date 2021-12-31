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

namespace TencentCloud\Youmall\V20180228;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Youmall\V20180228\Models as Models;

/**
 * @method Models\CreateAccountResponse CreateAccount(Models\CreateAccountRequest $req) 创建集团门店管理员账号
 * @method Models\CreateFacePictureResponse CreateFacePicture(Models\CreateFacePictureRequest $req) 通过上传指定规格的人脸图片，创建黑名单用户或者白名单用户。
 * @method Models\DeletePersonFeatureResponse DeletePersonFeature(Models\DeletePersonFeatureRequest $req) 删除顾客特征，仅支持删除黑名单或者白名单用户特征。
 * @method Models\DescribeCameraPersonResponse DescribeCameraPerson(Models\DescribeCameraPersonRequest $req) 通过指定设备ID和指定时段，获取该时段内中收银台摄像设备抓取到顾客头像及身份ID
 * @method Models\DescribeClusterPersonArrivedMallResponse DescribeClusterPersonArrivedMall(Models\DescribeClusterPersonArrivedMallRequest $req) 输出开始时间到结束时间段内的进出场数据。按天聚合的情况下，每天多次进出场算一次，以最初进场时间为进场时间，最后离场时间为离场时间。停留时间为多次进出场的停留时间之和。
 * @method Models\DescribeClusterPersonTraceResponse DescribeClusterPersonTrace(Models\DescribeClusterPersonTraceRequest $req) 输出开始时间到结束时间段内的进出场数据。按天聚合的情况下，每天多次进出场算一次，以最初进场时间为进场时间，最后离场时间为离场时间。
 * @method Models\DescribeFaceIdByTempIdResponse DescribeFaceIdByTempId(Models\DescribeFaceIdByTempIdRequest $req) 通过DescribeCameraPerson接口上报的收银台身份ID查询顾客的FaceID。查询最佳时间为收银台上报的次日1点后。
 * @method Models\DescribeHistoryNetworkInfoResponse DescribeHistoryNetworkInfo(Models\DescribeHistoryNetworkInfoRequest $req) 返回当前门店历史网络状态数据
 * @method Models\DescribeNetworkInfoResponse DescribeNetworkInfo(Models\DescribeNetworkInfoRequest $req) 返回当前门店最新网络状态数据
 * @method Models\DescribePersonResponse DescribePerson(Models\DescribePersonRequest $req) 查询指定某一卖场的用户信息
 * @method Models\DescribePersonArrivedMallResponse DescribePersonArrivedMall(Models\DescribePersonArrivedMallRequest $req) 输出开始时间到结束时间段内的进出场数据。不做按天聚合的情况下，每次进出场，产生一条进出场数据。


 * @method Models\DescribePersonInfoResponse DescribePersonInfo(Models\DescribePersonInfoRequest $req) 指定门店获取所有顾客详情列表，包含客户ID、图片、年龄、性别
 * @method Models\DescribePersonInfoByFacePictureResponse DescribePersonInfoByFacePicture(Models\DescribePersonInfoByFacePictureRequest $req) 通过上传人脸图片检索系统face id、顾客身份信息及底图
 * @method Models\DescribePersonTraceResponse DescribePersonTrace(Models\DescribePersonTraceRequest $req) 输出开始时间到结束时间段内的进出场数据。
 * @method Models\DescribePersonTraceDetailResponse DescribePersonTraceDetail(Models\DescribePersonTraceDetailRequest $req) 查询客户单次到场轨迹明细
 * @method Models\DescribePersonVisitInfoResponse DescribePersonVisitInfo(Models\DescribePersonVisitInfoRequest $req) 获取门店指定时间范围内的所有用户到访信息记录，支持的时间范围：过去365天，含当天。
 * @method Models\DescribeShopHourTrafficInfoResponse DescribeShopHourTrafficInfo(Models\DescribeShopHourTrafficInfoRequest $req) 按小时提供查询日期范围内门店的每天每小时累计客流人数数据，支持的时间范围：过去365天，含当天。
 * @method Models\DescribeShopInfoResponse DescribeShopInfo(Models\DescribeShopInfoRequest $req) 根据客户身份标识获取客户下所有的门店信息列表
 * @method Models\DescribeShopTrafficInfoResponse DescribeShopTrafficInfo(Models\DescribeShopTrafficInfoRequest $req) 按天提供查询日期范围内门店的单日累计客流人数，支持的时间范围：过去365天，含当天。
 * @method Models\DescribeTrajectoryDataResponse DescribeTrajectoryData(Models\DescribeTrajectoryDataRequest $req) 获取动线轨迹信息
 * @method Models\DescribeZoneFlowAgeInfoByZoneIdResponse DescribeZoneFlowAgeInfoByZoneId(Models\DescribeZoneFlowAgeInfoByZoneIdRequest $req) 获取指定区域人流各年龄占比
 * @method Models\DescribeZoneFlowAndStayTimeResponse DescribeZoneFlowAndStayTime(Models\DescribeZoneFlowAndStayTimeRequest $req) 获取区域人流和停留时间
 * @method Models\DescribeZoneFlowDailyByZoneIdResponse DescribeZoneFlowDailyByZoneId(Models\DescribeZoneFlowDailyByZoneIdRequest $req) 获取指定区域每日客流量
 * @method Models\DescribeZoneFlowGenderAvrStayTimeByZoneIdResponse DescribeZoneFlowGenderAvrStayTimeByZoneId(Models\DescribeZoneFlowGenderAvrStayTimeByZoneIdRequest $req) 获取指定区域不同年龄段男女平均停留时间
 * @method Models\DescribeZoneFlowGenderInfoByZoneIdResponse DescribeZoneFlowGenderInfoByZoneId(Models\DescribeZoneFlowGenderInfoByZoneIdRequest $req) 获取指定区域性别占比
 * @method Models\DescribeZoneFlowHourlyByZoneIdResponse DescribeZoneFlowHourlyByZoneId(Models\DescribeZoneFlowHourlyByZoneIdRequest $req) 获取指定区域分时客流量
 * @method Models\DescribeZoneTrafficInfoResponse DescribeZoneTrafficInfo(Models\DescribeZoneTrafficInfoRequest $req) 按天提供查询日期范围内，客户指定门店下的所有区域（优Mall部署时已配置区域）的累计客流人次和平均停留时间。支持的时间范围：过去365天，含当天。
 * @method Models\ModifyPersonFeatureInfoResponse ModifyPersonFeatureInfo(Models\ModifyPersonFeatureInfoRequest $req) 支持修改黑白名单类型的顾客特征
 * @method Models\ModifyPersonTagInfoResponse ModifyPersonTagInfo(Models\ModifyPersonTagInfoRequest $req) 标记到店顾客的身份类型，例如黑名单、白名单等

 * @method Models\ModifyPersonTypeResponse ModifyPersonType(Models\ModifyPersonTypeRequest $req) 修改顾客身份类型接口
 * @method Models\RegisterCallbackResponse RegisterCallback(Models\RegisterCallbackRequest $req) 调用本接口在优Mall中注册自己集团的到店通知回调接口地址，接口协议为HTTP或HTTPS。注册后，若集团有特殊身份（例如老客）到店通知，优Mall后台将主动将到店信息push给该接口
 */

class YoumallClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "youmall.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "youmall";

    /**
     * @var string
     */
    protected $version = "2018-02-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("youmall")."\\"."V20180228\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
