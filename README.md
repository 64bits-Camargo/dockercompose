<h1>DockerCompose PHP/MySQL/PHPMyAdmin</h1>

<b>Image:</b>
<ul>
  <li>php:7.2.2-apache</li>
  <li>mysql:5.7</li>
  <li>phpmyadmin</li>
</ul>

<b>Instalando mysqli extension</b>
<pre>
docker exec -ti "<your-php-container>" sh
>> docker-php-ext-install mysqli 
>> docker-php-ext-enable mysqli
>> apachectl restart
</pre>
