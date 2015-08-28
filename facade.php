<?

interface Shape{
	public function draw();
	public function getName();
}

class Rectangle implements Shape{

	public function draw(){
		echo "Rectangle::draw() <br/>";
	}

	public function getName(){
		return "Rectangle";
	}
}

class Square implements Shape{

	public function draw(){
		echo "Square::draw() <br/>";
	}

	public function getName(){
		return "Square";
	}

}

class Circle implements Shape{

	public function draw(){
		echo "Circle::draw()<br/>";
	}

	public function getName(){
		return "Circle";
	}
}

class Pantagon implements Shape{

	public function draw(){
		echo "Pantagon::draw()<br/>";
	}

	public function getName(){
		return "Pantagon";
	}
}

class Hexagon implements Shape{
	public function draw(){
		echo "Hexagon::draw()<br/>";
	}

	public function getName(){
		return "Hexagon";
	}
}

class Cache{

	private $shapes; 

	public function __construct(){
		$this->shapes = array();
	}

	public function getService($shapeName){

		foreach($this->shapes as $shape)
		{
			if(strtoupper($shape->getName())==$shapeName){
				echo "Returning cached  ".$shapeName." object <br/>";
				return $shape ;
			}
		}
		return null;
	}

	public function addService($newShape){
		$exists = false;
		foreach($this->shapes as $shape)
		{
			if(strtoupper($shape->getName())==$newShape){
				$exists = true;
			}
		}

		if(!$exists){
			array_push($this->shapes, $newShape); 
		}
	} 
}

class ShapeMaker{ // 하면 배열 에 담고 excute 호출해서 한꺼번에 실행 되게끔 

	private $shapeList = array();
	private $iter;
	private $shapeMaker;
	private static $cache;
	public function __construct(){
		
		$this->iter = new NameIterator();

	}

	public function draw($shape)
	{

		if(ShapeMaker::$cache ==null)
		{
		ShapeMaker::$cache = new Cache();
		}

		$shapeType = ShapeMaker::$cache->getService($shape);

		if($service != null){
			array_push($this->shapeList, $service);
			return ;
		}

			if(strtoupper($shape)=="CIRCLE"){
			$this->shapeMaker = new Circle();
			}

			else if(strtoupper($shape)=="RECTANGLE"){
			$this->shapeMaker = new Rectangle();

			}
			else if(strtoupper($shape)=="SQUARE"){
			 $this->shapeMaker = new Square();
			}

			else if(strtoupper($shape)=="PANTAGON" || strtoupper($shape)=="HEXAGON")
			{
			$this->shapeMaker = new ShapeAdapter($shape);
			}
			array_push($this->shapeList, $this->shapeMaker);
			ShapeMaker::$cache->addService($this->shapeMaker);
	}



	public function execute(){

		$this->iter->setData($this->shapeList);

		while($this->iter->hasNext())
		{
			"들어옴";
			echo "name:";
         	$this->iter->next()->draw();

		}
	}
}

class ShapeAdapter 
{

	var $shape;
	var $shape2;
	public function __construct($shape){

		if(strtoupper($shape)=="PANTAGON"){
			$this->shape = new Pantagon();
			$this->shape2 = $shape;
		}
		else if(strtoupper($shape)=="HEXAGON"){
			$this->shape = new Hexagon();
			$this->shape2 =$shape;
			
		}
	}

	public function draw()
	{
		if(strtoupper($this->shape2)=="PANTAGON"){
			$this->shape->draw();
		}
		else if(strtoupper($this->shape2)=="HEXAGON"){
			$this->shape->draw();
		}
	}

	public function getName(){
		return $this->shape2;
	}
}

class NameIterator {
		var $index = 0;
		var $names;

		public function setData($names)
		{
			$this->names = $names;
		}

		public function hasNext()
		{
			if($this->index < count($this->names)){
				return true;
			}
			return false;
		}

		public function next(){

			if($this->hasNext()){
				return $this->names[$this->index++];
			}
			return null;
		}

}



$shapeMaker = new ShapeMaker();
$shapeMaker->draw("CIRCLE");
$shapeMaker->draw("RECTANGLE");
$shapeMaker->draw("SQUARE");
$shapeMaker->draw("PANTAGON");
$shapeMaker->draw("HEXAGON");
$shapeMaker->execute();

echo "<br />";
$shapeMaker->draw("CIRCLE");
$shapeMaker->draw("RECTANGLE");
$shapeMaker->draw("SQUARE");
$shapeMaker->draw("PANTAGON");
$shapeMaker->draw("HEXAGON");
$shapeMaker->execute();
