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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预付费商品实例
 *
 * @method string getProductType() 获取预付费商品实例类型，取值有：
<li>StarterPackage：点播新手包。</li>
<li>MiniProgramPlugin：点播小程序插件。</li>
<li>ResourcePackage：点播资源包。</li>
 * @method void setProductType(string $ProductType) 设置预付费商品实例类型，取值有：
<li>StarterPackage：点播新手包。</li>
<li>MiniProgramPlugin：点播小程序插件。</li>
<li>ResourcePackage：点播资源包。</li>
 * @method string getStartTime() 获取资源包实例起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setStartTime(string $StartTime) 设置资源包实例起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method string getExpireTime() 获取资源包实例过期日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setExpireTime(string $ExpireTime) 设置资源包实例过期日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method string getProductInstanceId() 获取资源包实例ID。对应每个资源包，系统会分配相应的资源。续费或者升级资源包时，需要带上这个资源ID。
 * @method void setProductInstanceId(string $ProductInstanceId) 设置资源包实例ID。对应每个资源包，系统会分配相应的资源。续费或者升级资源包时，需要带上这个资源ID。
 * @method string getLastConsumeDate() 获取系统最近一次扣除资源包的日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setLastConsumeDate(string $LastConsumeDate) 设置系统最近一次扣除资源包的日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method integer getBindStatus() 获取资源包绑定 License 状态，取值有：
<li>0：未绑定。</li>
<li>1：已绑定。</li>
 * @method void setBindStatus(integer $BindStatus) 设置资源包绑定 License 状态，取值有：
<li>0：未绑定。</li>
<li>1：已绑定。</li>
 * @method array getProductInstanceResourceSet() 获取预付费资源包实例中包含的资源包列表。
 * @method void setProductInstanceResourceSet(array $ProductInstanceResourceSet) 设置预付费资源包实例中包含的资源包列表。
 * @method string getProductInstanceStatus() 获取资源包实例的状态，取值有：
<li>Effective：生效，可用于计费抵扣。</li>
<li>Isolated：隔离，不可用于计费抵扣。</li>
 * @method void setProductInstanceStatus(string $ProductInstanceStatus) 设置资源包实例的状态，取值有：
<li>Effective：生效，可用于计费抵扣。</li>
<li>Isolated：隔离，不可用于计费抵扣。</li>
 * @method string getRefundStatus() 获取资源包实例的可退还状态，取值有：
<li>FullRefund：可全额退款。</li>
<li>Denied：不可退款。</li>
 * @method void setRefundStatus(string $RefundStatus) 设置资源包实例的可退还状态，取值有：
<li>FullRefund：可全额退款。</li>
<li>Denied：不可退款。</li>
 */
class ProductInstance extends AbstractModel
{
    /**
     * @var string 预付费商品实例类型，取值有：
<li>StarterPackage：点播新手包。</li>
<li>MiniProgramPlugin：点播小程序插件。</li>
<li>ResourcePackage：点播资源包。</li>
     */
    public $ProductType;

    /**
     * @var string 资源包实例起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $StartTime;

    /**
     * @var string 资源包实例过期日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $ExpireTime;

    /**
     * @var string 资源包实例ID。对应每个资源包，系统会分配相应的资源。续费或者升级资源包时，需要带上这个资源ID。
     */
    public $ProductInstanceId;

    /**
     * @var string 系统最近一次扣除资源包的日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $LastConsumeDate;

    /**
     * @var integer 资源包绑定 License 状态，取值有：
<li>0：未绑定。</li>
<li>1：已绑定。</li>
     */
    public $BindStatus;

    /**
     * @var array 预付费资源包实例中包含的资源包列表。
     */
    public $ProductInstanceResourceSet;

    /**
     * @var string 资源包实例的状态，取值有：
<li>Effective：生效，可用于计费抵扣。</li>
<li>Isolated：隔离，不可用于计费抵扣。</li>
     */
    public $ProductInstanceStatus;

    /**
     * @var string 资源包实例的可退还状态，取值有：
<li>FullRefund：可全额退款。</li>
<li>Denied：不可退款。</li>
     */
    public $RefundStatus;

    /**
     * @param string $ProductType 预付费商品实例类型，取值有：
<li>StarterPackage：点播新手包。</li>
<li>MiniProgramPlugin：点播小程序插件。</li>
<li>ResourcePackage：点播资源包。</li>
     * @param string $StartTime 资源包实例起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     * @param string $ExpireTime 资源包实例过期日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     * @param string $ProductInstanceId 资源包实例ID。对应每个资源包，系统会分配相应的资源。续费或者升级资源包时，需要带上这个资源ID。
     * @param string $LastConsumeDate 系统最近一次扣除资源包的日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     * @param integer $BindStatus 资源包绑定 License 状态，取值有：
<li>0：未绑定。</li>
<li>1：已绑定。</li>
     * @param array $ProductInstanceResourceSet 预付费资源包实例中包含的资源包列表。
     * @param string $ProductInstanceStatus 资源包实例的状态，取值有：
<li>Effective：生效，可用于计费抵扣。</li>
<li>Isolated：隔离，不可用于计费抵扣。</li>
     * @param string $RefundStatus 资源包实例的可退还状态，取值有：
<li>FullRefund：可全额退款。</li>
<li>Denied：不可退款。</li>
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
        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ProductInstanceId",$param) and $param["ProductInstanceId"] !== null) {
            $this->ProductInstanceId = $param["ProductInstanceId"];
        }

        if (array_key_exists("LastConsumeDate",$param) and $param["LastConsumeDate"] !== null) {
            $this->LastConsumeDate = $param["LastConsumeDate"];
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("ProductInstanceResourceSet",$param) and $param["ProductInstanceResourceSet"] !== null) {
            $this->ProductInstanceResourceSet = [];
            foreach ($param["ProductInstanceResourceSet"] as $key => $value){
                $obj = new ProductInstanceRecource();
                $obj->deserialize($value);
                array_push($this->ProductInstanceResourceSet, $obj);
            }
        }

        if (array_key_exists("ProductInstanceStatus",$param) and $param["ProductInstanceStatus"] !== null) {
            $this->ProductInstanceStatus = $param["ProductInstanceStatus"];
        }

        if (array_key_exists("RefundStatus",$param) and $param["RefundStatus"] !== null) {
            $this->RefundStatus = $param["RefundStatus"];
        }
    }
}
