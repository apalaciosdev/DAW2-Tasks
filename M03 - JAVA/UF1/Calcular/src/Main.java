import java.util.*;
import javax.swing.JOptionPane;


public class Main {
	public static void main(String[] args) throws Exception {
		//Creamos lista con el número de espacios que introduzca el usuario
		Double numOperaciones = Double.parseDouble(JOptionPane.showInputDialog("Introduce la cantidad de operaciones que quieres hacer: "));
		ArrayList<Calcular> calculos = new ArrayList<Calcular>();

		int aciertos = 0;

		//Creamos los objetos y los añadimos a la lista
		for (int i = 0; i < numOperaciones; i++) {
			//Creamos el objeto y generamos los números randoms
			calculos.add(new Calcular());
			calculos.get(i).crearRandoms();
			
			//Mostramos la operación, se operan los números random y el usuario introduce su respuesta
			Double resultado = Double.parseDouble(JOptionPane.showInputDialog("Introduce el resultado: " + calculos.get(i).operar()));
			
			//Se guarda la respuesta del usuario
			calculos.get(i).setResultadoUsr(resultado);
			
			//Se comprueba la respuesta del usuario con la respuesta correcta y se muestra si ha acertado o no
			JOptionPane.showMessageDialog(null, calculos.get(i).compararResultados());

			//Si es correcta la respuesta, sumamos al contador de aciertos
			if(calculos.get(i).compararResultadosBoolean()){
				aciertos++;
			}
	  }
		 
		//Imprimimos el resultado final
		String resultadosFinales = "----Resultado final---- " +
															 "\nAciertos: " + aciertos + 
															 "\nFallos: " + ((int) (numOperaciones-aciertos)) + 
															 "\nNota: " + ((aciertos*10)/numOperaciones) + "\n\n";
		
		
		for (Calcular calculo : calculos) {
			resultadosFinales += calculo.showOperacion() + " = " + calculo.getNumResult() + " |  " + " Tu -> " + calculo.getResultadoUsr() + "  " + calculo.esCorrecto() + "\n";
		}
		JOptionPane.showMessageDialog(null, resultadosFinales);	  
	}

	  
}
