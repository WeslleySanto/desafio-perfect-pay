<?php

namespace App\Asaas\CriarUmaNovaCobranca\Payload;

class Payload
{
	public ?string $billingType;
	public ?Callback $callback;
	public ?string $customer;
	public ?string $dueDate;
	public ?float $value;

	/**
	 * Get the value of billingType
	 */
	public function getBillingType()
	{
		return $this->billingType;
	}

	/**
	 * Set the value of billingType
	 *
	 * @return  self
	 */
	public function setBillingType($billingType)
	{
		$this->billingType = $billingType;

		return $this;
	}

	/**
	 * Get the value of customer
	 */ 
	public function getCustomer()
	{
		return $this->customer;
	}

	/**
	 * Set the value of customer
	 *
	 * @return  self
	 */ 
	public function setCustomer($customer)
	{
		$this->customer = $customer;

		return $this;
	}

	/**
	 * Get the value of value
	 */ 
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * Set the value of value
	 *
	 * @return  self
	 */ 
	public function setValue($value)
	{
		$this->value = $value;

		return $this;
	}

	/**
	 * Get the value of dueDate
	 */ 
	public function getDueDate()
	{
		return $this->dueDate;
	}

	/**
	 * Set the value of dueDate
	 *
	 * @return  self
	 */ 
	public function setDueDate($dueDate)
	{
		$this->dueDate = $dueDate;

		return $this;
	}

	/**
	 * Get the value of callback
	 */ 
	public function getCallback()
	{
		return $this->callback;
	}

	/**
	 * Set the value of callback
	 *
	 * @return  self
	 */ 
	public function setCallback($callback)
	{
		$this->callback = $callback;

		return $this;
	}

	public function toJSON(){
		return json_encode($this);
	}

	public function make()
	{
		$payload = new self();

		$payload->setCustomer('cus_000006504866');
        $payload->setValue(129.9);
        $payload->setDueDate(date('Y-m-d'));

        $callback = new Callback();
        $callback->setSuccessUrl('https://weslleyesanto.com.br');
        $callback->setAutoRedirect(false);

        $payload->setCallback($callback);

		return $payload;
	}
}
