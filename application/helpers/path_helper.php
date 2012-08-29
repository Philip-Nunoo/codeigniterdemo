<?php
if (!function_exists('asset_url'))
{   
    function asset_url()
    {
        // the helper function doesn't have access to $this, so we need to get a reference to the 
        // CodeIgniter instance.  We'll store that reference as $CI and use it instead of $this
        $CI =& get_instance();

        // return the asset_url
        return base_url() . $CI->config->item('asset_path');
    }
}
?>
