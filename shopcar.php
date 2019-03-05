<?php
	session_start();
	class shop{

		public function addcommodity($name){
			
			//array_push($commodity,$name); //商品陣列
			$arr_a = array("a", "b", "c"); 
			$result=array_merge($arr_a, $name);
			$result2=implode(",",$result);
			$length=count($result);
			$_SESSION["len"]=$length;
			return $result2;

		}

		public function sum($addsum){
			$sum2=0;
			for($i=0;$i<=count($addsum);$i++){
				$sum2+=$addsum[$i];
				
			}
			return $sum2;

		} 
		public function commoditysum(){

			return $_SESSION["len"];


		}

	}
	

	$ad=array(50,62,33,28,65,100);
	$result= new shop();
	echo $result->sum($ad);
	
	echo '<hr>';
	$name=array("jacky","aaa","tony");
	print_r($result->addcommodity($name));
	
	echo '<hr>';
	echo $result->commoditysum();


?>