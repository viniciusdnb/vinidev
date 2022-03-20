<div class="container-calculadora" >
		<div class="container-tela">
			<div class="tela">
				<div class="hist"></div>
				<div class="result">
				
				</div>
			</div>
		</div>
		<div class="container-numero">
			
			<div class="tecla numero c" >
				<input type="hidden" id="tecla" value="c" name="">C
			</div>
			
			<div class="tecla" >
				<input type="hidden" id="tecla" value="" name="">()
			</div>
			
			<div class="tecla operacao" >
				<input type="hidden" id="tecla" value="">%
			</div>

			<div class="tecla numero" onclick="operationMath(this)">
				<input type="hidden" id="tecla" value="/" name="">/
			</div>
			
			<div class="tecla numero" onclick="defineNumeros(this)">
				<input type="hidden" id="tecla" value="7" name="">7
			</div>
			
			<div class="tecla numero" onclick="defineNumeros(this)">
				<input type="hidden" id="tecla" value="8">8
			</div>
			
			<div class="tecla numero" onclick="defineNumeros(this)">
				<input type="hidden" id="tecla" value="9">9
			</div>
			
			<div class="tecla operacao" onclick="operationMath(this)">
				<input type="hidden" id="tecla" value="*">*
			</div>
			
			<div class="tecla numero" onclick="defineNumeros(this)">
				<input type="hidden" id="tecla" value="4">4
			</div>
			
			<div class="tecla numero" onclick="defineNumeros(this)">
				<input type="hidden" id="tecla" value="5">5
			</div>
			
			<div class="tecla numero" onclick="defineNumeros(this)">
				<input type="hidden" id="tecla" value="6">6
			</div>
			
			<div class="tecla operacao" onclick="operationMath(this)">
				<input type="hidden" id="tecla" value="-">-
			</div>
			
			<div class="tecla numero" onclick="defineNumeros(this)">
				<input type="hidden" id="tecla" value="1">1
			</div>
			
			<div class="tecla numero" onclick="defineNumeros(this)">
				<input type="hidden" id="tecla" value="2">2
			</div>
			
			<div class="tecla numero" onclick="defineNumeros(this)">
				<input type="hidden" id="tecla" value="3">3
			</div>
			
			<div class="tecla operacao" onclick="operationMath(this)">
				<input type="hidden" id="tecla" value="+">+
			</div>
			
			<div class="tecla numero" >
				<input type="hidden" id="tecla" value="">+/-
			</div>
			
			<div class="tecla numero" onclick="defineNumeros(this)">
				<input type="hidden" id="tecla" value="0">0
			</div>
			
			<div class="tecla numero">
				<input type="hidden" id="tecla" value=",">.
			</div>
			
			<div class=" tecla resultado c" onclick="calc()">
				<input type="hidden" id="tecla" value="=">=
			</div>
		</div>
	</div>