<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


/**
 * 自定义ajax返回函数
 * @param int $status 返回状态值
 * @param string $msg 返回提示信息
 * @param type $data 返回数据内容
 * @param string $type 返回数据类型
 * @return type
 */
function returnAjax($status, $msg, $data = '', $type = 'json')
{
    $rData = array(
        'status' => $status,
        'msg' => $msg,
        'data' => $data,
        'type' => $type
    );
    //返回数据类型
    switch ($type) {
        case 'json':
            return json($rData);
        case 'xml':
            break;
        default :
            break;
    }
}


/**
 * 发送HTTP请求方法
 * @param  string $url 请求URL
 * @param  array $params 请求参数
 * @param  string $method 请求方法GET/POST
 * @return array  $data   响应数据
 */
function http($url, $params, $method = 'GET', $header = array(), $multi = false)
{
    $opts = array(
        CURLOPT_TIMEOUT => 30,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_HTTPHEADER => $header
    );
    /* 根据请求类型设置特定参数 */
    switch (strtoupper($method)) {
        case 'GET':
            $opts[CURLOPT_URL] = $url . '?' . http_build_query($params);
            break;
        case 'POST':
            //判断是否传输文件
            $params = $multi ? $params : http_build_query($params);
            $opts[CURLOPT_URL] = $url;
            $opts[CURLOPT_POST] = 1;
            $opts[CURLOPT_POSTFIELDS] = $params;
            break;
        default:
            throw new Exception('不支持的请求方式！');
    }
    /* 初始化并执行curl请求 */
    $ch = curl_init();
    curl_setopt_array($ch, $opts);
    $data = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);
    if ($error) throw new Exception('请求发生错误：' . $error);
    return $data;
}


function saveHtml($fielname, $html, $type = 'html')
{

    try {
        if (file_put_contents('./../data/' . $type . '/' . $fielname . '.html', $html)) {
            return 'data/' . $type . '/' . $fielname . '.html';
        } else {
            return false;
        }

    } catch (\think\Exception $exception) {
        return false;
    };
}


/**
 * * execl数据导出
 * 特殊处理：合并单元格需要先对数据进行处理
 * @param $title 标题名称
 * @param $filename 文件前缀名称
 * @param $tableheader 表头 ['标题11','标题22','标题33','标题44','标题55']
 * @param $data 数据 [[1,2,3,4,5],[11,22,33,44,55]]
 * @throws \PHPExcel_Exception
 * @throws \PHPExcel_Writer_Exception
 */
function exportOrderExcel($title, $filename, $tableheader, $data)
{
    //引入核心文件
    $objPHPExcel = new \PHPExcel();
    $letter = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
        'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH', 'AI', 'AJ', 'AK', 'AL', 'AM',
        'AN', 'AO', 'AP', 'AQ', 'AR', 'AS', 'AT', 'AU', 'AV', 'AW', 'AX', 'AY', 'AZ');
    //表头数组

    $objPHPExcel->getActiveSheet()->mergeCells('A1:' . $letter[count($tableheader) - 1] . '1');//合并单元格（如果要拆分单元格是需要先合并再拆分的，否则程序会报错）
    $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', $title);
    $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
    $objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(18);
    $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);

    for ($i = 0; $i < count($tableheader); $i++) {
        $objPHPExcel->getActiveSheet()->setCellValue("$letter[$i]2", "$tableheader[$i]");
    }

    //填充表格信息
    for ($i = 3; $i <= count($data) + 2; $i++) {
        $j = 0;
        foreach ($data[$i - 3] as $key => $value) {
            $objPHPExcel->getActiveSheet()->setCellValue("$letter[$j]$i", "$value");
            $j++;
        }
    }
    //创建Excel输入对象
    $write = new \PHPExcel_Writer_Excel5($objPHPExcel);
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
    header("Content-Type:application/force-download");
    header("Content-Type:application/vnd.ms-execl");
    header("Content-Type:application/octet-stream");
    header("Content-Type:application/download");;
    header('Content-Disposition:attachment;filename="' . $filename . '_' . date("YmdHis") . '_.xls"');
    header("Content-Transfer-Encoding:binary");
    $write->save('php://output');
    exit;
}


function getPassword($password){
    return md5(config('USER_KEY').md5($password));
}

function generate_password( $length = 8 ) {
    // 密码字符集，可任意添加你需要的字符
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = '';
    for ( $i = 0; $i < $length; $i++ )
    {
        // 这里提供两种字符获取方式
        // 第一种是使用 substr 截取$chars中的任意一位字符；
        // 第二种是取字符数组 $chars 的任意元素
        // $password .= substr($chars, mt_rand(0, strlen($chars) – 1), 1);
        $password .= $chars[ mt_rand(0, strlen($chars) - 1) ];
    }
    return $password;
}


/**
 * 各种币种汇率兑换
 * $Ym 已有金额
 * $Wh  未知金额汇率
 * $Yh 已知汇率
 * $B 得出未知金额
 */

function huilv_duihuan($Ym,$Wh,$Yh)
{
    $A=bcmul($Ym,$Wh,2);
    $B=bcdiv($A,$Yh,2);
    return $B;
}


if (!function_exists('sysconf')) {
    /**
     * 设备或配置系统参数
     * @param string $name 参数名称
     * @param boolean $value 无值为获取
     * @return string|boolean
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    function sysconf($name, $value = null)
    {
        static $data = [];
        list($field, $raw) = explode('|', "{$name}|");
        if ($value !== null) {
            \think\facade\Cache::tag('system')->rm('_sysconf_');
            list($row, $data) = [['name' => $field, 'value' => $value], []];
            return \library\tools\Data::save('SystemConfig', $row, 'name');
        }
        if (empty($data)) {
            $data = \think\facade\Cache::tag('system')->get('_sysconf_', []);
            if (empty($data)) {
                $data = \think\Db::name('SystemConfig')->column('name,value');
                \think\facade\Cache::tag('system')->set('_sysconf_', $data, 3600);
            }
        }
        return isset($data[$field]) ? (strtolower($raw) === 'raw' ? $data[$field] : htmlspecialchars($data[$field])) : '';
    }
}

