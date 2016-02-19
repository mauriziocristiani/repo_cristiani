import java.util.Scanner;

public class Esercizio19
{
	public static void main (String [] args)
	{

		Scanner tastiera=new Scanner(System.in);
				
		System.out.println("dammi la dimensione dell array");
		int dimensione = tastiera.nextInt(); 
		
		int[] a  = new int[dimensione]; 
		
		int valore=0;

		for(int i=0; i<a.length; i++){
			 System.out.println("dammi un  valore da inserire ");
			 a[i] = tastiera.nextInt(); 
	      	    
		    }
		      
 		System.out.println("verifica se array ordinato ");	  	
		int confronta = tastiera.nextInt(); 

		
		    
		    int i=0;
		    boolean flag=false;    
		 	while(i<a.length && flag=false){
				if (a[i]<=a[i+1])   
		            flag=true;
		    }   


	if (flag)
		System.out.println("array ordinato");
	else
		System.out.println("array  non ordinato");


	}

}

























