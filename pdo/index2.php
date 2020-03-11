
<?php

public class Aviao interface Voar(){
    //Voar{

    //}

    //Pousar(){
        
    //}
    
    perfomanceVoar(){
        echo "perfomance de voo x y z";
    }

    perfomancePousar(){
        echo "perfomance de pouso x y z";
    }

    public getVoar(){
        
    }
	public setVoar(){

    }
    
    public getPousar(){

    }
	public setPousar(){

    }

    public informarDados(){
        echo "informando dados..";
    }
	
}

Aviao Boeing757 = new Aviao();

Boeing757.informarDados();
Boeing757.Main();

?>

public interface Voar(){
    voar(){
        echo "voando";
    }

    voarDia(){
        echo "voando de dia";
    }

    voarNoite(){
        echo "voando a noite";
    }

public interface Pousar(){

    
}

}