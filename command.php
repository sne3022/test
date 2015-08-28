<?

interface Order{

	public function execute();
}

class Stock{

	private $name="ABC";
	private $quantity ="10";

	public function buy(){
		echo "Stock [ Name: ".$this->name.", 
         Quantity: " .$this->quantity." ] bought<br/>";
	}

	public function sell(){
		echo "Stock [ Name: ".$this->name.", 
         Quantity: " .$this->quantity." ] sold <br/>";
	}
}

class BuyStock implements Order{

	private $absStock;

	public function __construct($absStock)
	{
		$this->absStock=$absStock;
	}

	public function execute(){
		$this->absStock->buy();

	}
}

class SellStock implements Order{
   private $abcStock;

    public function __construct($absStock)
	{
		$this->absStock=$absStock;
	}

	public function execute(){
		$this->absStock->sell();
	
	}
}

class Broker{

	private $orderList = array();

	public function takeOrder($order)
	{
		array_push($this->orderList, $order);
	}

	public function placeOrder(){

		foreach($this->orderList as $order)
		{
			$order->execute();
		}

		$this->orderList = array();
		
	}
}
class BrokerBuilder {
	private $broker;
	private $buyStockOrder;
	private $SellStockOrder;
	public function __construct($absStock){

		$this->buyStockOrder = new BuyStock($absStock);
		$this->SellStockOrder = new SellStock($absStock);
		$this->broker = new Broker();
	}
	
	public function turn (){
		$this->broker->takeOrder($this->buyStockOrder);
		$this->broker->takeOrder($this->SellStockOrder);
		$this->broker->takeOrder($this->buyStockOrder);
		$this->broker->takeOrder($this->SellStockOrder);
		$this->broker->placeOrder();
		echo "<br/>";
	}

	public function twin(){
		$this->broker->takeOrder($this->buyStockOrder);
		$this->broker->takeOrder($this->buyStockOrder);
		$this->broker->takeOrder($this->SellStockOrder);
		$this->broker->takeOrder($this->SellStockOrder);
		$this->broker->placeOrder();
	}
} 

$brokerBuilder = new BrokerBuilder(new Stock());
$brokerBuilder->turn();
$brokerBuilder->twin();
