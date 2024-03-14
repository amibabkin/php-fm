<?php

namespace Somecode\Framework\http;

class Request
{
  function __construct(
    private readonly array $getParams,
    private readonly array $postData,
    private readonly array $cookie,
    private readonly array $files,
    private readonly array $server,
  ) {
  }

  public static function createFromGlobals(): static
  {
    return new static($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
  }
}
