<?php

//declare(strict_types=1);
/**
 * Created by PhpStorm.
 *​
 * ClientInterface.php
 *
 * 文件描述
 *
 * User：YM
 * Date：2019/12/23
 * Time：下午5:33
 */


namespace Ym\AliyunSls;


/**
 * ClientInterface
 * 类的介绍
 * @package Ym\AliyunSls
 * User：YM
 * Date：2019/12/23
 * Time：下午5:33
 */
interface ClientInterface
{
    // Put logs to Log Service.
    public function putLogs();

}