

public class Bicicletta
{
	String modello;
	String nomeProprietario;
    int marcia;
    int velocita;




//costruttori

	public Bicicletta(String modello, String nomeProprietario, int marcia,int velocita){
 			this.modello = modello;
 			this.nomeProprietario=nomeProprietario;
 			this.marcia = marcia;
            this.velocita = velocita;
			}


//modello e nome proprietario non inizializzati sono a null
	public Bicicletta(int marciaIniz,int velocitaIniz){
 			this.marcia = marciaIniz;
            this.velocita = velocitaIniz;
			}




//metodi 

	public String getModello(){
 			return modello;
 	}

	public String getNomeProprietario(){
 			return nomeProprietario;
 	}

	public int getMarcia(){
 			return marcia;
  	}

	public void cambiaMarcia(int nMarcia){
 			this.marcia = nMarcia;
	}


	public int getVelocita(){
 			return velocita;
	}


	public void aumentaVelocita(int pVelocita){
 			velocita = velocita + pVelocita;
	}


	public void stampaStato(){
 			System.out.println(
 				"modello = " + modello +" Proprietario =" + nomeProprietario +" marcia = " + marcia+" velocita = "+ velocita);	
	}


}





