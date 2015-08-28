<?
interface Item{
	public function name();
	public function packing();
	public function price();
}

interface Packing{
	public function pack();
}


class Bottle implements Packing {

   public function pack() {
      return "Bottle";
   }
}

class Wrapper implements Packing{

	public function pack(){
		return "Wrapper";
	}
}

abstract class Burger implements Item{

	public function packing(){
		return new Wrapper();
	} 
} 

abstract class ColdDrink implements Item{

	public function packing(){
		return new Bottle();
	}

	public abstract function price(); 
}

class VegBurger extends Burger{

	public function price(){
		return "25.0";	
	}

	public function name(){
		return "Veg Burger";
	}
}

class ChickenBurger extends Burger{

	public function price(){
		return "30.0";	
	}

	public function name(){
		return "Coke";
	}
}
class Coke extends ColdDrink{

	public function price(){
		return "35.5";	
	}

	public function name(){
		return "Cock";
	}
}

class Pepsi extends ColdDrink{

	public function price(){
		return "35.5";	
	}

	public function name(){
		return "Pepsi";
	}
}


class Meal{

	private $items = array(); 

	public function addItem(Item $item)
	{
		array_push($this->items, $item); 
	}

	public function getCost(){
		$cost = "0.0";

		foreach($this->items as $item)
		{
			$cost +=$item->price();
		}
	} 

	public function showItems(){
		foreach($this->items as $item)
		{
			echo "item" .$item->name()."<br/>";
			echo "packing" .$item->packing()->pack()."<br/>";
			echo "price". $item->price()."<br/>";
		}

	}
}

class MealBuilder {

   public function prepareVegMeal (){
      $meal = new Meal();
      $meal->addItem(new VegBurger());
      $meal->addItem(new Coke());
      return $meal;
   }   

   public function prepareNonVegMeal (){
      $meal = new Meal();
      $meal->addItem(new ChickenBurger());
      $meal->addItem(new Pepsi());
      return $meal;
   }
}


      $mealBuilder = new MealBuilder();
      $vegMeal = $mealBuilder->prepareVegMeal();
      echo"Veg Meal <br/>";
      $vegMeal->showItems();
      echo "Total Cost: " .$vegMeal->getCost()."<br/>";

      $nonVegMeal = $mealBuilder->prepareNonVegMeal();
      echo "\n\nNon-Veg Meal <br/>";
      $nonVegMeal->showItems();
      echo "Total Cost: " .$nonVegMeal->getCost()."<br/>";


?>