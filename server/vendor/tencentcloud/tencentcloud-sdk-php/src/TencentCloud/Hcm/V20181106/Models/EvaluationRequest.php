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
namespace TencentCloud\Hcm\V20181106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Evaluation请求参数结构体
 *
 * @method string getSessionId() 获取图片唯一标识，一张图片一个SessionId；
 * @method void setSessionId(string $SessionId) 设置图片唯一标识，一张图片一个SessionId；
 * @method string getImage() 获取图片数据，需要使用base64对图片的二进制数据进行编码，与url参数二者填一即可；
 * @method void setImage(string $Image) 设置图片数据，需要使用base64对图片的二进制数据进行编码，与url参数二者填一即可；
 * @method string getHcmAppid() 获取业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数，新的 HcmAppid 可以在[控制台](https://console.cloud.tencent.com/hcm)【应用管理】下新建。
 * @method void setHcmAppid(string $HcmAppid) 设置业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数，新的 HcmAppid 可以在[控制台](https://console.cloud.tencent.com/hcm)【应用管理】下新建。
 * @method string getUrl() 获取图片url，与Image参数二者填一即可；
 * @method void setUrl(string $Url) 设置图片url，与Image参数二者填一即可；
 * @method boolean getSupportHorizontalImage() 获取横屏拍摄开关，若开启则支持传输横屏拍摄的图片；
 * @method void setSupportHorizontalImage(boolean $SupportHorizontalImage) 设置横屏拍摄开关，若开启则支持传输横屏拍摄的图片；
 * @method boolean getRejectNonArithmeticImage() 获取拒绝非速算图（如风景图、人物图）开关，若开启，则遇到非速算图会快速返回拒绝的结果，但极端情况下可能会影响评估结果（比如算式截图贴到风景画里可能被判为非速算图直接返回了）。
 * @method void setRejectNonArithmeticImage(boolean $RejectNonArithmeticImage) 设置拒绝非速算图（如风景图、人物图）开关，若开启，则遇到非速算图会快速返回拒绝的结果，但极端情况下可能会影响评估结果（比如算式截图贴到风景画里可能被判为非速算图直接返回了）。
 * @method integer getIsAsync() 获取异步模式标识，0：同步模式，1：异步模式。默认为同步模式
 * @method void setIsAsync(integer $IsAsync) 设置异步模式标识，0：同步模式，1：异步模式。默认为同步模式
 * @method boolean getEnableDispRelatedVertical() 获取是否展开耦合算式中的竖式计算
 * @method void setEnableDispRelatedVertical(boolean $EnableDispRelatedVertical) 设置是否展开耦合算式中的竖式计算
 * @method boolean getEnableDispMidresult() 获取是否展示竖式算式的中间结果和格式控制字符
 * @method void setEnableDispMidresult(boolean $EnableDispMidresult) 设置是否展示竖式算式的中间结果和格式控制字符
 * @method boolean getEnablePdfRecognize() 获取是否开启pdf识别，默认开启
 * @method void setEnablePdfRecognize(boolean $EnablePdfRecognize) 设置是否开启pdf识别，默认开启
 * @method integer getPdfPageIndex() 获取pdf页码，从0开始，默认为0
 * @method void setPdfPageIndex(integer $PdfPageIndex) 设置pdf页码，从0开始，默认为0
 * @method integer getLaTex() 获取是否返回LaTex，默认为0返回普通格式，设置成1返回LaTex格式
 * @method void setLaTex(integer $LaTex) 设置是否返回LaTex，默认为0返回普通格式，设置成1返回LaTex格式
 * @method boolean getRejectVagueArithmetic() 获取用于选择是否拒绝模糊题 目。打开则丢弃模糊题目， 不进行后续的判题返回结 果。
 * @method void setRejectVagueArithmetic(boolean $RejectVagueArithmetic) 设置用于选择是否拒绝模糊题 目。打开则丢弃模糊题目， 不进行后续的判题返回结 果。
 */
class EvaluationRequest extends AbstractModel
{
    /**
     * @var string 图片唯一标识，一张图片一个SessionId；
     */
    public $SessionId;

    /**
     * @var string 图片数据，需要使用base64对图片的二进制数据进行编码，与url参数二者填一即可；
     */
    public $Image;

    /**
     * @var string 业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数，新的 HcmAppid 可以在[控制台](https://console.cloud.tencent.com/hcm)【应用管理】下新建。
     */
    public $HcmAppid;

    /**
     * @var string 图片url，与Image参数二者填一即可；
     */
    public $Url;

    /**
     * @var boolean 横屏拍摄开关，若开启则支持传输横屏拍摄的图片；
     */
    public $SupportHorizontalImage;

    /**
     * @var boolean 拒绝非速算图（如风景图、人物图）开关，若开启，则遇到非速算图会快速返回拒绝的结果，但极端情况下可能会影响评估结果（比如算式截图贴到风景画里可能被判为非速算图直接返回了）。
     */
    public $RejectNonArithmeticImage;

    /**
     * @var integer 异步模式标识，0：同步模式，1：异步模式。默认为同步模式
     */
    public $IsAsync;

    /**
     * @var boolean 是否展开耦合算式中的竖式计算
     */
    public $EnableDispRelatedVertical;

    /**
     * @var boolean 是否展示竖式算式的中间结果和格式控制字符
     */
    public $EnableDispMidresult;

    /**
     * @var boolean 是否开启pdf识别，默认开启
     */
    public $EnablePdfRecognize;

    /**
     * @var integer pdf页码，从0开始，默认为0
     */
    public $PdfPageIndex;

    /**
     * @var integer 是否返回LaTex，默认为0返回普通格式，设置成1返回LaTex格式
     */
    public $LaTex;

    /**
     * @var boolean 用于选择是否拒绝模糊题 目。打开则丢弃模糊题目， 不进行后续的判题返回结 果。
     */
    public $RejectVagueArithmetic;

    /**
     * @param string $SessionId 图片唯一标识，一张图片一个SessionId；
     * @param string $Image 图片数据，需要使用base64对图片的二进制数据进行编码，与url参数二者填一即可；
     * @param string $HcmAppid 业务应用ID，与账号应用APPID无关，是用来方便客户管理服务的参数，新的 HcmAppid 可以在[控制台](https://console.cloud.tencent.com/hcm)【应用管理】下新建。
     * @param string $Url 图片url，与Image参数二者填一即可；
     * @param boolean $SupportHorizontalImage 横屏拍摄开关，若开启则支持传输横屏拍摄的图片；
     * @param boolean $RejectNonArithmeticImage 拒绝非速算图（如风景图、人物图）开关，若开启，则遇到非速算图会快速返回拒绝的结果，但极端情况下可能会影响评估结果（比如算式截图贴到风景画里可能被判为非速算图直接返回了）。
     * @param integer $IsAsync 异步模式标识，0：同步模式，1：异步模式。默认为同步模式
     * @param boolean $EnableDispRelatedVertical 是否展开耦合算式中的竖式计算
     * @param boolean $EnableDispMidresult 是否展示竖式算式的中间结果和格式控制字符
     * @param boolean $EnablePdfRecognize 是否开启pdf识别，默认开启
     * @param integer $PdfPageIndex pdf页码，从0开始，默认为0
     * @param integer $LaTex 是否返回LaTex，默认为0返回普通格式，设置成1返回LaTex格式
     * @param boolean $RejectVagueArithmetic 用于选择是否拒绝模糊题 目。打开则丢弃模糊题目， 不进行后续的判题返回结 果。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("HcmAppid",$param) and $param["HcmAppid"] !== null) {
            $this->HcmAppid = $param["HcmAppid"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("SupportHorizontalImage",$param) and $param["SupportHorizontalImage"] !== null) {
            $this->SupportHorizontalImage = $param["SupportHorizontalImage"];
        }

        if (array_key_exists("RejectNonArithmeticImage",$param) and $param["RejectNonArithmeticImage"] !== null) {
            $this->RejectNonArithmeticImage = $param["RejectNonArithmeticImage"];
        }

        if (array_key_exists("IsAsync",$param) and $param["IsAsync"] !== null) {
            $this->IsAsync = $param["IsAsync"];
        }

        if (array_key_exists("EnableDispRelatedVertical",$param) and $param["EnableDispRelatedVertical"] !== null) {
            $this->EnableDispRelatedVertical = $param["EnableDispRelatedVertical"];
        }

        if (array_key_exists("EnableDispMidresult",$param) and $param["EnableDispMidresult"] !== null) {
            $this->EnableDispMidresult = $param["EnableDispMidresult"];
        }

        if (array_key_exists("EnablePdfRecognize",$param) and $param["EnablePdfRecognize"] !== null) {
            $this->EnablePdfRecognize = $param["EnablePdfRecognize"];
        }

        if (array_key_exists("PdfPageIndex",$param) and $param["PdfPageIndex"] !== null) {
            $this->PdfPageIndex = $param["PdfPageIndex"];
        }

        if (array_key_exists("LaTex",$param) and $param["LaTex"] !== null) {
            $this->LaTex = $param["LaTex"];
        }

        if (array_key_exists("RejectVagueArithmetic",$param) and $param["RejectVagueArithmetic"] !== null) {
            $this->RejectVagueArithmetic = $param["RejectVagueArithmetic"];
        }
    }
}
