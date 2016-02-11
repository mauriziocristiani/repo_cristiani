import java.util.Scanner;

public class Esercizio5
{
	public static void main (String [] args)
	{

		Scanner tastiera=new Scanner(System.in);
				
		System.out.println("dammi il primo valore");
		int val1=tastiera.nextInt(); 

		System.out.println("dammi secondo valore");
		int val2=tastiera.nextInt(); 

		System.out.println("dammi terzo valore");
		int val3=tastiera.nextInt(); 

		int maggiore=0;

		if  (val1>val2 && val1>val3) 
			 maggiore = val1;
		else if (val2>val1 && val2>val3)
				maggiore = val2;
		else
				maggiore = val3;			
		



		System.out.println("il maggiore  dei tre numeri è  "+ maggiore);


	}
}






