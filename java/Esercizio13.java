import java.util.Scanner;

public class Esercizio13
{
	public static void main (String [] args)
	{

		Scanner tastiera=new Scanner(System.in);
				
		System.out.println("dammi 10 valori");
		int valore=0; 
		int valoreMin=Integer.MAX_VALUE; 

		for(int i=1; i<=10; i++){
			 System.out.println("dammi il valore " +i);
			  valore=tastiera.nextInt();
		    
		    if (valore<valoreMin)   
		        valoreMin=valore;  
		      
		    
		    }
		    
		    
		     
		 System.out.println("il valore minino = " + valoreMin);		

	}
}






