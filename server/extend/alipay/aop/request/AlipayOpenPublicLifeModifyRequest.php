<?php
/**
 * ALIPAY API: alipay.open.public.life.modify request
 *
 * @author auto create
 * @since 1.0, 2020-04-07 20:39:28
 */
class AlipayOpenPublicLifeModifyRequest
{
	/** 
	 * 背景图片，需上传图片原始二进制流，此图片显示在支付宝客户端生活号主页上方背景图位置，后缀是jpg或者jpeg，图片大小限制1mb
	 **/
	private $background;
	
	/** 
	 * 联系人邮箱，可以是调用者的联系人邮箱
	 **/
	private $contactEmail;
	
	/** 
	 * 联系人姓名，可以是调用者的联系人姓名
	 **/
	private $contactName;
	
	/** 
	 * 联系人电话，可以是调用者的联系人电话
	 **/
	private $contactTel;
	
	/** 
	 * 客服电话，可以是电话号码，手机号码，400电话
	 **/
	private $customerTel;
	
	/** 
	 * 生活号描述，此内容显示在支付宝客户端生活号主页简介区块
	 **/
	private $description;
	
	/** 
	 * 扩展信息JSON串。为空则不修改，不为空则覆盖更新
	 **/
	private $extendData;
	
	/** 
	 * 生活号名称
	 **/
	private $lifeName;
	
	/** 
	 * logo图片，需上传图片原始二进制流，此图片显示在支付宝客户端生活号主页上方位置，后缀是jpg或者jpeg，图片大小限制1mb，图片最小150px，图片建议为是正方形。为空则不修改。
	 **/
	private $logo;
	
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

	
	public function setBackground($background)
	{
		$this->background = $background;
		$this->apiParas["background"] = $background;
	}

	public function getBackground()
	{
		return $this->background;
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

	public function setContactName($contactName)
	{
		$this->contactName = $contactName;
		$this->apiParas["contact_name"] = $contactName;
	}

	public function getContactName()
	{
		return $this->contactName;
	}

	public function setContactTel($contactTel)
	{
		$this->contactTel = $contactTel;
		$this->apiParas["contact_tel"] = $contactTel;
	}

	public function getContactTel()
	{
		return $this->contactTel;
	}

	public function setCustomerTel($customerTel)
	{
		$this->customerTel = $customerTel;
		$this->apiParas["customer_tel"] = $customerTel;
	}

	public function getCustomerTel()
	{
		return $this->customerTel;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setExtendData($extendData)
	{
		$this->extendData = $extendData;
		$this->apiParas["extend_data"] = $extendData;
	}

	public function getExtendData()
	{
		return $this->extendData;
	}

	public function setLifeName($lifeName)
	{
		$this->lifeName = $lifeName;
		$this->apiParas["life_name"] = $lifeName;
	}

	public function getLifeName()
	{
		return $this->lifeName;
	}

	public function setLogo($logo)
	{
		$this->logo = $logo;
		$this->apiParas["logo"] = $logo;
	}

	public function getLogo()
	{
		return $this->logo;
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
		return "alipay.open.public.life.modify";
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
