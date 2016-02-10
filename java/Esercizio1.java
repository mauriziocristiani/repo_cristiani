import java.util.Scanner;

public class Esercizio1
{
	public static void main (String [] args)
	{

		Scanner tastiera=new Scanner(System.in);
				
		System.out.println("in che anno sei nato?");
		int Annonascita=tastiera.nextInt(); 

		System.out.println("dammi anno attuale");

		int Annoattuale=tastiera.nextInt(); 
		int eta = Annoattuale - Annonascita;


		System.out.println("Ciao hai " +eta+" anni");


	}
}






