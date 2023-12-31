<?php

namespace Lodeb\Framework\Http;

class Kernel
{
    public function handle(Request $request): Response
    {
        $content = "<h1>Hello Muchacho's</h1>";

        return new Response($content);
    }
}