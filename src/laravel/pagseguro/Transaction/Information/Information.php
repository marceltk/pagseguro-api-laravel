<?php

namespace laravel\pagseguro\Transaction\Information;

use laravel\pagseguro\Complements\DataHydratorTrait\DataHydratorTrait;
use laravel\pagseguro\Complements\DataHydratorTrait\DataHydratorProtectedTrait;
use laravel\pagseguro\Item\ItemCollection;
use laravel\pagseguro\Sender\SenderInterface;
use laravel\pagseguro\Shipping\ShippingInterface;
use laravel\pagseguro\Payment\Method\MethodInterface as PaymentMethod;

/**
 * Transaction Information Object
 *
 * @category   Transaction
 * @package    Laravel\PagSeguro\Transaction
 *
 * @author     Isaque de Souza <isaquesb@gmail.com>
 * @since      2015-12-10
 *
 * @copyright  Laravel\PagSeguro
 */
class Information
{

    /**
     * Transaction Code
     * @var string
     */
    protected $code;

    /**
     * Date
     * @var \DateTime
     */
    protected $date;

    /**
     * Reference
     * @var string
     */
    protected $reference;

    /**
     * Type
     * @var int
     */
    protected $type;

    /**
     * Status
     * @var int
     */
    protected $status;

    /**
     * Last Event Date
     * @var \DateTime
     */
    protected $lasteventdate;

    /**
     * Payment Method
     * @var PaymentMethod
     */
    protected $paymentmethod;

    /**
     * @var Amounts
     */
    protected $amounts;

    /**
     * Installment Amount
     * @var int
     */
    protected $installmentcount;

    /**
     * Item Count
     * @var int
     */
    protected $itemcount;

    /**
     * Items
     * @var ItemCollection
     */
    protected $items;

    /**
     * Sender
     * @var SenderInterface
     */
    protected $sender;

    /**
     * Shipping
     * @var ShippingInterface
     */
    protected $shipping;

    use DataHydratorTrait, DataHydratorProtectedTrait {
        DataHydratorProtectedTrait::hydrate insteadof DataHydratorTrait;
    }

    /**
     * Constructor
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        if (count($data)) {
            $this->hydrate($data);
        }
    }

    /**
     * Transaction Code
     * @param string $code
     * @throws \InvalidArgumentException
     */
    protected function setCode($code)
    {
        if (!\is_string($code) || \strlen($code) != 36) {
            throw new \InvalidArgumentException('Invalid transaction code');
        }
        $this->code = $code;
    }

    /**
     * Get Code
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Get Date
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get Reference
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Get Type
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get Status
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get Last event date
     * @return \DateTime
     */
    public function getLasteventdate()
    {
        return $this->lasteventdate;
    }

    /**
     * Get Payment Method
     * @return PaymentMethod
     */
    public function getPaymentmethod()
    {
        return $this->paymentmethod;
    }

    /**
     * Get Amounts
     * @return Amounts
     */
    public function getAmounts()
    {
        return $this->amounts;
    }

    /**
     * Get Installment Count
     * @return int
     */
    public function getInstallmentcount()
    {
        return $this->installmentcount;
    }

    /**
     * Get Item Count
     * @return int
     */
    public function getItemcount()
    {
        return $this->itemcount;
    }

    /**
     * Get Items
     * @return ItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Get Sender
     * @return SenderInterface
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Get Shipping
     * @return ShippingInterface
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    protected function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    protected function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    protected function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    protected function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    protected function setLasteventdate($lasteventdate)
    {
        $this->lasteventdate = $lasteventdate;
        return $this;
    }

    protected function setPaymentmethod(PaymentMehod $paymentmethod)
    {
        $this->paymentmethod = $paymentmethod;
        return $this;
    }

    protected function setAmounts(Amounts $amounts)
    {
        $this->amounts = $amounts;
        return $this;
    }

    protected function setInstallmentcount($installmentcount)
    {
        $this->installmentcount = $installmentcount;
        return $this;
    }

    protected function setItemcount($itemcount)
    {
        $this->itemcount = $itemcount;
        return $this;
    }

    protected function setItems(ItemCollection $items)
    {
        $this->items = $items;
        return $this;
    }

    protected function setSender(SenderInterface $sender)
    {
        $this->sender = $sender;
        return $this;
    }

    protected function setShipping(ShippingInterface $shipping)
    {
        $this->shipping = $shipping;
        return $this;
    }
}
