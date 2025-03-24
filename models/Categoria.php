<?php
    class Categoria{
        # Atributos
        private $dbh;
        protected $id_categoria;
        protected $usuario_codigo;
        protected $name_categoria;

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

        public function __construct2($id_categoria, $name_categoria){
            $this->id_categoria = $id_categoria;
            $this->name_categoria = $name_categoria;
        }


        public function __construct3($id_categoria, $usuario_codigo,$name_categoria){
            $this->id_categoria = $id_categoria;
            $this->usuario_codigo = $usuario_codigo;
            $this->name_categoria = $name_categoria;
        }

        # Métodos: $id_categoria
        public function setid_categoria($id_categoria){
            $this->id_categoria = $id_categoria;
        } 
        public function getid_categoria(){
            return $this->id_categoria;
        } 
        # Métodos: $usuario_codigo
        public function setusuario_codigo($usuario_codigo){
            $this->usuario_codigo = $usuario_codigo;
        } 
        public function getusuario_codigo(){
            return $this->usuario_codigo;
        } 

        # Métodos: $name_categoria
        public function setname_categoria($name_categoria){
            $this->name_categoria = $name_categoria;
        } 
        public function getname_categoria(){
            return $this->name_categoria;
        } 
        
        public function registrarCategoria() {
            try {
                $sql = 'INSERT INTO categorias VALUES (
                            :id_categoria,
                            :usuario_codigo,
                            :name_categoria
                        )';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('id_categoria', $this->getid_categoria());
                $stmt->bindValue('usuario_codigo', $this->getusuario_codigo());
                $stmt->bindValue('name_categoria', $this->getname_categoria());            
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        } 

        #----CONSULTAR CATEGORIAS-----------/

        public function consultarCategorias() {
            try {
                $categoriaList = [];
                $sql = 'SELECT * FROM categorias, usuarios WHERE categorias.usuario_codigo = usuarios.usuario_codigo';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $categorias) {
                    $categoriaList[] = new Categoria(
                        $categorias['id_categoria'],
                        $categorias['usuario_nombre'],
                        $categorias['name_categoria']
                    );
                }
                return $categoriaList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # CU11 - Actualizar Categoria
        public function actualizarCategoria(){
            try {                
                $sql = 'UPDATE categorias SET
                            id_categoria = :id_categoria,
                            usuario_codigo = :usuario_codigo,
                            name_categoria = :name_categoria
                        WHERE id_categoria = :id_categoria';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('id_categoria', $this->getid_categoria());
                $stmt->bindValue('usuario_codigo', $this->getusuario_codigo());
                $stmt->bindValue('name_categoria', $this->getname_categoria());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # CU12 - Obtener Categoria por Id
        public function obtenerCategoriaPorId($id_categoria){
            try {
                $sql = "SELECT * FROM categorias WHERE id_categoria = :id_categoria";
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('id_categoria', $id_categoria);
                $stmt->execute();
                $categoria = $stmt->fetch();
                $categoria = new Categoria(
                    $categoria['id_categoria'],
                    $categoria['usuario_codigo'],
                    $categoria['name_categoria']
                );
                return $categoria;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }


        # CU08 - Eliminar Categorias
        public function eliminarCategoria($id_categoria) {
            try {
                $sql = 'DELETE FROM categorias WHERE id_categoria = :id_categoria';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('id_categoria', $id_categoria);
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
?>