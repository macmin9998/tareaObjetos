<?php


class Elevador{

	protected $numero_pisos;
	protected $piso_Actual=1;
	protected $piso;
	protected $edificio;
	
    
      function __construct($numero_pisos,$capacidad_personas,$edificio)
	{
	    $this->numero_pisos=$numero_pisos;
	    $this->capacidad_personas=$capacidad_personas;
	    $this->edificio=$edificio;
	} 

    function llamarPiso($piso)
    {
    
    if($piso > $this->numero_pisos)
    {
    	echo"El piso no existe, este elevador solo cuenta con ".$this->numero_pisos." pisos\n";
    }else{
    	$this->piso_Actual=$piso;
    }



    

    }

    
    function getInfo()
	{
	    return "El elevador de {$this->edificio} tiene  {$this->numero_pisos} pisos, con capacidad de {$this->capacidad_personas} personas\n";
	} 
	function getStatusElevador()
	{
		return"Elevador en el piso {$this->piso_Actual} \n";
	}

	public function setUbicacion($piso_Actual)
	{
	  $this->piso_Actual=$piso_Actual;	
	
    }
	public function setPiso($numero_pisos)
	{
	  $this->numero_pisos=$numero_pisos;	
	}



}



$ElevadorWework=new Elevador(5,10,"WeWork");
$ElevadorWTC=new Elevador(10,10,"WTC");

echo $ElevadorWework->getInfo();
echo"<br>";
echo $ElevadorWework->getStatusElevador();
echo"<br>";
echo $ElevadorWework->llamarPiso(3);
echo $ElevadorWework->getStatusElevador();
echo"<br>";
echo $ElevadorWework->llamarPiso(4);

echo $ElevadorWework->getStatusElevador();
echo"<br>";
echo $ElevadorWework->llamarPiso(6);

echo $ElevadorWework->getStatusElevador();
echo"<br>";
echo"<br>";
echo $ElevadorWTC->getInfo();
echo"<br>";
echo $ElevadorWTC->getStatusElevador();
echo"<br>";
echo $ElevadorWTC->llamarPiso(4);

echo $ElevadorWTC->getStatusElevador();
echo"<br>";
echo $ElevadorWTC->llamarPiso(1);

echo $ElevadorWTC->getStatusElevador();
echo"<br>";
echo $ElevadorWTC->llamarPiso(10);

echo $ElevadorWTC->getStatusElevador();
echo $ElevadorWTC->llamarPiso(20);

echo $ElevadorWTC->getStatusElevador();
echo"<br>";




?>