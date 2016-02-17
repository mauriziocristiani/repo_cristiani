import java.util.Scanner;

public class Esercizio17
{
	public static void main (String [] args)
	{
      Scanner tastiera=new Scanner(System.in);
	
		int [] x = {3,5,8,10,12,34}; 
				
		stampaArray(x);  
			
		scambiaArray(x);  	
					
		stampaArray(x);      

	}



public static void stampaArray(int [] a) 
	{
		for (int i = 0; i < a.length; i++)
            System.out.println("Elemento " + i + ": " + a[i]);
	}




public static void scambiaArray(int [] a) 
	{
		int valore=0;
		    
		    int posMax=0;
		    int valoreMax=0;    
		 	for(int i=0; i<a.length; i++){
				valore = a[i]; 
	      	      if (valore>valoreMax){   
		              valoreMax=valore;
		              posMax=i;
				  }  
		    }    
		 
		 System.out.println("il valore massimo = " + valoreMax);		
		 System.out.println("la posizione' = " + posMax);		
		
		int valore1=0;
	    int posMin=0; 
		int valoreMin=Integer.MAX_VALUE; 

		for(int i=0; i<a.length; i++){
			 valore1=a[i];
		    
		    if (valore1<valoreMin){   
		        valoreMin=valore1;
		        posMin=i; 
			} 
		          
		 }

	 System.out.println("il valore massimo = " + valoreMin);		
		 System.out.println("la posizione' = " + posMin);
	 a[posMin]=valoreMax;
	 a[posMax]=valoreMin;


		
	}



}




























