
## INSTRUCCIONES PARA EJECUCION
Instalar la carpeta ApiPrueba en el disco local C:/, para no efectar la ruta de la base de datos, configurada en archivo .env, de lo contrario configurar ruta absoluta.
ejecutar el comando php artisan serve para correr el servidor local de laravel.

Para hacer uso de las rutas definidas como GET,POST,PUT,DELETE use la herramienta POSTMAN, acontinuacion enumero los ENDPOINS para cada entidad guardata en la base de datos.

PARA LA ENTIDAD CHARACTERS
(GET)
http://localhost:8000/api/characters/    //RUTA PARA OBTENER TODO LOS REGISTROS

(POST)
http://localhost:8000/api/characters?id=673&name=wilsonpruebaapi&status=alive&type=Gromflomite&location={\"name\":\"NX-5 Planet Remover\",\"url\":\"https://rickandmortyapi.com/api/location/105\"}&image=https://rickandmortyapi.com/api/character/avatar/670.jpeg&episode=[\"https://rickandmortyapi.com/api/episode/41\"]&created=2020-08-13T12:56:31.130Z        // rUTA PARA CREAR UN REGISTRO 

(GET)
localhost:8000/api/characters/1                  // RUTA PARA OBTENER CUALQUIER REGISTRO REEMPLAZAR 1 POR CUALQUIER ID 

(PUT)
localhost:8000/api/characters/1               // RUTA PARA ACTUALIZAR UN REGISTRO PARA ESTA PRUEBA SIMULE UN METODO PUT ENVIANDO COMO POST POST ADJUNTARE PANTALLAZO DEL PROCESO

(DELETE )
localhost:8000/api/characters/delete/1     // RUTA PARA ELIMINAR UN REGISTRO.


## ENDPOINTS PARA LA ENTIDAD EPISODES

(GET)
http://localhost:8000/api/episodes/   

(POST)
http://localhost:8000/api/episodes?parametros_incluir el cuerpo del postman

(GET)
localhost:8000/api/episodes/1   

(PUT)
localhost:8000/api/episodes/1  

(DELETE )
localhost:8000/api/episodes/delete/1





## ENDPOINTS PARA LA ENTIDAD LOCATIONS

(GET)
http://localhost:8000/api/locations/   

(POST)
http://localhost:8000/api/locations?parametros_incluir el cuerpo del postman

(GET)
localhost:8000/api/locations/1   

(PUT)
localhost:8000/api/locations/1  

(DELETE )
localhost:8000/api/locations/delete/1