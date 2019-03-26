FROM debian:stable
RUN apt-get update \
    && apt-get install -y \ 
    git \ 
    vim

CMD ["echo", "Hola from Docker"]
