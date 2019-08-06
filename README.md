# How to install WordPress with Nginx on Ubuntu 18.04（Ubuntu18.04でWebサーバにNginxを立てたWordPress環境の構築）

## Prerequisites（前提条件）

* Ubuntu18.04
* Nginx
* MySQL
* domein（ドメイン）
* DNS（DNSサーバ） - 今回はCloudflareを使った方法を例とする
* sudo user（sudo権限を持つユーザー）
* Let's Encrypt SSL Certificate（Let's Encryptを使用したサーバ証明書（CA証明書含む））※オレオレ証明書はダメー

## Instllation

- Update apt packages
  `sudo apt update`
  `sudo apt upgrade`

- Create MySQL database
  `mysql -u root -p`

  `mysql> CREATE DATABASE wordpress CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;`
  `mysql> GRANT ALL ON wordpress.* TO 'wordpressuser'@'localhost' IDENTIFIED BY 'change-with-strong-password';`
  `mysql> FLUSH PRIVILEGES;`
  `mysql> EXIT;`

- Install PHP and depending packages
  `sudo apt install php7.2-cli php7.2-fpm php7.2-mysql php7.2-json php7.2-opcache php7.2-mbstring php7.2-xml php7.2-gd php7.2-curl`

  - Nginx needs PHP-FPM package

- Create directory for WordPress
  `sudo mkdir -p /var/www/html/example.com`

- Download WordPress
  `cd /tmp`
  `wget https://wordpress.org/latest.tar.gz`

- Install package "tar" if needed
  `sudo apt-get install tar`

- Move the extracted files to /var/www/html directory
  `tar xf latest.tar.gz`
  `sudo mv /tmp/wordpress/* /var/www/html/example.com/`

- Set permission for WordPress directory
  `sudo chown -R www-data: /var/www/html/example.com`

- Configure Nginx setting file
  refering to the link below:
  `https://linuxize.com/post/how-to-install-wordpress-with-nginx-on-ubuntu-18-04/`

- create a symbolic link
  `sudo ln -s /etc/nginx/sites-available/example.com /etc/nginx/sites-enabled/`

- make a test of the Nginx setting file
  `sudo nginx -t`
  - if OK
    ```
    nginx: the configuration file /etc/nginx/nginx.conf syntax is ok
    nginx: configuration file /etc/nginx/nginx.conf test is successful
    ```

- Restart Nginx
  `sudo systemctl restart nginx`

