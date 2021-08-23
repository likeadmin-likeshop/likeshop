<?php

namespace Qcloud\Cos;

use Qcloud\Cos\Exception\CosException;
use GuzzleHttp\Pool;

class MultipartUpload {
    const MIN_PART_SIZE = 1048576;
    const MAX_PART_SIZE = 5368709120;
    const DEFAULT_PART_SIZE = 52428800;
    const MAX_PARTS     = 10000;

    private $client;
    private $options;
    private $partSize;
    private $parts;
    private $body;

    public function __construct($client, $body, $options = array()) {
        $minPartSize = $options['PartSize'];
        unset($options['PartSize']);
        $this->body = $body;
        $this->client = $client;
        $this->options = $options;
        $this->partSize = $this->calculatePartSize($minPartSize);
        $this->concurrency = isset($options['Concurrency']) ? $options['Concurrency'] : 10;
        $this->parts = [];
        $this->partNumberList = [];
    }
    public function performUploading() {
        $uploadId= $this->initiateMultipartUpload();
        $this->uploadParts($uploadId);
        foreach ( $this->parts as $key => $row ){
            $num1[$key] = $row ['PartNumber'];
            $num2[$key] = $row ['ETag'];
        }
        array_multisort($num1, SORT_ASC, $num2, SORT_ASC, $this->parts);
        return $this->client->completeMultipartUpload(array(
            'Bucket' => $this->options['Bucket'],
            'Key' => $this->options['Key'],
            'UploadId' => $uploadId,
            'Parts' => $this->parts)
        );

    }
    public function uploadParts($uploadId) {
        $uploadRequests = function ($uploadId) {
            $partNumber = 1;
            $index = 1;
            for ( ; ; $partNumber ++) {
                if ($this->body->eof()) {
                    break;
                }
                $body = $this->body->read($this->partSize);
                if (empty($body)) {
                    break;
                }
                if (isset($this->parts[$partNumber])) {
                    continue;
                }
                $this->partNumberList[$index] = $partNumber;
                $params = array(
                    'Bucket' => $this->options['Bucket'],
                    'Key' => $this->options['Key'],
                    'UploadId' => $uploadId,
                    'PartNumber' => $partNumber,
                    'Body' => $body
                );
                if(!isset($this->parts[$partNumber])) {
                    $command = $this->client->getCommand('uploadPart', $params);
                    $request = $this->client->commandToRequestTransformer($command);
                    $index ++;
                    yield $request;
                }
            }
        };
        $pool = new Pool($this->client->httpClient, $uploadRequests($uploadId), [
            'concurrency' => $this->concurrency,
            'fulfilled' => function ($response, $index) {
                $index = $index + 1;
                $partNumber = $this->partNumberList[$index];
                $etag = $response->getHeaders()["ETag"][0];
                $part = array('PartNumber' => $partNumber, 'ETag' => $etag);
                $this->parts[$partNumber] = $part;
            },
           
            'rejected' => function ($reason, $index) {
                throw($reason);
            }
        ]);
        $promise = $pool->promise();
        $promise->wait();
    }

    public function resumeUploading() {
        $uploadId = $this->options['UploadId'];
        $rt = $this->client->ListParts(
            array('UploadId' => $uploadId,
                'Bucket'=>$this->options['Bucket'],
                'Key'=>$this->options['Key']));
                $parts = array();
        if (count($rt['Parts']) > 0) {
            foreach ($rt['Parts'] as $part) {
                $this->parts[$part['PartNumber']] = array('PartNumber' => $part['PartNumber'], 'ETag' => $part['ETag']);
            }
        }
        $this->uploadParts($uploadId);
        foreach ( $this->parts as $key => $row ){
            $num1[$key] = $row ['PartNumber'];
            $num2[$key] = $row ['ETag'];
        }
        array_multisort($num1, SORT_ASC, $num2, SORT_ASC, $this->parts);
        return $this->client->completeMultipartUpload(array(
            'Bucket' => $this->options['Bucket'],
            'Key' => $this->options['Key'],
            'UploadId' => $uploadId,
            'Parts' => $this->parts)
        );
    }

    private function calculatePartSize($minPartSize)
    {   
        $partSize = intval(ceil(($this->body->getSize() / self::MAX_PARTS)));
        $partSize = max($minPartSize, $partSize);
        $partSize = min($partSize, self::MAX_PART_SIZE);
        $partSize = max($partSize, self::MIN_PART_SIZE);
        return $partSize;
    }

    private function initiateMultipartUpload() {
        $result = $this->client->createMultipartUpload($this->options);
        return $result['UploadId'];
    }

}
