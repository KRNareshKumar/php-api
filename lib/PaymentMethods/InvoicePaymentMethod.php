<?php

namespace Heidelpay\PhpApi\PaymentMethods;

use Heidelpay\PhpApi\TransactionTypes\AuthorizeTransactionType;
use Heidelpay\PhpApi\TransactionTypes\ReversalTransactionType;
use Heidelpay\PhpApi\TransactionTypes\RefundTransactionType;

/**
 * Invoice Payment Class
 *
 * This payment method is the classic unsecured invoice.
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2016-present Heidelberger Payment GmbH. All rights reserved.
 *
 * @link  http://dev.heidelpay.com/heidelpay-php-api/
 *
 * @author  Jens Richter
 *
 * @package  Heidelpay
 * @subpackage PhpApi
 * @category PhpApi
 */
class InvoicePaymentMethod
{
    use BasicPaymentMethodTrait;
    use AuthorizeTransactionType;
    use ReversalTransactionType;
    use RefundTransactionType;

    /**
     * Payment code for this payment method
     *
     * @var string payment code
     */
    protected $_paymentCode = 'IV';

    /**
     * Payment brand name for this payment method
     *
     * @var string brand name
     */
    protected $_brand = null;
}
