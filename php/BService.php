<?

interface BusinessService {
   public function doProcessing();
}

class EJBService implements BusinessService{

	public function doProcessing(){
		echo "Processing task by invoking EJB Service <br/>";
	}

}

class JMSService implements BusinessService{

	public function doProcessing(){
		echo "Processing task by invoking JMS Service <br/>";
	}

}

class BusinessLookUp{
	public function getBusinessService($serviceType){

		if(strtoupper($serviceType)=="EJB"){
			return new EJBService();
		}
		else{
			return new JMSService();
		}
	}

}

class BusinessDelegate{
	private $lookupService; 
	private $businessService;
	private $serviceType;


	public function __construct(){
		$this->lookupService = new BusinessLookUp();
	}
	public function setServiceType($serviceType){
		$this->serviceType =$serviceType;
	}

	public function doTask(){
		$this->businessService = $this->lookupService->getBusinessService($this->serviceType);
		$this->businessService->doProcessing();
	}
}

class Client{

	var $businessService;

	public function __construct(BusinessDelegate $businessService){
		$this->businessService = $businessService;
	}
	
	public function doTask(){
		$this->businessService->doTask();
	}
}

$businessDelegate = new BusinessDelegate();
$businessDelegate->setServiceType("EJB");

$client = new Client($businessDelegate);
$client->doTask();

$businessDelegate->setServiceType("JMS");
$client->doTask();
