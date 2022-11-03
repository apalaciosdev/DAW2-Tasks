public class Calcular {
	private int num1;
	private int num2;
	private double numResult;
	private double resultadoUsr;
	private int operador;
	
	/**
	 * Crea números random para num1, num2 y el operador.
	 */
	public void crearRandoms() {
		this.num1 = (int) Math.floor(Math.random()*10+1);
		this.num2 = (int) Math.floor(Math.random()*10+1);
		this.operador = (int) Math.floor(Math.random()*3+0);
	}
	
	/**
	 * Compara resultados y retorna el mensaje para que se muestre por pantalla
	 */
	public String compararResultados() {
		if(this.resultadoUsr == this.numResult) {
			return "Has acertado! La respuesta es: " + this.numResult;
		}
		return "No es correcto. La respuesta es: " + this.numResult;
	}

	/**
	 * Compara resultados y retorna true o false
	 */
	public Boolean compararResultadosBoolean() {
		if(this.resultadoUsr == this.numResult) {
			return true;
		}
		return false;
	}
	
	/**
	 * Opera num1 y num2 según el número del operador generado aleatoriamente
	 */
	public String operar() {
		if(operador == 0) {
			this.numResult = this.num1 + this.num2;
			return this.num1 + " + " + this.num2;
		}
		else if(operador == 1) {
			this.numResult = this.num1 - this.num2;
			return this.num1 + " - " + this.num2;
		}
		else if(operador == 2) {
			this.numResult = this.num1 * this.num2;
			return this.num1 + " * " + this.num2;
		}
		else if(operador == 3) {
			this.numResult = this.num1 / this.num2;
			return this.num1 + " / " + this.num2;
		}
		return "ERROR :(";
	}
	
	/**
	 * Muestra la operación según el número del operador generado aleatoriamente y lo retorna para mostrarlo por pantalla
	*/
	public String showOperacion(){
		if(operador == 0) {
			return this.num1 + " + " + this.num2;
		}
		else if(operador == 1) {
			return this.num1 + " - " + this.num2;
		}
		else if(operador == 2) {
			return this.num1 + " * " + this.num2;
		}
		else if(operador == 3) {
			return this.num1 + " / " + this.num2;
		}
		return "Error :(";
	}

	/**
	 * Comprueba si el resultado introducido por el usuario es correcto o no
	 */
	public String esCorrecto(){
		if(this.resultadoUsr == this.numResult) {
			return "OK";
		}
		return "X";
	}
	


	//Get num1
	public int getNum1() {
		return num1;
	}
	
	//Set num1
	public void setNum1(int num1) {
		this.num1 = num1;
	}

	//Get num2
	public int getNum2() {
		return num2;
	}

	//Set num2
	public void setNum2(int num2) {
		this.num2 = num2;
	}
	
	//Get resultado
	public double getNumResult() {
		return numResult;
	}

	//Set resultado
	public void setNumResult(double numResult) {
		this.numResult = numResult;
	}

	//Get resultado usuario
	public double getResultadoUsr() {
		return resultadoUsr;
	}

	//Set usuario resultado
	public void setResultadoUsr(double resultadoUsr) {
		this.resultadoUsr = resultadoUsr;
	}
	
	//Get operador
	public int getOperador() {
		return operador;
	}
	
	//Set operador
	public void setOperador(int operador) {
		this.operador = operador;
	}
}
