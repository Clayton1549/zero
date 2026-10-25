function TestaCPF(strCPF) {
   
    strCPF = strCPF.replace(/\D/g, "");

    if (strCPF.length !== 11) return false;

    if (/^(\d)\1{10}$/.test(strCPF)) return false;
    
    let Soma = 0;
    let Resto;

    for (let i = 0; i < 9; i++) {
        Soma += parseInt(strCPF.charAt(i)) * (10 - i);
    }

    Resto = (Soma * 10) % 11;
    if (Resto === 10) Resto = 0;

    if (Resto !== parseInt(strCPF.charAt(9))) {
        return false;
    }

   Soma = 0;

    for (let i = 0; i < 10; i++) {
        Soma += parseInt(strCPF.charAt(i)) * (11 - i);
    }

    Resto = (Soma * 10) % 11;
    if (Resto === 10) Resto = 0;

    if (Resto !== parseInt(strCPF.charAt(10))) {
        return false;
    }

    return true;
}

function myFunction() {
    let cpf = document.getElementById("cpf").value;
    let mensagem = document.getElementById("erros1");

    if (TestaCPF(cpf)) {
        mensagem.innerHTML = "CPF válido!";
        mensagem.style.color = "green";
    } else {
        mensagem.innerHTML = "CPF inválido!";

    }
}
 


