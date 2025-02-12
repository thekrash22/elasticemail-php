<?php
/**
 * BodyContentType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Elastic Email REST API
 *
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    The API has a limit of 20 concurrent connections and a hard timeout of 600 seconds per request.    To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    This is the documentation for REST API. If you’d like to read our legacy documentation regarding Web API v2 click <a target=\"_blank\" href=\"https://api.elasticemail.com/public/help\">here</a>.    Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>
 *
 * The version of the OpenAPI document: 4.0.0
 * Contact: support@elasticemail.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ElasticEmail\Model;
use \ElasticEmail\ObjectSerializer;

/**
 * BodyContentType Class Doc Comment
 *
 * @category Class
 * @description Type of body part
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BodyContentType
{
    /**
     * Possible values of this enum
     */
    const HTML = 'HTML';
    const PLAIN_TEXT = 'PlainText';
    const AMP = 'AMP';
    const CSS = 'CSS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HTML,
            self::PLAIN_TEXT,
            self::AMP,
            self::CSS,
        ];
    }
}


