<?php

namespace Somecode\Framework\http;

class Kernel
{
  public function handle(Request $request): Response
  {
    // controller -> content
    $content = '<h1>hello world</h1>';

    return new Response($content);
  }
}
