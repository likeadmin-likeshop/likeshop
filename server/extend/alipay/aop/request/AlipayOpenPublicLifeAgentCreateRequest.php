<?php
/**
 * ALIPAY API: alipay.open.public.life.agent.create request
 *
 * @author auto create
 * @since 1.0, 2019-01-07 20:51:15
 */
class AlipayOpenPublicLifeAgentCreateRequest
{
	/** 
	 * isv代开通生活号的商户支付宝账号或者商户支付宝账号pid（2088开头16位长度的字符串），账号需通过实名认证
	 **/
	private $account;
	
	/** 
	 * 生活号背景图片
	 **/
	private $backgroundPic;
	
	/** 
	 * 营业执照授权函图片，个体工商户如果使用总公司或其他公司的营业执照认证需上传该授权函图片
	 **/
	private $businessLicenseAuthPic;
	
	/** 
	 * 营业执照号码。被代创建商户运营主体为个人账户必填，企业账户无需填写
	 **/
	private $businessLicenseNo;
	
	/** 
	 * 营业执照图片。被代创建商户运营主体为个人账户必填，企业账户无需填写
	 **/
	private $businessLicensePic;
	
	/** 
	 * 联系人邮箱
	 **/
	private $contactEmail;
	
	/** 
	 * 联系人手机号
	 **/
	private $contactMobile;
	
	/** 
	 * 联系人名称
	 **/
	private $contactName;
	
	/** 
	 * 生活号头像
	 **/
	private $logoPic;
	
	/** 
	 * 所属MCCCode，详情可参考
<a href="https://doc.open.alipay.com/docs/doc.htm?spm=a219a.7629140.0.0.INIZWb&articleId=105364&docType=1">商家经营类目</a> 中的“经营类目编码”
	 **/
	private $mccCode;
	
	/** 
	 * 外部入驻申请单据号，由开发者生成，并需保证在开发者端不重复。另，如果代创建被驳回，需更换新的申请号，原申请号不能再次使用
	 **/
	private $outBizNo;
	
	/** 
	 * 自有知识产权证书图片
	 **/
	private $ownIntellectualPic;
	
	/** 
	 * 生活号简介
	 **/
	private $publicDesc;
	
	/** 
	 * 生活号名称
	 **/
	private $publicName;
	
	/** 
	 * 店铺内景图片，被代创建商户运营主体为个人账户必填，企业账户选填
	 **/
	private $shopScenePic;
	
	/** 
	 * 店铺门头照图片，被代创建商户运营主体为个人账户必填，企业账户选填
	 **/
	private $shopSignBoardPic;
	
	/** 
	 * 企业特殊资质图片，可参考 <a href="https://doc.open.alipay.com/docs/doc.htm?spm=a219a.7629140.0.0.INIZWb&articleId=105364&docType=1">商家经营类目</a> 中的 “需要的特殊资质证书”
	 **/
	private $specialLicensePic;

	private $apiParas = array();
	private $terminalType;
	private $terminalInfo;
	private $prodCode;
	private $apiVersion="1.0";
	private $notifyUrl;
	private $returnUrl;
    private $needEncrypt=false;

	
	public function setAccount($account)
	{
		$this->account = $account;
		$this->apiParas["account"] = $account;
	}

	public function getAccount()
	{
		return $this->account;
	}

	public function setBackgroundPic($backgroundPic)
	{
		$this->backgroundPic = $backgroundPic;
		$this->apiParas["background_pic"] = $backgroundPic;
	}

	public function getBackgroundPic()
	{
		return $this->backgroundPic;
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

	public function setContactEmail($contactEmail)
	{
		$this->contactEmail = $contactEmail;
		$this->apiParas["contact_email"] = $contactEmail;
	}

	public function getContactEmail()
	{
		return $this->contactEmail;
	}

	public function setContactMobile($contactMobile)
	{
		$this->contactMobile = $contactMobile;
		$this->apiParas["contact_mobile"] = $contactMobile;
	}

	public function getContactMobile()
	{
		return $this->contactMobile;
	}

	public function setContactName($contactName)
	{
		$this->contactName = $contactName;
		$this->apiParas["contact_name"] = $contactName;
	}

	public function getContactName()
	{
		return $this->contactName;
	}

	public function setLogoPic($logoPic)
	{
		$this->logoPic = $logoPic;
		$this->apiParas["logo_pic"] = $logoPic;
	}

	public function getLogoPic()
	{
		return $this->logoPic;
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

	public function setOutBizNo($outBizNo)
	{
		$this->outBizNo = $outBizNo;
		$this->apiParas["out_biz_no"] = $outBizNo;
	}

	public function getOutBizNo()
	{
		return $this->outBizNo;
	}

	public function setOwnIntellectualPic($ownIntellectualPic)
	{
		$this->ownIntellectualPic = $ownIntellectualPic;
		$this->apiParas["own_intellectual_pic"] = $ownIntellectualPic;
	}

	public function getOwnIntellectualPic()
	{
		return $this->ownIntellectualPic;
	}

	public function setPublicDesc($publicDesc)
	{
		$this->publicDesc = $publicDesc;
		$this->apiParas["public_desc"] = $publicDesc;
	}

	public function getPublicDesc()
	{
		return $this->publicDesc;
	}

	public function setPublicName($publicName)
	{
		$this->publicName = $publicName;
		$this->apiParas["public_name"] = $publicName;
	}

	public function getPublicName()
	{
		return $this->publicName;
	}

	public function setShopScenePic($shopScenePic)
	{
		$this->shopScenePic = $shopScenePic;
		$this->apiParas["shop_scene_pic"] = $shopScenePic;
	}

	public function getShopScenePic()
	{
		return $this->shopScenePic;
	}

	public function setShopSignBoardPic($shopSignBoardPic)
	{
		$this->shopSignBoardPic = $shopSignBoardPic;
		$this->apiParas["shop_sign_board_pic"] = $shopSignBoardPic;
	}

	public function getShopSignBoardPic()
	{
		return $this->shopSignBoardPic;
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

	public function getApiMethodName()
	{
		return "alipay.open.public.life.agent.create";
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
