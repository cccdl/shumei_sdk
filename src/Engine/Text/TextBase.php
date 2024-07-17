<?php

use cccdl\shumei_sdk\Traits\Request;

class TextBase
{
    use Request;

    /**
     * 集群url
     */
    const URL_ARR = [
        //北京
        'bj' => 'http://api-text-bj.fengkongcloud.com/text/v4',

        //上海
        'sh' => 'http://api-text-sh.fengkongcloud.com/text/v4',

        //美国（弗吉尼亚）
        'fjny' => 'http://api-text-fjny.fengkongcloud.com/text/v4',

        //新加坡
        'xjp' => 'http://api-text-xjp.fengkongcloud.com/text/v4',
    ];
    /**
     * @var mixed
     */
    protected $accessKey;
    /**
     * @var mixed
     */
    protected $appId;


    public function __construct($accessKey, $appId)
    {
        $this->accessKey = $accessKey;
        $this->appId = $appId;
    }

}