# CCP

## Локальный запуск (с нуля) (ubuntu 18)

### 1. Установить `nginx`

```bash
sudo apt update
sudo apt install nginx
```

### 2. Установить `mysql`

```bash
sudo apt install mysql-server
```

> после установки команда `sudo mysql` будет открывать sql-консольный клиент `mysql`

### 3. Настроить аутентификацию в `mysql` пользователя `root` по паролю

> bash - запуск консоли `mysql`:
```bash
sudo mysql
```
> mysql - задать тип аутентификации пользователя `root` с паролем `root`:
```mysql
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';
FLUSH PRIVILEGES;
```

> Теперь вход в консоль `mysql` из `bash` будет выполняться командой:

```bash
mysql -u root -p
```

### 4. Установить `php`

```bash
sudo add-apt-repository universe
sudo apt install php-fpm php-mysql
```

### 5. Настроить конфигурацию `nginx`


> Открыть файл конфигурации `/etc/nginx/sites-available/default`
> Вставить в него следующий текст, заменить {CUR_DIR} на путь, где лежит данный файл **README.md**

```nginx
server {
        listen 80;
        root {CUR_DIR};
        index index.php index.html index.htm index.nginx-debian.html;
        server_name example.com;

        location / {
                try_files $uri $uri/ =404;
        }

        location ~ \.php$ {
                include snippets/fastcgi-php.conf;
                fastcgi_pass unix:/var/run/php/php7.2-fpm.sock;
        }

        location ~ /\.ht {
                deny all;
        }
}
```

***Пояснения:***
>`listen` — определяет, что будет прослушивать порт Nginx. В данном случае он будет прослушивать порт 80, используемый по умолчанию для протокола HTTP.
>`root` — определяет корневой каталог документа, где хранятся файлы, обслуживаемые сайтом.
index — задает для Nginx приоритет обслуживания файлов с именем index.php (при наличии) при запросе файла индекса.
> `server_name` — определяет, какой серверный блок должен использоваться для заданного запроса вашего сервера. Эта директива должна указывать на доменное имя или публичный IP-адрес вашего сервера.
> `location /` — первый блок расположения включает директиву try_files, которая проверяет наличие файлов, соответствующих запросу URI. Если Nginx не сможет найти соответствующий файл, будет возвращена ошибка 404.
> `location ~ \.php$` — этот блок расположения отвечает за фактическую обработку PHP посредством указания Nginx на файл конфигурации fastcgi-php.conf и файл php7.2-fpm.sock file, который объявляет, какой сокет ассоциирован с php-fpm.
> `location ~ /\.ht` — последний блок расположения отвечает за файлы .htaccess, которые Nginx не обрабатывает. При добавлении директивы deny all из файлов .htaccess в корневой каталог документа они не будут выводиться посетителям.

> Далее перезапустить `nginx`

```bash
sudo service nginx restart
```