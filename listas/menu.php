
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Gerenciador Imobiliario</title>
        <meta http-equiv="description" content="" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/jmenu.css" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/jMenu.jquery.js"></script>
    </head>
    <body>
       

<ul id="jMenu">
            <li>
                <a>Home</a>
              

            <li>
                <a>Cadastros</a>
                <ul>
                    <li><a href="layout_cliente.php">Clientes</a></li>
                    <li><a href="layout_imovel_lista.php">Im&oacute;vel</a></li>
                    <li><a href="layout_galeria.php">Galeria</a></li>
                  
                    
              </ul>
            </li>
             <li>
                <a>Documenta&ccedil;&otilde;es</a>
                <ul>
                    <li><a href="layout_documentacao.php">Anexar Documentos</a></li>
                    <li><a href="layout_entrega.php">Entrega de Documentos</a></li>
                    <li><a href="layout_processo.php">Movimentar Processo</a></li>
                  
                    
              </ul>
            </li>
            

            <li>
                <a>Financeiro</a>
                <ul>
                    <li><a href="layout_servico.php">Registrar Servi&ccedil;os</a></li>
                    <li><a href="index_financeiro.php">fluxo de Caixa</a></li>
                    <li><a href="layout_contas_a_pagar.php">Contas Pagas</a></li>
                    <li><a href="layout_contas_devedor.php">Contas a Pagar</a></li>
                    <li><a href="layout_pagamentos.php">Contas a Receber</a></li>
                    <li><a href="layout_fo_excluir.php">Lista de Fornecedores</a></li>  
                   <li><a href="layout_agendamento.php">Agendar</a></li> 
                   <li><a href="consulta_mensal.php">Relatorio</a></li>
              </ul>
            </li>
            
             <li><a>Estat&iacute;stica</a>
            <ul>
                    <li><a href="rank.php">Lan&ccedil;amentos</a></li>
                    <li><a href="layout_grafico.php">Funcionario do M&ecirc;s</a></li>
                     <li><a href="layout_total_lotacao.php">Receitas por Escrit&oacute;rio</a></li>
                  <li><a href="layout_total_despesas.php">Despesas por Escrit&oacute;rio</a></li>
                    <li><a href="layout_qd_mes.php">Quantidade de alunos</a></li>
                   
                    
                </ul>
            
            </li>
            

            <li><a>Administra&ccedil;&atilde;o</a>
            <ul>
                    <li><a href="layout_admin.php">Consultar Opera&ccedil;&otilde;es</a></li>
                    <li><a href="layout_ed_excluir.php">Editar / Excluir Clientes</a></li>
                    <li><a href="layout_niver_dia.php">Aniversariantes do dia</a></li>
                    <li><a href="layout_niver_mes.php">Aniversariantes do M&ecirc;s</a></li>
                     <li><a href="layout_funcionario.php">Novo Funcion&aacute;rio</a></li>
                    
                    
                </ul>
            
            </li>


   <li><a>Site</a>
            <ul>
                     <li><a href="../index.php">Site Preview</a></li>
                     <li><a href="layout_autorizar_banner.php">Autorizar Banner</a></li>
                    <li><a href="layout_autorizar.php">Autorizar Galeria</a></li>
                 
                    
                    
                </ul>
            
            </li>
           
        </ul>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#jMenu").jMenu({
                    openClick : false,
                    ulWidth :'auto',
                     TimeBeforeOpening : 100,
                    TimeBeforeClosing : 11,
                    animatedText : false,
                    paddingLeft: 1,
                    effects : {
                        effectSpeedOpen : 150,
                        effectSpeedClose : 150,
                        effectTypeOpen : 'slide',
                        effectTypeClose : 'slide',
                        effectOpen : 'swing',
                        effectClose : 'swing'
                    }

                });
            });
        </script>
    </body>
</html>

