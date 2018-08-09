<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/9
 * Time: 13:42
 */

namespace Wjdnw\Xiaochengxu;

use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;
class Xiaochengxutest
{
    /**
     * @var SessionManager
     */
    protected $session;
    /**
     * @var Repository
     */
    protected $config;
    /**
     * Packagetest constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct( SessionManager $session, Repository $config )
    {
        $this->session = $session;
        $this->config = $config;
    }
    /**
     * @param string $msg
     * @return string
     */
    public function test_rtn($msg = ''){
        $config_arr = $this->config->get('xiaochengxu.options');
        return $config_arr;
    }
}