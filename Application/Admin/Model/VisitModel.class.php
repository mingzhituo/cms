<?php

/**

 */



namespace Admin\Model;

use Think\Model;

class VisitModel extends Model {
    
    public function today()
    {
        $date = strtotime(date('Y-m-d',time()));
        $ipsum = $this->distinct(true)->where(array('date'=>$date))->field('ip')->select();
        $ipsum = count($ipsum);
        return array(
            'sum' => $this->where(array('date'=>$date))->sum('sum'), 
            'useful' => $this->where(array('date'=>$date))->count(),
            'ipsum' => $ipsum,
            );
    }

    public function yesterday()
    {
        $date = strtotime(date('Y-m-d',time()-3600*24));
        $ipsum = $this->distinct(true)->where(array('date'=>$date))->field('ip')->select();
        $ipsum = count($ipsum);
        return array(
            'sum' => $this->where(array('date'=>$date))->sum('sum'), 
            'useful' => $this->where(array('date'=>$date))->count(),
            'ipsum' => $ipsum,
            );
    }

    public function week()
    {
        $date = strtotime(date('Y-m-d',time()-3600*24*(date('w', time()))));
        $ipsum = $this->distinct(true)->where("date >= {$date}")->field('ip')->select();
        $ipsum = count($ipsum);
        return array(
            'sum' => $this->where("date >= {$date}")->sum('sum'), 
            'useful' => $this->where("date >= {$date}")->count(),
            'ipsum' => $ipsum,
            );
    }

    public function month()
    {
        $date = strtotime(date('Y-m-',time()).'1');
        $ipsum = $this->distinct(true)->where("date >= {$date}")->field('ip')->select();
        $ipsum = count($ipsum);
        return array(
            'sum' => $this->where("date >= {$date}")->sum('sum'), 
            'useful' => $this->where("date >= {$date}")->count(),
            'ipsum' => $ipsum,
            );
    }
}

