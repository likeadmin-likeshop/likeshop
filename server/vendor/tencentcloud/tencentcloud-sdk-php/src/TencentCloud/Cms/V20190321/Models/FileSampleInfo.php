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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件样本返回信息
 *
 * @method integer getCode() 获取处理错误码
 * @method void setCode(integer $Code) 设置处理错误码
 * @method integer getCreatedAt() 获取创建时间戳
 * @method void setCreatedAt(integer $CreatedAt) 设置创建时间戳
 * @method integer getEvilType() 获取恶意类型
100：正常
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
24001：暴恐
 * @method void setEvilType(integer $EvilType) 设置恶意类型
100：正常
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
24001：暴恐
 * @method string getFileMd5() 获取文件的md5
 * @method void setFileMd5(string $FileMd5) 设置文件的md5
 * @method string getFileName() 获取文件名称
 * @method void setFileName(string $FileName) 设置文件名称
 * @method string getFileType() 获取文件类型
 * @method void setFileType(string $FileType) 设置文件类型
 * @method string getId() 获取唯一标识
 * @method void setId(string $Id) 设置唯一标识
 * @method integer getLabel() 获取样本类型
1：黑库
2：白库
 * @method void setLabel(integer $Label) 设置样本类型
1：黑库
2：白库
 * @method integer getStatus() 获取任务状态
1：添加完成
2：添加处理中
3：下载中
4：下载完成
5：上传完成
6：步骤完成
 * @method void setStatus(integer $Status) 设置任务状态
1：添加完成
2：添加处理中
3：下载中
4：下载完成
5：上传完成
6：步骤完成
 * @method string getCompressFileUrl() 获取文件压缩后云url
 * @method void setCompressFileUrl(string $CompressFileUrl) 设置文件压缩后云url
 * @method string getFileUrl() 获取文件的url
 * @method void setFileUrl(string $FileUrl) 设置文件的url
 */
class FileSampleInfo extends AbstractModel
{
    /**
     * @var integer 处理错误码
     */
    public $Code;

    /**
     * @var integer 创建时间戳
     */
    public $CreatedAt;

    /**
     * @var integer 恶意类型
100：正常
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
24001：暴恐
     */
    public $EvilType;

    /**
     * @var string 文件的md5
     */
    public $FileMd5;

    /**
     * @var string 文件名称
     */
    public $FileName;

    /**
     * @var string 文件类型
     */
    public $FileType;

    /**
     * @var string 唯一标识
     */
    public $Id;

    /**
     * @var integer 样本类型
1：黑库
2：白库
     */
    public $Label;

    /**
     * @var integer 任务状态
1：添加完成
2：添加处理中
3：下载中
4：下载完成
5：上传完成
6：步骤完成
     */
    public $Status;

    /**
     * @var string 文件压缩后云url
     */
    public $CompressFileUrl;

    /**
     * @var string 文件的url
     */
    public $FileUrl;

    /**
     * @param integer $Code 处理错误码
     * @param integer $CreatedAt 创建时间戳
     * @param integer $EvilType 恶意类型
100：正常
20001：政治
20002：色情 
20006：涉毒违法
20007：谩骂 
24001：暴恐
     * @param string $FileMd5 文件的md5
     * @param string $FileName 文件名称
     * @param string $FileType 文件类型
     * @param string $Id 唯一标识
     * @param integer $Label 样本类型
1：黑库
2：白库
     * @param integer $Status 任务状态
1：添加完成
2：添加处理中
3：下载中
4：下载完成
5：上传完成
6：步骤完成
     * @param string $CompressFileUrl 文件压缩后云url
     * @param string $FileUrl 文件的url
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("EvilType",$param) and $param["EvilType"] !== null) {
            $this->EvilType = $param["EvilType"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CompressFileUrl",$param) and $param["CompressFileUrl"] !== null) {
            $this->CompressFileUrl = $param["CompressFileUrl"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }
    }
}
