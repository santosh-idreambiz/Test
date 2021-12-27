<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



// KYC Automatic and Manual Fail Over 
Route::post('Kyc-Service-Get', 'API\KycServiceV12Controller@GetServicefrom');
Route::post('Kyc-Service-Update', 'API\KycServiceV12Controller@GetServiceUpdateandmove');

// Key Management V1.0
Route::post('partnerregisterv10', 'API\KeyManagementV10Controller@RegisterPartnerV10');
Route::post('s3registerv10', 'API\KeyManagementV10Controller@RegisterS3RecordV10');
Route::post('petchkeyv10', 'API\KeyManagementV10Controller@PetchKeyV10');
Route::post('getkeyv10', 'API\KeyManagementV10Controller@GetKeyV10');

Route::post('Encrypt_Key_Create', 'API\EncryptkeyManagementController@CreateEncryptKey');
Route::post('Encrypt_Key', 'API\EncryptkeyManagementController@Encryptkeydisplay');
Route::post('Encrypt_Key-V2.3', 'API\EncryptkeyManagementController@Encryptkeydisplayc23');
Route::post('Encrypt_Key-V1.4', 'API\EncryptkeyManagementController@Encryptkeydisplayc23');

Route::post('eKYC-StepResponse', 'API\Digital_LockerV12Controller@digilockerstepresponse');
Route::post('KYC-Get-Service-Time_Out-V1.2', 'API\Digital_LockerV12Controller@GetServicetimeout');
Route::post('eKYC-SDFC-Store-Response-ECS', 'API\EkycV12Controller@Kyc_Response_SDFC_Store_ECS');
Route::post('eKYC-SDFC-Store-Response', 'API\EkycV12Controller@Kyc_Response_SDFC_Store');

// security KYC API
Route::get('Get-Auth-V1.2/{id}', 'API\EkycV22Controller@ekycgetauth');
Route::post('Secure_Request-Key-V1.2', 'API\EkycV12Controller@EkycDataFromApp');
Route::post('Request-Key-V1.2', 'API\EkycV12Controller@EkycDataFromApp');
Route::get('Secure_oKYC-Invoke-URL-V1.2', 'API\EkycV12Controller@ekycinvoke_ecs');
Route::get('eKYC-Master-V1.2', 'API\Digital_LockerV12Controller@digilocker');
Route::post('Secure_eKYC-StepResponse', 'API\Digital_LockerV12Controller@digilockerstepresponse');
Route::post('KYC-Response-V1.2', 'API\Digital_LockerV12Controller@kycdata');

Route::post('Response-Collection-V1.2', 'API\EkycV12Controller@EkycEcsResponse');
Route::post('oKYC-Get-Data-SFDC-V1.2', 'API\EkycV12Controller@ekyc_ecs_getresponse_by_salesforce');

Route::post('eKYC-Create-Code-V1.2', 'API\Digital_LockerV12Controller@digilocker_mobile_accesstoken');
// For Start KYCV2.2 API
Route::post('Request_key_to_Partner', 'API\Digital_LockerV22Controller@Request_key_to_Partner');
Route::post('Request_key_to_Partner_ECS', 'API\Digital_LockerV22Controller@Request_key_to_Partner_ECS');
Route::post('Secure_eKYC-StepResponseV2.2', 'API\Digital_LockerV22Controller@digilockerstepresponse');
Route::post('KYC-Response-V2.2', 'API\Digital_LockerV22Controller@kycdata');
Route::post('Response-Collection-V2.2', 'API\EkycV22Controller@EkycEcsResponse');
Route::post('oKYC-Get-Data-SFDC-V2.2', 'API\EkycV22Controller@ekyc_ecs_getresponse_by_salesforce');
Route::post('eKYC-Create-Code-V2.2', 'API\Digital_LockerV22Controller@digilocker_mobile_accesstoken');
Route::post('Request-Key-V2.2', 'API\EkycV22Controller@EkycDataFromApp');
Route::get('oKYC-Invoke-URL-V2.2', 'API\EkycV22Controller@ekycinvoke_ecs');
Route::post('eKYC-SDFC-Store-Response-ECSV2.2', 'API\EkycV22Controller@Kyc_Response_SDFC_Store_ECS');
Route::post('eKYC-SDFC-Store-ResponseV2.2', 'API\EkycV22Controller@Kyc_Response_SDFC_Store');
Route::get('Get-Auth-V2.2/{id}', 'API\EkycV22Controller@ekycgetauth');
Route::get('eKYC-Master-V2.2', 'API\Digital_LockerV22Controller@digilocker');

// KYCV2.3
Route::post('Secure_eKYC-StepResponseV2.3', 'API\Digital_LockerV23Controller@digilockerstepresponse');
Route::post('KYC-Response-V2.3', 'API\Digital_LockerV23Controller@kycdata');
Route::post('Response-Collection-V2.3', 'API\EkycV23Controller@EkycEcsResponse');
Route::post('oKYC-Get-Data-SFDC-V2.3', 'API\EkycV23Controller@ekyc_ecs_getresponse_by_salesforce');
Route::post('eKYC-Create-Code-V2.3', 'API\Digital_LockerV23Controller@digilocker_mobile_accesstoken');
Route::post('Request-Key-V2.3', 'API\EkycV23Controller@EkycDataFromApp');
Route::get('oKYC-Invoke-URL-V2.3', 'API\EkycV23Controller@ekycinvoke_ecs');
Route::post('eKYC-SDFC-Store-Response-ECSV2.3', 'API\EkycV23Controller@Kyc_Response_SDFC_Store_ECS');
Route::post('eKYC-SDFC-Store-ResponseV2.3', 'API\EkycV23Controller@Kyc_Response_SDFC_Store');
Route::get('Get-Auth-V2.3/{id}', 'API\EkycV23Controller@ekycgetauth');
Route::get('eKYC-Master-V2.3', 'API\Digital_LockerV23Controller@digilocker');
// END KYCV2.2 API
// Start KYCV1.4
Route::post('eKYC-SDFC-Store-Response-ECSV1.4', 'API\EkycV14Controller@Kyc_Response_SDFC_Store_ECS');
Route::post('eKYC-SDFC-Store-ResponseV1.4', 'API\EkycV14Controller@Kyc_Response_SDFC_Store');
Route::post('Request-Key-V1.4', 'API\EkycV14Controller@EkycDataFromApp');
Route::get('Secure_oKYC-Invoke-URL-V1.4', 'API\EkycV14Controller@ekycinvoke_ecs');
Route::post('Response-Collection-V1.4', 'API\EkycV14Controller@EkycEcsResponse');
Route::post('oKYC-Get-Data-SFDC-V1.4', 'API\EkycV14Controller@ekyc_ecs_getresponse_by_salesforce');

Route::get('eKYC-Master-V1.4', 'API\Digital_LockerV14Controller@digilocker');
Route::post('Secure_eKYC-StepResponseV1.4', 'API\Digital_LockerV14Controller@digilockerstepresponse');
Route::post('KYC-Response-V1.4', 'API\Digital_LockerV14Controller@kycdata');
Route::post('eKYC-Create-Code-V1.4', 'API\Digital_LockerV14Controller@digilocker_mobile_accesstoken');

// End KYCV1.4
Route::middleware('kycapi')->group(function () {
Route::post('Secret_Key', 'API\EkycV12Controller@accesstoken');
// For KYCV2.2
Route::post('Secret_KeyV2.2', 'API\EkycV22Controller@accesstoken');
//END
});
Route::middleware('kycapiv2')->group(function () {
        // For KYCV2.3
    Route::post('Secret_KeyV2.3', 'API\EkycV23Controller@accesstoken');
    //END
       // For KYCV1.4
    Route::post('Secret_KeyV1.4', 'API\EkycV14Controller@accesstoken');
    // END
    });
Route::middleware('kycsecret')->group(function () {
Route::post('Secure_Event-V1.2', 'API\EkycV12Controller@EkycEventReport');
Route::post('Secure_Device-Tracking-V1.2', 'API\EkycV12Controller@EkycDeviceTracking');
Route::post('Secure_Get-Data-V1.2', 'API\EkycV12Controller@EkycGetDataFromURL');
Route::post('Secure_oKYC-Invoke-V1.2', 'API\EkycV12Controller@ekyc');
Route::post('Secure_Request-Key-Status-V1.2', 'API\EkycV12Controller@ekycgetresponse');
Route::post('Secure_Selfie-Image-Upload-V1.2', 'API\EkycV12Controller@ekycgetimage');
Route::post('Secure_eKYC-Get-Service-Time_Out-V1.2', 'API\Digital_LockerV12Controller@GetServicetimeout');
Route::post('Secure_eKYC-Get-Service-V1.2', 'API\Digital_LockerV12Controller@GetService');
// For KYCV2.2
Route::post('Secure_Event-V2.2', 'API\EkycV22Controller@EkycEventReport');
Route::post('Secure_Device-Tracking-V2.2', 'API\EkycV22Controller@EkycDeviceTracking');
Route::post('Secure_Get-Data-V2.2', 'API\EkycV22Controller@EkycGetDataFromURL');
Route::post('Secure_oKYC-Invoke-V2.2', 'API\EkycV22Controller@ekyc');
Route::post('Secure_Request-Key-Status-V2.2', 'API\EkycV22Controller@ekycgetresponse');
Route::post('Secure_Selfie-Image-Upload-V2.2', 'API\EkycV22Controller@ekycgetimage');
Route::post('Secure_eKYC-Get-Service-Time_Out-V2.2', 'API\Digital_LockerV22Controller@GetServicetimeout');
Route::post('Secure_eKYC-Get-Service-V2.2', 'API\Digital_LockerV22Controller@GetService');
//END
});
Route::middleware('kycsecretv2')->group(function () {
        // For KYCV2.3
    Route::post('Secure_Event-V2.3', 'API\EkycV23Controller@EkycEventReport');
    Route::post('Secure_Device-Tracking-V2.3', 'API\EkycV23Controller@EkycDeviceTracking');
    Route::post('Secure_Get-Data-V2.3', 'API\EkycV23Controller@EkycGetDataFromURL');
    Route::post('Secure_oKYC-Invoke-V2.3', 'API\EkycV23Controller@ekyc');
    Route::post('Secure_Request-Key-Status-V2.3', 'API\EkycV23Controller@ekycgetresponse');
    Route::post('Secure_Selfie-Image-Upload-V2.3', 'API\EkycV23Controller@ekycgetimage');
    Route::post('Secure_Selfie-ByPaas-V2.3', 'API\EkycV23Controller@ekycgetimagebypaas');
    Route::post('Secure_eKYC-Get-Service-Time_Out-V2.3', 'API\Digital_LockerV23Controller@GetServicetimeout');
    Route::post('Secure_eKYC-Get-Service-V2.3', 'API\Digital_LockerV23Controller@GetService');
    //END
     // For KYCV1.4
    Route::post('Secure_Event-V1.4', 'API\EkycV14Controller@EkycEventReport');
    Route::post('Secure_Device-Tracking-V1.4', 'API\EkycV14Controller@EkycDeviceTracking');
    Route::post('Secure_Get-Data-V1.4', 'API\EkycV14Controller@EkycGetDataFromURL');
    Route::post('Secure_oKYC-Invoke-V1.4', 'API\EkycV14Controller@ekyc');
    Route::post('Secure_Request-Key-Status-V1.4', 'API\EkycV14Controller@ekycgetresponse');
    Route::post('Secure_Selfie-Image-Upload-V1.4', 'API\EkycV14Controller@ekycgetimage');
	  Route::post('KYC_SFDC-V1.4', 'API\EkycV14Controller@ekycsfdcpush');
    Route::post('Secure_Selfie-ByPaas-V1.4', 'API\EkycV14Controller@ekycgetimagebypaas');
    Route::post('KYC_ResponseV1.4', 'API\EkycV14Controller@KYC_Response');
    Route::post('Secure_eKYC-Get-Service-Time_Out-V1.4', 'API\Digital_LockerV14Controller@GetServicetimeout');
    Route::post('Secure_eKYC-Get-Service-V1.4', 'API\Digital_LockerV14Controller@GetService');
    //END
    });
Route::get('Kyc_Report_KYC12', 'API\KycReportController@Kyc_Report_KYC12');
Route::get('Kyc_Report_KYC22', 'API\KycReportController@Kyc_Report_KYC22');

Route::post('KYC_Response', 'API\EkycV12Controller@KYC_Response');
Route::post('Kyc_Response_SDFC_StoreXSell', 'API\EkycV12Controller@Kyc_Response_SDFC_StoreXSell');
Route::post('Other_App_GetData', 'API\KYC_Other_APP_Controller@Other_App_GetData');

// For AIF

Route::post('KYC_Get_Docs', 'API\KYC_Other_APP_Controller@KYC_Get_Data_Docs_file_selfi');

Route::post('KYC_Response', 'API\KYC_Other_APP_Controller@Response_Get_Data');
Route::post('Request-Key-V1.3', 'API\EkycV12Controller@EkycDataFromApp');
Route::post('KYC_Funnal-V2.3', 'API\EkycV23Controller@KYC_Funnal');
Route::post('KYC_Funnal-V1.4', 'API\EkycV14Controller@KYC_Funnal');

// Version 1.4
Route::post('KYC-ResponseV1.4', 'API\Digital_LockerV14Controller@kycdatav14');


// App Monitor
Route::get('Store_Data',  'API\AppMonitoringV1Controller@StoreData');
Route::post('Get_Data',  'API\AppMonitoringV1Controller@getData');
Route::post('Get_Log_Mobile', 'API\AppMonitoringV1Controller@getLog');
Route::post('Get_Log_Request_Key', 'API\AppMonitoringV1Controller@getLogUsingRequestKey');
Route::post('E-mandate-All-Log-Mobile', 'API\AppMonitoringV1Controller@getEmandateLog');
Route::post('E-mandate-Reliance-Log-Mobile', 'API\AppMonitoringV1Controller@getRelEmandateLog');
Route::post('KYC-Reliance-Log-Mobile', 'API\AppMonitoringV1Controller@getRelKYCLog');
Route::post('Schedule_Count_Event', 'API\AppMonitoringV1Controller@countEvent');
Route::get('Cron_Update_Count', 'API\AppMonitoringV1Controller@searchUpdateCount');
Route::get('Get_All_Report_List', 'API\AppMonitoringV1Controller@getAllReportList');
Route::post('Get_Report_Details', 'API\AppMonitoringV1Controller@getReportAllDetails');
Route::post('Get_Report_Details_CSV', 'API\AppMonitoringV1Controller@getReportAllDetailsCSV');
Route::post('Get_Report_Name', 'API\AppMonitoringV1Controller@getReportName');
Route::post('Get_KYC_Remark', 'API\AppMonitoringV1Controller@getKYCRemark');
Route::post('Get_Emandate_Remark', 'API\AppMonitoringV1Controller@getEmandateRemark');
Route::post('Add_New_Events', 'API\AppMonitoringV1Controller@addEvents');
Route::post('Get_Events_List', 'API\AppMonitoringV1Controller@getEventsList');
Route::post('Delete_Events', 'API\AppMonitoringV1Controller@deleteEvents');

Route::get('KYC_Hourly_Data', 'API\AppMonitoringV1Controller@kycHourlyData');
Route::get('E_mandate_Hourly_Data', 'API\AppMonitoringV1Controller@emandateHourlyData');
Route::post('Get_Hourly_Data', 'API\AppMonitoringV1Controller@getHourlyData');
Route::get('KYC_Last_Seven_Hour_Data', 'API\AppMonitoringV1Controller@getKYCSevenHourData');



// CP Monitor
Route::get('reportpetchcp', 'API\CustomerPortalController@ReportUpdateCp');
Route::get('setcron', 'API\CustomerPortalController@DailyStageCronForGraph');
Route::get('dailyreport', 'API\CustomerPortalController@DailyStagereportGraph');
Route::get('setcrontest', 'API\TestController@DailyStageCronForGraphTEST');
Route::post('setcronforgraph', 'API\ReportCorrectionV10Controller@ReportCorrectionGraphCron');
Route::post('setcronforgraphstatus', 'API\ReportCorrectionV10Controller@ReportCorrectionGraph');
Route::post('graphupgradtev10', 'API\ReportCorrectionV10Controller@GraphUpdateIM');
Route::get('cpreportsetcron', 'API\CPReportsController@CPReportsCronForGraph');
Route::get('cpreportpresetcron', 'API\CPReportsController@CPReportsCronForGraphpre');


