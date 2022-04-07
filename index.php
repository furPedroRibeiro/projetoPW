<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
    session_start();

?>
<style>
    .title{
        color: crimson;
        font-weight: bold;
        font-size: 26px;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }
    .btn{
        width: 18.5vw;
        height: 4.5vh;
    }
    .form{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<br><br>
<div class="container-fluid">
	<div class="row">
		<div class="form">
			<br>
			<form method="post">
                <span class="title">Preencha o formulário abaixo</span>
                <br><br><br>
				Digite seu nome: <input type="text" name="name" placeholder="Digite seu nome">
                <br><br>
                <span>-------------------------------------------------------</span>
                <br><br>
                Digite sua idade: <input type="number" name="age" placeholder="Digite sua idade">
                <br><br>
                <span>-------------------------------------------------------</span>
                <br><br>
                Digite seu email: <input type="email" name="email" placeholder="Digite seu email">
                <br><br><br>
				<button class="btn btn-danger">Entrar</button>
			</form>
		</div>
	</div>
</div>
