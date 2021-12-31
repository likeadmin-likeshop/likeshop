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

namespace TencentCloud\Cpdp\V20190820;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cpdp\V20190820\Models as Models;

/**
 * @method Models\ApplyApplicationMaterialResponse ApplyApplicationMaterial(Models\ApplyApplicationMaterialRequest $req) 跨境-提交申报材料。申报材料的主体是付款人，需要提前调用【跨境-付款人申请】接口提交付款人信息且审核通过后调用。
 * @method Models\ApplyOutwardOrderResponse ApplyOutwardOrder(Models\ApplyOutwardOrderRequest $req) 跨境-汇出指令申请。通过该接口可将对接方账户中的人民币余额汇兑成外币，再汇出至指定银行账户。
 * @method Models\ApplyPayerInfoResponse ApplyPayerInfo(Models\ApplyPayerInfoRequest $req) 跨境-付款人申请。通过该接口提交付款人信息并进行 kyc 审核。
 * @method Models\ApplyReWithdrawalResponse ApplyReWithdrawal(Models\ApplyReWithdrawalRequest $req) 正常结算提现失败情况下，发起重新提现的请求接口
 * @method Models\ApplyTradeResponse ApplyTrade(Models\ApplyTradeRequest $req) 跨境-提交贸易材料。通过提交贸易材料接口可为对接方累计贸易额度，在额度范围内可发起汇兑汇出交易。
 * @method Models\ApplyWithdrawalResponse ApplyWithdrawal(Models\ApplyWithdrawalRequest $req) 商户提现
 * @method Models\BindAcctResponse BindAcct(Models\BindAcctRequest $req) 商户绑定提现银行卡，每个商户只能绑定一张提现银行卡
 * @method Models\BindRelateAccReUnionPayResponse BindRelateAccReUnionPay(Models\BindRelateAccReUnionPayRequest $req) 会员绑定提现账户-回填银联鉴权短信码。用于会员填写动态验证码后，发往银行进行验证，验证成功则完成绑定。
 * @method Models\BindRelateAcctSmallAmountResponse BindRelateAcctSmallAmount(Models\BindRelateAcctSmallAmountRequest $req) 会员绑定提现账户-小额鉴权。会员申请绑定提现账户，绑定后从会员子账户中提现到绑定账户。
转账鉴权有两种形式：往账鉴权和来账鉴权。
往账鉴权：该接口发起成功后，银行会向提现账户转入小于等于0.5元的随机金额，并短信通知客户查看，客户查看后，需将收到的金额大小，在电商平台页面上回填，并通知银行。银行验证通过后，完成提现账户绑定。
来账鉴权：该接口发起成功后，银行以短信通知客户查看，客户查看后，需通过待绑定的账户往市场的监管账户转入短信上指定的金额。银行检索到该笔指定金额的来账是源自待绑定账户，则绑定成功。平安银行的账户，即BankType送1时，大小额行号和超级网银号都不用送。
 * @method Models\BindRelateAcctUnionPayResponse BindRelateAcctUnionPay(Models\BindRelateAcctUnionPayRequest $req) 会员绑定提现账户-银联鉴权。用于会员申请绑定提现账户，申请后银行前往银联验证卡信息：姓名、证件、卡号、银行预留手机是否相符，相符则发送给会员手机动态验证码并返回成功，不相符则返回失败。
平台接收到银行返回成功后，进入输入动态验证码的页面，有效期120秒，若120秒未输入，客户可点击重新发送动态验证码，这个步骤重新调用该接口即可。
平安银行的账户，大小额行号和超级网银号都不用送。
超级网银号：单笔转账金额不超过5万，不限制笔数，只用选XX银行，不用具体到支行，可实时知道对方是否收款成功。
大小额联行号：单笔转账可超过5万，需具体到支行，不能实时知道对方是否收款成功。金额超过5万的，在工作日的8点30-17点间才会成功。
 * @method Models\CheckAcctResponse CheckAcct(Models\CheckAcctRequest $req) 商户绑定提现银行卡的验证接口
 * @method Models\CheckAmountResponse CheckAmount(Models\CheckAmountRequest $req) 验证鉴权金额。此接口可受理BindRelateAcctSmallAmount接口发起的转账金额（往账鉴权方式）的验证处理。若所回填的验证金额验证通过，则会绑定原申请中的银行账户作为提现账户。通过此接口也可以查得BindRelateAcctSmallAmount接口发起的来账鉴权方式的申请的当前状态。
 * @method Models\CloseOrderResponse CloseOrder(Models\CloseOrderRequest $req) 通过此接口关闭此前已创建的订单，关闭后，用户将无法继续付款。仅能关闭创建后未支付的订单
 * @method Models\ContractOrderResponse ContractOrder(Models\ContractOrderRequest $req) 应用需要先带上签约信息调用本接口生成支付订单号，并将应答的PayInfo透传给聚鑫SDK，拉起客户端（包括微信公众号/微信小程序/客户端App）支付。
 * @method Models\CreateAcctResponse CreateAcct(Models\CreateAcctRequest $req) 子商户入驻聚鑫平台
 * @method Models\CreateAgentTaxPaymentInfosResponse CreateAgentTaxPaymentInfos(Models\CreateAgentTaxPaymentInfosRequest $req) 直播平台-代理商完税信息录入
 * @method Models\CreateCustAcctIdResponse CreateCustAcctId(Models\CreateCustAcctIdRequest $req) 会员子账户开立。会员在银行注册，并开立会员子账户，交易网会员代码即会员在平台端系统的会员编号。
平台需保存银行返回的子账户账号，后续交易接口都会用到。会员属性字段为预留扩展字段，当前必须送默认值。
 * @method Models\CreateInvoiceResponse CreateInvoice(Models\CreateInvoiceRequest $req) 智慧零售-发票开具
 * @method Models\CreateInvoiceV2Response CreateInvoiceV2(Models\CreateInvoiceV2Request $req) 智慧零售-发票开具V2
 * @method Models\CreateMerchantResponse CreateMerchant(Models\CreateMerchantRequest $req) 智慧零售-商户注册
 * @method Models\CreateRedInvoiceResponse CreateRedInvoice(Models\CreateRedInvoiceRequest $req) 智慧零售-发票红冲
 * @method Models\CreateRedInvoiceV2Response CreateRedInvoiceV2(Models\CreateRedInvoiceV2Request $req) 智慧零售-发票红冲V2
 * @method Models\CreateSinglePayResponse CreateSinglePay(Models\CreateSinglePayRequest $req) 银企直连-单笔支付接口
 * @method Models\CreateTransferBatchResponse CreateTransferBatch(Models\CreateTransferBatchRequest $req) 微信商户发起批量转账
 * @method Models\DeleteAgentTaxPaymentInfoResponse DeleteAgentTaxPaymentInfo(Models\DeleteAgentTaxPaymentInfoRequest $req) 直播平台-删除代理商完税信息
 * @method Models\DeleteAgentTaxPaymentInfosResponse DeleteAgentTaxPaymentInfos(Models\DeleteAgentTaxPaymentInfosRequest $req) 直播平台-删除代理商完税信息
 * @method Models\DescribeChargeDetailResponse DescribeChargeDetail(Models\DescribeChargeDetailRequest $req) 查询充值明细接口
 * @method Models\DescribeOrderStatusResponse DescribeOrderStatus(Models\DescribeOrderStatusRequest $req) 查询单笔订单交易状态
 * @method Models\DownloadBillResponse DownloadBill(Models\DownloadBillRequest $req) 账单下载接口，根据本接口返回的URL地址，在D+1日下载对账单。注意，本接口返回的URL地址有时效，请尽快下载。URL超时时效后，请重新调用本接口再次获取。
 * @method Models\ExecuteMemberTransactionResponse ExecuteMemberTransaction(Models\ExecuteMemberTransactionRequest $req) 会员间交易接口
 * @method Models\MigrateOrderRefundResponse MigrateOrderRefund(Models\MigrateOrderRefundRequest $req) 山姆聚合支付项目-存量订单退款接口。可以通过本接口将支付款全部或部分退还给付款方，在收到用户退款请求并且验证成功之后，按照退款规则将支付款按原路退回到支付帐号。
 * @method Models\MigrateOrderRefundQueryResponse MigrateOrderRefundQuery(Models\MigrateOrderRefundQueryRequest $req) 提交退款申请后，通过调用该接口查询退款状态。退款可能有一定延时。
 * @method Models\ModifyAgentTaxPaymentInfoResponse ModifyAgentTaxPaymentInfo(Models\ModifyAgentTaxPaymentInfoRequest $req) 直播平台-修改代理商完税信息
 * @method Models\ModifyMntMbrBindRelateAcctBankCodeResponse ModifyMntMbrBindRelateAcctBankCode(Models\ModifyMntMbrBindRelateAcctBankCodeRequest $req) 维护会员绑定提现账户联行号。此接口可以支持市场修改会员的提现账户的开户行信息，具体包括开户行行名、开户行的银行联行号（大小额联行号）和超级网银行号。
 * @method Models\QueryAcctBindingResponse QueryAcctBinding(Models\QueryAcctBindingRequest $req) 聚鑫-查询子账户绑定银行卡
 * @method Models\QueryAcctInfoResponse QueryAcctInfo(Models\QueryAcctInfoRequest $req) 聚鑫-开户信息查询
 * @method Models\QueryAcctInfoListResponse QueryAcctInfoList(Models\QueryAcctInfoListRequest $req) 聚鑫-开户信息列表查询, 查询某一段时间的开户信息
 * @method Models\QueryAgentStatementsResponse QueryAgentStatements(Models\QueryAgentStatementsRequest $req) 直播平台-查询代理商结算单链接
 * @method Models\QueryAgentTaxPaymentBatchResponse QueryAgentTaxPaymentBatch(Models\QueryAgentTaxPaymentBatchRequest $req) 直播平台-查询批次信息
 * @method Models\QueryAnchorContractInfoResponse QueryAnchorContractInfo(Models\QueryAnchorContractInfoRequest $req) 直播平台-查询主播签约信息
 * @method Models\QueryApplicationMaterialResponse QueryApplicationMaterial(Models\QueryApplicationMaterialRequest $req) 跨境-成功申报材料查询。查询成功入库的申报材料。
 * @method Models\QueryBalanceResponse QueryBalance(Models\QueryBalanceRequest $req) 子商户余额查询
 * @method Models\QueryBankClearResponse QueryBankClear(Models\QueryBankClearRequest $req) 查询银行在途清算结果。查询时间段内交易网的在途清算结果。
 * @method Models\QueryBankTransactionDetailsResponse QueryBankTransactionDetails(Models\QueryBankTransactionDetailsRequest $req) 查询银行时间段内交易明细。查询时间段的会员成功交易。
 * @method Models\QueryBankWithdrawCashDetailsResponse QueryBankWithdrawCashDetails(Models\QueryBankWithdrawCashDetailsRequest $req) 查询银行时间段内清分提现明细。查询银行时间段内清分提现明细接口：若为“见证+收单退款”“见证+收单充值”记录时备注Note为“见证+收单充值,订单号”“见证+收单退款,订单号”，此接口可以查到T0/T1的充值明细和退款记录。查询标志：充值记录仍用3清分选项查询，退款记录同提现用2选项查询。
 * @method Models\QueryBillDownloadURLResponse QueryBillDownloadURL(Models\QueryBillDownloadURLRequest $req) 获取单笔代发转账对账单下载URL
 * @method Models\QueryCommonTransferRechargeResponse QueryCommonTransferRecharge(Models\QueryCommonTransferRechargeRequest $req) 查询普通转账充值明细。接口用于查询会员主动转账进资金汇总账户的明细情况。若会员使用绑定账号转入，则直接入账到会员子账户。若未使用绑定账号转入，则系统无法自动清分到对应子账户，则转入挂账子账户由平台自行清分。若是 “见证+收单充值”T0充值记录时备注Note为“见证+收单充值,订单号” 此接口可以查到T0到账的“见证+收单充值”充值记录。
 * @method Models\QueryContractResponse QueryContract(Models\QueryContractRequest $req) 通过此接口查询签约数据
 * @method Models\QueryCustAcctIdBalanceResponse QueryCustAcctIdBalance(Models\QueryCustAcctIdBalanceRequest $req) 查询银行子账户余额。查询会员子账户以及平台的功能子账户的余额。
 * @method Models\QueryExchangeRateResponse QueryExchangeRate(Models\QueryExchangeRateRequest $req) 跨境-查询汇率
 * @method Models\QueryInvoiceResponse QueryInvoice(Models\QueryInvoiceRequest $req) 智慧零售-发票查询
 * @method Models\QueryInvoiceV2Response QueryInvoiceV2(Models\QueryInvoiceV2Request $req) 智慧零售-发票查询V2
 * @method Models\QueryMemberBindResponse QueryMemberBind(Models\QueryMemberBindRequest $req) 会员绑定信息查询。查询标志为“单个会员”的情况下，返回该会员的有效的绑定账户信息。
查询标志为“全部会员”的情况下，返回市场下的全部的有效的绑定账户信息。查询标志为“单个会员的证件信息”的情况下，返回市场下的指定的会员的留存在电商见证宝系统的证件信息。
 * @method Models\QueryMemberTransactionResponse QueryMemberTransaction(Models\QueryMemberTransactionRequest $req) 会员间交易-不验证。此接口可以实现会员间的余额的交易，实现资金在会员之间流动。
 * @method Models\QueryMerchantBalanceResponse QueryMerchantBalance(Models\QueryMerchantBalanceRequest $req) 跨境-对接方账户余额查询
 * @method Models\QueryMerchantInfoForManagementResponse QueryMerchantInfoForManagement(Models\QueryMerchantInfoForManagementRequest $req) 智慧零售-查询管理端商户
 * @method Models\QueryOrderResponse QueryOrder(Models\QueryOrderRequest $req) 根据订单号，或者用户Id，查询支付订单状态 
 * @method Models\QueryOutwardOrderResponse QueryOutwardOrder(Models\QueryOutwardOrderRequest $req) 跨境-查询汇出结果
 * @method Models\QueryPayerInfoResponse QueryPayerInfo(Models\QueryPayerInfoRequest $req) 跨境-付款人查询
 * @method Models\QueryReconciliationDocumentResponse QueryReconciliationDocument(Models\QueryReconciliationDocumentRequest $req) 查询对账文件信息。平台调用该接口获取需下载对账文件的文件名称以及密钥。 平台获取到信息后， 可以再调用OPENAPI的文件下载功能。
 * @method Models\QueryRefundResponse QueryRefund(Models\QueryRefundRequest $req) 提交退款申请后，通过调用该接口查询退款状态。退款可能有一定延时，用微信零钱支付的退款约20分钟内到账，银行卡支付的退款约3个工作日后到账。
 * @method Models\QuerySinglePayResponse QuerySinglePay(Models\QuerySinglePayRequest $req) 银企直连-单笔支付状态查询接口
 * @method Models\QuerySingleTransactionStatusResponse QuerySingleTransactionStatus(Models\QuerySingleTransactionStatusRequest $req) 查询银行单笔交易状态。查询单笔交易的状态。
 * @method Models\QuerySmallAmountTransferResponse QuerySmallAmountTransfer(Models\QuerySmallAmountTransferRequest $req) 查询小额鉴权转账结果。查询小额往账鉴权的转账状态。
 * @method Models\QueryTradeResponse QueryTrade(Models\QueryTradeRequest $req) 跨境-贸易材料明细查询。
 * @method Models\QueryTransferBatchResponse QueryTransferBatch(Models\QueryTransferBatchRequest $req) 通过商家批次单号或者微信批次号查询批次单
 * @method Models\QueryTransferDetailResponse QueryTransferDetail(Models\QueryTransferDetailRequest $req) 通过商家或者微信批次明细单号查询明细单
 * @method Models\QueryTransferResultResponse QueryTransferResult(Models\QueryTransferResultRequest $req) 智能代发-单笔代发转账查询接口
 * @method Models\RechargeByThirdPayResponse RechargeByThirdPay(Models\RechargeByThirdPayRequest $req) 会员在途充值(经第三方支付渠道)接口
 * @method Models\RechargeMemberThirdPayResponse RechargeMemberThirdPay(Models\RechargeMemberThirdPayRequest $req) 见证宝-会员在途充值(经第三方支付渠道)
 * @method Models\RefundResponse Refund(Models\RefundRequest $req) 如交易订单需退款，可以通过本接口将支付款全部或部分退还给付款方，聚鑫将在收到退款请求并且验证成功之后，按照退款规则将支付款按原路退回到支付帐号。最长支持1年的订单退款。在订单包含多个子订单的情况下，如果使用本接口传入OutTradeNo或TransactionId退款，则只支持全单退款；如果需要部分退款，请通过传入子订单的方式来指定部分金额退款。 
 * @method Models\RefundMemberTransactionResponse RefundMemberTransaction(Models\RefundMemberTransactionRequest $req) 会员间交易退款
 * @method Models\RegisterBehaviorResponse RegisterBehavior(Models\RegisterBehaviorRequest $req) 商户查询是否签约和签约行为上报
 * @method Models\RegisterBillResponse RegisterBill(Models\RegisterBillRequest $req) 登记挂账(支持撤销)
 * @method Models\RegisterBillSupportWithdrawResponse RegisterBillSupportWithdraw(Models\RegisterBillSupportWithdrawRequest $req) 登记挂账(支持撤销)。此接口可实现把不明来账或自有资金等已登记在挂账子账户下的资金调整到普通会员子账户。即通过申请调用此接口，将会减少挂账子账户的资金，调增指定的普通会员子账户的可提现余额及可用余额。此接口不支持把挂账子账户资金清分到功能子账户。
 * @method Models\RevResigterBillSupportWithdrawResponse RevResigterBillSupportWithdraw(Models\RevResigterBillSupportWithdrawRequest $req) 登记挂账撤销。此接口可以实现把RegisterBillSupportWithdraw接口完成的登记挂账进行撤销，即调减普通会员子账户的可提现和可用余额，调增挂账子账户的可用余额。
 * @method Models\ReviseMbrPropertyResponse ReviseMbrProperty(Models\ReviseMbrPropertyRequest $req) 修改会员属性-普通商户子账户。修改会员的会员属性。
 * @method Models\RevokeMemberRechargeThirdPayResponse RevokeMemberRechargeThirdPay(Models\RevokeMemberRechargeThirdPayRequest $req) 撤销会员在途充值(经第三方支付渠道)
 * @method Models\RevokeRechargeByThirdPayResponse RevokeRechargeByThirdPay(Models\RevokeRechargeByThirdPayRequest $req) 撤销会员在途充值(经第三方支付渠道)接口
 * @method Models\SyncContractDataResponse SyncContractData(Models\SyncContractDataRequest $req) 对于存量的签约关系导入或者部分场景下米大师无法收到签约通知的场景，需要由调用方主动将签约状态同步至米大师
 * @method Models\TerminateContractResponse TerminateContract(Models\TerminateContractRequest $req) 通过此接口进行解约
 * @method Models\TransferSinglePayResponse TransferSinglePay(Models\TransferSinglePayRequest $req) 智能代发-单笔代发转账接口
 * @method Models\UnBindAcctResponse UnBindAcct(Models\UnBindAcctRequest $req) 商户解除绑定的提现银行卡
 * @method Models\UnbindRelateAcctResponse UnbindRelateAcct(Models\UnbindRelateAcctRequest $req) 会员解绑提现账户。此接口可以支持会员解除名下的绑定账户关系。
 * @method Models\UnifiedOrderResponse UnifiedOrder(Models\UnifiedOrderRequest $req) 应用需要先调用本接口生成支付订单号，并将应答的PayInfo透传给聚鑫SDK，拉起客户端（包括微信公众号/微信小程序/客户端App）支付。
 * @method Models\UploadTaxListResponse UploadTaxList(Models\UploadTaxListRequest $req) 直播平台-上传代理商完税列表
 * @method Models\UploadTaxPaymentResponse UploadTaxPayment(Models\UploadTaxPaymentRequest $req) 直播平台-上传代理商完税证明
 * @method Models\WithdrawCashMembershipResponse WithdrawCashMembership(Models\WithdrawCashMembershipRequest $req) 会员提现-不验证。此接口受理会员发起的提现申请。会员子账户的可提现余额、可用余额会减少，市场的资金汇总账户(监管账户)会减少相应的发生金额，提现到会员申请的收款账户。		
 */

class CpdpClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cpdp.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cpdp";

    /**
     * @var string
     */
    protected $version = "2019-08-20";

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
        $respClass = "TencentCloud"."\\".ucfirst("cpdp")."\\"."V20190820\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
