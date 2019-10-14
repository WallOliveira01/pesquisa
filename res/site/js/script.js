$(window).on("load", function() {
  $(".loader")
    .delay(1000)
    .fadeOut("slow");
});

$(document).ready(function() {
  $("#currentYear").text(new Date().getFullYear());
  validateCheckoutform();
  attachTopScroller(".scrollUp");
});

function validateCheckoutform() {
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.getElementsByClassName("needs-validation");

  // Loop over them and prevent submission
  var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener(
      "submit",
      function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add("was-validated");
      },
      false
    );
  });
}
function attachTopScroller (elementId){
  $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
          $(elementId).fadeIn();
      } else {
          $(elementId).fadeOut();
      }
  });
  // Scroll To Top Animation
  $(elementId).click(function() {
      $("html, body").animate({
          scrollTop: 0
      }, 1000);
      return false;
  });

  $('.desdate').mask('00/00/0000');
              $('.deszipcode').mask('00000-000');
              $('.phone').mask('0000-0000');
              $('.nrphone').mask('(00) 0000-0000');
              $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#desaddress").val("");
                $("#desdistrict").val("");
                $("#descity").val("");
                $("#desstate").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#deszipcode").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#desaddress").val("...");
                        $("#desdistrict").val("...");
                        $("#descity").val("...");
                        $("#desstate").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#desaddress").val(dados.logradouro);
                                $("#desdistrict").val(dados.bairro);
                                $("#descity").val(dados.localidade);
                                $("#desstate").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
            
};

