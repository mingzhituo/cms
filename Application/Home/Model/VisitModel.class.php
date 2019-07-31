<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-12-28 09:12:17
 * @version $Id$
 */

namespace Home\Model;

use Think\Model;

class VisitModel extends Model {
    
    public function log()
    {
    	$data['ip'] = $_SERVER['REMOTE_ADDR'];
        $data['date']=strtotime(date('Y-m-d',time()));
        $data['time']=$_SERVER['REQUEST_TIME'];
        $data['session_id']=SESSION_ID;
        $record = $this->where("ip = '{$data['ip']}' and date = {$data['date']} and session_id ='{$data['session_id']}'")->find();
        if ($record) {
          $data['sum'] = $record['sum']+1;
          M('visit')->where("ip = '{$data['ip']}' and date = {$data['date']} and session_id ='{$data['session_id']}'")->save($data);
        }else{
          $data['sum'] = 1;
          $this->add($data);
        }
    }
    
}