<?php
class GlobalVariablesHelper {

    public static function getGlobalVariables() {
        // for production
        $environment_globals = array();
        $environment_globals['merchant_id'] = sfConfig::get('app_globals_merchant_id');
        $environment_globals['working_key'] = sfConfig::get('app_globals_working_key');
        $environment_globals['redirect_url'] = sfConfig::get('app_globals_redirect_url');
        return $environment_globals;
    }

}