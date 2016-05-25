![Docker compose](../Logo/compose.png "Docker compose")
# Simple Docker training examples
## Let's try Docker compose

```bash
#Start the application
docker-compose up
```
Use your browser to go to http://localhost

```bash
# Quit with:
CTRL + C
```


More examples :
[Django](https://docs.docker.com/compose/django/) ,
[Ruby on rails](https://docs.docker.com/compose/rails/) ,
[Wordpress](https://docs.docker.com/compose/wordpress/) & [more](https://github.com/search?utf8=%E2%9C%93&q=in%3Apath+docker-compose.yml+extension%3Ayml)

## Debugging tips
Is my application working ?
```bash
docker-compose ps
```

Are there any errors ?
```bash
docker-compose logs
```

More compose command at [doc.docker.com](https://docs.docker.com/compose/reference/) or with:
```bash
docker-compose --help
```
