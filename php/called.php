<html>
<head>
<meta charset ="utf-8">
</head>
<body>
<?
	class A
	{
		var $b;
		var $c;
		var $d;
		public function __construct()
		{
			$this->b = new B();
			$this->c = new C();
			$this->d = new D();
		}

		public function __call($method, $argment)
		{
			if(strtoupper($method)=="LIST")
			{
				$this->b->getList();
			}
			else if($method=="getRead")
			{
				$this->b->getRead();
			}
			else if($method=="getWrite")
			{
				$this->c->getWrite();
			}
			else if($method=="getUpdate")
			{
				$this->d->getUpdate();
			}
			else
			{
				echo "존재하지 않는 메소드";
			}
		}
	}

	class B
	{


		public function getList()
		{
			echo "getList";
			echo "<br/>";
		}

		public function getRead()
		{
			echo "getRead";
			echo "<br/>";
		}
	}

	class C
	{
		public function getWrite()
		{
			echo "getWrite";
			echo "<br/>";
		}
	}

	class D
	{
		public function getUpdate()
		{
			echo "getUpdate";
			echo "<br/>";
		}

	}

	$a = new A();
	/*$a->c->getWrite();
	  $a->b->getRead();
	  $a->d->getUpdate();
    */

		$a->getWrite();
	    $a->getRead();
	    $a->getUpdate();
	    $a->lIsT();


?>

</body>
</html>


