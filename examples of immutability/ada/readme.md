## Preparação do ambiente
sudo apt-get install gnat

## compilação e execução

`````
 gcc -c immutable.adb
`````

`````
 gnatbind immutable
`````

`````
 gnatlink immutable
`````

`````
 gnatmake immutable.adb
`````

Execute:
`````
 ./immutable
`````
