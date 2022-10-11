<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 05/10/2022
 * Time: 10:45
 */

namespace BraspagApi\Constants;

/**
 *
 */
class ReasonCodes
{
    /**
     *
     */
    const SUCCESSFUL = 0;

    /**
     *
     */
    const AFFILIATION_NOT_FOUND = 1;

    /**
     *
     */
    const INSUFFICIENT_FUNDS = 2;

    /**
     *
     */
    const COULD_NOT_GET_CREDIT_CARD = 3;

    /**
     *
     */
    const CONNECTION_WITH_ACQUIRER_FAILED = 4;

    /**
     *
     */
    const INVALID_TRANSACTION_TYPE = 5;

    /**
     *
     */
    const INVALID_PAYMENT_PLAN = 6;

    /**
     *
     */
    const DENIED = 7;

    /**
     *
     */
    const SCHEDULED = 8;

    /**
     *
     */
    const WAITING = 9;

    /**
     *
     */
    const AUTHENTICATED = 10;

    /**
     *
     */
    const NOT_AUTHENTICATED = 11;

    /**
     *
     */
    const PROBLEMS_WITH_CREDIT_CARD = 12;

    /**
     *
     */
    const CARD_CANCELED = 13;

    /**
     *
     */
    const BLOCKED_CREDIT_CARD = 14;

    /**
     *
     */
    const CARD_EXPIRED = 15;

    /**
     *
     */
    const ABORTED_BY_FRAUD = 16;

    /**
     *
     */
    const COULD_NOT_ANTIFRAUD = 17;

    /**
     *
     */
    const TRY_AGAIN = 18;

    /**
     *
     */
    const INVALID_AMOUNT = 19;

    /**
     *
     */
    const PROBLEMS_WITH_ISSUER = 20;

    /**
     *
     */
    const INVALID_CARD_NUMBER = 21;

    /**
     *
     */
    const TIME_OUT = 22;

    /**
     *
     */
    const CARTAO_PROTEGIDO_IS_NOT_ENABLED = 23;

    /**
     *
     */
    const PAYMENT_METHOD_IS_NOT_ENABLED = 24;

    /**
     *
     */
    const INVALID_REQUEST = 98;

    /**
     *
     */
    const INTERNAL_ERROR = 99;

}
