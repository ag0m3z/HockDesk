# SP_SAYT_COTIZADOR
## Parametros
*  IN Metodo VARCHAR(6),
*  IN Serie INT,
*  IN FolioCotizacion INT,
*  IN Sucursal VARCHAR(5),
*  IN FolioBoleta INT,
*  IN FechaBoleta DATETIME,
*  IN ImporteBoleta DECIMAL(18)

### Metodos:

```
GET  | Enviar Informacion de la Cotización
POST | Actualizar los campos de FolioBoleta,FechaBoleta,ImportePrestamo
```

## Resultado

Los Primeros 2 Campos son de ``Estasu`` y ``Mensaje``<br>
En el metodo ``GET`` los demas campos es la información del la cotizacioón

## Estatus
+ ``Eror`` | Metodo No Soportado
+ ``No Existe`` | No se Encontro el Folio
+ ``Activa`` | Solicitud Exitosa
+ ``Vencida`` | Cotizacion Vencida
+ ``Cancelada`` | Cotizacion Cancelada
+ ``Prestamo ``  | Cotizacion Actualizada correctamente






    


