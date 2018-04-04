<?php
/**
 * Created by PhpStorm.
 * User: LAP001
 * Date: 4/5/2016
 * Time: 8:27 PM
 */

namespace CommonBundle\Util;


class ServiceMessages
{
    const SUCCESS_FALSE = 0;
    const SUCCESS_TRUE = 1;
    const HTTP_OK = 200;
    const HTTP_BAD_REQUEST = 400;
    const NODATA = 'No Data Found';
    const NONEWDATA = 'No New Data  Found';
    const PARAMETER_ISSUE = 'Somthing is missing.';
    const EMAIL_MANDATORY = 'Email id mandatory';
    const SUCCESSFUL_ACCESS = 'Service Successfully accessed';
    const SUCCESSFUL_REQUEST = 'Thank you, request has been updated successfully';
    const SUCCESSFUL_NEW_REQUEST = 'Thank you, your request has been added successfully';
    const PASSWORD_MANDATORY = "Password is mandatory";
    const USERLOGINMODEID_MANDATORY = "Userloginmodeid is mandatory";
    const USER_EXISTS = "This email is already being used for an existing account. Please sign in.";
    const USER_LOGIN_SUCCESSFULLY = "User Login Successfully";
    const INVALID_USER_LOGIN = "User Login unsuccessfull";
    const USERID_MANDATORY = "UserID is mandatory";
    const LOCATION_MANDATORY = "Location is mandatory";
    const COUNTRY_MANDATORY = "Country is mandatory";
    const STATE_MANDATORY = "State is mandatory";
    const FIRSTNAME_MANDATORY = "First name is mandatory";
    const LASTNAME_MANDATORY = "Last name is mandatory";
    const Mobile_MANDATORY = "Mobile number is mandatory";
    const ALREADY = "Mobile No Already Register";
    const SUCESSDELETE = "Successfull delete image";
    const PROFILE_IMAGE_MISSING = "Profile Image missing";
    const SIGNATURE_IMAGE_MISSING = "Signature Image missing";
    const DATE_CONFLICT = 'Selected Date conflict with already requested Leave, OD or Tour.';
    const DATE_CONFLICT_SCHEDULE = 'Selected Date conflict with already requested.';
    const SUBJECT = 'Service Assign Request';
    const COMPLETESUBJECT = 'Service Completion Request';
    const RESCHEDULESUBJECT = 'Service Reschedule Request';
    const APPROVALSUBJECT = 'Service Approval Request';

}