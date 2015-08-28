<?
interface State{
	public function doAction($context);
}

class StartState implements State{

	public function doAction($context){
		echo "Player is in start state <br/>";
		$context->setState($this);
	}

	public function toString(){
		return "Start State <br/>";
	}
}

class StopState implements State{

	public function doAction($context){
		echo "player is ins stop state <br/>";
		$context->setState($this);
	}

	public function toString(){
		return "Stop State <br/>";
	}
}

class Context{
	private $state;

	public function __construct(){
		$this->state=null;
	}

	public function setState($state){
		$this->state=$state;
	}

	public function getState(){
		return $this->state;
	}
}

$context = new Context();

$startState = new StartState();
$startState->doAction($context);

echo $context->getState()->toString();

$stopState = new StopState();
$stopState->doAction($context);

echo $context->getState()->toString();
