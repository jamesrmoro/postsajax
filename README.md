# Carregamento de posts ajax para WordPress

Este projeto é para carregamento de posts em ajax sem a necessidade de carregar a página. O carregamento é feito por meio do scroll.

### Necessário para este projeto

* [Bower](https://bower.io/) - A package manager for the web

### Como começar

Crie um arquivo `bower.json` na pasta do seu tema WordPress conforme abaixo.

### Entendendo o arquivo bower.json

```javascript
// isso é um comentário! apenas para explicar que estamos definindo algumas coisas, como o caminho do diretório, autor, etc :)

{
  "name": "modules",
  "description": "",
  "main": "",
  "authors": [
    "James <james@somadev.com.br>"
  ],
  "license": "ISC",
  "moduleType": [],
  "homepage": "",
  "ignore": [
    "**/.*",
    "node_modules",
    "bower_components",
    "test",
    "tests",
    "index.html",
    "gulpfile.js",
    "package.json",
    "images/"
  ],

  "dependencies": {
    "ajaxPosts": "git@github.com:jamesrmoro/postsajax.git"
  }
}
```

---

### Entendendo o caminho de download dos arquivos

Quando for executado o `bower install`, por padrão os arquivos são gerados em uma pasta `bower_components`. Neste caso vamos definir um diretório de instalação.

Crie então um arquivo com o nome `.bowerrc` no seu tema. Essa configuração ficará responsável por definir a pasta que será gerada no momento da instalação.


### Entendendo o arquivo .bowerrc

```javascript
// isso é um comentário! apenas para explicar que será criado a pasta modules :)

{
  "directory": "modules"
}
```

### Hora da instalação :)

Após criado os 2 arquivos necessários, vamos executar o famoso `bower install`. Vá até a pasta do seu tema e execute o comando `bower install`.

### Após executar o bower install

Você vai encontrar uma pasta chamada "modules" na pasta do seu tema. Também irá encontrar um arquivo nesta página chamado `config.php`.

Neste arquivo existem 7 etapas, siga as instruções deste arquivo para realizar a configuração do carregamento ajax em seu projeto.

