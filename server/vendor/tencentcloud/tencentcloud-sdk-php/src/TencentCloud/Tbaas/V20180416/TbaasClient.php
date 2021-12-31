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

namespace TencentCloud\Tbaas\V20180416;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tbaas\V20180416\Models as Models;

/**
 * @method Models\ApplyUserCertResponse ApplyUserCert(Models\ApplyUserCertRequest $req) 申请用户证书
 * @method Models\BlockByNumberHandlerResponse BlockByNumberHandler(Models\BlockByNumberHandlerRequest $req) 版本升级

Bcos根据块高查询区块信息
 * @method Models\CreateChaincodeAndInstallForUserResponse CreateChaincodeAndInstallForUser(Models\CreateChaincodeAndInstallForUserRequest $req) 创建并安装合约
 * @method Models\DeployDynamicBcosContractResponse DeployDynamicBcosContract(Models\DeployDynamicBcosContractRequest $req) 动态部署并发布Bcos合约
 * @method Models\DeployDynamicContractHandlerResponse DeployDynamicContractHandler(Models\DeployDynamicContractHandlerRequest $req) 版本升级

动态部署合约
 * @method Models\DownloadUserCertResponse DownloadUserCert(Models\DownloadUserCertRequest $req) 下载用户证书
 * @method Models\GetBcosBlockByNumberResponse GetBcosBlockByNumber(Models\GetBcosBlockByNumberRequest $req) 使用块高查询Bcos区块信息
 * @method Models\GetBcosBlockListResponse GetBcosBlockList(Models\GetBcosBlockListRequest $req) Bcos分页查询当前群组下的区块列表
 * @method Models\GetBcosTransByHashResponse GetBcosTransByHash(Models\GetBcosTransByHashRequest $req) Bcos根据交易哈希查看交易详细信息
 * @method Models\GetBcosTransListResponse GetBcosTransList(Models\GetBcosTransListRequest $req) Bcos分页查询当前群组的交易信息列表
 * @method Models\GetBlockListResponse GetBlockList(Models\GetBlockListRequest $req) 查看当前网络下的所有区块列表，分页展示
 * @method Models\GetBlockListHandlerResponse GetBlockListHandler(Models\GetBlockListHandlerRequest $req) 版本升级

Bcos分页查询当前群组下的区块列表
 * @method Models\GetBlockTransactionListForUserResponse GetBlockTransactionListForUser(Models\GetBlockTransactionListForUserRequest $req) 获取区块内的交易列表
 * @method Models\GetChaincodeCompileLogForUserResponse GetChaincodeCompileLogForUser(Models\GetChaincodeCompileLogForUserRequest $req) 获取合约编译日志
 * @method Models\GetChaincodeInitializeResultForUserResponse GetChaincodeInitializeResultForUser(Models\GetChaincodeInitializeResultForUserRequest $req) 实例化结果查询
 * @method Models\GetChaincodeLogForUserResponse GetChaincodeLogForUser(Models\GetChaincodeLogForUserRequest $req) 获取合约容器日志
 * @method Models\GetChannelListForUserResponse GetChannelListForUser(Models\GetChannelListForUserRequest $req) 获取通道列表
 * @method Models\GetClusterListForUserResponse GetClusterListForUser(Models\GetClusterListForUserRequest $req) 获取该用户的网络列表。网络信息中包含组织信息，但仅包含该用户所在组织的信息。
 * @method Models\GetClusterSummaryResponse GetClusterSummary(Models\GetClusterSummaryRequest $req) 获取区块链网络概要
 * @method Models\GetInvokeTxResponse GetInvokeTx(Models\GetInvokeTxRequest $req) Invoke异步调用结果查询
 * @method Models\GetLatesdTransactionListResponse GetLatesdTransactionList(Models\GetLatesdTransactionListRequest $req) 获取最新交易列表
 * @method Models\GetPeerLogForUserResponse GetPeerLogForUser(Models\GetPeerLogForUserRequest $req) 获取节点日志
 * @method Models\GetTransByHashHandlerResponse GetTransByHashHandler(Models\GetTransByHashHandlerRequest $req) 版本升级

Bcos根据交易哈希查看交易详细信息
 * @method Models\GetTransListHandlerResponse GetTransListHandler(Models\GetTransListHandlerRequest $req) 版本升级

Bcos分页查询当前群组的交易信息列表
 * @method Models\GetTransactionDetailForUserResponse GetTransactionDetailForUser(Models\GetTransactionDetailForUserRequest $req) 获取交易详情
 * @method Models\InitializeChaincodeForUserResponse InitializeChaincodeForUser(Models\InitializeChaincodeForUserRequest $req) 实例化合约
 * @method Models\InvokeResponse Invoke(Models\InvokeRequest $req) 新增交易
 * @method Models\InvokeBcosTransResponse InvokeBcosTrans(Models\InvokeBcosTransRequest $req) 执行Bcos交易，支持动态部署的合约
 * @method Models\QueryResponse Query(Models\QueryRequest $req) 查询交易
 * @method Models\SendTransactionHandlerResponse SendTransactionHandler(Models\SendTransactionHandlerRequest $req) 版本升级

Bcos发送交易
 * @method Models\SrvInvokeResponse SrvInvoke(Models\SrvInvokeRequest $req) trustsql服务统一接口
 * @method Models\TransByDynamicContractHandlerResponse TransByDynamicContractHandler(Models\TransByDynamicContractHandlerRequest $req) 版本升级

根据动态部署的合约发送交易
 */

class TbaasClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tbaas.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tbaas";

    /**
     * @var string
     */
    protected $version = "2018-04-16";

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
        $respClass = "TencentCloud"."\\".ucfirst("tbaas")."\\"."V20180416\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
