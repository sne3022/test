<?

abstract class Game{
	abstract function initialize();
	abstract function startPlay();
	abstract function endPlay();

		public function play()
		{
			$this->initialize();
			$this->startPlay();
			$this->endPlay();
		}
}

class Cricket extends Game{

	function endPlay()
	{
		echo "Cricket Game Finished!";

	}

	function initialize(){
		echo "Cricket Game Initialized! Start playing.";
	}

	function startPlay(){
		echo "Ccricket Game Started. Enjoy the game!";
	}

}

class Football extends Game{

	function endPlay()
	{
		echo "Football Game Finished!";
	}

	function initialize(){
		echo "Football Game Initialized! Start playing.";
	}

	function startPlay(){
		echo "Football Game Started. Enjoy the game!";
	}
}

	$game = new Cricket();
	$game->play();
	echo "<br/>";
	$game = new Football();
	$game->play();



?>