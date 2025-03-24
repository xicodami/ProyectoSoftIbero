<?php
class IngresoProducto
{
    # Atributos
    private $dbh;
    private $id_ingr_produc;
    private $cantidad_ingr_produc_KG;
    private $id_categoria;
    private $id_producto;
    private $fecha_Ingreso;
    private $marca;
    private $numerofactura;
    private $id_proveedor;
    private $nit;
    private $fechafacturareal;
    private $referencia;
    private $PrecioCompra;
    private $IvaIncluido;
    private $ValorIva;
    private $Total;
    private $usuario_codigo;
    
    # Sobrecarga de Constructores
    public function __construct()
    {
        try {
            $this->dbh = DataBase::connection();
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f = '__construct' . $i)) {
                call_user_func_array(array($this, $f), $a);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function __construct16($id_ingr_produc, $id_producto, $cantidad_ingr_produc_KG, $id_categoria,  $fecha_Ingreso, $marca, $numerofactura, $id_proveedor, $nit, $fechafacturareal, $referencia, $PrecioCompra, $IvaIncluido, $ValorIva, $Total, $usuario_codigo)
    {
        $this->id_ingr_produc = $id_ingr_produc;
        $this->id_producto = $id_producto;
        $this->cantidad_ingr_produc_KG = $cantidad_ingr_produc_KG;
        $this->id_categoria = $id_categoria;
        $this->fecha_Ingreso = $fecha_Ingreso;
        $this->marca = $marca;
        $this->numerofactura = $numerofactura;
        $this->id_proveedor = $id_proveedor;
        $this->nit = $nit;
        $this->fechafacturareal = $fechafacturareal;
        $this->referencia = $referencia;
        $this->PrecioCompra = $PrecioCompra;
        $this->IvaIncluido = $IvaIncluido;
        $this->ValorIva = $ValorIva;
        $this->Total = $Total;
        $this->usuario_codigo = $usuario_codigo;
        
    }



    # Métodos: $id_ingr_produc
    public function setid_ingr_produc($id_ingr_produc)
    {
        $this->id_ingr_produc = $id_ingr_produc;
    }
    public function getid_ingr_produc()
    {
        return $this->id_ingr_produc;
    }

    # Métodos: $cantidad_ingr_produc_KG
    public function setcantidad_ingr_produc_KG($cantidad_ingr_produc_KG)
    {
        $this->cantidad_ingr_produc_KG = $cantidad_ingr_produc_KG;
    }
    public function getcantidad_ingr_produc_KG()
    {
        return $this->cantidad_ingr_produc_KG;
    }

    # Métodos: $id_categoria
    public function setid_categoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }
    public function getid_categoria()
    {
        return $this->id_categoria;
    }


    # Métodos: $id_producto
    public function setid_producto($id_producto)
    {
        $this->id_producto = $id_producto;
    }
    public function getid_producto()
    {
        return $this->id_producto;
    }

    # Métodos: $fecha_Ingreso
    public function setfecha_Ingreso($fecha_Ingreso)
    {
        $this->fecha_Ingreso = $fecha_Ingreso;
    }
    public function getfecha_Ingreso()
    {
        return $this->fecha_Ingreso;
    }

    # Métodos: $marca
    public function setmarca($marca)
    {
        $this->marca = $marca;
    }
    public function getmarca()
    {
        return $this->marca;
    }

    # Métodos: $numerofactura
    public function setnumerofactura($numerofactura)
    {
        $this->numerofactura = $numerofactura;
    }
    public function getnumerofactura()
    {
        return $this->numerofactura;
    }

    # Métodos: $id_proveedor
    public function setid_proveedor($id_proveedor)
    {
        $this->id_proveedor = $id_proveedor;
    }
    public function getid_proveedor()
    {
        return $this->id_proveedor;
    }

    # Métodos: $nit
    public function setnit($nit)
    {
        $this->nit = $nit;
    }
    public function getnit()
    {
        return $this->nit;
    }

    # Métodos: $fechafacturareal
    public function setfechafacturareal($fechafacturareal)
    {
        $this->fechafacturareal = $fechafacturareal;
    }
    public function getfechafacturareal()
    {
        return $this->fechafacturareal;
    }

    # Métodos: $referencia
    public function setreferencia($referencia)
    {
        $this->referencia = $referencia;
    }
    public function getreferencia()
    {
        return $this->referencia;
    }

    # Métodos: $PrecioCompra
    public function setPrecioCompra($PrecioCompra)
    {
        $this->PrecioCompra = $PrecioCompra;
    }
    public function getPrecioCompra()
    {
        return $this->PrecioCompra;
    }

    # Métodos: $IvaIncluido
    public function setIvaIncluido($IvaIncluido)
    {
        $this->IvaIncluido = $IvaIncluido;
    }
    public function getIvaIncluido()
    {
        return $this->IvaIncluido;
    }

    # Métodos: $ValorIva
    public function setValorIva($ValorIva)
    {
        $this->ValorIva = $ValorIva;
    }
    public function getValorIva()
    {
        return $this->ValorIva;
    }

    # Métodos: $Total
    public function setTotal($Total)
    {
        $this->Total = $Total;
    }
    public function getTotal()
    {
        return $this->Total;
    }

    # Métodos: $usuario_codigo
    public function setusuario_codigo($usuario_codigo)
    {
        $this->usuario_codigo = $usuario_codigo;
    }
    public function getusuario_codigo()
    {
        return $this->usuario_codigo;
    }

    


    public function registrarIngresoProductoModels()
    {
        try {
            $sql = 'INSERT INTO ingresoproducto VALUES (
                            :id_ingr_produc,
                            :cantidad_ingr_produc_KG,
                            :id_categoria,
                            :id_producto,
                            :fecha,
                            :marca,
                            :numerofactura,
                            :id_proveedor,
                            :nit,
                            :fechafacturareal,
                            :referencia,
                            :PrecioCompra,
                            :IvaIncluido,
                            :ValorIva,
                            :Total,
                            :usuario_codigo
                        )';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('id_ingr_produc', $this->getid_ingr_produc());
            $stmt->bindValue('cantidad_ingr_produc_KG', $this->getcantidad_ingr_produc_KG());
            $stmt->bindValue('id_categoria', $this->getid_categoria());
            $stmt->bindValue('id_producto', $this->getid_producto());
            $stmt->bindValue('fecha', $this->getfecha_Ingreso());
            $stmt->bindValue('marca', $this->getmarca());
            $stmt->bindValue('numerofactura', $this->getnumerofactura());
            $stmt->bindValue('id_proveedor', $this->getid_proveedor());
            $stmt->bindValue('nit', $this->getnit());
            $stmt->bindValue('fechafacturareal', $this->getfechafacturareal());
            $stmt->bindValue('referencia', $this->getreferencia());
            $stmt->bindValue('PrecioCompra', $this->getPrecioCompra());
            $stmt->bindValue('IvaIncluido', $this->getIvaIncluido());
            $stmt->bindValue('ValorIva', $this->getValorIva());
            $stmt->bindValue('Total', $this->getTotal());
            $stmt->bindValue('usuario_codigo', $this->getusuario_codigo());
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    #----CONSULTAR INGRESOS PRODUCTOS-----------/

    // public function consultarIngresoProductoModel()
    // {
    //     try {
    //         $ingresoproductoList = [];
    //         $sql = 'SELECT ingresoproducto.id_ingr_produc, ingresoproducto.cantidad_ingr_produc_KG, ingresoproducto.fecha, ingresoproducto.marca, ingresoproducto.numerofactura, ingresoproducto.id_proveedor, ingresoproducto.nit, ingresoproducto.fechafacturareal, ingresoproducto.referencia, ingresoproducto.PrecioCompra, ingresoproducto.IvaIncluido, ingresoproducto.ValorIva, ingresoproducto.Total,  categorias.name_categoria, productos.name_producto, usuarios.usuario_nombre
    //         FROM ingresoproducto
    //         INNER JOIN usuarios ON usuarios.usuario_codigo = ingresoproducto.usuario_codigo
    //         INNER JOIN categorias ON ingresoproducto.id_categoria = categorias.id_categoria
    //         INNER JOIN productos ON productos.id_producto = ingresoproducto.id_producto
    //         ORDER BY ingresoproducto.id_ingr_produc ASC;
    //         ';
    //         $stmt = $this->dbh->query($sql);
    //         foreach ($stmt->fetchAll() as $Ingproducto) {
    //             $ingresoproductoList[] = new IngresoProducto(
    //                 $Ingproducto['id_ingr_produc'],
    //                 $Ingproducto['cantidad_ingr_produc_KG'],
    //                 $Ingproducto['name_categoria'],
    //                 $Ingproducto['name_producto'],
    //                 $Ingproducto['fecha'],
    //                 $Ingproducto['marca'],
    //                 $Ingproducto['numerofactura'],
    //                 $Ingproducto['id_proveedor'],
    //                 $Ingproducto['nit'],
    //                 $Ingproducto['fechafacturareal'],
    //                 $Ingproducto['referencia'],
    //                 $Ingproducto['PrecioCompra'],
    //                 $Ingproducto['IvaIncluido'],
    //                 $Ingproducto['ValorIva'],
    //                 $Ingproducto['Total'],
    //                 $Ingproducto['usuario_nombre']
    //             );
    //         }
    //         return $ingresoproductoList;
    //     } catch (Exception $e) {
    //         die($e->getMessage());
    //     }
    // }

    public function consultarIngresoProductoModel()
    {
        try {
            $ingresoproductoList = [];
            $sql = 'SELECT ip.id_ingr_produc, ip.cantidad_ingr_produc_KG, ip.fecha, ip.marca, ip.numerofactura, pr.name_proveedor, ip.nit, ip.fechafacturareal, ip.referencia, ip.PrecioCompra, ip.IvaIncluido, ip.ValorIva, ip.Total, cat.name_categoria, prod.name_producto, u.usuario_nombre
            FROM ingresoproducto ip
            INNER JOIN usuarios u ON u.usuario_codigo = ip.usuario_codigo
            INNER JOIN categorias cat ON ip.id_categoria = cat.id_categoria
            INNER JOIN productos prod ON prod.id_producto = ip.id_producto
            INNER JOIN proveedores pr ON pr.id_proveedor = ip.id_proveedor
            ORDER BY ip.id_ingr_produc ASC;
            ';
            $stmt = $this->dbh->query($sql);
            foreach ($stmt->fetchAll() as $Ingproducto) {
                $ingresoproductoList[] = new IngresoProducto(
                    $Ingproducto['id_ingr_produc'],
                    $Ingproducto['cantidad_ingr_produc_KG'],
                    $Ingproducto['name_categoria'],
                    $Ingproducto['name_producto'],
                    $Ingproducto['fecha'],
                    $Ingproducto['marca'],
                    $Ingproducto['numerofactura'],
                    $Ingproducto['name_proveedor'],
                    $Ingproducto['nit'],
                    $Ingproducto['fechafacturareal'],
                    $Ingproducto['referencia'],
                    $Ingproducto['PrecioCompra'],
                    $Ingproducto['IvaIncluido'],
                    $Ingproducto['ValorIva'],
                    $Ingproducto['Total'],
                    $Ingproducto['usuario_nombre']
                );
            }
            return $ingresoproductoList;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    # ------   ACTUALIZAR INGRESO PRODUCTO -----------

    public function actualizarIngresoProductoModels()
    {
        try {
            $sql = ' UPDATE ingresoproducto SET
                            id_ingr_produc = :id_ingr_produc,
                            id_producto = :id_producto,
                            cantidad_ingr_produc_KG = :cantidad_ingr_produc_KG,
                            id_categoria = :id_categoria,
                            fecha = :fecha,
                            marca = :marca,
                            numerofactura = :numerofactura,
                            id_proveedor = :id_proveedor,
                            nit = :nit,
                            fechafacturareal = :fechafacturareal,
                            referencia = :referencia,
                            PrecioCompra = :PrecioCompra,
                            IvaIncluido = :IvaIncluido,
                            ValorIva = :ValorIva,
                            Total = :Total,
                            usuario_codigo = :usuario_codigo
        WHERE id_ingr_produc = :id_ingr_produc;
        ';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('id_ingr_produc', $this->getid_ingr_produc());
            $stmt->bindValue('id_producto', $this->getid_producto());
            $stmt->bindValue('cantidad_ingr_produc_KG', $this->getcantidad_ingr_produc_KG());
            $stmt->bindValue('id_categoria', $this->getid_categoria());
            $stmt->bindValue('fecha', $this->getfecha_Ingreso());
            $stmt->bindValue('marca', $this->getmarca());
            $stmt->bindValue('numerofactura', $this->getnumerofactura());
            $stmt->bindValue('id_proveedor', $this->getid_proveedor());
            $stmt->bindValue('nit', $this->getnit());
            $stmt->bindValue('fechafacturareal', $this->getfechafacturareal());
            $stmt->bindValue('referencia', $this->getreferencia());
            $stmt->bindValue('PrecioCompra', $this->getPrecioCompra());
            $stmt->bindValue('IvaIncluido', $this->getIvaIncluido());
            $stmt->bindValue('ValorIva', $this->getValorIva());
            $stmt->bindValue('Total', $this->getTotal());
            $stmt->bindValue('usuario_codigo', $this->getusuario_codigo());
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // --------  OBTENER INGRESO PRODUCTO POR ID  ------------//

    public function obtenerIngresoProductosPorId($id_ingr_produc)
    {
        try {
            $sql = "SELECT * FROM ingresoproducto WHERE id_ingr_produc = :id_ingr_produc";
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('id_ingr_produc', $id_ingr_produc);
            $stmt->execute();
            $ingresoproducto = $stmt->fetch();
            $ingresoproducto = new IngresoProducto(
                $ingresoproducto['id_ingr_produc'],
                $ingresoproducto['id_producto'],
                $ingresoproducto['cantidad_ingr_produc_KG'],
                $ingresoproducto['id_categoria'],
                $ingresoproducto['fecha'],
                $ingresoproducto['marca'],
                $ingresoproducto['numerofactura'],
                $ingresoproducto['id_proveedor'],
                $ingresoproducto['nit'],
                $ingresoproducto['fechafacturareal'],
                $ingresoproducto['referencia'],
                $ingresoproducto['PrecioCompra'],
                $ingresoproducto['IvaIncluido'],
                $ingresoproducto['ValorIva'],
                $ingresoproducto['Total'],
                $ingresoproducto['usuario_codigo']
            );
            return $ingresoproducto;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    // -------------- ELIMINAR INGRESO PRODUCTO ----------//

    public function eliminarIngresoProducto($id_ingr_produc)
    {
        try {
            $sql = 'DELETE FROM ingresoproducto WHERE id_ingr_produc = :id_ingr_produc';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('id_ingr_produc', $id_ingr_produc);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
