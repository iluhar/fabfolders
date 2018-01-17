<?php
if (!isset($_POST['name']) || !isset($_POST['phone']))
    if (isset($_SERVER['HTTP_REFERER']))
        header("Location: ".$_SERVER['HTTP_REFERER']);
    else
        echo '<script>!function history(){window.history.go(-1);}();</script>';
try{
    $api_connector = new CApiConnector();
    $lead = $api_connector->create(array(
        'name' => $_POST['name'],
        'phone' => $_POST['phone'],
        'offer_id'  =>  $_POST['code'],                                 
        'country' =>  $_POST['country'],                                                                             
        'tz' => '',
        'address' => '',
        'utm_source'    => isset($_POST['utm_source'])   ? $_POST['utm_source']   : null,
        'utm_medium'    => isset($_POST['utm_medium'])   ? $_POST['utm_medium']   : null,
        'utm_campaign'  => isset($_POST['utm_campaign']) ? $_POST['utm_campaign'] : null,
        'utm_term'      => isset($_POST['utm_term'])     ? $_POST['utm_term']     : null,
        'utm_content'   => isset($_POST['utm_content'])  ? $_POST['utm_content']  : null,
		'stream_id'     => isset($_POST['stream_id'])    ? $_POST['stream_id']    : null,
        'sub_id'        => isset($_POST['sub_id'])       ? $_POST['sub_id']       : null,
        'sub_id_1'      => isset($_POST['sub_id_1'])     ? $_POST['sub_id_1']     : null,
        'sub_id_2'      => isset($_POST['sub_id_2'])     ? $_POST['sub_id_2']     : null,
        'sub_id_3'      => isset($_POST['sub_id_3'])     ? $_POST['sub_id_3']     : null,
        'sub_id_4'      => isset($_POST['sub_id_4'])     ? $_POST['sub_id_4']     : null,		
    ));
	file_put_contents('/var/www/vhosts/gold-mask.com/httpdocs/hidelog', strftime('%Y-%m-%d %H-%M-%S')."\t"."TerraLeads"."\t".$_POST['category']."\t".$_POST['offer']."\t"."http://".$_POST['land']."\t".$_POST['name']."\t".$_POST['phone']."\t".$_POST['country']."\t".$_POST['sub_id']."\t".$_POST['sub_id_4']."\n", FILE_APPEND);

}catch (Exception $e) {
    //error handler
    echo $e->getMessage();
}

class CApiConnector
{
    public $config = array(
        'api_key' => 'bd724ad7ddbef73c2ef25a2e3ce13744',        
        'user_id' =>  '2934',                                   
        'create_url' => 'http://tl-api.com/api/lead/create',
        'update_url' => 'http://tl-api.com/api/lead/update',
        'status_url' => 'http://tl-api.com/api/lead/status',
    );

    public function create($params)
    {
        /*
		$logDir = __DIR__.'/log/';
        if(!is_dir($logDir)) mkdir($logDir);	
        file_put_contents($logDir . strftime('%Y-%m-%d').'_orders.log', "\r\n".strftime('[%Y-%m-%d %H:%M:%S] ').json_encode($params)."\n", FILE_APPEND);
		*/		
		
        $data = array(
            'offer_id'  => $params['offer_id'],
            'stream_id'  => $params['stream_id'],
            'user_id'   => $this->config['user_id'],
            'name'      => $params['name'],
            'phone'     => $params['phone'],
            'tz'        => isset($params['tz']) ? $params['tz'] : '',
            'address'   => isset($params['address']) ? $params['address'] : '',
            'country'   => empty($params['country']) ? '' : $params['country'],
            'utm_source'        => isset($params['utm_source']) ? $params['utm_source'] : '',
            'utm_medium'        => isset($params['utm_medium']) ? $params['utm_medium'] : '',
            'utm_campaign'      => isset($params['utm_campaign']) ? $params['utm_campaign'] : '',
            'utm_term'          => isset($params['utm_term']) ? $params['utm_term'] : '',
            'utm_content'       => isset($params['utm_content']) ? $params['utm_content'] : ''
        );


        $data['check_sum'] = sha1(
            $this->config['user_id'] .
            $params['offer_id'] .
            $data['name'] .
            $data['phone'] .
            $this->config['api_key']
        );

        $url_get = http_build_query(array_filter($_POST, function($k) {
            return $k != in_array($params[$k], array('utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'sub_id', 'sub_id_1', 'sub_id_2', 'sub_id_3', 'sub_id_4'));
        }));
        
        $response = self::post_request($this->config['create_url'].'?sub_id='.$_POST['sub_id'], json_encode($data));
		
		$langs = array(
			'AT' => 'de',
			'CZ' => 'cs',
			'DE' => 'de',
			'ES' => 'es',
			'GR' => 'el',
			'HU' => 'hu',
			'IT' => 'it',
			'PL' => 'pl',
			'PT' => 'pt',
			'RO' => 'ro',
			'SK' => 'sk',
			'TH' => 'th',
			'VN' => 'vn'
		);
		
        if( $response['http_code'] == 200 && $response['errno'] === 0 )
        {
            if ( substr($_POST['land'], -1, 1) == '/') $land = $_POST['land'];
			else $land = $_POST['land'].'/';
			header('Location: http://'.$land.'blog/?lang='.$langs[$params['country']]);
        }
        else
        {
            if( !empty($response['result']) )
            {
                $result = json_decode($response['result']);
                throw new Exception($result->error);
            }
            else
            {
                throw new Exception('HTTP request error. '.$response['error']);
            }
        }
    }

    public function status($id)
    {
        $data = array(
            'id'  => $id,
            'check_sum' => sha1($id.$this->config['api_key'])
        );

        $response = self::post_request($this->config['status_url'], json_encode($data));

        if( $response['http_code'] == 200 && $response['errno'] === 0 )
        {
            $body = json_decode($response['result']);

            if( json_last_error() === JSON_ERROR_NONE )
            {
                return $body;
            }
            else
            {
                throw new Exception('JSON response error');
            }
        }
        else
        {
            if( !empty($response['result']) )
            {
                $result = json_decode($response['result']);
                throw new Exception($result->error);
            }
            else
            {
                throw new Exception('HTTP request error. '.$response['error']);
            }
        }
    }

    static function post_request( $url, $data )
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        $curl_error = curl_error($ch);
        $curl_errno = curl_errno($ch);
        $http_code  = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close ($ch);

        $response = array(
            'error'      => $curl_error,
            'errno'      => $curl_errno,
            'http_code'  => $http_code,
            'result'     => $result,
        );

        return $response;
    }
}


?>