<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Desafio Técnico ICTS</h1>
</p>

![php](https://img.shields.io/badge/-PHP-05122A?style=flat&logo=php)
![MySQL](https://img.shields.io/badge/-MySQL-05122A?style=flat&logo=mysql)
![XAMPP](https://img.shields.io/badge/-Xampp-05122A?style=flat&logo=xampp)
![PostMan](https://img.shields.io/badge/-PostMan-05122A?style=flat&logo=postman)
<br>

---
*Para a criação da aplicação foi utilizado o GII para a geração de Módulos, Controladores, Views e CRUD.*

## - Para acessar a aplicação
~~~
http://localhost/aplicacaophp/web/
~~~
### - Rota Default
```php
'defaultRoute' => 'produto/index'
```

<br>

---
## - Tela CRUD Produto
~~~
http://localhost/aplicacaophp/web/produto/index
~~~

### - Create
~~~
http://localhost/aplicacaophp/web/produto/create
~~~
<img src="./images/create_produto.png">

<br>

### - Read Produto
~~~
http://localhost/aplicacaophp/web/produto/index
~~~ 
<img src="./images/read_produto.png">

<br>

### - Update Produto
<img src="./images/update_produto.png">

<br>

### - Delete Produto
*O delete ocorre dentro do Read e Update.*

<br>

---
## - Tela CRUD Serial
~~~
http://localhost/aplicacaophp/web/serial/index
~~~

### - Create Serial
~~~
http://localhost/aplicacaophp/web/serial/create
~~~
<img src="./images/create_serial.png">

<br>

### - Read Serial
~~~
http://localhost/aplicacaophp/web/serial/index
~~~
<img src="./images/read_serial.png">

<br>

### - Update Serial
<img src="./images/update_serial.png">

<br>

### - Delete Serial
*O delete ocorre dentro do Read e Update.*

---
## - Tela Banco Produto
<img src="./images/product_data.png">

<br>

## - Tela Banco Serial
<img src="./images/serialnumber_data.png">

<br>

---
## - API retorno via postman
*Não consegui retornar um JSON sem o postman.*
### - API Produto
~~~
http://localhost/aplicacaophp/web/apiproduto
~~~
<img src="./images/api_produto_postman.png">

<br>

### - API Serial
~~~
http://localhost/aplicacaophp/web/apiserial
~~~
<img src="./images/api_serial_postman.png">

---