<h1>Capacitacao 1 Laravel</h1>

<p><b>Obs:.</b> As dependências do Laravel que ficam na pasta vendor não são enviados para o git, pois são ignoradas então após baixar o projeto na sua máquina Local execute o comando composer updade para baixar novamente a pasta vendor com as dependências.</p>

<h5>Pasta Importantes</h5>
<ol>
	<li>Controllers : app\Http\Controllers</li>
	<li>Model: app</li>
	<li>View: resources\views</li>
	<li>Migrations: database\migrations</li>
	<li>Seeds: database\seeds</li>
	<li>Rotas: routes\web.php</li>
</ol>

<b>Pasta Controller</b>
<ul>
	<li>Nessa pasta ficam os arquivos Controllers lá nós manipulamos os dados do banco de dados;</li>
	<li>Para gerar o arquivo controller basta executar o comando <b>php artisan make:controller NomeDoController</b>.</li>
</ul>

<b>Pasta Model</b>
<ul>
	<li>As models representam as nossas Entidades lá podemos definir os atributos preenchiveis, assim como as relações de Tabela para Tabela;</li>
	<li>Para gerar o arquivo Model basta executar o comando <b>php artisan make:model NomeModel</b>.</li>
</ul>

<b>Pasta Views</b>
<ul>
	<li>As views elas são a nossa interface de interação com o usuário;</li>
	<li>Elas no Laravel normalmente assumem a extenção <b>.blade.php</b> e não <b>.html</b>.</li>
</ul>

<b>Pasta Migrations</b>
<ul>
	<li>As migratios apresentam um esquema de como será a nossa tabela (Entidade ou Relacionamento) e lá que definimos a tipagem de nossos atributos;</li>
	<li>Podemos definir também as relações entre tabelas chaves extrangeiras e modos de deleção e atualização da regra vinculada a chave extrangeira;</li>
	<li>Para gerar o arquivo Migration basta executar o comando <b>php artisan make:migration NomeMigration</b>;</li>
	<li>Para criar as tabelas no banco de dados basta executar o comando <b>php artisan migration</b>.</li>
</ul>

<b>Pasta Seeds</b>
<ul>
	<li>Por meio das seeds podemos criar dados de teste para a nossa aplicação;</li>
	<li>Para gerar o arquivo Seeds basta executar o comando <b>php artisan make:seeder NomeSeeder</b></li>
	<li>Para povoar o banco de dados com os dados do seeds é necessário executar o comando <b>php artisan db:seed</b></li>
</ul>

<b>Pasta Routes</b>
<ul>
	<li>Dentro da pasta routes temos o arquivo web.php é nesse arquivo que definimos as nossas rotas;</li>
	<li>As rotas que respeitam a arquitetura MVC são descritas no formato <b>Route::Nome do método HTTP get, post, any('nome-da-url', 'NomedoController@nomeDoMetodoDoController')->name('nomedarota')</b>;</li>
	<li>O name é opcional.</li>
	<ul>
		<li><b>Ex:</b> Route::get('/home/usuario', 'ControllerUsuario@painelUsuario')->name('painel.usuario').</li>
	</ul>
</ul>

<p><b>Vejam mais na Documentação do Laravel:</b> https://laravel.com/docs/6.x"</p>



