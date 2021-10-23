# ArthurVieira/GetHub
### GetHub é uma biblioteca em PHP para buscar dados de usuários e repositórios do GitHub. 
-------------------
# ⬇️ Instalação 
```bash 
  #require the package
  composer require arthurvieira/gethub
  
  #install the package
  composer install
```
-------------------
# 💻 Uso
```php
  <?php
  //import the autoload file
  require_once './vendor/autoload.php';

  //import the class
  use ArthurVieira\GetHub\GetHub;

  //call the static method
  $repos = GetHub::getAllRepos("ArthurAbreuVieira");
```
-------------------
# 👍 Funcionalidades
### * ✅ Buscar todos os dados de um usuário pelo nickname do GitHub
  ```php
    GetHub::getAllRepos($nickname);
    //Deve retornar um array associativo com todos os dados do usuário
  ```
### * ✅ Buscar um repositório específico pelo nickname e nome do repositório do GitHub
  ```php
    GetHub::getRepo($nickname, $repository);
    //Deve retornar um array associativo com os dados do repositório requisitado
  ```
### * ✅ Buscar todos os repositórios públicos de um usário pelo nickname do GitHub
  ```php
    GetHub::getAllRepos($nickname);
    //Deve retornar um array associativo com os dados de todos repositórios públicos do usuário
  ```
-------------------
# 🛠️ Tecnologias
#### * ✅ PHP 7.4
