<?php

use WHMCS\Database\Capsule;

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

add_hook('ClientAreaFooterOutput', 1, function ($vars) {
    $output = "";
    $tag = "";

    // Check if the user is logged in.
    if (isset($vars['clientsdetails'])) {
        $clientDetails = $vars['clientsdetails'];
        $clientId = $clientDetails['id'];

        // Check if the client has any active services.
        $activeServicesCount = Capsule::table('tblhosting')
            ->where('userid', $clientId)
            ->where('domainstatus', 'Active')
            ->count();

        $tag = $activeServicesCount > 0 ? "WHMCS Active Client" : "WHMCS Inactive Client";

        // Generate the Visitor Identification code.
        $output .= <<<EOL
<script type="text/javascript">
document.tidioIdentify = {
    email: "{$clientDetails['email']}",
    name: "{$clientDetails['firstname']} {$clientDetails['lastname']}",
    phone: "{$clientDetails['phonenumber']}",
    tags: ["{$tag}"]
};
</script>
EOL;
    }

    $moduleSetting = Capsule::table('tbladdonmodules')
        ->where('module', 'tidiochat_whmcs')
        ->where('setting', 'tidiochat_jsfile')
        ->first();

    if ($moduleSetting && $moduleSetting->value) {
        $jsFileName = $moduleSetting->value;
        $jsFileURL = "//code.tidio.co/{$jsFileName}.js";
        $output .= "<script type='text/javascript' src='{$jsFileURL}' async></script>";
    }

    return $output;
});
