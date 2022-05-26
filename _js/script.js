// Equipe:
// Fabrício Souza Batalha
// Rodrigo Andrade Belchior
// Tiago Braga Souza
// UNN0280107NNA

function validarSenha() {
	var senha = document.getElementById('senha').value,
        minimo = false,
        maximo = false,
        minusculo = false,
        maiusculo = false;

	if (senha.length >= 1) {
        document.getElementById("minimo").innerHTML = "<span style='color: #008000'> <i class='bi-check-circle' style='color: #008000;'></i> Ter ao menos 1 caractere </span>";
        minimo = true;
    } else {
        document.getElementById("minimo").innerHTML = "<span style='color: #ff0000'> <i class='bi-exclamation-circle' style='color: #ff0000;'></i> Ter ao menos 1 caractere </span>";
        minimo = false;
    }

    if (senha.length >= 8) {
        document.getElementById("maximo").innerHTML = "<span style='color: #008000'> <i class='bi-check-circle' style='color: #008000;'></i> Ter 8 caracteres caracteres </span>";
        maximo = true;
	} else {
        document.getElementById("maximo").innerHTML = "<span style='color: #ff0000'> <i class='bi-exclamation-circle' style='color: #ff0000;'></i> Ter 8 caracteres caracteres </span>";
        maximo = false;
    }

	if (senha.match(/[a-z]+/)) {
		document.getElementById("minusculo").innerHTML = "<span style='color: #008000'> <i class='bi-check-circle' style='color: #008000;'></i> Ter caractere minúsculo </span>";
        minusculo = true;
	} else {
        document.getElementById("minusculo").innerHTML = "<span style='color: #ff0000'> <i class='bi-exclamation-circle' style='color: #ff0000;'></i> Ter caractere minúsculo </span>";
        minusculo = false;
    }

    if (senha.match(/[A-Z]+/)) {
		document.getElementById("maiusculo").innerHTML = "<span style='color: #008000'> <i class='bi-check-circle' style='color: #008000;'></i> Ter caractere maiúsculo </span>";
        maiusculo = true;
	} else {
        document.getElementById("maiusculo").innerHTML = "<span style='color: #ff0000'> <i class='bi-exclamation-circle' style='color: #ff0000;'></i> Ter caractere maiúsculo </span>";
        maiusculo = false;
    }

    if (!minimo || !maximo || !minusculo || !maiusculo) {
        document.getElementById("btnCadastrar").disabled = true; 
    } else {
        document.getElementById("btnCadastrar").disabled = false; 
    }
}
