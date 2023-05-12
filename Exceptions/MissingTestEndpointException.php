<?php

namespace Nucleus\Exceptions;

use Nucleus\Abstracts\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response;

class MissingTestEndpointException extends Exception
{
    protected $code = Response::HTTP_INTERNAL_SERVER_ERROR;
    protected $message = 'Property ($this->endpoint) is missed in your test.';
}
