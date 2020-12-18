<?php

namespace Validator;

class Validator
{    
    /**
     * cpf
     *
     * @param string $cpf
     * @return bool
     */
    public function cpf(string $cpf): bool
    {
        if (preg_match("/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/", $cpf)) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * phone
     *
     * @param string $phone
     * @return bool
     */
    public function phone(string $phone): bool
    {
        if (preg_match("/^\([0-9]{2}\) [0-9]{5}\-[0-9]{4}$/", $phone)) {
            return true;
        } else {
            return false;
        }
    }
        
    /**
     * cnpj
     *
     * @param string $cnpj
     * @return bool
     */
    public function cnpj(string $cnpj): bool
    {
        if (preg_match("/^[0-9]{2}\.[0-9]{3}\.[0-9]{3}\/[0-9]{4}\-[0-9]{2}$/", $cnpj)) {
            return true;
        } else {
            return false;
        }
    }
    
    // /**
    //  * email
    //  *
    //  * @param string $email
    //  * @return bool
    //  */
    // public function email(string $email): bool
    // {
    //     if (preg_match("/^[a-zA-Z0-9.-_]+@[a-z]+\.[a-z.]{1,6}$/", $email)) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    
    /**
     * filterEmail
     *
     * @param string $email
     * @return bool
     */
    public function email(string $email): bool
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * url
     *
     * @param string $url
     * @return bool
     */
    public function url(string $url): bool
    {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            return true;
        } else {
            return false;
        }
    }
}
