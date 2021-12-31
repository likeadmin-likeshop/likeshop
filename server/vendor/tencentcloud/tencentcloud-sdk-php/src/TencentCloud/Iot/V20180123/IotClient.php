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

namespace TencentCloud\Iot\V20180123;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iot\V20180123\Models as Models;

/**
 * @method Models\ActivateRuleResponse ActivateRule(Models\ActivateRuleRequest $req) 启用规则
 * @method Models\AddDeviceResponse AddDevice(Models\AddDeviceRequest $req) 提供在指定的产品Id下创建一个设备的能力，生成设备名称与设备秘钥。
 * @method Models\AddProductResponse AddProduct(Models\AddProductRequest $req) 本接口(AddProduct)用于创建、定义某款硬件产品。
 * @method Models\AddRuleResponse AddRule(Models\AddRuleRequest $req) 新增规则
 * @method Models\AddTopicResponse AddTopic(Models\AddTopicRequest $req) 新增Topic，用于设备或应用发布消息至该Topic或订阅该Topic的消息。
 * @method Models\AppAddUserResponse AppAddUser(Models\AppAddUserRequest $req) 为APP提供用户注册功能
 * @method Models\AppDeleteDeviceResponse AppDeleteDevice(Models\AppDeleteDeviceRequest $req) 用户解除与设备的关联关系，解除后APP用户无法控制设备，获取设备数据
 * @method Models\AppGetDeviceResponse AppGetDevice(Models\AppGetDeviceRequest $req) 获取绑定设备的基本信息与数据模板定义
 * @method Models\AppGetDeviceDataResponse AppGetDeviceData(Models\AppGetDeviceDataRequest $req) 获取绑定设备数据，用于实时展示设备的最新数据
 * @method Models\AppGetDeviceStatusesResponse AppGetDeviceStatuses(Models\AppGetDeviceStatusesRequest $req) 获取绑定设备的上下线状态
 * @method Models\AppGetDevicesResponse AppGetDevices(Models\AppGetDevicesRequest $req) 获取用户的绑定设备列表
 * @method Models\AppGetTokenResponse AppGetToken(Models\AppGetTokenRequest $req) 获取用户token
 * @method Models\AppGetUserResponse AppGetUser(Models\AppGetUserRequest $req) 获取用户信息
 * @method Models\AppIssueDeviceControlResponse AppIssueDeviceControl(Models\AppIssueDeviceControlRequest $req) 用户通过APP控制设备
 * @method Models\AppResetPasswordResponse AppResetPassword(Models\AppResetPasswordRequest $req) 重置APP用户密码
 * @method Models\AppSecureAddDeviceResponse AppSecureAddDevice(Models\AppSecureAddDeviceRequest $req) 用户绑定设备，绑定后可以在APP端进行控制。绑定设备前需调用“获取设备绑定签名”接口
 * @method Models\AppUpdateDeviceResponse AppUpdateDevice(Models\AppUpdateDeviceRequest $req) 修改设备别名，便于用户个性化定义设备的名称
 * @method Models\AppUpdateUserResponse AppUpdateUser(Models\AppUpdateUserRequest $req) 修改用户信息
 * @method Models\AssociateSubDeviceToGatewayProductResponse AssociateSubDeviceToGatewayProduct(Models\AssociateSubDeviceToGatewayProductRequest $req) 关联子设备产品和网关产品
 * @method Models\DeactivateRuleResponse DeactivateRule(Models\DeactivateRuleRequest $req) 禁用规则
 * @method Models\DeleteDeviceResponse DeleteDevice(Models\DeleteDeviceRequest $req) 提供在指定的产品Id下删除一个设备的能力。
 * @method Models\DeleteProductResponse DeleteProduct(Models\DeleteProductRequest $req) 删除用户指定的产品Id对应的信息。
 * @method Models\DeleteRuleResponse DeleteRule(Models\DeleteRuleRequest $req) 删除规则
 * @method Models\DeleteTopicResponse DeleteTopic(Models\DeleteTopicRequest $req) 删除Topic
 * @method Models\GetDataHistoryResponse GetDataHistory(Models\GetDataHistoryRequest $req) 批量获取设备某一段时间范围的设备上报数据。该接口适用于使用高级版类型的产品
 * @method Models\GetDebugLogResponse GetDebugLog(Models\GetDebugLogRequest $req) 获取设备的调试日志，用于定位问题
 * @method Models\GetDeviceResponse GetDevice(Models\GetDeviceRequest $req) 提供查询某个设备详细信息的能力。
 * @method Models\GetDeviceDataResponse GetDeviceData(Models\GetDeviceDataRequest $req) 获取某个设备当前上报到云端的数据，该接口适用于使用数据模板协议的产品。
 * @method Models\GetDeviceLogResponse GetDeviceLog(Models\GetDeviceLogRequest $req) 批量获取设备与云端的详细通信日志，该接口适用于使用高级版类型的产品。
 * @method Models\GetDeviceSignaturesResponse GetDeviceSignatures(Models\GetDeviceSignaturesRequest $req) 获取设备绑定签名，用于用户绑定某个设备的应用场景
 * @method Models\GetDeviceStatisticsResponse GetDeviceStatistics(Models\GetDeviceStatisticsRequest $req) 查询某段时间范围内产品的在线、激活设备数
 * @method Models\GetDeviceStatusesResponse GetDeviceStatuses(Models\GetDeviceStatusesRequest $req) 批量获取设备的当前状态，状态包括在线、离线或未激活状态。
 * @method Models\GetDevicesResponse GetDevices(Models\GetDevicesRequest $req) 提供分页查询某个产品Id下设备信息的能力。
 * @method Models\GetProductResponse GetProduct(Models\GetProductRequest $req) 获取产品定义的详细信息，包括产品名称、产品描述，鉴权模式等信息。
 * @method Models\GetProductsResponse GetProducts(Models\GetProductsRequest $req) 获取用户在物联网套件所创建的所有产品信息。
 * @method Models\GetRuleResponse GetRule(Models\GetRuleRequest $req) 获取转发规则信息
 * @method Models\GetRulesResponse GetRules(Models\GetRulesRequest $req) 获取转发规则列表
 * @method Models\GetTopicResponse GetTopic(Models\GetTopicRequest $req) 获取Topic信息
 * @method Models\GetTopicsResponse GetTopics(Models\GetTopicsRequest $req) 获取Topic列表
 * @method Models\IssueDeviceControlResponse IssueDeviceControl(Models\IssueDeviceControlRequest $req) 提供下发控制指令到指定设备的能力，该接口适用于使用高级版类型的产品。
 * @method Models\PublishMsgResponse PublishMsg(Models\PublishMsgRequest $req) 提供向指定的Topic发布消息的能力，常用于向设备下发控制指令。该接口只适用于产品版本为“基础版”类型的产品，使用高级版的产品需使用“下发设备控制指令”接口
 * @method Models\ResetDeviceResponse ResetDevice(Models\ResetDeviceRequest $req) 重置设备操作，将会为设备生成新的证书及清空最新数据，需谨慎操作。
 * @method Models\UnassociateSubDeviceFromGatewayProductResponse UnassociateSubDeviceFromGatewayProduct(Models\UnassociateSubDeviceFromGatewayProductRequest $req) 取消子设备产品与网关设备产品的关联
 * @method Models\UpdateProductResponse UpdateProduct(Models\UpdateProductRequest $req) 提供修改产品信息及数据模板的能力。
 * @method Models\UpdateRuleResponse UpdateRule(Models\UpdateRuleRequest $req) 更新规则
 */

class IotClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "iot.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "iot";

    /**
     * @var string
     */
    protected $version = "2018-01-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("iot")."\\"."V20180123\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
