<?php
//TRACCIA2

class Company{
    public $name;
    public $location;
    public $Tot_employees = 0;

    public function __construct($name, $location, $Tot_employees){
        $this -> name = $name;
        $this -> location = $location;
        $this -> Tot_employees = $Tot_employees;
    }
    public function Employees(){
        if ($this -> Tot_employees > 0){
            echo "L'azienda" . " " .  $this->name . " " . "con sede in " . $this->location . " " . "ha ben" . " " . $this->Tot_employees . " " . "dipendenti" . "\n";
        } else {
            echo "L'azienda " . " " . $this->name . " " . "con sede in " . $this->location . " " . "non ha dipendenti" . "\n";  
        }
    }
    public function AnnualExpense(){
        return $this -> Tot_employees * 25000; 
    }
    public static function TotalExpense($Companies){
        $total = 0;
        foreach ($Companies as $Company){
            $total += $Company -> AnnualExpense();
        }
        return $total;
    }
    public static function printTotalExpense($total){
        echo "La spesa annuale di tutte le aziende è di" ." " . $total . "€ \n";
    }
}
//nomi aziende
$Companies = [
    new Company('Aulab','Italia','50'),
    new Company('Apple','California','500'),
    new Company('Nike','USA','250'),
    new Company('Fendi','Roma','150'),
    new Company('Gucci','Firenze','0')
];
//dipendenti per ogni azienda
foreach ($Companies as $Company){
    $Company -> Employees();
}
//spese di una singola azienda
foreach ($Companies as $Company){
    $expense = $Company -> AnnualExpense();
    echo "La spesa annuale dell'azienda {$Company->name} è di $expense  € \n";
}
//spese di tuute le aziende
$TotalExpanse = Company :: TotalExpense ($Companies);
Company :: printTotalExpense ($TotalExpanse);