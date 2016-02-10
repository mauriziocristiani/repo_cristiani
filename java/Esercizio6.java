import java.util.Scanner;

public class Esercizio6
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

		val1 =val1*val1;
        val2 =val2*val2;
        val3 =val3*val3;

		if  (val1+val2 == val3) 
			System.out.println(" è  una terna pitagorica ");
		
		else
			System.out.println(" i tre numeri non sono una terna pitagorica" );			

	}
}






