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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageOptimization配置
 *
 * @method WebpAdapter getWebpAdapter() 获取WebpAdapter配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebpAdapter(WebpAdapter $WebpAdapter) 设置WebpAdapter配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method TpgAdapter getTpgAdapter() 获取TpgAdapter配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTpgAdapter(TpgAdapter $TpgAdapter) 设置TpgAdapter配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method GuetzliAdapter getGuetzliAdapter() 获取GuetzliAdapter配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGuetzliAdapter(GuetzliAdapter $GuetzliAdapter) 设置GuetzliAdapter配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageOptimization extends AbstractModel
{
    /**
     * @var WebpAdapter WebpAdapter配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebpAdapter;

    /**
     * @var TpgAdapter TpgAdapter配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TpgAdapter;

    /**
     * @var GuetzliAdapter GuetzliAdapter配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GuetzliAdapter;

    /**
     * @param WebpAdapter $WebpAdapter WebpAdapter配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param TpgAdapter $TpgAdapter TpgAdapter配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param GuetzliAdapter $GuetzliAdapter GuetzliAdapter配置
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("WebpAdapter",$param) and $param["WebpAdapter"] !== null) {
            $this->WebpAdapter = new WebpAdapter();
            $this->WebpAdapter->deserialize($param["WebpAdapter"]);
        }

        if (array_key_exists("TpgAdapter",$param) and $param["TpgAdapter"] !== null) {
            $this->TpgAdapter = new TpgAdapter();
            $this->TpgAdapter->deserialize($param["TpgAdapter"]);
        }

        if (array_key_exists("GuetzliAdapter",$param) and $param["GuetzliAdapter"] !== null) {
            $this->GuetzliAdapter = new GuetzliAdapter();
            $this->GuetzliAdapter->deserialize($param["GuetzliAdapter"]);
        }
    }
}
