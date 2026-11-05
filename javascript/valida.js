     
function LuhnAlgorithm(num) {
    // Remove espaços e hífens
    var inputNum = num.replace(/[\s-]/g, '');

    // Verifica se contém somente números
    if (!/^\d+$/.test(inputNum)) {
        return false;
    }

    var sum = 0;
    var doubleUp = false;

    // Percorre o número da direita para a esquerda
    for (var i = inputNum.length - 1; i >= 0; i--) {

        var curDigit = parseInt(inputNum.charAt(i), 10);

        if (doubleUp) {
            curDigit *= 2;

            if (curDigit > 9) {
                curDigit -= 9;
            }
        }

        sum += curDigit;

        doubleUp = !doubleUp;
    }

    return sum % 10 === 0;
}

     document.querySelectorAll("form").forEach(form => {
        form.addEventListener("submit", function(event) {
          let card = this.querySelector('input[name="bandeira"]').value;
          if(!LuhnAlgorithm(card)) {
            alert("Númerp Inválido!");
            event.preventDefault();
          }

        });
    });   





