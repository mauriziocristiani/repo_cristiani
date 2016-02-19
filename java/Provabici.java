import java.util.Scanner;
public class Provabici{

	public static void main (String [] args){
	
		Scanner tastiera=new Scanner(System.in);


		Bicicletta biciA = new Bicicletta("graziella","maurizio" ,4 ,50) ;
		Bicicletta biciB = new Bicicletta("bmx",      "denis"    ,5 ,60) ;
		Bicicletta biciC = new Bicicletta("corsa",    "martina"  ,6,70) ;
		
		int valore=0;

		for(int i=0; i<2; i++){
			 System.out.println("dammi un incremento velocita ");
			 valore= tastiera.nextInt(); 
			 biciA.aumentaVelocita(valore);
			 biciB.aumentaVelocita(valore);
			 biciC.aumentaVelocita(valore);
		    }

	
		biciA.stampaStato();
		biciB.stampaStato();
		biciC.stampaStato();
		

		if (biciA.getVelocita() > biciB.getVelocita() && biciA.getVelocita() > biciC.getVelocita()){
			 System.out.println("la bici con maggiore  velocita ");   
		    	biciA.stampaStato();        
		   } 
		else if (biciB.getVelocita() > biciA.getVelocita() &&  biciB.getVelocita() > biciC.getVelocita()) {
				 System.out.println("la bici con maggiore  velocita ");   
		         biciB.stampaStato();        
			}
		else {
				 System.out.println("la bici con maggiore  velocita ");   
		         biciC.stampaStato();        
		}
   

		

	}

}	