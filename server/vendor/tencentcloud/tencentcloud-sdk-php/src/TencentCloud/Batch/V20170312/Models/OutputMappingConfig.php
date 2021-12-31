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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输出映射配置
 *
 * @method string getScene() 获取存储类型，仅支持COS
 * @method void setScene(string $Scene) 设置存储类型，仅支持COS
 * @method integer getWorkerNum() 获取并行worker数量
 * @method void setWorkerNum(integer $WorkerNum) 设置并行worker数量
 * @method integer getWorkerPartSize() 获取worker分块大小，单位MB
 * @method void setWorkerPartSize(integer $WorkerPartSize) 设置worker分块大小，单位MB
 */
class OutputMappingConfig extends AbstractModel
{
    /**
     * @var string 存储类型，仅支持COS
     */
    public $Scene;

    /**
     * @var integer 并行worker数量
     */
    public $WorkerNum;

    /**
     * @var integer worker分块大小，单位MB
     */
    public $WorkerPartSize;

    /**
     * @param string $Scene 存储类型，仅支持COS
     * @param integer $WorkerNum 并行worker数量
     * @param integer $WorkerPartSize worker分块大小，单位MB
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("WorkerNum",$param) and $param["WorkerNum"] !== null) {
            $this->WorkerNum = $param["WorkerNum"];
        }

        if (array_key_exists("WorkerPartSize",$param) and $param["WorkerPartSize"] !== null) {
            $this->WorkerPartSize = $param["WorkerPartSize"];
        }
    }
}
