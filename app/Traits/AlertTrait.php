<?php

namespace App\Traits;

trait AlertTrait{
    protected function successAlert($msg){
        return ['type'=>'success', 'msg'=>$msg];
    }

    protected function errorAlert($msg){
        return ['type'=>'error', 'msg'=>$msg];
    }

    protected function warningAlert($msg){
        return ['type'=>'warning', 'msg'=>$msg];
    }

    protected function infoAlert($msg){
        return ['type'=>'info', 'msg'=>$msg];
    }
}