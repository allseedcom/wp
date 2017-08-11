FROM wordpress:latest

RUN apt-get update && apt-get -y install wget unzip

# wp-plugins
WORKDIR /tmp/wp-plugins
RUN wget https://downloads.wordpress.org/plugin/all-in-one-seo-pack.2.3.15.3.zip
RUN wget https://downloads.wordpress.org/plugin/google-sitemap-generator.4.0.9.zip
RUN wget https://downloads.wordpress.org/plugin/broken-link-checker.1.11.5.zip
RUN wget https://downloads.wordpress.org/plugin/pushpress.0.1.8.zip
RUN wget https://downloads.wordpress.org/plugin/wordpress-ping-optimizer.zip
RUN wget https://downloads.wordpress.org/plugin/addquicktag.2.5.1.zip
RUN wget https://downloads.wordpress.org/plugin/wp-multibyte-patch.2.8.1.zip

# unZip
RUN unzip './*.zip' -d /usr/src/wordpress/wp-content/plugins

# clean
RUN apt-get clean
RUN rm -rf /tmp/*

# chown
RUN chown -R www-data:www-data /usr/src/wordpress/wp-content

WORKDIR /var/www/html
