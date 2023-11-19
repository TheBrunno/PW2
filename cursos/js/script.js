
function enviardados(){
    if(document.dados.nome.value=="" ||
    document.dados.nome.value.length < 4){
        alert( "Preencha campo NOME corretamente!" );

        document.dados.nome.focus();
        return false;
    }


    if (document.dados.idade.value==""){
        alert( "Preencha o campo Idade!" );
        document.dados.idade.focus();
        return false;
    }

    if( document.dados.email.value=="" ||
    document.dados.email.value.indexOf('@')==-1 ||
    document.dados.email.value.indexOf('.')==-1 ){
        alert( "Preencha campo E-MAIL corretamente!" );
        document.dados.email.focus();
        return false;
    }
    return true;
}

