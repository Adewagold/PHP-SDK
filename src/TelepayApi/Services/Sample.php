<?php
namespace TelepayApi\Services;

class Sample extends BaseService {

    public function make($param,$amount,$currency){
        return $this->call(
            'services/v1/echo',
            array(),
            'POST',
            array(
                'param'          =>  $param,
                'amount'         =>  $amount,
                'currency'       =>  $currency
            ),
            array()
        );
    }
}