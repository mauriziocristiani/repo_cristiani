import java.util.Scanner;

public class Esercizio16
{
	public static void main (String [] args)
	{

		Scanner tastiera=new Scanner(System.in);
				
		System.out.println("dammi quani valori vuoi inserire nel array");
		int numero = tastiera.nextInt();
		int[] a  = new int[numero]; 
		int valore=0;

		for(int i=0; i<a.length; i++){
			 System.out.println("dammi il valore");
			 a[i] = tastiera.nextInt(); 
	      	    
		    }
		    
		    int posizione=0;
		    int valoreMax=0;    
		 	for(int i=0; i<a.length; i++){
				valore = a[i]; 
	      	      if (valore>valoreMax){   
		              valoreMax=valore;
		              posizione=i;
				  }  
		    }    
		 
		 System.out.println("il valore massimo = " + valoreMax);		
		 System.out.println("la posizione' = " + posizione);		

    
		





	}
}





