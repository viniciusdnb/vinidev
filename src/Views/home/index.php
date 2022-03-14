<br>
<div class="container">
	<div class="row">
		<div class="col">
			<div class="row">
				<div class="card" style="width: 18rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
					<div class="row">
						<img style="margin-top:5px; border-radius:15px" src="public/img/foto.jpg">
					</div>
					<hr>
					<div class="row">
						<div class="fs-5 mb-2">
							<?php echo $data["maleta"]; ?>
							Back-End
						</div>
					</div>
					<div class="row">
						<div class="fs-5 mb-2">
							<?php echo $data["casa"]; ?>
							Barueri - São Paulo - Brasil
						</div>
					</div>
					<div class="row">
						<div class="fs-5 mb-2">
							<?php echo $data["git"]; ?>
							<a href="https://github.com/viniciusdnb" style="text-decoration:none; color:black;"target="_blank">viniciusdnb</a>
						</div>
					</div>
					<div class="row">
						<div class="fs-5 mb-2">
							<?php echo $data["carta"]; ?>
							vinidev@vinidev.com
						</div>
					</div>
					<div class="row">
						<div class="fs-5 mb-4">
							<?php echo $data["whats"]; ?>
							(55-11) 9.4051-9077
						</div>
					</div>
				<hr>
					<h3>Habilidades:</h3>
					<div class="accordion" id="accordionExample">
						<div id="php" class="accordion-item" style="border: 1px solid #0080ff;">
							<h2 class="accordion-header" id="headingOne">
								<button style="background-color: #66b3ff;" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<img src="https://img.icons8.com/windows/64/000000/php-logo.png" />
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>Variaveis. Tipos de dados e operadores. Estruturas Condicionais, Repetições, Manipulaçao de string, datas, arrays. funções, Objetos, MVC.
									</p>
									<?php echo $data["cphp"]; ?>

								</div>
							</div>
						</div>
						<div id="javascript" class="accordion-item" style="border: 1px solid #ffff33;">
							<h2 class="accordion-header" id="headingTwo">
								<button style="background-color:#ffff99" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<img src="https://img.icons8.com/ios/50/000000/javascript--v1.png" />
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>Variaveis. Tipos de dados e operadores. Estruturas Condicionais, Repetições, Manipulaçao de string, datas, arrays. funções, Objetos.
									</p>
									<?php echo $data["cjs"]; ?>
								</div>
							</div>
						</div>
						<div id="html" class="accordion-item" style="border: 1px solid #ff751a;">
							<h2 class="accordion-header" id="headingThree">
								<button style="background-color: #ffa366;"class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<img src="https://img.icons8.com/ios/50/000000/html-5--v1.png" />
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>Tags Básica, Meta tags, Tags HTML, Tabelas, HTML sematico, Formulario</p>
									<?php echo $data["chtml"]; ?>
								</div>
							</div>
						</div>
						<div id="git" class="accordion-item" style="border: 1px solid red;">
							<h2 class="accordion-header" id="headingFor">
								<button style="background-color:#ff531a;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
									<img src="https://img.icons8.com/ios/50/000000/git.png" />
								</button>
							</h2>
							<div id="collapseFor" class="accordion-collapse collapse" aria-labelledby="headingFor" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>Principais comando</p>
									<?php echo $data["cgit"]; ?>
								</div>
							</div>
						</div>
						<div id="css" class="accordion-item" style="border: 1px solid #1aa3ff">
							<h2 class="accordion-header" id="headingFive">
								<button style="background-color:#66c2ff;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									<img src="https://img.icons8.com/ios/60/000000/css3.png" />
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p></p>
									<?php echo $data["ccss"]; ?>
								</div>
							</div>
						</div>
						<div id="sql" class="accordion-item" style="border: 1px solid gray">
							<h2 class="accordion-header" id="headingsix">
								<button  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
								<img src="https://img.icons8.com/ios/50/000000/accept-database.png"/>
								</button>
							</h2>
							<div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>comandos SQL - CRUD Create Read Mpadate Delete - Modelagem de Dados</p>
									
								</div>
							</div>
						</div>
						<div id="linux" class="accordion-item" style="border: 1px solid black">
							<h2 class="accordion-header" id="headingSeven">
								<button style="background-color:#e6ccff;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
								<img src="https://img.icons8.com/wired/64/000000/linux.png"/>
								</button>
							</h2>
							<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSevene" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>Comandos Basicos - Ubuntu</p>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="row">
				<div class="card" style="width: 60rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
					<div class="col">
						<div class="row">
							<div class="col-1 p-2" style="margin-top: 40px;">
							<img src="https://img.icons8.com/ios/50/000000/light-automation.png"/>
							</div>
							<div class="col p-2">
								<div class="row">
									<h3>Apresentação</h3>
								</div>
								<div class="row p-3">
									<p>Sou estudante de programação, estudo por conta propria e adoro fazer exercicios de logica. focado em back-end querendo entender todo funcionamento do computador e a nossa mente.</p>
									<p>Um pouco de experiencia e estudos em andamento PHP, javascript, html, git, css, sql linux, matematica para desenvolvedores.</p>
									<strong>Exercicios</strong>
									<style>
										li:hover{
											background-color:  #e6ffff;
											cursor: pointer;
										}
									</style>
									<ul class="list-group list-group-flush">
										<li class="list-group-item"><a style="text-decoration:none; color:black;" target="_blank" href="https://github.com/viniciusdnb/projectEuler/blob/main/10001stprime.js">10001° numero primo</a></li>
										<li class="list-group-item"><a style="text-decoration:none; color:black;" target="_blank" href="https://github.com/viniciusdnb/projectEuler/blob/main/LargestNumberFactor.php">Maior fator primo</a></li>
										<li class="list-group-item"><a style="text-decoration:none; color:black;" target="_blank" href="https://github.com/viniciusdnb/projectEuler/blob/main/LargestPalindromeProduct.php">Maior produto palindromo</a></li>
										<li class="list-group-item"><a style="text-decoration:none; color:black;" target="_blank" href="https://github.com/viniciusdnb/projectEuler/blob/main/Largestproductinaseries.js">Maior produto de uma serie (erro)</a></li>
										<li class="list-group-item"><a style="text-decoration:none; color:black;" target="_blank" href="https://github.com/viniciusdnb/projectEuler/blob/main/Smallestmultiple.js">Menor multiplo (nao funcional com numeros grande)</a></li>
										<li class="list-group-item"><a style="text-decoration:none; color:black;" target="_blank" href="https://github.com/viniciusdnb/projectEuler/blob/main/Summationofprimes.js">Soma de numeros primos</a></li>
										<li class="list-group-item"><a style="text-decoration:none; color:black;" target="_blank" href="https://github.com/viniciusdnb/projectEuler/blob/main/Sumsquaredifference.js">Diferenca quadrada de soma</a></li>
										<li class="list-group-item"><a style="text-decoration:none; color:black;" target="_blank" href="https://github.com/viniciusdnb/projectEuler/blob/main/longestCollatzSequence.js">Sequencia de collatz mais longa</a></li>
										<li class="list-group-item"><a style="text-decoration:none; color:black;" target="_blank" href="https://github.com/viniciusdnb/projectEuler/blob/main/numerosMultipo3e5.js">Multiplo de 3 ou 5</a></li>
										<li class="list-group-item"><a style="text-decoration:none; color:black;" target="_blank" href="https://github.com/viniciusdnb/projectEuler/blob/main/sequenciaFibonacc.js">Sequencia de Fibonacci</a></li>
										<li class="list-group-item"><a style="text-decoration:none; color:black;" target="_blank" href="https://github.com/viniciusdnb/projectEuler/blob/main/triangleNumberWith500Divisors.js">Numero triangular altamente divizivel</a></li>
										<li class="list-group-item"><a style="text-decoration:none; color:black;" target="_blank" href="https://github.com/viniciusdnb/Borders-Previewer/blob/main/index.html">Bordas</a></li>
										<li class="list-group-item"><a style="text-decoration:none; color:black;" target="_blank" href="https://github.com/viniciusdnb/Bin2Dec-PHP">Binario para decimal</a></li>
									</ul>
									<br><br>
									<hr>
									<strong>Projetos</strong>
									<ul class="list-group list-group-flush">
										<li class="list-group-item">Sistema de Controle de pedido e contação para empresa de licitação em PHP</li>
										<li class="list-group-item">MiniFramework MVC em PHP</li>
										<li class="list-group-item">Sistema para controle e emissao de etiquetas em PHP</li>
										<li class="list-group-item"></li>
									<ul>
								</div>
							</div>
						</div>
					
						
					</div>
				</div>
			</div>
			<br>
			<div class="row" >
				<div class="card" style="width: 60rem; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
					<div class="col">
						<div style="text-align: center; padding:10px">
							<h3>Historico Profissional</h3>
						</div>
						
						<div class="row">
							<div class="col-1 p-2" style="margin-top: 40px;">
								<img src="https://img.icons8.com/external-outline-geotatah/64/000000/external-exp-moba-multiplayer-online-battle-arena-outline-geotatah.png" />
							</div>
							<div class="col p-2">
								<div class="row">
									<strong>Havetech 01/01/2021 - atualmente - Cargo: Assistente Adiminstrativo</strong>
								</div>
								<div class="row p-3">
									<?php echo $data["expHavetech"]; ?>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-1 p-2" style="margin-top: 40px;">
								<img src="https://img.icons8.com/external-outline-geotatah/64/000000/external-exp-moba-multiplayer-online-battle-arena-outline-geotatah.png" />
							</div>
							<div class="col p-2">
								<div class="row">
									<strong>Vital Hospitalar 04/2017 - 11/2020</strong>
								</div>
								<div class="row p-3">
									<?php echo $data["expVital"]; ?>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-1 p-2" style="margin-top: 40px;">
								<img src="https://img.icons8.com/external-outline-geotatah/64/000000/external-exp-moba-multiplayer-online-battle-arena-outline-geotatah.png" />
							</div>
							<div class="col p-2">
								<div class="row">
									<strong>Polifilme 06/2013 - 05/2016 </strong>
								</div>
								<div class="row p-3">
									<?php echo $data["expPolifilme"]; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>








</div>