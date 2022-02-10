# um-election-app

UM Election Web Application

## Setting Up Development Environment

### Setup Environment Variables

```shell
cp .env.example .env

# or this if you intend to use devcontainer
cp .env.development .env
```

### Configure A Bash Alias

Go to your user root directory and add this line in file named `.bash_aliases` (create file if it does not exist):

```shell
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

### Docker Development

```shell
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```