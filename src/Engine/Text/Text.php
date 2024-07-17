<?php

namespace cccdl\shumei_sdk\Engine\Text;


use cccdl\shumei_sdk\Exception\cccdlException;
use GuzzleHttp\Exception\GuzzleException;

class Text extends TextBase
{
    protected $url;

    /**
     * 文字识别
     * @param string $text
     * @param string $tokenId
     * @param string $eventId
     * @param string $type
     * @return mixed
     * @throws GuzzleException
     * @throws cccdlException
     */
    public function discern(string $text, string $tokenId, string $eventId, string $type = 'ALL')
    {
        $data = [
            'accessKey' => $this->accessKey,
            'appId' => $this->appId,
            'eventId' => $eventId,
            'type' => $type,
            'data' => [
                'text' => $text,
                'tokenId' => $tokenId
            ],
        ];

        return $this->post($this->url, $data);
    }

    /**
     * @param $regionKey
     * @return $this
     * @throws cccdlException
     */
    public function setRegion($regionKey)
    {
        if (!isset(self::URL_ARR[$regionKey])) {
            throw new cccdlException('地区不存在');
        }

        $this->url = self::URL_ARR[$regionKey];
        return $this;
    }
}