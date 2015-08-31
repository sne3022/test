<?
interface Iterator_test
{
	public function hasNext();
	public function next();
}

interface Container 
{
	public function getIterator();

}

class NameRepository implements Container
{
	var $names = ["Robert", "john", "Julie", "Lora"];
	//var $store;

	public function getIterator()
	{
		$store =new NameIterator();
		$store->setData($this->names);
		return $store;
	}	

}

class NameIterator implements Iterator_test{
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

      $namesRepository = new NameRepository();
      
      $iter = $namesRepository->getIterator(); 
      
      while($iter->hasNext())
      {
         $name = $iter->next();
         echo "Name : " . $name;
      } 	



?>