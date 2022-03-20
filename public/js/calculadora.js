

	let numeros = "";
	let arrNumero= [];
	let index = 0;
	let operation=[];
	let result = 0;
	let tela = "";
	let historico = "";
	let texto = "";

function defineNumeros(n)
{
	numeros =  numeros + n.querySelector("#tecla").value;

	tela = document.querySelector(".result");
	historico = document.querySelector(".hist");
	
	
	insertValueTela(texto + " " + numeros);
	
}

function insertValueTela(value)
{
	
	tela.innerText = value;
}

function operationMath(o)
{	
	operation = String(o.querySelector("#tecla").value);
	
	arrNumero[index] = numeros;

	insertValueTela(numeros + " "+ operation)
	texto = result == 0 ?  numeros + " " + operation : result + " " + operation;

	result = calc();
	
	numeros = "";

		if(arrNumero.length == 2)
		{
			//resetCalc()
			arrNumero[0] = result;
			
		}
	index = index + 1;
}
function resetCalc()
{
	arrNumero[index] = numeros;
	numeros = "";
	index = 0;
}

function calc()
{
	resetCalc();
	switch(operation)
		{
			case "+":				
				var r = (Number(arrNumero[0]) + Number(arrNumero[1]));
				
				break;
			case "-":
				var r = (arrNumero[0] - arrNumero[1]) ;	
				break;
			case "*":
				var r = (arrNumero[0] * arrNumero[1]) ;	
				break;
			case "/":
				var r = (arrNumero[0] / arrNumero[1]) ;	
			break;				
		}
		if(!isNaN(r))
		{
			historico.innerText = arrNumero[0] + " " + operation + " " + arrNumero[1];
			insertValueTela(r)
			
		}
	result = r
		return r;
	
}






















/*let valueTela = "";
let tecla;
let tela;
let operation;
let numbers = [];	
let index = 0
let n = "";
	function r(t)
	{		
			tecla = t.querySelector("#tecla").value;
			
			tela = document.querySelector(".result");	
			
			valueTela = valueTela + tecla;
		
			if(!isNaN(tecla))
			{
				n = n + tecla;
				numbers[index] = {"numero" :  n};
			}
			else
			{
				n = "";
				index = index +1;
			
			}
			

			if(tecla == "=")
			{
				calc();
			}

			if(verfifyLength(valueTela))
			{
				insertResult()
			}
			else
			{
				alert("DIGITO MAXIMO ALCANÇADO")
			}	
	}

	function operationMath(o)
	{
		operation = o.querySelector("#tecla").value
	}
	function calc()
	{
		var a = numbers[0].numero;
		var b = numbers[1].numero;

		switch(operation)
		{
			case operation == "+":
				var result = Number(a) + Number(b);
				break;
			case operation == "-":
				var result = a - b;
				break; 	
		}
		console.log(operation);
	}
	function insertResult()
	{
		tela.innerText += tecla;
	}

	function verfifyLength(number)
	{
		return number.length < 11 ? true : false                                                                               
	}*/