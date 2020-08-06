## Laravel + Vuejs

Projeto de estudo de uma plataforma semelhante ao iFood

### Instruções para instalação

* Requisitos
  * PHP 7.2+
  * Composer
  * Node 12.18+
  * Git
  
  #### Comandos de instalação
  
  * Clonar o repositório
  
        git clone https://github.com/felipefl200/larafood.git
        
  * Entrar na pasta clonada e instalar as dependências do PHP
  
        cd larafood && composer install
        
  * Gerar a chave da aplicação Laravel
   
        php artisan key:generate
  
  * Fazer as configurações de banco de dados do arquivo **.env** - [Documentação](https://laravel.com/docs/7.x/configuration#environment-configuration)
  
  * Migrar as tabelas para o banco de dados
        
        php artisan migrate
        
  * Instalar e compilar as dependências do Javascript
   
        npm install && npm run dev
***
Contato: [felipefl200@gmail.com](mailto:felipefl200@gmail.com)
***
Esse projeto é open-source software licenciado sobre a licença [MIT license](https://opensource.org/licenses/MIT).
