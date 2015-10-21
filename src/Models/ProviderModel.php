<?php
namespace Api\Models;

class ProviderModel extends Api\Models\BaseModel
{
    public function __construct()
    {
        echo __METHOD__ . "\n";

        parent::__construct();
    }
}