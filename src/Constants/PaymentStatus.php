<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 11:29
 */

namespace BraspagApi\Constants;

/**
 *
 */
class PaymentStatus
{
    /**
     *
     */
    const NOT_FINISHED = 0;

    /**
     *
     */
    const AUTHORIZED = 1;

    /**
     *
     */
    const PAYMENT_CONFIRMED = 2;

    /**
     *
     */
    const DENIED = 2;

    /**
     *
     */
    const VOIDED = 10;

    /**
     *
     */
    const REFUNDED = 11;

    /**
     *
     */
    const PENDING = 12;

    /**
     *
     */
    const ABORTED = 13;

    /**
     *
     */
    const SCHEDULED = 20;
}
