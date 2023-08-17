<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/experiment_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Errors;

class ExperimentError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�

6google/ads/googleads/v13/errors/experiment_error.protogoogle.ads.googleads.v13.errors"�
ExperimentErrorEnum"�
ExperimentError
UNSPECIFIED 
UNKNOWN!
CANNOT_SET_START_DATE_IN_PAST
END_DATE_BEFORE_START_DATE 
START_DATE_TOO_FAR_IN_FUTURE
DUPLICATE_EXPERIMENT_NAME$
 CANNOT_MODIFY_REMOVED_EXPERIMENT
START_DATE_ALREADY_PASSED
CANNOT_SET_END_DATE_IN_PAST 
CANNOT_SET_STATUS_TO_REMOVED	
CANNOT_MODIFY_PAST_END_DATE

INVALID_STATUS!
INVALID_CAMPAIGN_CHANNEL_TYPE&
"OVERLAPPING_MEMBERS_AND_DATE_RANGE#
INVALID_TRIAL_ARM_TRAFFIC_SPLIT
TRAFFIC_SPLIT_OVERLAPPINGE
ASUM_TRIAL_ARM_TRAFFIC_UNEQUALS_TO_TRIAL_TRAFFIC_SPLIT_DENOMINATOR+
\'CANNOT_MODIFY_TRAFFIC_SPLIT_AFTER_START
EXPERIMENT_NOT_FOUND
EXPERIMENT_NOT_YET_STARTED%
!CANNOT_HAVE_MULTIPLE_CONTROL_ARMS
IN_DESIGN_CAMPAIGNS_NOT_SET"
CANNOT_SET_STATUS_TO_GRADUATED8
4CANNOT_CREATE_EXPERIMENT_CAMPAIGN_WITH_SHARED_BUDGET8
4CANNOT_CREATE_EXPERIMENT_CAMPAIGN_WITH_CUSTOM_BUDGET
STATUS_TRANSITION_INVALIDB�
#com.google.ads.googleads.v13.errorsBExperimentErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/errors;errors�GAA�Google.Ads.GoogleAds.V13.Errors�Google\\Ads\\GoogleAds\\V13\\Errors�#Google::Ads::GoogleAds::V13::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

