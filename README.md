# hyperf
AliYun SLS Log For Hyperf

Copyright (c) 2020 尹萌

Fixed by Ken 2021 肯


一 安装
composer require hyperf-aliyun-log/aliyun-sls

二 使用
  1.生成配置文件
    php bin/hyperf.php vendor:publish hyperf-aliyun-log/aliyun-sls
  
  2.putlog 到阿里云 sls
  
    use Hyperf\Di\Annotation\Inject;
    use Ym\AliyunSls\ClientInterface;
    /**
    * @Inject
    * @var ClientInterface
    */
    protected $sls;
    
    // 注意不能有空置，如果有空值可以处理为0，否则无法压缩数据产生致命错误。
    $logData = ['k1'=>v1,'k2'=>v2，……];
    $this->sls->putLogs($logData);
    
  3.getlog 从阿里云 sls 
  
    use Hyperf\Di\Annotation\Inject;
    use Ym\AliyunSls\ClientInterface;
    /**
    * @Inject
    * @var ClientInterface
    */
    protected $sls;
    
    /**
     *
     * @param string $project
     *            project name
     * @param string $logStore
     *            logstore name
     * @param integer $from
     *            the begin time
     * @param integer $to
     *            the end time
     * @param string $topic
     *            topic name of logs
     * @param string $query
     *            user defined query
     * @param integer $line
     *            query return line number
     * @param integer $offset
     *            the log offset to return
     * @param bool $reverse
     *            if reverse is set to true, the query will return the latest logs first
     */
    $response = $this->sls->getLogs($project, $logstore, $from, $to, $topic, $query, $line, $offset, $reverse);
    foreach($response->getLogs() as $log){
        $datas[] = $log->getContents();
    }
    print_r($datas);
    
       
       
       

