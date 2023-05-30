<?php

namespace Santosdave\Travelport;

interface TravelportLogger
{
    public function log($type, $service, $request, $content);
}