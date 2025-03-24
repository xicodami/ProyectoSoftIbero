<?php
    class Producto{
        # Atributos
        private $dbh;
        protected $id_producto;
        protected $name_producto;
        protected $id_categoria;
        protected $usuario_nombre;

        
        # Sobrecarga de Constructores
        public function __construct(){
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

        public function __construct2($id_producto, $name_producto){
            $this->id_producto = $id_producto;
            $this->name_producto = $name_producto;
        }


        public function __construct4($id_producto, $name_producto,$id_categoria,$usuario_nombre){
            $this->id_producto = $id_producto;
            $this->name_producto = $name_producto;
            $this->id_categoria = $id_categoria;
            $this->usuario_nombre = $usuario_nombre;
        }

        # Métodos: $id_producto
        public function setid_producto($id_producto){
            $this->id_producto = $id_producto;
        } 
        public function getid_producto(){
            return $this->id_producto;
        } 

        # Métodos: $name_producto
        public function setname_producto($name_producto){
            $this->name_producto = $name_producto;
        } 
        public function getname_producto(){
            return $this->name_producto;
        } 

        # Métodos: $id_categoria
        public function setid_categoria($id_categoria){
            $this->id_categoria = $id_categoria;
        } 
        public function getid_categoria(){
            return $this->id_categoria;
        } 

        # Métodos: $usuario_nombre
        public function setusuario_nombre($usuario_nombre){
            $this->usuario_nombre = $usuario_nombre;
        } 
        public function getusuario_nombre(){
            return $this->usuario_nombre;
        }

        

        
        public function registrarProductos() {
            try {
                $sql = 'INSERT INTO productos VALUES (
                            :id_producto,
                            :name_producto,
                            :id_categoria
                        )';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('id_producto',$this->getid_producto());
                $stmt->bindValue('name_producto', $this->getname_producto());
                $stmt->bindValue('id_categoria', $this->getid_categoria());      
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        } 

        #----CONSULTAR PRODUCTOS-----------/

        public function consultarProductos() {
            try {
                $productoList = [];
                $sql = 'SELECT p.id_producto, p.name_producto, c.name_categoria, u.usuario_nombre FROM productos p,categorias c,usuarios u where c.id_categoria = p.id_categoria AND c.usuario_codigo = u.usuario_codigo';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $producto) {
                    $productoList[] = new Producto(
                        $producto['id_producto'],
                        $producto['name_producto'],
                        $producto['name_categoria'],
                        $producto['usuario_nombre']
                    );
                }
                return $productoList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }



        # CU11 - Actualizar Producto
        public function actualizarProducto(){
            try {                
                $sql = 'UPDATE productos SET
                            id_producto = :id_producto,
                            name_producto = :name_producto,
                            id_categoria = :id_categoria
                        WHERE id_producto = :id_producto';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('id_producto', $this->getid_producto());
                $stmt->bindValue('name_producto', $this->getname_producto());
                $stmt->bindValue('id_categoria', $this->getid_categoria());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # CU12 - Obtener Producto por Id
        public function obtenerProductoPorId($id_producto){
            try {
                $sql = "SELECT * FROM productos WHERE id_producto = :id_producto";
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('id_producto', $id_producto);
                $stmt->execute();
                $producto = $stmt->fetch();
                $producto = new Producto(
                    $producto['id_producto'],
                    $producto['name_producto'],
                    // $producto['nombre_categoria']
                    $producto['id_categoria']
                );
                return $producto;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }


        # CU08 - Eliminar Producto
        public function eliminarProducto($id_producto) {
            try {
                $sql = 'DELETE FROM PRODUCTOS WHERE id_producto = :id_producto';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('id_producto', $id_producto);
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
?>