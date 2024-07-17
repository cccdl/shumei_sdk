<?php

namespace cccdl\shumei_sdk\Traits;


use cccdl\shumei_sdk\Exception\cccdlException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

trait Request
{
    protected int $timeout = 1;

    /**
     * @throws GuzzleException
     * @throws cccdlException
     */
    public function post($url, $param)
    {

        $client = new Client([
            'timeout' => $this->timeout,
        ]);

        $response = $client->post($url, ['json' => $param]);

        if ($response->getStatusCode() != 200) {
            throw new cccdlException('请求失败: ' . $response->getStatusCode());
        }

        $arr = json_decode($response->getBody(), true);

        if (!isset($arr['code']) || $arr['code'] != 1100) {
            throw new cccdlException('请求结果异常' . $response->getBody());
        }

        return $arr;
    }
}