import java.util.Scanner;

public class Esercizio14
{
	public static void main (String [] args)
	{

		Scanner tastiera=new Scanner(System.in);
			
		
		System.out.println("dammi il numero ");
		int numero=tastiera.nextInt();
	    int fattoriale=1;  	
		for(int i=1; i<=numero; i++){
			 fattoriale=fattoriale*i;
	    
		    }
		 	     
		 System.out.println("il fattoriale del numero  = " + fattoriale);		

	}
}






