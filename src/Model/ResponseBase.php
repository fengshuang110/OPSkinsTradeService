<?php

namespace OmerKocaoglu\OPSkinsTradeService\Model;

class ResponseBase
{
    /** @var string */
    public $request_url = null;
    /** @var string */
    public $response_content = null;
    /** @var int */
    public $http_status_code = 0;
}
