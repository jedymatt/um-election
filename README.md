# um-election

UM Election Web Application

## Setting Up Development Environment

### Setup Environment Variables

Open terminal in the project directory and run this command to create .env file:

```shell
cp .env.example .env

# or use this if you intend to use devcontainer
cp .env.development .env
```

### Configure A Bash Alias

Go to your user root directory and add this line in file named `.bash_aliases` (create file if it does not exist):

```shell
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

### Composer Install

Open terminal in the project directory and run:

```shell

composer install

# or this if you use docker
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```
