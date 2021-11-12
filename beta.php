<?php
//aqui é só um exemplo para não rodar o script abaixo sem necessidade
if ((isset($_POST['collectDocs']))&&(!empty($_POST['collectDocs']))){

    //porta, usuário, senha, nome data base
    //caso não consiga conectar mostra a mensagem de erro mostrada na conexão
    $conexao = mysqli_connect("localhost", "embalage_wp576", "Dpe80[S35-", "embalage_wp576") or die("Erro na conexão com banco de dados " . mysqli_error($conexao));

    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $razaoSocial = $_POST['razaoSocial']; 
    $nomeFantasia = $_POST['nomeFantasia'];
    $atividadePrincipal = $_POST['atividadePrincipal'];
    $mascara_cnpj = $_POST['mascara_cnpj'];
    $inscricaoEstadual = $_POST['inscricaoEstadual'];
    $responsavelSetor = $_POST['responsavelSetor'];
    $mascara_cep = $_POST['mascara_cep'];
    $longadouro = $_POST['longadouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $mascara_telefone_ddd = $_POST['mascara_telefone_ddd'];
    $mascara_telefone_nono_digito = $_POST['mascara_telefone_nono_digito'];
    $email = $_POST['email'];
    $nome1 = $_POST['nome1'];
    $telefone1 = $_POST['telefone1'];
    $endereco1 = $_POST['endereco1'];
    $nome2 = $_POST['nome2'];
    $telefone2 = $_POST['telefone2'];
    $endereco2 = $_POST['endereco2'];
    $nome3 = $_POST['nome3'];
    $telefone3 = $_POST['telefone3'];
    $endereco3 = $_POST['endereco3'];
    $collectDocs = $_POST['collectDocs'];

    (null,'$razaoSocial','$nomeFantasia','$atividadePrincipal','$mascara_cnpj','$inscricaoEstadual','$responsavelSetor','$mascara_cep','$longadouro','$numero','$bairro','$cidade','$uf','$mascara_telefone_ddd','$mascara_telefone_nono_digito','$nome1','$razaoSocial','$email','$testemunho','$razaoSocial','$email','$testemunho','$razaoSocial','$email','$testemunho','$razaoSocial','$email','$testemunho')";

    $string_sql = "INSERT INTO wpef_c_cadastros (razaoSocial,nomeFantasia,atividadePrincipal,mascara_cnpj,inscricaoEstadual,responsavelSetor,mascara_cep,longadouro,numero,bairro,cidade,uf,mascara_telefone_ddd,mascara_telefone_nono_digito,email,nome1,telefone1,endereco1,nome2,telefone2,endereco2,nome3,telefone3,endereco3,collectDocs) VALUES (null,'$nome','$email','$testemunho')";
    $insert_member_res = mysqli_query($conexao, $string_sql);
    if(mysqli_affected_rows($conexao)>0){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<p>Testemunho Registrado</p>";
        echo '<a href="testimonianze.html">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro
    } else {
        echo "Erro, não foi possível inserir no banco de dados";
    }
    mysqli_close($conexao); //fecha conexão com banco de dados
}else{
    echo "Por favor, preencha os dados";
}