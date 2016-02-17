
import java.util.Scanner;

public class Esercizio15
{
	public static void main (String [] args)
	{

		Scanner tastiera=new Scanner(System.in);
				
		System.out.println("dammi 5 valori");
		
		int[] a  = new int[5]; 
		int valore=0;

		for(int i=0; i<a.length; i++){
			 System.out.println("dammi il valore");
			 a[i] = tastiera.nextInt(); 
	      	    
		    }
		       
		 	for(int i=0; i<a.length; i++){
				valore = valore+	a[i]; 
	      	    
		    }    
		 System.out.println("il valore minino = " + valore);		

	}
}











