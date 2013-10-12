Sisdoc - Sistema Gerenciador de Documentos
========================

			Montagem de Ambiente

1) Instale a chave que dará permissão de commit  
----------------------------------
	1º execute - ssh-keygen -t rsa -C "your_email@example.com"

	2º execute - sudo apt-get install xclip

	3º execute - xclip -sel clip < ~/.ssh/id_rsa.pub

	4º Vá até a pagina de gerenciamento (acconut settings), em SSH Keys clique em add coloque um nome e cole a chave;

	5º Para testar execute - ssh -T git@github.com

2) Baixe o repositório
-------------------------------------

	execute: git clone git@github.com:fabricateste/sisdoc.git

3) Instalando as dependencias 
--------------------------------

Após o clone entre na pasta do sistema e execute:

php bin/composer.phar install --dev

De permissão aos caches

sudo chmod -R 777 app/cache app/logs

4) Teste se o commit esta funcionando 
-------------------------------
Altere algum arquivo e execute:

git status - para mostrar os arquivos modificados

git add arquivos modificados - para adicionar no versionamento para commit

git commit -m"Mensagem do commit" - para efetuar o commit local

git push origin master - para enviar os arquivos commitados para o servidor do gitHub

-------------------------------

Após esses passos seu sistema estara apto a ser acessado, lembre-se a url é localhost/sisdoc/web/app_dev.php



