import java.util.Scanner;




public class Esercizio18
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
		      
 		System.out.println("dammi un  valore per  confrontare  se esiste maggiore su array ");	  	
		int confronta = tastiera.nextInt(); 

		
		    
		    int posMax=0;
		    boolean flag=false;    
		 	for(int i=0; i<a.length; i++){
				if (confronta<a[i])   
		            flag=true;
		    }    
	if (flag)
		System.out.println("se esiste un valore su array  maggiore di "+confronta);



	}

}

























