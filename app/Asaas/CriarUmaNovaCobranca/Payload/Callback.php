<?php

namespace App\Asaas\CriarUmaNovaCobranca\Payload;

class Callback
{
	public bool $autoRedirect;
	public string $successUrl;

	/**
	 * Get the value of autoRedirect
	 */ 
	public function getAutoRedirect()
	{
		return $this->autoRedirect;
	}

	/**
	 * Set the value of autoRedirect
	 *
	 * @return  self
	 */ 
	public function setAutoRedirect($autoRedirect)
	{
		$this->autoRedirect = $autoRedirect;

		return $this;
	}

	/**
	 * Get the value of successUrl
	 */ 
	public function getSuccessUrl()
	{
		return $this->successUrl;
	}

	/**
	 * Set the value of successUrl
	 *
	 * @return  self
	 */ 
	public function setSuccessUrl($successUrl)
	{
		$this->successUrl = $successUrl;

		return $this;
	}
}
