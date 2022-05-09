<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller {

    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = ['functions'];
    public $session;
    public $db;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->session = \Config\Services::session();
        if ($this->session->get('is_authenticated')) {
            $language = \Config\Services::language();
            $language->setLocale($this->session->get('user_language'));
        }
    }

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger) {
        $this->session = \Config\Services::session();

        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        $this->db = db_connect();
    }

    public function config_update_item($pattern, $newValue, $fileName = "app/config/App.php") {
        // $fileName = "application/config/database.php";
        // $pattern_hostname = '$db[\'default\'][\'hostname\']';
        $out = '';
        $pattern_find = FALSE;
        if (file_exists($fileName)) {
            $file = fopen($fileName, 'r+');
            while (!feof($file)) {
                $line = fgets($file);

                if (strpos($line, $pattern) !== false) {
                    $out .= $newValue . PHP_EOL;
                    $pattern_find = TRUE;
                } else {
                    $out .= $line;
                }
            }
            if ($pattern_find) {
                file_put_contents($fileName, $out);
            }

            fclose($file);
        }
        return $pattern_find;
    }

    public function email_sender($to, $emailCC, $subject, $content) {

        $message = "Please activate the accoute Now";
        $email = \Config\Services::email();
        $email->setFrom('maintex.notification@gmail.com', 'your Title Here');
        $email->setTo($to);
        $email->setSubject('Your Subject here | tutsmake.com');
        $email->setMessage($message); //your message here


        $email->send();
        var_dump($email->printDebugger());
        return 1;
        $email = \Config\Services::email();

        $email->setFrom($email->fromEmail, $email->fromName);
        $email->setTo($to);
        $email->setCC($emailCC);

        $email->setSubject($subject);
        $email->setMessage($content);

        $res = $email->send(true);
        var_dump($email->printDebugger(['headers']));
        if ($res) {
            return 1;
        } else {
            $email->printDebugger(['headers']);
            return 0;
        }
    }

    public function load_company_setting($companyid = null) {
        $company_id = (is_null($companyid)) ? $this->session->get("user_company_id") : $companyid;
        $query = $this->db->table('settings')
                ->select('settings.*')
                ->where("company_id", $company_id)
                ->get();
        if ($query->getNumRows() == 1) {
            return $query->getRow();
        } else {
            return false;
        }
    }
    
    public function load_frontend_view($view_name, $view_data = array()) {
        echo view('layout/frontend_header');
        echo view('frontend/'.$view_name, $view_data);
        echo view('layout/frontend_footer');
    }

    public function load_backend_view($view_name, $view_data = array()) {
        /////
        $header_data['session'] = $this->session;
        $cnt = $this->db->table('sys_menu mlc')->select('count(*)')
                ->where("mlc.idParent = m.id and mlc.isActivated = 1")
                ->getCompiledSelect();
        $query = $this->db->table('sys_menu m')->select("m.*, m.code as titremenu,($cnt) as n")
                ->join("sys_user_profile_menu p", "p.idMenu = m.id", "inner")
                ->where("m.isActivated", 1)
                ->where("p.idProfile", $this->session->get("user_profile"))
                ->orderBy('orderBy')
                ->get();
        $header_data['menu'] = $query->getResult('array');

        echo view('layout/backend_header', $header_data);
        echo view('backend/'.$view_name, $view_data);
        echo view('layout/backend_footer');
    }

    public function unformat($montant) {
        $a = str_replace(array(' ',), '', $montant);
        return str_replace(array(','), '.', $a);
    }

    function format_money($number, $currency = 'XOF') {
        switch ($currency) {
            case 'XOF':
                $number = number_format($number, 0, '.', ' ');
                break;
            default:
                $number = number_format($number, 0, '.', ' ');
                break;
        }
        return $number;
    }

    public function login() {
        header('Location: ' . base_url('login'));
        exit();
    }

}
