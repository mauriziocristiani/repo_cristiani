import java.util.Scanner;

public class Esercizio4
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



		int media=(val1+val2+val3)/3;


		System.out.println("la media dei tre numeri è  "+ media);


	}
}






