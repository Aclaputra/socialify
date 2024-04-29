FROM nginx
RUN apt-get update \
  && apt-get install -y \
  nmap \
  vim
COPY ./default.conf /etc/nginx/conf.d/default.conf
