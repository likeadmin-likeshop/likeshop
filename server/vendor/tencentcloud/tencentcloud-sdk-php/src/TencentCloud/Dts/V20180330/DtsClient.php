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

namespace TencentCloud\Dts\V20180330;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dts\V20180330\Models as Models;

/**
 * @method Models\ActivateSubscribeResponse ActivateSubscribe(Models\ActivateSubscribeRequest $req) 本接口用于配置数据订阅，只有在未配置状态的订阅实例才能调用此接口。
 * @method Models\CompleteMigrateJobResponse CompleteMigrateJob(Models\CompleteMigrateJobRequest $req) 本接口（CompleteMigrateJob）用于完成数据迁移任务。
选择采用增量迁移方式的任务, 需要在迁移进度进入准备完成阶段后, 调用本接口, 停止迁移增量数据。
通过DescribeMigrateJobs接口查询到任务的状态为准备完成（status=8）时，此时可以调用本接口完成迁移任务。

 * @method Models\CreateMigrateCheckJobResponse CreateMigrateCheckJob(Models\CreateMigrateCheckJobRequest $req) 创建校验迁移任务
在开始迁移前, 必须调用本接口创建校验, 且校验成功后才能开始迁移. 校验的结果可以通过DescribeMigrateCheckJob查看.
校验成功后,迁移任务若有修改, 则必须重新创建校验并通过后, 才能开始迁移.
 * @method Models\CreateMigrateJobResponse CreateMigrateJob(Models\CreateMigrateJobRequest $req) 本接口（CreateMigrateJob）用于创建数据迁移任务。

如果是金融区链路, 请使用域名: dts.ap-shenzhen-fsi.tencentcloudapi.com
 * @method Models\CreateSubscribeResponse CreateSubscribe(Models\CreateSubscribeRequest $req) 本接口(CreateSubscribe)用于创建一个数据订阅实例。
 * @method Models\CreateSyncCheckJobResponse CreateSyncCheckJob(Models\CreateSyncCheckJobRequest $req) 在调用 StartSyncJob 接口启动灾备同步前, 必须调用本接口创建校验, 且校验成功后才能开始同步数据. 校验的结果可以通过 DescribeSyncCheckJob 查看.
校验成功后才能启动同步.
 * @method Models\CreateSyncJobResponse CreateSyncJob(Models\CreateSyncJobRequest $req) 本接口(CreateSyncJob)用于创建灾备同步任务。
创建同步任务后，可以通过 CreateSyncCheckJob 接口发起校验任务。校验成功后才可以通过 StartSyncJob 接口启动同步任务。
 * @method Models\DeleteMigrateJobResponse DeleteMigrateJob(Models\DeleteMigrateJobRequest $req) 本接口（DeleteMigrationJob）用于删除数据迁移任务。当通过DescribeMigrateJobs接口查询到任务的状态为：检验中（status=3）、运行中（status=7）、准备完成（status=8）、撤销中（status=11）或者完成中（status=12）时，不允许删除任务。
 * @method Models\DeleteSyncJobResponse DeleteSyncJob(Models\DeleteSyncJobRequest $req) 删除灾备同步任务 （运行中的同步任务不能删除）。
 * @method Models\DescribeAsyncRequestInfoResponse DescribeAsyncRequestInfo(Models\DescribeAsyncRequestInfoRequest $req) 本接口（DescribeAsyncRequestInfo）用于查询任务执行结果
 * @method Models\DescribeMigrateCheckJobResponse DescribeMigrateCheckJob(Models\DescribeMigrateCheckJobRequest $req) 本接口用于创建校验后,获取校验的结果. 能查询到当前校验的状态和进度. 
若通过校验, 则可调用'StartMigrateJob' 开始迁移.
若未通过校验, 则能查询到校验失败的原因. 请按照报错, 通过'ModifyMigrateJob'修改迁移配置或是调整源/目标实例的相关参数.
 * @method Models\DescribeMigrateJobsResponse DescribeMigrateJobs(Models\DescribeMigrateJobsRequest $req) 查询数据迁移任务.
如果是金融区链路, 请使用域名: https://dts.ap-shenzhen-fsi.tencentcloudapi.com
 * @method Models\DescribeRegionConfResponse DescribeRegionConf(Models\DescribeRegionConfRequest $req) 本接口（DescribeRegionConf）用于查询可售卖订阅实例的地域
 * @method Models\DescribeSubscribeConfResponse DescribeSubscribeConf(Models\DescribeSubscribeConfRequest $req) 本接口（DescribeSubscribeConf）用于查询订阅实例配置
 * @method Models\DescribeSubscribesResponse DescribeSubscribes(Models\DescribeSubscribesRequest $req) 本接口(DescribeSubscribes)获取数据订阅实例信息列表，默认分页，每次返回20条
 * @method Models\DescribeSyncCheckJobResponse DescribeSyncCheckJob(Models\DescribeSyncCheckJobRequest $req) 本接口用于在通过 CreateSyncCheckJob 接口创建灾备同步校验任务后，获取校验的结果。能查询到当前校验的状态和进度。
若通过校验, 则可调用 StartSyncJob 启动同步任务。
若未通过校验, 则会返回校验失败的原因。 可通过 ModifySyncJob 修改配置，然后再次发起校验。
校验任务需要大概约30秒，当返回的 Status 不为 finished 时表示尚未校验完成，需要轮询该接口。
如果 Status=finished 且 CheckFlag=1 时表示校验成功。
如果 Status=finished 且 CheckFlag !=1 时表示校验失败。
 * @method Models\DescribeSyncJobsResponse DescribeSyncJobs(Models\DescribeSyncJobsRequest $req) 查询在迁移平台发起的灾备同步任务
 * @method Models\IsolateSubscribeResponse IsolateSubscribe(Models\IsolateSubscribeRequest $req) 本接口（IsolateSubscribe）用于隔离小时计费的订阅实例。调用后，订阅实例将不能使用，同时停止计费。
 * @method Models\ModifyMigrateJobResponse ModifyMigrateJob(Models\ModifyMigrateJobRequest $req) 本接口（ModifyMigrateJob）用于修改数据迁移任务。
当迁移任务处于下述状态时，允许调用本接口修改迁移任务：迁移创建中（status=1）、 校验成功(status=4)、校验失败(status=5)、迁移失败(status=10)。但源实例、目标实例类型和目标实例地域不允许修改。

如果是金融区链路, 请使用域名: dts.ap-shenzhen-fsi.tencentcloudapi.com
 * @method Models\ModifySubscribeAutoRenewFlagResponse ModifySubscribeAutoRenewFlag(Models\ModifySubscribeAutoRenewFlagRequest $req) 修改订阅实例自动续费标识
 * @method Models\ModifySubscribeConsumeTimeResponse ModifySubscribeConsumeTime(Models\ModifySubscribeConsumeTimeRequest $req) 本接口(ModifySubscribeConsumeTime)用于修改数据订阅通道的消费时间点
 * @method Models\ModifySubscribeNameResponse ModifySubscribeName(Models\ModifySubscribeNameRequest $req) 本接口(ModifySubscribeName)用于修改数据订阅实例的名称
 * @method Models\ModifySubscribeObjectsResponse ModifySubscribeObjects(Models\ModifySubscribeObjectsRequest $req) 本接口(ModifySubscribeObjects)用于修改数据订阅通道的订阅规则
 * @method Models\ModifySubscribeVipVportResponse ModifySubscribeVipVport(Models\ModifySubscribeVipVportRequest $req) 本接口(ModifySubscribeVipVport)用于修改数据订阅实例的IP和端口号
 * @method Models\ModifySyncJobResponse ModifySyncJob(Models\ModifySyncJobRequest $req) 修改灾备同步任务. 
当同步任务处于下述状态时, 允许调用本接口: 同步任务创建中, 创建完成, 校验成功, 校验失败. 
源实例和目标实例信息不允许修改，可以修改任务名、需要同步的库表。
 * @method Models\OfflineIsolatedSubscribeResponse OfflineIsolatedSubscribe(Models\OfflineIsolatedSubscribeRequest $req) 本接口（OfflineIsolatedSubscribe）用于下线已隔离的数据订阅实例
 * @method Models\ResetSubscribeResponse ResetSubscribe(Models\ResetSubscribeRequest $req) 本接口(ResetSubscribe)用于重置数据订阅实例，已经激活的数据订阅实例，重置后可以使用ActivateSubscribe接口绑定其他的数据库实例
 * @method Models\StartMigrateJobResponse StartMigrateJob(Models\StartMigrateJobRequest $req) 本接口（StartMigrationJob）用于启动迁移任务。非定时迁移任务会在调用后立即开始迁移，定时任务则会开始倒计时。
调用此接口前，请务必先使用CreateMigrateCheckJob校验数据迁移任务，并通过DescribeMigrateJobs接口查询到任务状态为校验通过（status=4）时，才能启动数据迁移任务。
 * @method Models\StartSyncJobResponse StartSyncJob(Models\StartSyncJobRequest $req) 创建的灾备同步任务在通过 CreateSyncCheckJob 和 DescribeSyncCheckJob 确定校验成功后，可以调用该接口启动同步
 * @method Models\StopMigrateJobResponse StopMigrateJob(Models\StopMigrateJobRequest $req) 本接口（StopMigrateJob）用于撤销数据迁移任务。
在迁移过程中允许调用该接口撤销迁移, 撤销迁移的任务会失败。通过DescribeMigrateJobs接口查询到任务状态为运行中（status=7）或准备完成（status=8）时，才能撤销数据迁移任务。
 * @method Models\SwitchDrToMasterResponse SwitchDrToMaster(Models\SwitchDrToMasterRequest $req) 将灾备升级为主实例，停止从原来所属主实例的同步，断开主备关系。
 */

class DtsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dts.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dts";

    /**
     * @var string
     */
    protected $version = "2018-03-30";

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
        $respClass = "TencentCloud"."\\".ucfirst("dts")."\\"."V20180330\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
