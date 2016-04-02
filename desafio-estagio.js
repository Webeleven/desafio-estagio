/*
  TENTEI USAR UM POUCO DE JAVASCRIPT E UM POUCO DE JQUERY, MISTURADOS...
  USEI MAIS O JQUERY PORQUE SEI FAZER MAIS COISAS COM ELE...
  MAS JÁ ESTOU APRENDENDO A FAZER MAIS COISAS COM JS PURO!!!..
*/

function gerarCampos(){

  //ARMAZENAR AS VARIÁVEIS//
  var $cabecalho    = $("header"),
      $qtdNumField  = $("#qtd_num");
        //ARMAZENAR O CONTEÚDO PASSADO PELO USUÁRIO, REMOVENDO QUALQUER ESPAÇO EM BRANCO E CONVERTENDO O RESULTADO PARA UM NÚMERO INTEIRO//
        var valorPassado = parseInt($qtdNumField.val().split(' ').join(''));

        // /* DEFINE TRÊS RESTRIÇÕES:
        //   * O CAMPO PRECISA ESTAR PREENCHIDO E CONTER UM NÚMERO - NADA DO QUE FOR INTERPRETADO COMO ALGO DIFERENTE DE NÚMERO SERÁ ACEITO => isNaN(valorPassado)
        //   * O CONTEÚDO DO CAMPO FOI CONVERTIDO PARA UM NÚMERO INTEIRO E PRECISA SER MAIOR DO QUE ZERO => valorPassado <= 0
        // */
        if(isNaN(valorPassado) || valorPassado <= 0 ){
          alert("Por favor, preencha o campo com um número inteiro e positivo");   // AVISAR O USUÁRIO//
          return false;                                                            // INTERROMPER A FUNÇÃO//
        }

        //CASO A VALIDAÇÃO ESTEJA OK...//

        //SELECIONA A <section> 'ÁREA DE NÚMEROS'//
        var $area = $("#area_de_numeros").html(""),
            $form = $("<form id='form_calc' action='desafio1.php' method='POST'></form>");

        for(var i = 1; i <= valorPassado;i++){
           var $label = $("<label/>").text("Numero " + i + " "),  //CRIAR UMA LABEL//
                                                                  //CRIAR UM INPUT//
               $input = $("<input>").attr("type","text")          //SERÁ UM INPUT DE TEXTO//
                                    .attr("name","numeros[]");    //O NOME SERÁ UM ARRAY, QUE SERÁ PASSADO PARA O PHP//
                $area.append($form);   //INSERIR O FORMULÁRIO NA <section>
                $form.append("<br>");
                $form.append($label);  //INSERIR A <label> NO FORMULÁRIO//
                $form.append($input);  //INSERIR O <input> NO FORMULÁRIO//
                $form.append("<br>");
        }
        //INSERIR O BOTÃO PARA O CÁLCULO DO MENOR E MAIOR NÚMERO PASSADOS//
        $form.append("<br><input id='submit_btn' type='submit' name='submitBtn' value='Verificar'>");
};

//SE EU SOUBER QUE OS BROWSERS DOS USUÁRIOS SUPORTAM HTML5, EU POSSO USAR 'type='number' E O 'required' PARA AJUDAR NA VALIDAÇÃO!!//

function calcularNumeros(e){
  e.preventDefault();  //EVITA QUE O FORMULÁRIO SEJA ENVIADO AUTOMATICAMENTE. PARA DAR TEMPO DE VALIDAR O CONTEÚDOS DOS CAMPOS//

  var $form    = $("#form_calc");
      $campos  = $form.find("input[type=text]"),    //ENCONTRAR TODOS OS <input>'s DO TIPO 'TEXT'//
      validado = true;                              //O STATUS DA VALIDAÇÃO COMEÇA COMO VERDADEIRO//

      //PARA TODOS OS INPUTS DO TIPO TEXT...//
        $campos.each(function(index,elem){
          //ARMAZENAR O CONTEÚDO PASSADO PELO USUÁRIO, REMOVENDO QUALQUER ESPAÇO EM BRANCO E CONVERTENDO O RESULTADO PARA UM NÚMERO INTEIRO//
            var valor = parseInt(elem.value.split(' ').join(''));
          //SE ALGUM CAMPO NÃO FOI PREENCHIDO COM ALGARISMOS... MARCAR A VALIDAÇÃO COMO 'FALSA'...O FORMULÁRIO NÃO PODE SER ENVIADO!!//
            if(isNaN(valor)) validado = false;
       });

        if(!validado) alert("Por favor, preencha todos os campos de números somentes com algarismos!");   // AVISAR O USUÁRIO//
        else $form.submit();                                                                              // AGORA QUE A VALIDAÇÃO OCORREU, ENVIAR O FORMULÁRIO, NORMALMENTE//
}
  //AO CARREGAR O DOM//
  window.onload = function(){

          var qtdNumBtn = document.querySelector("#qtd_num_btn");
        //INSERIR UM EVENTO CLICK NO BOTÃO QUE IRÁ GERAR A QUANTIDADE DE CAMPOS NECESSÁRIA PARA O USUÁRIO DIGITAR OS NÚMEROS//
          qtdNumBtn.addEventListener("click",gerarCampos);

          $("main").on("click","#submit_btn",calcularNumeros);

  };
