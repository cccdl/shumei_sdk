<?php

namespace cccdl\shumei_sdk\test\Text;

use cccdl\shumei_sdk\Exception\cccdlException;
use cccdl\shumei_sdk\Test\TestAccount;
use GuzzleHttp\Exception\GuzzleException;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    /**
     * 测试发送聊天室消息
     * @return void
     * @throws GuzzleException
     * @throws cccdlException
     */
    public function testDiscern()
    {
        $c = TestAccount::getTestAccessKey();
        $this->assertIsArray($c);

        print_r($c);
        $app = new Text($c['accessKey'], $c['appId']);
        $res = $app->setRegion('sh')->discern('神经病','1','nickname');

        print_r($res);
        $this->assertIsArray($res);
    }
}