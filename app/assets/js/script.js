
document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        const message = document.getElementById('login_error');
        if (message) {
            message.style.display = 'none';
        }
    }, 3000);
});

document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        const message = document.getElementById('create_user_success');
        if (message) {
            message.style.display = 'none';
        }
    }, 3000);
});

document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        const message = document.getElementById('update_cuidador_success');
        if (message) {
            message.style.display = 'none';
        }
    }, 3000);
});

document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        const message = document.getElementById('update_cliente_success');
        if (message) {
            message.style.display = 'none';
        }
    }, 3000);
});

document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        const message = document.getElementById('email-success');
        if (message) {
            message.style.display = 'none';
        }
    }, 3000);
});

// api para buscar o cep
$(document).ready(function () {
      $('#cep').on('blur', function () {
        let cep = $('#cep').val().replace(/\D/g, '');

        if (cep.length === 8) {
          $.getJSON(`https://viacep.com.br/ws/${cep}/json/`, function (dados) {
            if (!("erro" in dados)) {
              $('#rua').val(dados.logradouro);
              $('#bairro').val(dados.bairro);
              $('#cidade').val(dados.localidade);
            } else {
              alert("CEP não encontrado.");
            }
          }).fail(function () {
            alert("Erro ao consultar o CEP.");
          });
        } else {
          alert("CEP inválido.");
        }
      });
    });
