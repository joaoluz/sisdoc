Sistema de Aprendizado de João Batista e Filipe Brito
========================

			Montagem de Ambiente

1) Instalação do vagrant e configuração
-----------------------------------

    1º Os arquivos de instalação no ubuntu estão disponiveis na pasta do dropbox
    2º Execute no caso do ubuntu - sudo chmod -R 777 virtualbox-4.3_4.3.6.deb vagrant_1.4.3_x86_64.deb para dar permissão de execução
    2º Execute no caso do ubuntu - sudo dpkg -i virtualbox-4.3_4.3.6.deb
    3º Execute no caso do ubuntu - sudo dpkg -i vagrant_1.4.3_x86_64.deb
    4º Após a intalação basta entrar na pasta onde se encontra o arquivo Vagrantfile e executar - vagrant up.
    5º Para acessar sua vm execute - vagrant ssh
    Obs: usuario/senha = vagrant
    6º Configure o postgresql
        1º execute sudo vim /etc/postgresql/9.1/main/pg_hba.conf
        2º procure a linha 92 com o comando - digite :92
        3º na linha abaixo essa insira - host    all             all             192.168.56.1/24         trust - do jeito que esta ai mesmo.
        4º salve e feche
    7º Configure o virtual host
        1º execute sudo vim /etc/apache2/sites-available/default
        2º logo após
            <Directory /var/www/>
                    Options Indexes FollowSymLinks MultiViews
                    AllowOverride All
                    Order allow,deny
                    allow from all
            </Directory>

            Insira

            DocumentRoot /var/www/sistema
            <Directory /var/www/sistema>
                    Options Indexes FollowSymLinks MultiViews
                    AllowOverride All
                    Order allow,deny
                    allow from all
            </Directory>
        3º Salve e feche

    Obs: Daqui para frente tudo é dentro da vm

2) Instale a chave que dará permissão de commit
----------------------------------
    1º instale o git execute - sudo aptitude install git-core

	1º execute - ssh-keygen -t rsa -C "your_email@example.com"

	2º execute - sudo apt-get install xclip

	3º execute - xclip -sel clip < ~/.ssh/id_rsa.pub

	4º Vá até a pagina de gerenciamento (acconut settings), em SSH Keys clique em add coloque um nome e cole a chave;

	5º Para testar execute - ssh -T git@github.com

3) Baixe o repositório
-------------------------------------

	execute: git clone https://github.com/joaoluz/sistema.git

4) Instalando as dependencias
--------------------------------

Após o clone entre na pasta do sistema e execute:

php bin/composer.phar install --dev

Depois execute o phing -- basta digitar phing na raiz do projeto

5) Teste se o commit esta funcionando
-------------------------------
Altere algum arquivo e execute:

git status - para mostrar os arquivos modificados

git add arquivos modificados - para adicionar no versionamento para commit

git commit -m"Mensagem do commit" - para efetuar o commit local

git push origin master - para enviar os arquivos commitados para o servidor do gitHub

-------------------------------

6) Acessando o sistema

Após esses passos seu sistema estara apto a ser acessado, lembre-se a url é 192.168.56.115/web



