<?php

////// 1ª PASSO //////
//Informe abaixo a quantidade de posts
$posts_per_page = 5;

////// 2º PASSO //////
//Informe abaixo o tipo de post. Exemplo: post, agenda etc
$post_type		= "post";

////// 3º PASSO //////
//Insira o código abaixo sem o comentário de // no functions.php do tema
//require(get_template_directory() . '/modules/ajaxPosts/ajaxposts.php' );

////// 4º PASSO //////
//Insira o código abaixo sem o comentário de // no functions.php do tema para que seja carregado o javascript
wp_enqueue_script('app', get_template_directory_uri() . '/modules/ajaxPosts/js/app.js', null, true);
// wp_localize_script( 'app', 'ajaxPosts', array(
//   'siteURL' => get_site_url(),
//   'siteTemplateUrl' => get_template_directory_uri(),
// ));

////// 5º PASSO //////
// No arquivo app.js que está no diretório modules/ajaxPosts/js/ na linha número 6 informe o caminho do seu projeto

////// 6º PASSO //////
//Insira todo seu conteúdo no arquivo content.php de loop da query no arquivo content.php que está no diretório modules/ajaxPosts

////// 7º PASSSO //////
//Insira o shortcode abaixo sem o comentário de //, não se esqueça de por a tag de abertura e fechamento do php na página que deseja inserir o carregamento em ajax
// echo do_shortcode('[ajaxPosts]');

////// 8º PASSO //////
//Informe abaixo a classe para o item do post.
$class1		= "item-post";

////// 9º PASSO //////
//Informe abaixo a classe para o grupo do post.
$class2		= "group";