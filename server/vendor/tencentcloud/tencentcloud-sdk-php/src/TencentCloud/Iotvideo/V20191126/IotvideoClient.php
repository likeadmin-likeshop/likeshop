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

namespace TencentCloud\Iotvideo\V20191126;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iotvideo\V20191126\Models as Models;

/**
 * @method Models\ClearDeviceActiveCodeResponse ClearDeviceActiveCode(Models\ClearDeviceActiveCodeRequest $req) 清除设备激活码
 * @method Models\CreateAnonymousAccessTokenResponse CreateAnonymousAccessToken(Models\CreateAnonymousAccessTokenRequest $req) 创建匿名访问Token
 * @method Models\CreateAppUsrResponse CreateAppUsr(Models\CreateAppUsrRequest $req) 本接口（CreateAppUsr）用于接收由厂商云发送过来的注册请求,建立厂商云终端用户与IoT Video终端用户的映射关系。
 * @method Models\CreateBindingResponse CreateBinding(Models\CreateBindingRequest $req) 本接口（CreateBinding）用于终端用户和设备进行绑定，具体的应用场景如下：
    终端用户与设备具有“强关联”关系。用户与设备绑定之后，用户终端即具备了该设备的访问权限,访问或操作设备时，无需获取设备访问Token。
 * @method Models\CreateDevTokenResponse CreateDevToken(Models\CreateDevTokenRequest $req) 本接口（CreateDevToken）用于以下场景：
终端用户与设备没有强绑定关联关系;
允许终端用户短时或一次性临时访问设备;
当终端用户与设备有强绑定关系时，可以不用调用此接口
 * @method Models\CreateDevicesResponse CreateDevices(Models\CreateDevicesRequest $req) 本接口（CreateDevices）用于批量创建新的物联网视频通信设备。
注意：腾讯云不会对设备私钥进行保存，请自行保管好您的设备私钥。
 * @method Models\CreateGencodeResponse CreateGencode(Models\CreateGencodeRequest $req) 本接口（CreateGencode）用于生成设备物模型源代码
 * @method Models\CreateIotDataTypeResponse CreateIotDataType(Models\CreateIotDataTypeRequest $req) 本接口（CreateIotDataType）用于创建自定义物模型数据类型。
 * @method Models\CreateIotModelResponse CreateIotModel(Models\CreateIotModelRequest $req) 本接口（CreateIotModel）用于定义的物模型提交。
该接口实现了物模型草稿箱的功能，保存用户最后一次编辑的物模型数据。
 * @method Models\CreateProductResponse CreateProduct(Models\CreateProductRequest $req) 本接口（CreateProduct）用于创建一个新的物联网智能视频产品。
 * @method Models\CreateStorageResponse CreateStorage(Models\CreateStorageRequest $req) 该接口已经停止维护，请勿使用
 * @method Models\CreateStorageServiceResponse CreateStorageService(Models\CreateStorageServiceRequest $req) 购买云存服务
 * @method Models\CreateTraceIdsResponse CreateTraceIds(Models\CreateTraceIdsRequest $req) 本接口（CreateTraceIds）用于将设备加到日志跟踪白名单。
 * @method Models\CreateUploadPathResponse CreateUploadPath(Models\CreateUploadPathRequest $req) 本接口（CreateUploadPath）用于获取固件上传路径。
 * @method Models\CreateUsrTokenResponse CreateUsrToken(Models\CreateUsrTokenRequest $req) 本接口（CreateUsrToken）用于终端用户获取IoT Video平台的accessToken，初始化SDK,连接到IoT Video接入服务器。
 * @method Models\DeleteAppUsrResponse DeleteAppUsr(Models\DeleteAppUsrRequest $req) 本接口（DeleteAppUsr）用于删除终端用户。
 * @method Models\DeleteBindingResponse DeleteBinding(Models\DeleteBindingRequest $req) 本接口（DeleteBinding）用于终端用户和设备进行解绑定。
 * @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) 本接口（DeleteDevice）用于删除设备，可进行批量操作，每次操作最多100台设备。
 * @method Models\DeleteIotDataTypeResponse DeleteIotDataType(Models\DeleteIotDataTypeRequest $req) 本接口（DeleteIotDataType）用于删除自定义物模型数据类型。
 * @method Models\DeleteMessageQueueResponse DeleteMessageQueue(Models\DeleteMessageQueueRequest $req) 本接口（DeleteMessageQueue）用于删除物联网智能视频产品的转发消息配置信息。
 * @method Models\DeleteOtaVersionResponse DeleteOtaVersion(Models\DeleteOtaVersionRequest $req) 本接口（DeleteOtaVersion）用于删除固件版本信息。
 * @method Models\DeleteProductResponse DeleteProduct(Models\DeleteProductRequest $req) 本接口（DeleteProduct）用于删除一个物联网智能视频产品。
 * @method Models\DeleteTraceIdsResponse DeleteTraceIds(Models\DeleteTraceIdsRequest $req) 本接口（DeleteTraceIds）用于将设备从日志跟踪白名单中删除，该接口可批量操作，最多支持同时操作100台设备。
 * @method Models\DeliverStorageServiceResponse DeliverStorageService(Models\DeliverStorageServiceRequest $req) 将已购买的云存服务转移到另一设备
 * @method Models\DescribeAccountBalanceResponse DescribeAccountBalance(Models\DescribeAccountBalanceRequest $req) 客户可通过本接口获取账户余额信息, 默认接口请求频率限制：1次/秒
 * @method Models\DescribeBindDevResponse DescribeBindDev(Models\DescribeBindDevRequest $req) 本接口（DescribeBindDev）用于查询终端用户绑定的设备列表。
 * @method Models\DescribeBindUsrResponse DescribeBindUsr(Models\DescribeBindUsrRequest $req) 本接口（DescribeBindUsr）用于查询设备被分享的所有用户列表。
 * @method Models\DescribeDeviceResponse DescribeDevice(Models\DescribeDeviceRequest $req) 本接口（DescribeDevice）获取设备信息。
 * @method Models\DescribeDeviceModelResponse DescribeDeviceModel(Models\DescribeDeviceModelRequest $req) 本接口（DescribeDeviceModel）用于获取设备物模型。
 * @method Models\DescribeDevicesResponse DescribeDevices(Models\DescribeDevicesRequest $req) 本接口（DescribeDevices）用于获取设备信息列表。
 * @method Models\DescribeIotDataTypeResponse DescribeIotDataType(Models\DescribeIotDataTypeRequest $req) 本接口（DescribeIotDataType）用于查询自定义的物模型数据类型。
 * @method Models\DescribeIotModelResponse DescribeIotModel(Models\DescribeIotModelRequest $req) 本接口（DescribeIotModel）用于获取物模型定义详情。
 * @method Models\DescribeIotModelsResponse DescribeIotModels(Models\DescribeIotModelsRequest $req) 本接口（DescribeIotModels）用于列出物模型历史版本列表。
 * @method Models\DescribeLogsResponse DescribeLogs(Models\DescribeLogsRequest $req) 本接口（DescribeLogs）用于查询设备日志列表。
设备日志最长保留时长为15天,超期自动清除。
 * @method Models\DescribeMessageQueueResponse DescribeMessageQueue(Models\DescribeMessageQueueRequest $req) 本接口（DescribeMessageQueue）用于查询物联网智能视频产品转发消息配置。
 * @method Models\DescribeModelDataRetResponse DescribeModelDataRet(Models\DescribeModelDataRetRequest $req) 本接口（DescribeModelDataRet）用于根据TaskId获取对设备物模型操作最终响应的结果。
 * @method Models\DescribeOsListResponse DescribeOsList(Models\DescribeOsListRequest $req) 查看操作系统支持的芯片列表
 * @method Models\DescribeOtaVersionsResponse DescribeOtaVersions(Models\DescribeOtaVersionsRequest $req) 本接口（DescribeOtaVersions）用于查询固件版本信息列表。
 * @method Models\DescribeProductResponse DescribeProduct(Models\DescribeProductRequest $req) 本接口（DescribeProduct）用于获取单个产品的详细信息。
 * @method Models\DescribeProductsResponse DescribeProducts(Models\DescribeProductsRequest $req) 本接口（DescribeProducts）用于列出用户账号下的物联网智能视频产品列表。
 * @method Models\DescribePubVersionsResponse DescribePubVersions(Models\DescribePubVersionsRequest $req) 本接口（DescribePubVersions）用于获取某一产品发布过的全部固件版本。
 * @method Models\DescribeRechargeRecordsResponse DescribeRechargeRecords(Models\DescribeRechargeRecordsRequest $req) 客户可通过本接口获取充值记录信息, 一次最多返回50条记录。
 * @method Models\DescribeRegistrationStatusResponse DescribeRegistrationStatus(Models\DescribeRegistrationStatusRequest $req) 本接口（DescribeRegistrationStatus）用于查询终端用户的注册状态。
 * @method Models\DescribeRunLogResponse DescribeRunLog(Models\DescribeRunLogRequest $req) 本接口（DescribeRunLog）用于获取设备运行日志。
 * @method Models\DescribeStorageServiceResponse DescribeStorageService(Models\DescribeStorageServiceRequest $req) 查询云存服务
 * @method Models\DescribeStreamResponse DescribeStream(Models\DescribeStreamRequest $req) 请求设备直播流地址
 * @method Models\DescribeTraceIdsResponse DescribeTraceIds(Models\DescribeTraceIdsRequest $req) 本接口（DescribeTraceIds）用于查询设备日志跟踪白名单。
 * @method Models\DescribeTraceStatusResponse DescribeTraceStatus(Models\DescribeTraceStatusRequest $req) 本接口（DescribeTraceStatus）用于查询指定设备是否在白名单中。
 * @method Models\DisableDeviceResponse DisableDevice(Models\DisableDeviceRequest $req) 本接口（DisableDevice）用于禁用设备，可进行批量操作，每次操作最多100台设备。
 * @method Models\DisableDeviceStreamResponse DisableDeviceStream(Models\DisableDeviceStreamRequest $req) 本接口（DisableDeviceStream）用于停止设备推流，可进行批量操作，每次操作最多100台设备。
 * @method Models\DisableOtaVersionResponse DisableOtaVersion(Models\DisableOtaVersionRequest $req) 本接口（DisableOtaVersion）用于禁用固件版本。
 * @method Models\ModifyDeviceResponse ModifyDevice(Models\ModifyDeviceRequest $req) 修改设备信息
 * @method Models\ModifyDeviceActionResponse ModifyDeviceAction(Models\ModifyDeviceActionRequest $req) 本接口（ModifyDeviceAction）用于修改设备物模型的行为（Action）。

可对ctlVal数据属性进行写入,如:Action.takePhoto.ctlVal,设备在线且成功发送到设备才返回,物模型写入数据时,不需要传入时标信息,平台以当前时标作为数据的时标更新物模型中的时标信息。
注意:
  1.若设备当前不在线,会直接返回错误
  2.若设备网络出现异常时,消息发送可能超时,超时等待最长时间为3秒
  3.value的内容必须与实际物模型的定义一致
 * @method Models\ModifyDevicePropertyResponse ModifyDeviceProperty(Models\ModifyDevicePropertyRequest $req) 本接口（ModifyDeviceProperty）用于修改设备物模型的属性（ProWritable）。
可对setVal数据属性进行写入,如:
ProWritable.Pos.setVal
对于嵌套类型的可写属性，可以仅对其部分数据内容进行写入，如:
ProWritable.Pos.setVal.x;
可写属性云端写入成功即返回;云端向设备端发布属性变更参数;若当前设备不在线,在设备下次上线时会自动更新这些属性参数;
物模型写入数据时,不需要传入时标信息,平台以当前时标作为数据的时标更新物模型中的时标信息。
 * @method Models\ModifyProductResponse ModifyProduct(Models\ModifyProductRequest $req) 本接口（ModifyProduct）用于编辑物联网智能视频产品的相关信息。
 * @method Models\ModifyVerContentResponse ModifyVerContent(Models\ModifyVerContentRequest $req) 编辑版本描述信息
 * @method Models\RefundStorageServiceResponse RefundStorageService(Models\RefundStorageServiceRequest $req) 本接口（RefundStorageService）用于退订已购买的云存服务。
退订时，云存服务对应订单的处理方式 : 
1. 未开始的订单自动回到已付费订单池
2. 已开始的订单自动失效
3. 购买云存接口,优先从已付费订单池中分配订单
 * @method Models\RunDeviceResponse RunDevice(Models\RunDeviceRequest $req) 本接口（RunDevice）用于启用设备，可进行批量操作，每次操作最多100台设备。
 * @method Models\RunDeviceStreamResponse RunDeviceStream(Models\RunDeviceStreamRequest $req) 本接口（RunDeviceStream）用于开启设备推流，可进行批量操作，每次操作最多100台设备。
 * @method Models\RunIotModelResponse RunIotModel(Models\RunIotModelRequest $req) 本接口（RunIotModel）用于对定义的物模型进行发布。
 * @method Models\RunOtaVersionResponse RunOtaVersion(Models\RunOtaVersionRequest $req) 本接口（RunOtaVersion）用于固件版本正式发布。
 * @method Models\RunTestOtaVersionResponse RunTestOtaVersion(Models\RunTestOtaVersionRequest $req) 本接口（RunTestOtaVersion）用于固件版本测试发布。
 * @method Models\SendOnlineMsgResponse SendOnlineMsg(Models\SendOnlineMsgRequest $req) 本接口（SendOnlineMsg）用于向设备发送在线消息。
注意：
若设备当前不在线,会直接返回错误;
若设备网络出现异常时,消息发送可能超时,超时等待最长时间为3秒.waitresp非0情况下,会导致本接口阻塞3秒。
 * @method Models\SetMessageQueueResponse SetMessageQueue(Models\SetMessageQueueRequest $req) 本接口（SetMessageQueue）用于配置物联网智能视频产品的转发消息队列。
 * @method Models\UpgradeDeviceResponse UpgradeDevice(Models\UpgradeDeviceRequest $req) 本接口（UpgradeDevice）用于对设备进行固件升级。
该接口向指定的设备下发固件更新指令,可将固件升级到任意版本(可实现固件降级)。
警告:使能UpgradeNow参数存在一定的风险性！建议仅在debug场景下使用!
 * @method Models\UploadOtaVersionResponse UploadOtaVersion(Models\UploadOtaVersionRequest $req) 本接口（UploadOtaVersion）接收上传到控制台的固件版本信息。
 */

class IotvideoClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "iotvideo.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "iotvideo";

    /**
     * @var string
     */
    protected $version = "2019-11-26";

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
        $respClass = "TencentCloud"."\\".ucfirst("iotvideo")."\\"."V20191126\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
