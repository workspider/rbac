 <?php
/**
 * Created by PhpStorm.
 * User: 86183
 * Date: 2019/1/2
 * Time: 16:42
 */

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
    $ch = curl_init();
    curl_setopt_array($ch, $opts);
    $data = curl_exec($ch);
    curl_close($ch);
    return json_decode($data,true);
}

  $res = http('http://172.16.101.22/home/login/logins',['username'=>'cmlaw_renxiaoman','password'=>'!cmlaw0']);
  if($res['status'] = '1001'){
      http('http://172.16.101.22/api/Load',['aaaa'=>1]);
      http('http://172.16.101.22/api/load.lichong',['aaaa'=>1]);
      http('http://172.16.101.22/api/load.sum',['aaaa'=>1]);
      http('http://172.16.101.22/api/load.week',['aaaa'=>1]);
      http('http://172.16.101.22/api/load.month',['aaaa'=>1]);
  }
