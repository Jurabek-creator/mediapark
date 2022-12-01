<?php

namespace App\Helpers\Api\V1;

class ValidationHelper
{
    public static function check($params){
        if($params['method'] == "login.login"){
            return [
                "params.email" => "required",
                "params.password" => "required",
            ];
        }else if($params['method'] == "client.create"){
            return [
                "params.application_id" => "required|unique:clients,application_id",
                "params.client_code" => "required|unique:clients,client_code",
                "params.passport" => "required|unique:clients,passport",
                "params.pnfl" => "required|unique:clients,pnfl",
                "params.phone" => "required|unique:cards,phone",
                "params.limit" => "required|numeric",
                "params.date_expiry" => "required",
                "params.first_name" => "required",
                "params.last_name" => "required",
                "params.middle_name" => "required",
            ];
        }else if($params['method'] == "brand.get"){
            return [];
        }else{
            return [
                "method" => [
                    "required",
                    "in:login.login,
                    client.create,
                    brand.get,",
                ],
            ];
        }

    }
}