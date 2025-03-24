<?php
class SalidaProducto
{
    # Atributos
    private $dbh;
    private $id_salida_prod;
    private $cantidad_sali_prod_KG;
    private $id_categoria;
    private $id_producto;
    private $fecha;
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

    // public function __construct5($id_salida_prod, $cantidad_sali_prod_KG, $id_categoria,  $id_producto,   $fecha_Salida)
    // {
    //     $this->id_salida_prod = $id_salida_prod;
    //     $this->cantidad_sali_prod_KG = $cantidad_sali_prod_KG;
    //     $this->id_categoria = $id_categoria;
    //     $this->id_producto = $id_producto;
    //     $this->fecha_Salida = $fecha_Salida;
    // }


    public function __construct16($id_salida_prod, $cantidad_sali_prod_KG, $id_categoria,  $id_producto,   $fecha, $marca, $numerofactura, $id_proveedor, $nit, $fechafacturareal, $referencia, $PrecioCompra, $IvaIncluido, $ValorIva, $Total, $usuario_codigo)
    {
        $this->id_salida_prod = $id_salida_prod;
        $this->cantidad_sali_prod_KG = $cantidad_sali_prod_KG;
        $this->id_categoria = $id_categoria;
        $this->id_producto = $id_producto;
        $this->fecha = $fecha;
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

    # Métodos: $id_salida_prod
    public function setid_salida_prod($id_salida_prod)
    {
        $this->id_salida_prod = $id_salida_prod;
    }
    public function getid_salida_prod()
    {
        return $this->id_salida_prod;
    }

    # Métodos: $cantidad_sali_prod_KG
    public function setcantidad_sali_prod_KG($cantidad_sali_prod_KG)
    {
        $this->cantidad_sali_prod_KG = $cantidad_sali_prod_KG;
    }
    public function getcantidad_sali_prod_KG()
    {
        return $this->cantidad_sali_prod_KG;
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

    # Métodos: $fecha
    public function setfecha($fecha)
    {
        $this->fecha = $fecha;
    }
    public function getfecha()
    {
        return $this->fecha;
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

    public function registrarSalidaProductoModels()
    {
        try {
            $sql = 'INSERT INTO salidaproducto VALUES (
                            :id_salida_prod,
                            :cantidad_sali_prod_KG,
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
            $stmt->bindValue('id_salida_prod', $this->getid_salida_prod());
            $stmt->bindValue('cantidad_sali_prod_KG', $this->getcantidad_sali_prod_KG());
            $stmt->bindValue('id_categoria', $this->getid_categoria());
            $stmt->bindValue('id_producto', $this->getid_producto());
            $stmt->bindValue('fecha', $this->getfecha());
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

    #----CONSULTAR SALIDA DE PRODUCTOS-----------/

    // public function consultarSalidaProductoModel()
    // {
    //     try {
    //         $salidaproductoList = [];
    //         $sql = 'SELECT salidaproducto.id_salida_prod, salidaproducto.cantidad_sali_prod_KG, salidaproducto.fecha, categorias.name_categoria, productos.name_producto
    //         FROM salidaproducto
    //         INNER JOIN categorias ON salidaproducto.id_categoria = categorias.id_categoria
    //         INNER JOIN productos ON productos.id_producto = salidaproducto.id_producto
    //         ORDER BY salidaproducto.id_salida_prod ASC;';
    //         $stmt = $this->dbh->query($sql);
    //         foreach ($stmt->fetchAll() as $Salidaproducto) {
    //             $salidaproductoList[] = new SalidaProducto(
    //                 $Salidaproducto['id_salida_prod'],
    //                 $Salidaproducto['cantidad_sali_prod_KG'],
    //                 $Salidaproducto['name_categoria'],
    //                 $Salidaproducto['name_producto'],
    //                 $Salidaproducto['fecha']


    //             );
    //         }
    //         return $salidaproductoList;
    //     } catch (Exception $e) {
    //         die($e->getMessage());
    //     }
    // }

    public function consultarSalidaProductoModel()
{
    try {
        $salidaproductoList = [];
        $sql = 'SELECT sp.id_salida_prod, sp.cantidad_sali_prod_KG, sp.fecha, sp.marca, sp.numerofactura, pr.name_proveedor, sp.nit, sp.fechafacturareal, sp.referencia, sp.PrecioCompra, sp.IvaIncluido, sp.ValorIva, sp.Total, cat.name_categoria, prod.name_producto, u.usuario_nombre
        FROM salidaproducto sp
        INNER JOIN usuarios u ON u.usuario_codigo = sp.usuario_codigo
        INNER JOIN categorias cat ON sp.id_categoria = cat.id_categoria
        INNER JOIN productos prod ON prod.id_producto = sp.id_producto
        INNER JOIN proveedores pr ON pr.id_proveedor = sp.id_proveedor
        ORDER BY sp.id_salida_prod ASC';
        $stmt = $this->dbh->query($sql);
        foreach ($stmt->fetchAll() as $Salidaproducto) {
            $salidaproductoList[] = new SalidaProducto(
                $Salidaproducto['id_salida_prod'],
                $Salidaproducto['cantidad_sali_prod_KG'],
                $Salidaproducto['name_categoria'],
                $Salidaproducto['name_producto'],
                $Salidaproducto['fecha'],
                $Salidaproducto['marca'],
                $Salidaproducto['numerofactura'],
                $Salidaproducto['name_proveedor'],
                $Salidaproducto['nit'],
                $Salidaproducto['fechafacturareal'],
                $Salidaproducto['referencia'],
                $Salidaproducto['PrecioCompra'],
                $Salidaproducto['IvaIncluido'],
                $Salidaproducto['ValorIva'],
                $Salidaproducto['Total'],
                $Salidaproducto['usuario_nombre']
            );
        }
        return $salidaproductoList;
    } catch (Exception $e) {
        die($e->getMessage());
    }
}


    #-------------- ACTUALIZAR SALIDA DE PRODUCTOS ------------- //

    public function actualizarSalidaProductoModels()
    {
        try {
            $sql = 'UPDATE salidaproducto SET
                        id_salida_prod = :id_salida_prod,
                        cantidad_sali_prod_KG = :cantidad_sali_prod_KG,
                        id_categoria = :id_categoria,
                        id_producto = :id_producto,
                        fecha = :fecha
                    WHERE id_salida_prod = :id_salida_prod';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('id_salida_prod', $this->getid_salida_prod());
            $stmt->bindValue('cantidad_sali_prod_KG', $this->getcantidad_sali_prod_KG());
            $stmt->bindValue('id_categoria', $this->getid_categoria());
            $stmt->bindValue('id_producto', $this->getid_producto());
            $stmt->bindValue('fecha', $this->getfecha());
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    #-------------- OBTENER SALIDA DE PRODUCTOS POR ID ------------- //

    public function obtenerSalidaProductoPorId($id_salida_prod)
    {
        try {
            $sql = "SELECT * FROM salidaproducto WHERE id_salida_prod = :id_salida_prod";
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('id_salida_prod', $id_salida_prod);
            $stmt->execute();
            $Salidaproducto = $stmt->fetch();
            $Salidaproducto = new SalidaProducto(
                $Salidaproducto['id_salida_prod'],
                $Salidaproducto['cantidad_sali_prod_KG'],
                $Salidaproducto['id_categoria'],
                $Salidaproducto['id_producto'],
                $Salidaproducto['fecha']
            );
            return $Salidaproducto;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    #-------------- ELIMINAR SALIDA PRODUCTOS ------------- //

    public function eliminarSalidaProducto($id_salida_prod)
    {
        try {
            $sql = 'DELETE FROM salidaproducto WHERE id_salida_prod = :id_salida_prod';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('id_salida_prod', $id_salida_prod);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
