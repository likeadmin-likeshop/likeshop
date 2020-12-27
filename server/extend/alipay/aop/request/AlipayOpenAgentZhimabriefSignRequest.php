<?php
/**
 * ALIPAY API: alipay.open.agent.zhimabrief.sign request
 *
 * @author auto create
 * @since 1.0, 2020-06-28 17:37:49
 */
class AlipayOpenAgentZhimabriefSignRequest
{
	/** 
	 * 支付宝生活号(原服务窗)名称（1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写）
	 **/
	private $alipayLifeName;
	
	/** 
	 * APP demo，格式为.apk；或者应用说明文档, 格式为.doc .docx .pdf格式（1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写）
	 **/
	private $appDemo;
	
	/** 
	 * 商户的APP应用名称（1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写）
	 **/
	private $appName;
	
	/** 
	 * 代商户操作事务编号，通过alipay.open.isv.agent.create接口进行创建。
	 **/
	private $batchNo;
	
	/** 
	 * 营业执照授权函图片，个体工商户如果使用总公司或其他公司的营业执照认证需上传该授权函图片，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $businessLicenseAuthPic;
	
	/** 
	 * 营业执照号码。
	 **/
	private $businessLicenseNo;
	
	/** 
	 * 营业执照图片，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $businessLicensePic;
	
	/** 
	 * 自定义使用场景描述，usage_scene选项中无符合描述，填写自定义使用场景描述(usage_scene不填写，则custom_usage_scene必填)
	 **/
	private $customUsageScene;
	
	/** 
	 * 营业期限
	 **/
	private $dateLimitation;
	
	/** 
	 * 数据反馈接口人
	 **/
	private $drContact;
	
	/** 
	 * 例如：浙江飞猪网络技术有限公司，企业别称请填写【飞猪】。
	 **/
	private $enterpriseAlias;
	
	/** 
	 * 企业LOGO-图片，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $enterpriseLogo;
	
	/** 
	 * 营业期限是否长期有效
	 **/
	private $longTerm;
	
	/** 
	 * 所属MCCCode，详情可参考
<a href="https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7629140.0.0.59bgD2&treeId=222&articleId=105364&docType=1#s1
">商家经营类目</a> 中的“经营类目编码”
	 **/
	private $mccCode;
	
	/** 
	 * 异议处理接口人
	 **/
	private $ohContact;
	
	/** 
	 * 用户服务联动机制接口人
	 **/
	private $prContact;
	
	/** 
	 * 企业特殊资质图片，可参考
<a href="https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7629140.0.0.59bgD2&treeId=222&articleId=105364&docType=1#s1
">商家经营类目</a> 中的“需要的特殊资质证书”，最小5KB，图片格式必须为：png、bmp、gif、jpg、jpeg
	 **/
	private $specialLicensePic;
	
	/** 
	 * 使用场景描述，签约芝麻信用产品的用途，可选值："现金放贷","其他", "消费分期（例如买房、装修等）", "融资租赁", "发放信用卡", "极速返利", "押金减免", "先用后付", "社交场景信用互查", "会员分层信用参考"
	 **/
	private $usageScene;
	
	/** 
	 * 接入网址信息（1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写）
	 **/
	private $webSites;
	
	/** 
	 * 微信公众号名称（1 app_name、app_demo；2 web_sites；3 alipay_life_name；4 wechat_official_account_name。1、2、3、4至少选择一个填写）
	 **/
	private $wechatOfficialAccountName;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAlipayLifeName($alipayLifeName)
	{
		$this->alipayLifeName = $alipayLifeName;
		$this->apiParas["alipay_life_name"] = $alipayLifeName;
	}

	public function getAlipayLifeName()
	{
		return $this->alipayLifeName;
	}

	public function setAppDemo($appDemo)
	{
		$this->appDemo = $appDemo;
		$this->apiParas["app_demo"] = $appDemo;
	}

	public function getAppDemo()
	{
		return $this->appDemo;
	}

	public function setAppName($appName)
	{
		$this->appName = $appName;
		$this->apiParas["app_name"] = $appName;
	}

	public function getAppName()
	{
		return $this->appName;
	}

	public function setBatchNo($batchNo)
	{
		$this->batchNo = $batchNo;
		$this->apiParas["batch_no"] = $batchNo;
	}

	public function getBatchNo()
	{
		return $this->batchNo;
	}

	public function setBusinessLicenseAuthPic($businessLicenseAuthPic)
	{
		$this->businessLicenseAuthPic = $businessLicenseAuthPic;
		$this->apiParas["business_license_auth_pic"] = $businessLicenseAuthPic;
	}

	public function getBusinessLicenseAuthPic()
	{
		return $this->businessLicenseAuthPic;
	}

	public function setBusinessLicenseNo($businessLicenseNo)
	{
		$this->businessLicenseNo = $businessLicenseNo;
		$this->apiParas["business_license_no"] = $businessLicenseNo;
	}

	public function getBusinessLicenseNo()
	{
		return $this->businessLicenseNo;
	}

	public function setBusinessLicensePic($businessLicensePic)
	{
		$this->businessLicensePic = $businessLicensePic;
		$this->apiParas["business_license_pic"] = $businessLicensePic;
	}

	public function getBusinessLicensePic()
	{
		return $this->businessLicensePic;
	}

	public function setCustomUsageScene($customUsageScene)
	{
		$this->customUsageScene = $customUsageScene;
		$this->apiParas["custom_usage_scene"] = $customUsageScene;
	}

	public function getCustomUsageScene()
	{
		return $this->customUsageScene;
	}

	public function setDateLimitation($dateLimitation)
	{
		$this->dateLimitation = $dateLimitation;
		$this->apiParas["date_limitation"] = $dateLimitation;
	}

	public function getDateLimitation()
	{
		return $this->dateLimitation;
	}

	public function setDrContact($drContact)
	{
		$this->drContact = $drContact;
		$this->apiParas["dr_contact"] = $drContact;
	}

	public function getDrContact()
	{
		return $this->drContact;
	}

	public function setEnterpriseAlias($enterpriseAlias)
	{
		$this->enterpriseAlias = $enterpriseAlias;
		$this->apiParas["enterprise_alias"] = $enterpriseAlias;
	}

	public function getEnterpriseAlias()
	{
		return $this->enterpriseAlias;
	}

	public function setEnterpriseLogo($enterpriseLogo)
	{
		$this->enterpriseLogo = $enterpriseLogo;
		$this->apiParas["enterprise_logo"] = $enterpriseLogo;
	}

	public function getEnterpriseLogo()
	{
		return $this->enterpriseLogo;
	}

	public function setLongTerm($longTerm)
	{
		$this->longTerm = $longTerm;
		$this->apiParas["long_term"] = $longTerm;
	}

	public function getLongTerm()
	{
		return $this->longTerm;
	}

	public function setMccCode($mccCode)
	{
		$this->mccCode = $mccCode;
		$this->apiParas["mcc_code"] = $mccCode;
	}

	public function getMccCode()
	{
		return $this->mccCode;
	}

	public function setOhContact($ohContact)
	{
		$this->ohContact = $ohContact;
		$this->apiParas["oh_contact"] = $ohContact;
	}

	public function getOhContact()
	{
		return $this->ohContact;
	}

	public function setPrContact($prContact)
	{
		$this->prContact = $prContact;
		$this->apiParas["pr_contact"] = $prContact;
	}

	public function getPrContact()
	{
		return $this->prContact;
	}

	public function setSpecialLicensePic($specialLicensePic)
	{
		$this->specialLicensePic = $specialLicensePic;
		$this->apiParas["special_license_pic"] = $specialLicensePic;
	}

	public function getSpecialLicensePic()
	{
		return $this->specialLicensePic;
	}

	public function setUsageScene($usageScene)
	{
		$this->usageScene = $usageScene;
		$this->apiParas["usage_scene"] = $usageScene;
	}

	public function getUsageScene()
	{
		return $this->usageScene;
	}

	public function setWebSites($webSites)
	{
		$this->webSites = $webSites;
		$this->apiParas["web_sites"] = $webSites;
	}

	public function getWebSites()
	{
		return $this->webSites;
	}

	public function setWechatOfficialAccountName($wechatOfficialAccountName)
	{
		$this->wechatOfficialAccountName = $wechatOfficialAccountName;
		$this->apiParas["wechat_official_account_name"] = $wechatOfficialAccountName;
	}

	public function getWechatOfficialAccountName()
	{
		return $this->wechatOfficialAccountName;
	}

	public function getApiMethodName()
	{
		return "alipay.open.agent.zhimabrief.sign";
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
