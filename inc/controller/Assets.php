<?php 

namespace hmd;

use qt\core\Assets as CoreAssets;

defined('ABSPATH') or exit;

class Assets extends CoreAssets{
    function __construct()
    {
        $this->register();
    }
}

?>