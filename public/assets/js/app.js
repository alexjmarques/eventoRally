//MASK
$('#cliente_cep').mask('00000-000');
$('#cliente_dadosProfissionais_telefone, #cliente_telefoneResidencial, #dados_medicos_telefonePlanoSaude').mask('(00) 0000-0000');
$('#cliente_telefoneCelular').mask('(00) 00000-0000');
$('#cliente_cpf').mask('000.000.000-00');
$('#cliente_rg').mask('00.000.000-0');
$('#cliente_cnh').mask('00000000000');
//$('#evento_valor').mask('000.000.000.000.000,00' , { reverse : true});

$("#cliente_password").prop("type", "password");


$(document).ready( function () {

var mentionsFetchFunction = function (query, success) {
    var users = [
      "Terry Green", "Edward Carroll", "Virginia Turner", "Alexander Schneider", "Gary Vasquez", "Randy Howell",
      "Katherine Moore", "Betty Washington", "Grace Chapman", "Christina Nguyen", "Danielle Rose", "Thomas Freeman",
      "Thomas Armstrong", "Vincent Lee", "Brittany Kelley", "Brenda Wheeler", "Amy Price", "Hannah Harvey",
      "Bobby Howard", "Frank Fox", "Diane Hopkins", "Johnny Hawkins", "Sean Alexander", "Emma Roberts", "Thomas Snyder",
      "Thomas Allen", "Rebecca Ross", "Amy Boyd", "Kenneth Watkins", "Sarah Tucker", "Lawrence Burke", "Emma Carr",
      "Zachary Mason", "John Scott", "Michelle Davis", "Nicholas Cole", "Gerald Nelson", "Emily Smith", "Christian Stephens",
      "Grace Carr", "Arthur Watkins", "Frances Baker", "Katherine Cook", "Roger Wallace", "Pamela Arnold", "Linda Barnes",
      "Jacob Warren", "Billy Ramirez", "Pamela Walsh", "Paul Wade", "Katherine Campbell", "Jeffrey Berry", "Patrick Bowman",
      "Dennis Alvarez", "Crystal Lucas", "Howard Mendoza", "Patricia Wallace", "Peter Stone", "Tiffany Lane", "Joe Perkins",
      "Gloria Reynolds", "Willie Fernandez", "Doris Harper", "Heather Sandoval", "Danielle Franklin", "Ann Ellis",
      "Christopher Hernandez", "Pamela Perry", "Matthew Henderson", "Jesse Mitchell", "Olivia Reed", "David Clark", "Juan Taylor",
      "Michael Garrett", "Gerald Guerrero", "Jerry Coleman", "Joyce Vasquez", "Jane Bryant", "Sean West", "Deborah Bradley",
      "Phillip Castillo", "Martha Coleman", "Ryan Santos", "Harold Hanson", "Frances Hoffman", "Heather Fisher", "Martha Martin",
      "George Gray", "Rachel Herrera", "Billy Hart", "Kelly Campbell", "Kelly Marshall", "Doris Simmons", "Julie George",
      "Raymond Burke", "Ruth Hart", "Jack Schmidt", "Billy Schmidt", "Ruth Wagner", "Zachary Estrada", "Olivia Griffin", "Ann Hayes",
      "Julia Weaver", "Anna Nelson", "Willie Anderson", "Anna Schneider", "Debra Torres", "Jordan Holmes", "Thomas Dean",
      "Maria Burton", "Terry Long", "Danielle McDonald", "Kyle Flores", "Cheryl Garcia", "Judy Delgado", "Karen Elliott",
      "Vincent Ortiz", "Ann Wright", "Ann Ramos", "Roy Jensen", "Keith Cunningham", "Mary Campbell", "Jesse Ortiz", "Joseph Mendoza",
      "Nathan Bishop", "Lori Valdez", "Tammy Jacobs", "Mary West", "Juan Mitchell", "Thomas Adams", "Christian Martinez", "James Ramos",
      "Deborah Ross", "Eric Holmes", "Thomas Diaz", "Sharon Morales", "Kathryn Hamilton", "Helen Edwards", "Betty Powell",
      "Harry Campbell", "Raymond Perkins", "Melissa Wallace", "Danielle Hicks", "Harold Brewer", "Jack Burns", "Anna Robinson",
      "Dorothy Nguyen", "Jane Dean", "Janice Hunter", "Ryan Moore", "Brian Riley", "Brittany Bradley", "Phillip Ortega", "William Fisher",
      "Jennifer Schultz", "Samantha Perez", "Linda Carr", "Ann Brown", "Shirley Kim", "Jeremy Alvarez", "Dylan Oliver", "Roy Gomez",
      "Ethan Brewer", "Ruth Lucas", "Marilyn Myers", "Danielle Wright", "Jose Meyer", "Bobby Brown", "Angela Crawford", "Brandon Willis",
      "Kyle McDonald", "Aaron Valdez", "Kevin Webb", "Ashley Gordon", "Karen Jenkins", "Johnny Santos", "Ashley Henderson", "Amy Walters",
      "Amber Rodriguez", "Thomas Ross", "Dorothy Wells", "Jennifer Murphy", "Douglas Phillips", "Helen Johnston", "Nathan Hawkins",
      "Roger Mitchell", "Michael Young", "Eugene Cruz", "Kevin Snyder", "Frank Ryan", "Tiffany Peters", "Beverly Garza", "Maria Wright",
      "Shirley Jensen", "Carolyn Munoz", "Kathleen Day", "Ethan Meyer", "Rachel Fields", "Joan Bell", "Ashley Sims", "Sara Fields",
      "Elizabeth Willis", "Ralph Torres", "Charles Lopez", "Aaron Green", "Arthur Hanson", "Betty Snyder", "Jose Romero", "Linda Martinez",
      "Zachary Tran", "Sean Matthews", "Eric Elliott", "Kimberly Welch", "Jason Bennett", "Nicole Patel", "Emily Guzman", "Lori Snyder",
      "Sandra White", "Christina Lawson", "Jacob Campbell", "Ruth Foster", "Mark McDonald", "Carol Williams", "Alice Washington",
      "Brandon Ross", "Judy Burns", "Zachary Hawkins", "Julie Chavez", "Randy Duncan", "Lisa Robinson", "Jacqueline Reynolds", "Paul Weaver",
      "Edward Gilbert", "Deborah Butler", "Frances Fox", "Joshua Schmidt", "Ashley Oliver", "Martha Chavez", "Heather Hudson",
      "Lauren Collins", "Catherine Marshall", "Katherine Wells", "Robert Munoz", "Pamela Nelson", "Dylan Bowman", "Virginia Snyder",
      "Janet Ruiz", "Ralph Burton", "Jose Bryant", "Russell Medina", "Brittany Snyder", "Richard Cruz", "Matthew Jimenez", "Danielle Graham",
      "Steven Guerrero", "Benjamin Matthews", "Janet Mendoza", "Harry Brewer", "Scott Cooper", "Alexander Keller", "Virginia Gordon",
      "Randy Scott", "Kimberly Olson", "Helen Lynch", "Ronald Garcia", "Joseph Willis", "Philip Walker", "Tiffany Harris", "Brittany Weber",
      "Gregory Harris", "Sean Owens", "Wayne Meyer", "Roy McCoy", "Keith Lucas", "Christian Watkins", "Christopher Porter", "Sandra Lopez",
      "Harry Ward", "Julie Sims", "Albert Keller", "Lori Ortiz", "Virginia Henry", "Samuel Green", "Judith Cole", "Ethan Castillo", "Angela Ellis",
      "Amy Reid", "Jason Brewer", "Aaron Clark", "Aaron Elliott", "Doris Herrera", "Howard Castro", "Kenneth Davis", "Austin Spencer",
      "Jonathan Marshall", "Phillip Nelson", "Julia Guzman", "Robert Hansen", "Kevin Anderson", "Gerald Arnold", "Austin Castro", "Zachary Moore",
      "Joseph Cooper", "Barbara Black", "Albert Mendez", "Marie Lane", "Jacob Nichols", "Virginia Marshall", "Aaron Miller", "Linda Harvey",
      "Christopher Morris", "Emma Fields", "Scott Guzman", "Olivia Alexander", "Kelly Garrett", "Jesse Hanson", "Henry Wong", "Billy Vasquez",
      "Larry Ramirez", "Bryan Brooks", "Alan Berry", "Nicole Powell", "Stephen Bowman", "Eric Hughes", "Elizabeth Obrien", "Timothy Ramos",
      "Michelle Russell", "Denise Ruiz", "Sean Carter", "Amanda Barnett", "Kathy Black", "Terry Gutierrez", "John Jensen", "Grace Sanchez",
      "Tiffany Harvey", "Jacqueline Sims", "Wayne Lee", "Roy Foster", "Joyce Hart", "Joseph Russell", "Harold Washington", "Beverly Cox",
      "Nicole Morales", "Anna Carpenter", "Jesse Ray", "Ann Snyder", "Mark Diaz", "Elizabeth Harper", "Andrew Guerrero", "Cheryl Silva",
      "Michelle Hudson", "Jeffrey Santos", "Victoria Vasquez", "Matthew Meyer", "Jacob Murray", "Jose Munoz", "Edward Howell", "Vincent Hunter",
      "Daniel Walters", "Samantha Obrien", "Laura Elliott", "Richard Olson", "Daniel Graham", "Carol Lee", "Grace Sullivan", "Nancy Rodriguez",
      "Tyler Tran", "Crystal Shaw", "Madison Allen", "Ralph Sims", "Joe Jenkins", "Dennis Ray", "Arthur Davidson", "Victoria Allen", "Arthur Jackson",
      "Joan Thomas", "Daniel Hopkins", "Gloria Hicks", "Danielle Price", "Craig Keller", "Alan Morgan", "Gregory Silva", "Samantha Kelly",
      "Rachel Williamson", "Bruce Garrett", "Jacob Smith", "Kathleen Nichols", "Sarah Long", "Carol Pearson", "Virginia Mendez", "Judy Valdez",
      "Jason Garza", "Brenda Fowler", "Karen Edwards", "Alexander Anderson", "Pamela Wallace", "Ruth Howell", "Walter Hernandez", "George Lucas",
      "Samantha Long", "Margaret Garza", "Kathleen Schultz", "Frances Guerrero", "Amber Meyer", "Rachel Morales", "Teresa Curtis", "Heather Bell",
      "Grace Johnson", "Melissa King", "Zachary Cook", "Carol Schultz", "Jane Beck", "Karen Stone", "Roger Brooks", "Carolyn Fuller", "Nicholas Coleman",
      "William Bishop", "Christine May", "Linda George", "Jean Meyer", "Cheryl Armstrong", "Danielle Welch", "Amanda Graham", "Janice Carter",
      "Catherine Brooks", "Lawrence Gonzalez", "Amy Russell", "Eugene Jimenez", "Joseph Carlson", "Peter McCoy", "Jerry Washington", "Carolyn Obrien",
      "Mark Walker", "Stephanie Hoffman", "Julie Pena", "Karen Curtis", "Bryan Cruz", "Madison Shaw", "Rachel Graham", "Susan Simpson", "Andrea Harrison",
      "Bryan Miller", "Vincent McDonald", "Jesse McCoy", "Christine Ramos", "Dorothy Riley", "Karen Warren", "Ashley Weber", "Judith Robinson",
      "Alan Mendez", "Donna Medina", "Helen Lane", "Douglas Clark", "Brenda Romero", "Doris Wells", "Patrick Howell", "Doris Lawrence", "Harry Jacobs",
      "Phillip Rose", "Deborah Patel", "Bryan Day", "Rachel Butler", "Paul Butler", "Judy Knight", "Willie Wallace", "Phillip Anderson", "Emma Black",
      "Lisa Lynch", "Kimberly Freeman", "Ronald West", "Kathleen Harris", "Martha Ruiz", "Phillip Moreno", "Robert Vargas", "Jesse Diaz", "Christine Weber",
      "Karen Stanley", "Theresa Edwards", "Kathryn Chavez", "Sarah Rios", "Danielle Wong", "Kathy Carr", "Joan Diaz", "Albert Walters",
      "Denise Kim", "Katherine Pearson", "Diana Richardson", "Harry Ford", "Eric Mills", "Sean Hicks", "Joe Brown", "Judith Morgan", "Harry Hunter",
      "Matthew Bryant", "Tyler Rose", "Mildred Delgado", "Emma Peters", "Walter Delgado", "Lauren Gilbert", "Christopher Romero"
    ];
  
    users = users.map(function (fullName) {
      var userName = fullName.replace(/ /g, '').toLowerCase();
  
      return {
        id: userName,
        name: userName,
        fullName: fullName
      }
    });
  
    users = users.filter(function (user) {
      return user.name.indexOf(query.term) === 0
    });
  
    success(users)
  };
  
  tinymce.init({
    selector: 'textarea#evento_descricaoLonga',
    plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount tinymcespellchecker a11ychecker imagetools textpattern help formatpainter permanentpen pageembed tinycomments mentions linkchecker',
    toolbar: 'formatselect | bold italic strikethrough forecolor backcolor permanentpen formatpainter | link image media pageembed | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat | addcomment',
    image_advtab: true,
    content_css: [
      '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
      '//www.tiny.cloud/css/codepen.min.css'
    ],
    link_list: [
      { title: 'My page 1', value: 'http://www.tinymce.com' },
      { title: 'My page 2', value: 'http://www.moxiecode.com' }
    ],
    image_list: [
      { title: 'My page 1', value: 'http://www.tinymce.com' },
      { title: 'My page 2', value: 'http://www.moxiecode.com' }
    ],
    image_class_list: [
      { title: 'None', value: '' },
      { title: 'Some class', value: 'class-name' }
    ],
    importcss_append: true,
    height: 700,
    file_picker_callback: function (callback, value, meta) {
      /* Provide file and text for the link dialog */
      if (meta.filetype === 'file') {
        callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
      }
  
      /* Provide image and alt text for the image dialog */
      if (meta.filetype === 'image') {
        callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
      }
  
      /* Provide alternative source and posted for the media dialog */
      if (meta.filetype === 'media') {
        callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
      }
    },
    templates: [
      { title: 'Some title 1', description: 'Some desc 1', content: 'My content' },
      { title: 'Some title 2', description: 'Some desc 2', content: '<div class="mceTmpl"><span class="cdate">cdate</span><span class="mdate">mdate</span>My content2</div>' }
    ],
    template_cdate_format: '[CDATE: %m/%d/%Y : %H:%M:%S]',
    template_mdate_format: '[MDATE: %m/%d/%Y : %H:%M:%S]',
    image_caption: true,
    spellchecker_dialog: true,
    spellchecker_whitelist: ['Ephox', 'Moxiecode'],
    tinycomments_mode: 'embedded',
    mentions_fetch: mentionsFetchFunction,
    content_style: '.mce-annotation { background: #fff0b7; } .tc-active-annotation {background: #ffe168; color: black; }'
   });


    $('.table').DataTable({
        "filter":   false,
        "language": {
            "decimal":        "",
            "emptyTable":     "Sem dados disponíveis na tabela",
            "info":           "Mostrando _START_ a _END_ de _TOTAL_ entradas",
            "infoFiltered":   "(filtrado de _MAX_ entradas no total)",
            "infoEmpty":      "Mostrando 0 a 0 de 0 entradas",
            "thousands":      ",",
            "lengthMenu":     "Mostrar _MENU_ por página ",
            "loadingRecords": "Carregando...",
            "processing":     "Processando...",
            "search":         "Pesquisar:",
            "zeroRecords":    "Nenhum registro correspondente encontrado",
            "infoPostFix":    "",
            "paginate": {
                "previous": "Anterior",
                    "next": "Próximo",
                    "last": "Última página",
                    "first": "Primeira página"
            },
            "aria": {
                "sortAscending":  ": ativar para classificar coluna ascendente",
                "sortDescending": ": ativar para classificar coluna descendente"
            }

          },
    });
} );


// Payment
(function () {
    var formPagseguro = $('.form-pagseguro');
    var formPaymentCc = $('form[name="pag_seguro_cartao_credito"]');
    var formPaymentBoleto = $('form[name="pag_seguro_boleto"]');
    var numeroCartao = $('input[name="pag_seguro_cartao_credito[cartaoCredito][numero]"]');
    var formaPagamentoRadioButton = $('input[name="paymentForm"]');
    var selectParcelas = $('select[name="pag_seguro_cartao_credito[cartaoCredito][parcelas]"]');

    selectParcelas.html('');

    formPaymentCc.hide();
    formPaymentBoleto.hide();

    if (formaPagamentoRadioButton.length) {
        formaPagamentoRadioButton.on('change', function () {
            var value = $(this).val();

            if (value == '2') {
                formPaymentBoleto.hide();
                formPaymentCc.show();
            }

            if (value == '1') {
                formPaymentCc.hide();
                formPaymentBoleto.show();
            }
        });
    }

    if (formPagseguro.length) {
        getSessao();
    }

    /**
     * Obter a bandeira do cartão de credito
     */
    numeroCartao.on('change', function () {
        var value = $(this).val().replace(/\s/g, '');

        getBrand(value, function(response) {
            var name = response.brand.name;

            var ccv = $('input[name="pag_seguro_cartao_credito[cartaoCredito][codigoSeguranca]"]');
            ccv.attr('maxlength', response.brand.cvvSize);

            var bandeira = $('input[name="pag_seguro_cartao_credito[cartaoCredito][bandeira]"]');
            bandeira.val(name);

            var valorTotal = $('input[name="pag_seguro_cartao_credito[valorTotal]"]').val();

            var success = function (data) {
                var installments = data.installments;

                installments[name].forEach(function(item){
                    var valor = item.installmentAmount.toLocaleString("pt-BR", { style: "currency" , currency:"BRL"});
                    selectParcelas.append('<option value="'+item.quantity+'">' + item.quantity + 'x ' + 'R$ ' + valor + '</option>');
                });
            };

            var error = function (data) {

            };

            getInstallments(valorTotal, name, success, error);
        });
    });


    /**
     * Submeter formulário de pagamento com cartão de credito
     */
    formPaymentCc.on('submit', function (e) {
        var data = $('form').serializeArray();
        var numero = data[3].value;
        var bandeira = data[15].value;
        var cvv =  data[4].value;
        var mes = data[5].value;
        var ano = data[6].value;
        var form = $(this);

        e.preventDefault();

        var success = function (data) {
            var token = $('input[name="pag_seguro_cartao_credito[cartaoCredito][token]"]');
            token.val(data.card.token);

            setTimeout(function(){
                form.unbind('submit').submit()
            }, 1000);
        };

        var error = function (data) {

        };

        var complete = function (data) {

        };

        createCardToken(numero, cvv, bandeira, mes, ano, success, error, complete);
    });


    /**
     * Gera sessão do pagseguro
     */
    function getSessao() {
        $.ajax({
            type: "POST",
            url: "/checkout/gerar/sessao",
            dataType: 'json',
            cache:false,
            beforeSend: function () {
                $('#overlay').show();
                $('.overlay-message').html('<img src="https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif">Inicializando sessão');
            },
            success: function (data) {
                PagSeguroDirectPayment.setSessionId(data.token);
                PagSeguroDirectPayment.onSenderHashReady(function(response){
                    if(typeof response.status === "undefined" || response.status === 'error') {
                        alert('Erro ao gerar sessão do usuário');
                        return false;
                    }

                    var hash = response.senderHash;
                    formPagseguro.find('.session').val(hash);
                    $('#overlay').hide();
                });

            },
            error: function (request, status, error) {
                alert('Falha ao inicializar a sessão de pagamento');
            }
        });
    }

    /**
     *
     * @param numeroCartao
     * @param success
     */
    function getBrand(numeroCartao, success) {
        numeroCartao = numeroCartao.substr(0,6);

        PagSeguroDirectPayment.getBrand({
            cardBin: String(numeroCartao),
            success: success
        });
    }

    /**
     *
     * @param numero
     * @param cvv
     * @param bandeira
     * @param mes
     * @param ano
     * @param success
     * @param error
     * @param complete
     */
    function createCardToken(numero, cvv, bandeira, mes, ano, success, error, complete)
    {
        var param = {
            cardNumber: numero.replace(/\s/g, ''),
            cvv: cvv,
            brand: bandeira,
            expirationMonth: parseInt(mes),
            expirationYear: ano,
            success: success,
            error: error,
            complete: complete
        };

        PagSeguroDirectPayment.createCardToken(param);
    }

    /**
     *
     * @param valor
     * @param bandeira
     * @param success
     * @param error
     * @param complete
     */
    function getInstallments(valor, bandeira, success, error) {
        PagSeguroDirectPayment.getInstallments({
            amount: valor,
            brand: bandeira.toLowerCase(),
            maxInstallmentNoInterest: 12,
            success:success,
            error: error
        });
    }

})();



