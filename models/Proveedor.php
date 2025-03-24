<?php
    class Proveedor{
        # Atributos
        private $dbh;
        private $id_proveedor;
        private $id_categoria;
        private $name_proveedor;
        private $nit;
        private $celular;
        private $representante;
        private $ubicacion;
        private $email;


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


        public function __construct8($id_proveedor, $id_categoria, $name_proveedor, $nit, $celular, $representante, $ubicacion, $email){
            
            $this->id_proveedor = $id_proveedor;
            $this->id_categoria = $id_categoria;
            $this->name_proveedor = $name_proveedor;
            $this->nit = $nit;
            $this->celular = $celular;
            $this->representante = $representante;
            $this->ubicacion = $ubicacion;
            $this->email = $email;
        }

        # Métodos: $id_proveedor
        public function setid_proveedor($id_proveedor){
            $this->id_proveedor = $id_proveedor;
        } 
        public function getid_proveedor(){
            return $this->id_proveedor;
        } 

        # Métodos: $id_categoria
        public function setid_categoria($id_categoria){
            $this->id_categoria = $id_categoria;
        } 
        public function getid_categoria(){
            return $this->id_categoria;
        } 
        

        # Métodos: $name_proveedor
        public function setname_proveedor($name_proveedor){
            $this->name_proveedor = $name_proveedor;
        } 
        public function getname_proveedor(){
            return $this->name_proveedor;
        } 

        # Métodos: $nit
         public function setnit($nit){
            $this->nit = $nit;
        } 
        public function getnit(){
            return $this->nit;
        } 

        # Métodos: $celular
         public function setcelular($celular){
            $this->celular = $celular;
        } 
        public function getcelular(){
            return $this->celular;
        } 

        # Métodos: $representante
         public function setrepresentante($representante){
            $this->representante = $representante;
        } 
        public function getrepresentante(){
            return $this->representante;
        }

         # Métodos: $ubicacion
         public function setubicacion($ubicacion){
            $this->ubicacion = $ubicacion;
        } 
        public function getubicacion(){
            return $this->ubicacion;
        }

         # Métodos: $email
         public function setemail($email){
            $this->email = $email;
        } 
        public function getemail(){
            return $this->email;
        }
        
        
        # REGISTRAR PROVEEDOR

        public function RegistrarProveedorModels() {
            try {
                $sql = 'INSERT INTO proveedores VALUES (
                            :id_proveedor,
                            :id_categoria,
                            :name_proveedor,
                            :nit,
                            :celular,
                            :representante,
                            :ubicacion,
                            :email
                        )';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('id_proveedor', $this->getid_proveedor());
                $stmt->bindValue('id_categoria', $this->getid_categoria());
                $stmt->bindValue('name_proveedor', $this->getname_proveedor());    
                $stmt->bindValue('nit', $this->getnit()); 
                $stmt->bindValue('celular', $this->getcelular());    
                $stmt->bindValue('representante', $this->getrepresentante());   
                $stmt->bindValue('ubicacion', $this->getubicacion());
                $stmt->bindValue('email', $this->getemail());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        } 

        #----CONSULTAR PROVEEDOR-----------/

        public function ConsultarProveedoresModels() {
            try {
                $proveedorList = [];
                $sql = 'SELECT * FROM proveedores, categorias WHERE proveedores.id_categoria = categorias.id_categoria';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $proveedores) {
                    $proveedorList[] = new Proveedor(
                        $proveedores['id_proveedor'],
                        $proveedores['name_categoria'],
                        $proveedores['name_proveedor'],
                        $proveedores['nit'],
                        $proveedores['celular'],
                        $proveedores['representante'],
                        $proveedores['ubicacion'],
                        $proveedores['email']
                    );
                }
                return $proveedorList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }








        


        # CU11 - Actualizar Categoria
        // public function actualizarCategoria(){
        //     try {                
        //         $sql = 'UPDATE categorias SET
        //                     id_categoria = :id_categoria,
        //                     usuario_codigo = :usuario_codigo,
        //                     name_categoria = :name_categoria
        //                 WHERE id_categoria = :id_categoria';
        //         $stmt = $this->dbh->prepare($sql);
        //         $stmt->bindValue('id_categoria', $this->getid_categoria());
        //         $stmt->bindValue('usuario_codigo', $this->getusuario_codigo());
        //         $stmt->bindValue('name_categoria', $this->getname_categoria());
        //         $stmt->execute();
        //     } catch (Exception $e) {
        //         die($e->getMessage());
        //     }
        // }

        # CU12 - Obtener Categoria por Id
        // public function obtenerCategoriaPorId($id_categoria){
        //     try {
        //         $sql = "SELECT * FROM categorias WHERE id_categoria = :id_categoria";
        //         $stmt = $this->dbh->prepare($sql);
        //         $stmt->bindValue('id_categoria', $id_categoria);
        //         $stmt->execute();
        //         $categoria = $stmt->fetch();
        //         $categoria = new Categoria(
        //             $categoria['id_categoria'],
        //             $categoria['usuario_codigo'],
        //             $categoria['name_categoria']
        //         );
        //         return $categoria;
        //     } catch (Exception $e) {
        //         die($e->getMessage());
        //     }
        // }


        # CU08 - Eliminar Categorias
        // public function eliminarCategoria($id_categoria) {
        //     try {
        //         $sql = 'DELETE FROM categorias WHERE id_categoria = :id_categoria';
        //         $stmt = $this->dbh->prepare($sql);
        //         $stmt->bindValue('id_categoria', $id_categoria);
        //         $stmt->execute();
        //     } catch (Exception $e) {
        //         die($e->getMessage());
        //     }
        // }
    }
?>