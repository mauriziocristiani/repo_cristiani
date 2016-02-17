import java.util.Scanner;

public class Esercizio12
{
	public static void main (String [] args)
	{

		Scanner tastiera=new Scanner(System.in);
				
		System.out.println("dammi 10 valori");
		int valore=0; 

		for(int i=1; i<=10; i++){
			System.out.println("dammi il valore " +i);
		     valore=valore+tastiera.nextInt(); 
		    }
		
		 System.out.println("la media aritmetica dei dieci  numeri  e =" + valore/10);		

	}
}






