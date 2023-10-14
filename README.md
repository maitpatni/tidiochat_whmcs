# WHMCS TidioChat Integration Module

TidioChat Integration for WHMCS with Client Identification and Tagging

This is a WHMCS module for integrating Tidio Chat, a live chat service. This module allows you to automate the process of tagging your WHMCS clients in Tidio and manage them more effectively.

#Features
Client Identification: Automatically identify logged-in WHMCS clients in Tidio Chat.

Client Tagging: Automatically tag clients based on whether they have active services. Two tags are used: "WHMCS Active Client" and "WHMCS Inactive Client".

#Installation
Download the hooks.php and tidiochat_whmcs.php files


Log in to your WHMCS admin panel navigate to Setup -> Addon Modules and activate the module.

#Usage
Once installed, the module will automatically start tagging new and existing WHMCS clients in your Tidio Chat dashboard.

#Configuration
Update the tidiochat_jsfile setting in tbladdonmodules table to point to your Tidio Chat JavaScript file.


#Support
For support, feature requests, or bug reports, please open an issue on this GitHub repository.
