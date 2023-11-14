<?php

class CustomerProfile
{
	private $customerId;
	private $purchaseHistory;

	public function __construct($customerId)
	{
		$this->customerId = $customerId;
		$this->purchaseHistory = [];
	}

	public function addPurchase($item, $quantity)
	{
		$this->purchaseHistory[] = ["item" => $item, "quantity" => $quantity];
	}

	public function getPurchaseHistory()
	{
		return $this->purchaseHistory;
	}
}
