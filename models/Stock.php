<?php
class Stock
{
    # Atributos
    private $dbh;
    private $id_producto;
    private $name_producto;
    private $name_categoria;
    private $stock;

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

    public function __construct4($id_producto, $name_producto, $name_categoria, $stock)
    {
        $this->id_producto = $id_producto;
        $this->name_producto = $name_producto;
        $this->name_categoria = $name_categoria;
        $this->stock = $stock;
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

    # Métodos: $name_producto
    public function setname_producto($name_producto)
    {
        $this->name_producto = $name_producto;
    }
    public function getname_producto()
    {
        return $this->name_producto;
    }

    # Métodos: $name_categoria
    public function setname_categoria($name_categoria)
    {
        $this->name_categoria = $name_categoria;
    }
    public function getname_categoria()
    {
        return $this->name_categoria;
    }

    # Métodos: $stock
    public function setstock($stock)
    {
        $this->stock = $stock;
    }
    public function getstock()
    {
        return $this->stock;
    }

    #----CONSULTAR INGRESOS PRODUCTOS-----------/

    public function consultarstockModel()
    {
        try {
            $stockList = [];
            $sql = 'SELECT 
            productos.id_producto AS ID_Producto,
            productos.name_producto AS Producto,
            categorias.name_categoria AS Categoria,
            SUM(ingresoproducto.cantidad_ingr_produc_KG) - COALESCE(s.Total_Salido, 0) AS STOCK
        FROM 
            ingresoproducto
        INNER JOIN 
            productos ON ingresoproducto.id_producto = productos.id_producto
        INNER JOIN 
            categorias ON ingresoproducto.id_categoria = categorias.id_categoria
        LEFT JOIN 
            (SELECT id_producto, SUM(cantidad_sali_prod_KG) AS Total_Salido
             FROM salidaproducto
             GROUP BY id_producto) AS s ON ingresoproducto.id_producto = s.id_producto
        GROUP BY 
            productos.id_producto, productos.name_producto, categorias.name_categoria;
            ';
            $stmt = $this->dbh->query($sql);
            foreach ($stmt->fetchAll() as $stock) {
                $stockList[] = new Stock(
                    //ACA SE COLOCAN LOS NOMBRES DE LOS CAMPOS DE LA TABLA DE LA BASE DE DATOS
                    $stock['ID_Producto'],
                    $stock['Producto'],
                    $stock['Categoria'],
                    $stock['STOCK'],

                );
            }
            return $stockList;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
