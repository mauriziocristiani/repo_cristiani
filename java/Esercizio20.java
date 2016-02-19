import java.util.Scanner;

public class Bicicletta
{
	String modello;
	String nomeProprietario;
    int marcia;
    int velocita;




//costruttori

	public Bicicletta(String modello, String nomeProprietario, int marcia,int velocita){
 			this.modello = modello;
 			this.nomeproprietario=nomeProprietario
 			this.marcia = marcia;
            this.velocita = velocita;
			}

	public Bicicletta(int marcia,int velocita){
 			this.marcia = marcia;
            this.velocita = velocita;
			}




//metodi 

	public String getModello(){
 			return modello;
 	}

	public String getNomeProprietario(){
 			return nomeProprietario;
 	}

	public String getMarcia(){
 			return marcia;
  	}

	public void cambiaMarcia(int nMarcia){
 			marcia = nMarcia;
	}


	public String getVelocita(){
 			return velocita;
	}


	public void aumentaVelocita(int pVelocita){
 			velocita = velocita+ pVelocita;
	}


	public void stampaStato(){
 			System.out.println("modello= " + modello);	
 			System.out.println("nomeProprietario" + nomeProprietario);	
 			System.out.println("marcia= " + modello);	
 			System.out.println("velocita" + velocita);	
	}


}





