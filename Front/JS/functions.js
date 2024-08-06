window.onload = function(){
    
    const btn = document.querySelector("#cadastrar");

    btn.addEventListener("click", function(e) {

        e.preventDefault();

        const nome = document.querySelector("#nome");
        const idade = document.querySelector("#idade");
        const endereco = document.querySelector("#endereco");
        const email = document.querySelector("#email");
        const telefone = document.querySelector("#tel");
        
        const value_nome = nome.value;
        const value_idade = idade.value;
        const value_endereco = endereco.value;
        const value_email = email.value;
        const value_telefone = telefone.value;


        console.log(value_nome);
        console.log(value_idade);
        console.log(value_endereco);
        console.log(value_email);
        console.log(value_telefone);

    });

}