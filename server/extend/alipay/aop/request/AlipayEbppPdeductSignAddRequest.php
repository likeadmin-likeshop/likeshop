<?php
/**
 * ALIPAY API: alipay.ebpp.pdeduct.sign.add request
 *
 * @author auto create
 * @since 1.0, 2020-04-09 16:26:55
 */
class AlipayEbppPdeductSignAddRequest
{
	/** 
	 * 机构签约代扣来源渠道
PUBLICPLATFORM：服务窗
	 **/
	private $agentChannel;
	
	/** 
	 * 从服务窗发起则为publicId的值
	 **/
	private $agentCode;
	
	/** 
	 * 户号，机构针对于每户的水、电都会有唯一的标识户号
	 **/
	private $billKey;
	
	/** 
	 * 业务类型。
JF：缴水、电、燃气、固话宽带、有线电视、交通罚款费用
WUYE：缴物业费
HK：信用卡还款
TX：手机充值
IND: 保险
	 **/
	private $bizType;
	
	/** 
	 * 支付宝缴费系统中的出账机构ID
	 **/
	private $chargeInst;
	
	/** 
	 * 代扣产品码, 由技术同学分配。 目前在缴费业务场景中，传入INST_DIRECT_DEDUCT; 在保险业务场景中, 传入INSURANCE_MERCHANT_DEDUCT
	 **/
	private $deductProdCode;
	
	/** 
	 * 签约类型可为空
	 **/
	private $deductType;
	
	/** 
	 * 外部用户实名认证相关信息, 用于做签约时的实名校验。 
注： 

name: 姓名
cert_type: 身份证：IDENTITY_CARD、护照：PASSPORT、军官证：OFFICER_CARD、士兵证：SOLDIER_CARD、户口本：HOKOU等
cert_no: 证件号码
need_check_info取值 T/F，只有为T时才做强制校验。
mobile:手机号，目前暂不使用此字段做校验
min_age: 允许的最小买家年龄,min_age为整数，必须大于等于0.
	 **/
	private $extUserInfo;
	
	/** 
	 * 扩展字段
	 **/
	private $extendField;
	
	/** 
	 * 通知方式设置，可为空
	 **/
	private $notifyConfig;
	
	/** 
	 * 外部产生的协议ID
	 **/
	private $outAgreementId;
	
	/** 
	 * 户名，户主真实姓名
	 **/
	private $ownerName;
	
	/** 
	 * 支付工具设置，目前可为空
	 **/
	private $payConfig;
	
	/** 
	 * 用户签约时，跳转到支付宝独立密码校验页面，校验成功后会将token和对应的用户ID缓存下来，然后跳回到机构页面生成token带回给机构，机构签约时必须传入token
	 **/
	private $payPasswordToken;
	
	/** 
	 * 商户ID
	 **/
	private $pid;
	
	/** 
	 * 签约到期时间。空表示无限期，一期固定传空。
	 **/
	private $signExpireDate;
	
	/** 
	 * 业务子类型。
WATER：缴水费
ELECTRIC：缴电费
GAS：缴燃气费
COMMUN：缴固话宽带
CATV：缴有线电视费
TRAFFIC：缴交通罚款
WUYE：缴物业费
HK：信用卡还款
CZ：手机充值
CAR：车险 
LIFE：寿险 
HEALTH：健康险
	 **/
	private $subBizType;
	
	/** 
	 * 用户ID
	 **/
	private $userId;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAgentChannel($agentChannel)
	{
		$this->agentChannel = $agentChannel;
		$this->apiParas["agent_channel"] = $agentChannel;
	}

	public function getAgentChannel()
	{
		return $this->agentChannel;
	}

	public function setAgentCode($agentCode)
	{
		$this->agentCode = $agentCode;
		$this->apiParas["agent_code"] = $agentCode;
	}

	public function getAgentCode()
	{
		return $this->agentCode;
	}

	public function setBillKey($billKey)
	{
		$this->billKey = $billKey;
		$this->apiParas["bill_key"] = $billKey;
	}

	public function getBillKey()
	{
		return $this->billKey;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setChargeInst($chargeInst)
	{
		$this->chargeInst = $chargeInst;
		$this->apiParas["charge_inst"] = $chargeInst;
	}

	public function getChargeInst()
	{
		return $this->chargeInst;
	}

	public function setDeductProdCode($deductProdCode)
	{
		$this->deductProdCode = $deductProdCode;
		$this->apiParas["deduct_prod_code"] = $deductProdCode;
	}

	public function getDeductProdCode()
	{
		return $this->deductProdCode;
	}

	public function setDeductType($deductType)
	{
		$this->deductType = $deductType;
		$this->apiParas["deduct_type"] = $deductType;
	}

	public function getDeductType()
	{
		return $this->deductType;
	}

	public function setExtUserInfo($extUserInfo)
	{
		$this->extUserInfo = $extUserInfo;
		$this->apiParas["ext_user_info"] = $extUserInfo;
	}

	public function getExtUserInfo()
	{
		return $this->extUserInfo;
	}

	public function setExtendField($extendField)
	{
		$this->extendField = $extendField;
		$this->apiParas["extend_field"] = $extendField;
	}

	public function getExtendField()
	{
		return $this->extendField;
	}

	public function setNotifyConfig($notifyConfig)
	{
		$this->notifyConfig = $notifyConfig;
		$this->apiParas["notify_config"] = $notifyConfig;
	}

	public function getNotifyConfig()
	{
		return $this->notifyConfig;
	}

	public function setOutAgreementId($outAgreementId)
	{
		$this->outAgreementId = $outAgreementId;
		$this->apiParas["out_agreement_id"] = $outAgreementId;
	}

	public function getOutAgreementId()
	{
		return $this->outAgreementId;
	}

	public function setOwnerName($ownerName)
	{
		$this->ownerName = $ownerName;
		$this->apiParas["owner_name"] = $ownerName;
	}

	public function getOwnerName()
	{
		return $this->ownerName;
	}

	public function setPayConfig($payConfig)
	{
		$this->payConfig = $payConfig;
		$this->apiParas["pay_config"] = $payConfig;
	}

	public function getPayConfig()
	{
		return $this->payConfig;
	}

	public function setPayPasswordToken($payPasswordToken)
	{
		$this->payPasswordToken = $payPasswordToken;
		$this->apiParas["pay_password_token"] = $payPasswordToken;
	}

	public function getPayPasswordToken()
	{
		return $this->payPasswordToken;
	}

	public function setPid($pid)
	{
		$this->pid = $pid;
		$this->apiParas["pid"] = $pid;
	}

	public function getPid()
	{
		return $this->pid;
	}

	public function setSignExpireDate($signExpireDate)
	{
		$this->signExpireDate = $signExpireDate;
		$this->apiParas["sign_expire_date"] = $signExpireDate;
	}

	public function getSignExpireDate()
	{
		return $this->signExpireDate;
	}

	public function setSubBizType($subBizType)
	{
		$this->subBizType = $subBizType;
		$this->apiParas["sub_biz_type"] = $subBizType;
	}

	public function getSubBizType()
	{
		return $this->subBizType;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["user_id"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
	}

	public function getApiMethodName()
	{
		return "alipay.ebpp.pdeduct.sign.add";
	}

	public function setNotifyUrl($notifyUrl)
	{
		$this->notifyUrl=$notifyUrl;
	}

	public function getNotifyUrl()
	{
		return $this->notifyUrl;
	}

	public function setReturnUrl($returnUrl)
	{
		$this->returnUrl=$returnUrl;
	}

	public function getReturnUrl()
	{
		return $this->returnUrl;
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function getTerminalType()
	{
		return $this->terminalType;
	}

	public function setTerminalType($terminalType)
	{
		$this->terminalType = $terminalType;
	}

	public function getTerminalInfo()
	{
		return $this->terminalInfo;
	}

	public function setTerminalInfo($terminalInfo)
	{
		$this->terminalInfo = $terminalInfo;
	}

	public function getProdCode()
	{
		return $this->prodCode;
	}

	public function setProdCode($prodCode)
	{
		$this->prodCode = $prodCode;
	}

	public function setApiVersion($apiVersion)
	{
		$this->apiVersion=$apiVersion;
	}

	public function getApiVersion()
	{
		return $this->apiVersion;
	}

  public function setNeedEncrypt($needEncrypt)
  {

     $this->needEncrypt=$needEncrypt;

  }

  public function getNeedEncrypt()
  {
    return $this->needEncrypt;
  }

}
