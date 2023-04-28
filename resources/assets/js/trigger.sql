
--ESTE TRIGER SE CREO PRA EL NUMIERO AUTOMATICO EN COMPRAS

DELIMITER |

CREATE TRIGGER test BEFORE INSERT ON ingresos FOR EACH ROW
BEGIN
SET NEW.num_comprobante = (SELECT num_comprobante
FROM ingresos
ORDER BY ingresos.fecha_hora DESC
LIMIT 1) + 1 , NEW.serie_comprobante = (SELECT num_comprobante
FROM ingresos
ORDER BY ingresos.fecha_hora DESC
LIMIT 1) + 1;
END
|

DELIMITER ;

------------------------------------------------------------------------------
DELIMITER |

CREATE TRIGGER test2 BEFORE INSERT ON ventas FOR EACH ROW
BEGIN
SET NEW.num_comprobante = (SELECT num_comprobante
FROM ventas
ORDER BY ventas.fecha_hora DESC
LIMIT 1) + 1 , NEW.serie_comprobante = (SELECT num_comprobante
FROM ventas
ORDER BY ventas.fecha_hora DESC
LIMIT 1) + 1;
END
|

DELIMITER ;



DELIMITER $$
CREATE TRIGGER `tr_updStockDeleteDetail` BEFORE DELETE ON `detalle_ingresos` FOR EACH ROW BEGIN
 UPDATE articulos SET stock = stock - old.cantidad 
 WHERE articulos.id = old.idarticulo;
END
$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER `tr_updStockDeleteDetailVenta` BEFORE DELETE ON `detalle_ventas` FOR EACH ROW BEGIN
 UPDATE articulos SET stock = stock + old.cantidad 
 WHERE articulos.id = old.idarticulo;
END
$$
DELIMITER ;