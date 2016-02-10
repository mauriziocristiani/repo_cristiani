import java.util.Scanner;

public class Esercizio8
{
	public static void main (String [] args)
	{

		Scanner tastiera=new Scanner(System.in);
				
		System.out.println("dammi il primo valore");
		int val1=tastiera.nextInt(); 

		System.out.println("dammi secondo valore");
		int val2=tastiera.nextInt(); 


		if  (val1<val2)
			{ 
	     	for(int i=val1+1; i<val2; i++)
				System.out.println("Count is: "+i);
			}
		else
			{
				while(val1>val2)	
				{
        	      System.out.println("dammi secondo valore perche' minore del primo");
		    	   val2=tastiera.nextInt(); 
				}			
				for(int i=val1+1; i<val2; i++)
					System.out.println("Count is: "+i);		
			}		

	}
}






