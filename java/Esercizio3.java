import java.util.Scanner;

public class Esercizio2
{
	public static void main (String [] args)
	{

		Scanner tastiera=new Scanner(System.in);
				
		System.out.println("dammi la base del rettangolo");
		int base=tastiera.nextInt(); 

		System.out.println("dammi altezza rettangolo");

		int alt=tastiera.nextInt(); 
		int perimetro=base*2 +alt * 2;


		System.out.println("il perimetro vale "+perimetro);


	}
}






