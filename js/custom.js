//sticky home
var ajusteAlturaSection = $('#menu').outerHeight(); 
//var ajustelArguraIconMenu = $('#icon-menu').outerWidth(); 

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("menu");
var sticky = navbar.offsetTop;
var alturaAjusteSectionStickyIn = $('body').css('padding-top'); //acrescenta padding qdo sticky vira fixed
var alturaAjusteSectionStickyOut = parseFloat(alturaAjusteSectionStickyIn);

alturaAjusteSectionStickyIn = parseFloat(alturaAjusteSectionStickyIn) + ajusteAlturaSection;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        $('.menu').css('height', ajusteAlturaSection + "px");
        navbar.classList.add("sticky"); 
        $('.logo-navbar').css('width', '150px');
        $('.login-navbar').css({ 'font-size': '1.5rem', 'opacity' : 1});
        $('.navbar-nav').removeClass( "fade-out" ).addClass( "fade-in" );
        $('body').css('padding-top', alturaAjusteSectionStickyIn + "px");
    } else {
        $('.menu').css('height', 'auto');
        navbar.classList.remove("sticky");
        $('.logo-navbar').css('width', '0px');
        $('.login-navbar').css({ 'font-size': '0', 'opacity' : 0});
        $('.navbar-nav').removeClass( "fade-in" ).addClass( "fade-out" );
        $('body').css('padding-top', alturaAjusteSectionStickyOut + "px");
    }
}

//VALIDACAO
function validar(){
    if(nome.value.length < 3){
        alert("Digite o seu nome corretamente !");
        nome.focus();
        return false;
    }
    if(email.value.length < 6       || 
       email.value.indexOf("@") < 1 ||
       email.value.indexOf(".") < 1 
       )
       {
            alert("email invalido, verifique !");
            email.focus();
            return false;
       }
    if(password.value.length < 6 || isNaN(password.value)==false)
    {
        alert("Regras: senha alfanumérica, com mais de 6 caracteres");
        password.focus();
        return false;
    }
    if(passwordRepete.value != password.value)
    {
        alert("As senhas devem ser iguais");
        passwordRepete.focus();
        return false;
    }
    if(isNaN(cpf.value))
    {
        alert("digite apenas numeros !");
        cpf.focus();
        return false;
    }
    checaCPF(document.getElementById("cpf").value);
    if(isNaN(fone.value))
    {
        alert("Insira apenas números");
        fone.focus();
        return false;
    }
}

function checaCPF(cpf) {
    if( cpf.length == 11 )
    {
        var v = [];

        //Calcula o primeiro dígito de verificação.
        v[0] = 1 * cpf[0] + 2 * cpf[1] + 3 * cpf[2];
        v[0] += 4 * cpf[3] + 5 * cpf[4] + 6 * cpf[5];
        v[0] += 7 * cpf[6] + 8 * cpf[7] + 9 * cpf[8];
        v[0] = v[0] % 11;
        v[0] = v[0] % 10;

        //Calcula o segundo dígito de verificação.
        v[1] = 1 * cpf[1] + 2 * cpf[2] + 3 * cpf[3];
        v[1] += 4 * cpf[4] + 5 * cpf[5] + 6 * cpf[6];
        v[1] += 7 * cpf[7] + 8 * cpf[8] + 9 * v[0];
        v[1] = v[1] % 11;
        v[1] = v[1] % 10;

        //Retorna Verdadeiro se os dígitos de verificação são os esperados.
        if ( (v[0] != cpf[9]) || (v[1] != cpf[10]) )
        {
            alert('CPF inválido: ' + cpf);
            cpf.focus();
            return false;
        }
    }
    else
    {
        alert('CPF inválido:' + cpf);
        cpf.focus();
        return false;
    }
}//bd-placeholder-img

//COLORIZE THUMBS
var numItems = $('.bd-placeholder-img').length;
for(i=1; i < numItems; i++) {
    var cosseno = 45 * i;
    if(cosseno > 360) cosseno = 45;
    $(".bd-placeholder-img:eq(" + i + ")").css('filter', ' saturate(100%) contrast(100%) invert(0%) hue-rotate(' + cosseno + 'deg)');
}

//used in esqueci
function seVazio() {
    if(emailEsqueci.value.length == 0){
        alert("Campo vazio");
        emailEsqueci.focus();
        return false;
    }
}