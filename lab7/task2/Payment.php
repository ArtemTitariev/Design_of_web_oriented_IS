<?php

// payment processing interface
interface IPaymentHandler
{
	public function setSuccessor(IPaymentHandler $successor);
	public function handlePayment(float $amount);
}

// basic account
class AccountBalanceHandler implements IPaymentHandler
{
	private $successor;
	private $userAccount;

	public function __construct(UserAccount $userAccount)
	{
		$this->userAccount = $userAccount;
	}

	public function setSuccessor(IPaymentHandler $successor)
	{
		$this->successor = $successor;
	}

	public function handlePayment(float $amount)
	{
		// if there are enough funds
		if ($amount <= $this->userAccount->getAccountBalance()) {
			echo "Payment is made from the main account<br/>";
			// if there is another successor in the chain
		} elseif ($this->successor != null) {
			$this->successor->handlePayment($amount);
			// insufficient funds
		} else {
			echo "Payment rejected: insufficient funds<br/>";
		}
	}
}

// credit card
class CreditCardHandler implements IPaymentHandler
{
	/** @var IPaymentHandler */
	private $successor;

	/** @var UserAccount */
	private $userAccount;

	public function __construct(UserAccount $userAccount)
	{
		$this->userAccount = $userAccount;
	}

	public function setSuccessor(IPaymentHandler $successor)
	{
		$this->successor = $successor;
	}

	public function handlePayment(float $amount)
	{
		// the check logic is similar
		if ($amount <= $this->userAccount->getCreditCardBalance()) {
			echo "Payment is made by credit card<br/>";
		} elseif ($this->successor != null) {
			$this->successor->handlePayment($amount);
		} else {
			echo "Payment rejected: insufficient funds<br/>";
		}
	}
}
