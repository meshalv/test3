<?php

namespace src\Integration;

class DataProvider
{
    //[ЗАМЕЧАНИЯ] для переменных так же необходимо добавить phpdoc
    private $host;
    private $user;
    private $password;

    //[ЗАМЕЧАНИЯ] Необходимо добавить типы данных к параметрам
    /**
     * @param $host
     * @param $user
     * @param $password
     */
    public function __construct($host, $user, $password)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * @param array $request
     *
     * @return array
     */
    public function get(array $request)
    {
        // returns a response from external service
    }
}
