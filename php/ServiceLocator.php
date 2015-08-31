<?

interface Service{
	public function getName();
	public function execute(); 
}

class Service1 implements Service{

	public function execute(){
		echo "Executing Service1 <br/>";
	}

	public function getName(){
		return "Service1";
	}

}

class Service2 implements Service{

	public function execute(){
		echo "Executing Service2 <br/>";
	}

	public function getName(){
		return "Service2";
	}

}

class InitialContext{
		public function lookup($jndiName){//찾기

		if(strtoupper($jndiName)=="SERVICE1"){
			echo "Looking up and creating a new Service1 object <br/>";
			return new Service1();
		}
		else if(strtoupper($jndiName)=="SERVICE2"){
			echo "Looking up and creating a new Service2 object <br/>";
			return new Service2();
		}
		return null;
	}
}

class Cache{ //저장소 

	private $services;

	public function __construct(){
		$this->services= array();


	}

	public function getService($serviceName){
			
		foreach ($this->services as $service) {
         if($service->getName()==$serviceName){
            echo "Returning cached  " . $serviceName . " object. <br/>";
            return $service;
         }
      }

		return null;
	}

	public function addService($newService)
	{
		$exists = false;

		 foreach($this->services as $service) {
         	if($service->getName() == $newService->getName()){
            $exists = true;
         	}
      	 }

     	 if(!$exists){
         array_push($this->services, $newService);
     	 }
	}

}

class ServiceLocator{
	private static $cache;


	public static function getService($jndiName){

		if(ServiceLocator::$cache ==null)
		{
		ServiceLocator::$cache = new Cache();
		}

		$service = ServiceLocator::$cache->getService($jndiName);

		if($service != null){
			return $service;
		}


		$context = new InitialContext();
		$service1 = $context->lookup($jndiName);
		ServiceLocator::$cache->addService($service1);
		return $service1;
		}

}
	  $service = ServiceLocator::getService("Service1");
      $service->execute();
      $service = ServiceLocator::getService("Service2");
      $service->execute();
      $service = ServiceLocator::getService("Service1");
      $service->execute();
      $service = ServiceLocator::getService("Service2");
      $service->execute();	

?>