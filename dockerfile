FROM nginx:mainline-alpine3.18

COPY . /usr/share/nginx/html

EXPOSE 80

CMD [ "nginx", "-g", "daemon off;" ]

