FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
	build-essential \
	libpng-dev \
	libjpeg-dev \
	libfreetype6-dev \
	libonig-dev \
	libxml2-dev \
	zip \
	unzip \
	curl \
	git \
	vim \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
	&& docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install

RUN chown -R www-data:www-data /var/www \
	&& chmod -R 775 /var/www/storage /var/www/bootstrap/cache

CMD ["php-fpm"]
