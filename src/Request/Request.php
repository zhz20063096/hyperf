<?php

//declare(strict_types=1);
/**
 * Created by PhpStorm.
 *​
 * Request.php
 *
 *
 *
 * User：YM
 * Date：2019/12/24
 * Time：下午4:01
 */


namespace Ym\AliyunSls\Request;


/**
 * Request
 * 类的介绍
 * @package Ym\AliyunSls\Request
 * User：YM
 * Date：2019/12/24
 * Time：下午4:01
 */
class Request
{
    /**
     * @var string project name
     */
    private $project;

    /**
     * Request constructor
     *
     * @param string $project
     *            project name
     */
    public function __construct($project) {
        $this->project = $project;
    }

    /**
     * Get project name
     *
     * @return string project name
     */
    public function getProject() {
        return $this->project;
    }

    /**
     * Set project name
     *
     * @param string $project
     *            project name
     */
    public function setProject($project) {
        $this->project = $project;
    }
}