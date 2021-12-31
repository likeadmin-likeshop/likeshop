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

namespace TencentCloud\Bm\V20180423;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bm\V20180423\Models as Models;

/**
 * @method Models\AttachCamRoleResponse AttachCamRole(Models\AttachCamRoleRequest $req) 服务器绑定CAM角色，该角色授权访问黑石物理服务器服务，为黑石物理服务器提供了访问资源的权限，如请求服务器的临时证书
 * @method Models\BindPsaTagResponse BindPsaTag(Models\BindPsaTagRequest $req) 为预授权规则绑定标签
 * @method Models\BuyDevicesResponse BuyDevices(Models\BuyDevicesRequest $req) 购买黑石物理机
 * @method Models\CreateCustomImageResponse CreateCustomImage(Models\CreateCustomImageRequest $req) 创建自定义镜像<br>
每个AppId在每个可用区最多保留20个自定义镜像
 * @method Models\CreatePsaRegulationResponse CreatePsaRegulation(Models\CreatePsaRegulationRequest $req) 创建预授权规则
 * @method Models\CreateSpotDeviceResponse CreateSpotDevice(Models\CreateSpotDeviceRequest $req) 创建黑石竞价实例
 * @method Models\CreateUserCmdResponse CreateUserCmd(Models\CreateUserCmdRequest $req) 创建自定义脚本
 * @method Models\DeleteCustomImagesResponse DeleteCustomImages(Models\DeleteCustomImagesRequest $req) 删除自定义镜像<br>
正用于部署或重装中的镜像被删除后，镜像文件将保留一段时间，直到部署或重装结束
 * @method Models\DeletePsaRegulationResponse DeletePsaRegulation(Models\DeletePsaRegulationRequest $req) 删除预授权规则
 * @method Models\DeleteUserCmdsResponse DeleteUserCmds(Models\DeleteUserCmdsRequest $req) 删除自定义脚本
 * @method Models\DescribeCustomImageProcessResponse DescribeCustomImageProcess(Models\DescribeCustomImageProcessRequest $req) 查询自定义镜像制作进度
 * @method Models\DescribeCustomImagesResponse DescribeCustomImages(Models\DescribeCustomImagesRequest $req) 查看自定义镜像列表
 * @method Models\DescribeDeviceClassResponse DescribeDeviceClass(Models\DescribeDeviceClassRequest $req) 获取设备类型
 * @method Models\DescribeDeviceClassPartitionResponse DescribeDeviceClassPartition(Models\DescribeDeviceClassPartitionRequest $req) 查询机型支持的RAID方式， 并返回系统盘的分区和逻辑盘的列表
 * @method Models\DescribeDeviceHardwareInfoResponse DescribeDeviceHardwareInfo(Models\DescribeDeviceHardwareInfoRequest $req) 查询设备硬件配置信息，如 CPU 型号，内存大小，磁盘大小和数量
 * @method Models\DescribeDeviceInventoryResponse DescribeDeviceInventory(Models\DescribeDeviceInventoryRequest $req) 查询设备库存
 * @method Models\DescribeDeviceOperationLogResponse DescribeDeviceOperationLog(Models\DescribeDeviceOperationLogRequest $req) 查询设备操作日志， 如设备重启，重装，设置密码等操作
 * @method Models\DescribeDevicePartitionResponse DescribeDevicePartition(Models\DescribeDevicePartitionRequest $req) 获取物理机的分区格式
 * @method Models\DescribeDevicePositionResponse DescribeDevicePosition(Models\DescribeDevicePositionRequest $req) 查询服务器所在的位置，如机架，上联交换机等信息
 * @method Models\DescribeDevicePriceInfoResponse DescribeDevicePriceInfo(Models\DescribeDevicePriceInfoRequest $req) 查询服务器价格信息，支持设备的批量查找，支持标准机型和弹性机型的混合查找
 * @method Models\DescribeDevicesResponse DescribeDevices(Models\DescribeDevicesRequest $req) 查询物理服务器，可以按照实例，业务IP等过滤
 * @method Models\DescribeHardwareSpecificationResponse DescribeHardwareSpecification(Models\DescribeHardwareSpecificationRequest $req) 查询自定义机型部件信息，包括CpuId对应的型号，DiskTypeId对应的磁盘类型
 * @method Models\DescribeHostedDeviceOutBandInfoResponse DescribeHostedDeviceOutBandInfo(Models\DescribeHostedDeviceOutBandInfoRequest $req) 查询托管设备带外信息
 * @method Models\DescribeOperationResultResponse DescribeOperationResult(Models\DescribeOperationResultRequest $req) 获取异步操作状态的完成状态
 * @method Models\DescribeOsInfoResponse DescribeOsInfo(Models\DescribeOsInfoRequest $req) 查询指定机型所支持的操作系统
 * @method Models\DescribePsaRegulationsResponse DescribePsaRegulations(Models\DescribePsaRegulationsRequest $req) 获取预授权规则列表
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) 查询地域以及可用区
 * @method Models\DescribeRepairTaskConstantResponse DescribeRepairTaskConstant(Models\DescribeRepairTaskConstantRequest $req) 维修任务配置获取
 * @method Models\DescribeTaskInfoResponse DescribeTaskInfo(Models\DescribeTaskInfoRequest $req) 获取用户维修任务列表及详细信息<br>
<br>
TaskStatus（任务状态ID）与状态中文名的对应关系如下：<br>
1：未授权<br>
2：处理中<br>
3：待确认<br>
4：未授权-暂不处理<br>
5：已恢复<br>
6：待确认-未恢复<br>
 * @method Models\DescribeTaskOperationLogResponse DescribeTaskOperationLog(Models\DescribeTaskOperationLogRequest $req) 获取维修任务操作日志
 * @method Models\DescribeUserCmdTaskInfoResponse DescribeUserCmdTaskInfo(Models\DescribeUserCmdTaskInfoRequest $req) 获取自定义脚本任务详细信息
 * @method Models\DescribeUserCmdTasksResponse DescribeUserCmdTasks(Models\DescribeUserCmdTasksRequest $req) 获取自定义脚本任务列表
 * @method Models\DescribeUserCmdsResponse DescribeUserCmds(Models\DescribeUserCmdsRequest $req) 获取自定义脚本信息列表
 * @method Models\DetachCamRoleResponse DetachCamRole(Models\DetachCamRoleRequest $req) 服务器绑定CAM角色
 * @method Models\ModifyCustomImageAttributeResponse ModifyCustomImageAttribute(Models\ModifyCustomImageAttributeRequest $req) 用于修改自定义镜像名或描述
 * @method Models\ModifyDeviceAliasesResponse ModifyDeviceAliases(Models\ModifyDeviceAliasesRequest $req) 修改服务器名称
 * @method Models\ModifyDeviceAutoRenewFlagResponse ModifyDeviceAutoRenewFlag(Models\ModifyDeviceAutoRenewFlagRequest $req) 修改物理机服务器自动续费标志
 * @method Models\ModifyLanIpResponse ModifyLanIp(Models\ModifyLanIpRequest $req) 修改物理机内网IP（不重装系统）
 * @method Models\ModifyPayModePre2PostResponse ModifyPayModePre2Post(Models\ModifyPayModePre2PostRequest $req) 将设备的预付费模式修改为后付费计费模式，支持批量转换。（前提是客户要加入黑石物理机后付费计费的白名单，申请黑石物理机后付费可以联系腾讯云客服）
 * @method Models\ModifyPsaRegulationResponse ModifyPsaRegulation(Models\ModifyPsaRegulationRequest $req) 允许修改规则信息及关联故障类型
 * @method Models\ModifyUserCmdResponse ModifyUserCmd(Models\ModifyUserCmdRequest $req) 修改自定义脚本
 * @method Models\OfflineDevicesResponse OfflineDevices(Models\OfflineDevicesRequest $req) 销毁黑石物理机实例：可以销毁物理机列表中的竞价实例，或回收站列表中所有计费模式的实例
 * @method Models\RebootDevicesResponse RebootDevices(Models\RebootDevicesRequest $req) 重启机器
 * @method Models\RecoverDevicesResponse RecoverDevices(Models\RecoverDevicesRequest $req) 恢复回收站中的物理机（仅限后付费的物理机）
 * @method Models\ReloadDeviceOsResponse ReloadDeviceOs(Models\ReloadDeviceOsRequest $req) 重装操作系统
 * @method Models\RepairTaskControlResponse RepairTaskControl(Models\RepairTaskControlRequest $req) 此接口用于操作维修任务<br>
入参TaskId为维修任务ID<br>
入参Operate表示对维修任务的操作，支持如下取值：<br>
AuthorizeRepair（授权维修）<br>
Ignore（暂不提醒）<br>
ConfirmRecovered（维修完成后，确认故障恢复）<br>
ConfirmUnRecovered（维修完成后，确认故障未恢复）<br>
<br>
操作约束（当前任务状态(TaskStatus)->对应可执行的操作）：<br>
未授权(1)->授权维修；暂不处理<br>
暂不处理(4)->授权维修<br>
待确认(3)->确认故障恢复；确认故障未恢复<br>
未恢复(6)->确认故障恢复<br>
<br>
对于Ping不可达故障的任务，还允许：<br>
未授权->确认故障恢复<br>
暂不处理->确认故障恢复<br>
<br>
处理中与已恢复状态的任务不允许进行操作。<br>
<br>
详细信息请访问：https://cloud.tencent.com/document/product/386/18190
 * @method Models\ResetDevicePasswordResponse ResetDevicePassword(Models\ResetDevicePasswordRequest $req) 重置服务器密码
 * @method Models\ReturnDevicesResponse ReturnDevices(Models\ReturnDevicesRequest $req) 退回物理机至回收站，支持批量退还不同计费模式的物理机（包括预付费、后付费、预付费转后付费）
 * @method Models\RunUserCmdResponse RunUserCmd(Models\RunUserCmdRequest $req) 运行自定义脚本
 * @method Models\SetOutBandVpnAuthPasswordResponse SetOutBandVpnAuthPassword(Models\SetOutBandVpnAuthPasswordRequest $req) 设置带外VPN认证用户密码
 * @method Models\ShutdownDevicesResponse ShutdownDevices(Models\ShutdownDevicesRequest $req) 关闭服务器
 * @method Models\StartDevicesResponse StartDevices(Models\StartDevicesRequest $req) 开启服务器
 * @method Models\UnbindPsaTagResponse UnbindPsaTag(Models\UnbindPsaTagRequest $req) 解除标签与预授权规则的绑定
 */

class BmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "bm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "bm";

    /**
     * @var string
     */
    protected $version = "2018-04-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("bm")."\\"."V20180423\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
