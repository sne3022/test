<?

interface Iterator_Test{
	public function $hasNext();
	public function $next();
}

interface Container{
	public function getIterator();
}

class NameRepository implements Container{
	var $names = array("Robert", "John", "Julie", "Lora");

	public function getIterator(){
		return new NameIterator();		
	}
}

class NameIterator implements Iterator_Test{
	public $index=0;

	public function hasNext(){

		if($index < ){
			return true;
		}
		return false;
	}

	public function next(){

		if($this->hasNext()){
			return 
		}
		return null;
	}
}

$namesRepository = new NameRepository();

	for


