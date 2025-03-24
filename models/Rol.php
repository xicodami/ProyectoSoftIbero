<?php
    class Rol{
        // 1er Parte. Programación Orientada a Objetos
        # Atributos
        private $dbh;
        private $rolCode;
        private $rolName;
        private $userName;
        private $userLastName;
        
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
        public function __construct2($rolCode, $rolName){
            $this->rolCode = $rolCode;
            $this->rolName = $rolName;
        }

        public function __construct4($rolCode, $rolName, $userName, $userLastName){
            $this->rolCode = $rolCode;
            $this->rolName = $rolName;
            $this->userName = $userName;
            $this->userLastName = $userLastName;
        }

        # Métodos: RolCode
        public function setRolCode($rolCode){
            $this->rolCode = $rolCode;
        }
        public function getRolCode(){
            return $this->rolCode;
        }
        # Métodos: RolName
        public function setRolName($rolName){
            $this->rolName = $rolName;
        }
        public function getRolName(){
            return $this->rolName;
        }

        # Métodos: userName
        public function setuserName($userName){
            $this->userName = $userName;
        }
        public function getuserName(){
            return $this->userName;
        }

        # Métodos: userLastName
        public function setuserLastName($userLastName){
            $this->userLastName = $userLastName;
        }
        public function getuserLastName(){
            return $this->userLastName;
        }

        // 2da Parte. Persistencia a la Bases de Datos

        # CU09 - Registrar Rol
        public function registrarRol(){

            try {
                $rolCode = $this->getRolCode();
                $user = unserialize($_SESSION['profile']);
                $sql1 = 'INSERT INTO usuariosxroles(usuario_codigo,rol_codigo) VALUES ( :usuario_codigo, :rolCodigo)';
                $sql = 'INSERT INTO roles VALUES (:rolCodigo,:rolNombre)';
                $this->dbh->beginTransaction();
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCodigo',  $rolCode);
                $stmt->bindValue('rolNombre', $this->getRolName());
                
                $stmt1 = $this->dbh->prepare($sql1);
                $stmt1->bindValue('usuario_codigo', $user->getUserCode());
                $stmt1->bindValue('rolCodigo',  $rolCode);
                $stmt->execute();
                $stmt1->execute();
            } catch (Exception $e) {

                die($e->getMessage());
            }
        }

        public function consultarRol(){
            try {
                $rolList = [];
                $sql = 'SELECT * FROM roles';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $rol) {
                    $rolList[] = new Rol(
                        $rol['rol_codigo'],
                        $rol['rol_nombre']
                    );
                }
                return $rolList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }


        # CU10 - Consultar Roles
        // public function consultarRoles(){
        //     try {
        //         $rolList = [];
        //         $sql = 'SELECT * FROM roles';
        //         $stmt = $this->dbh->query($sql);
        //         foreach ($stmt->fetchAll() as $rol) {
        //             $rolList[] = new Rol(
        //                 $rol['rol_codigo'],
        //                 $rol['rol_nombre']
        //             );
        //         }
        //         return $rolList;
        //     } catch (Exception $e) {
        //         die($e->getMessage());
        //     }
        // }

        public function consultarRoles(){
            try {
                $rolList = [];
                $sql = 'SELECT * FROM usuariosxroles                     
                    INNER JOIN usuarios
                    ON usuariosxroles.usuario_codigo = usuarios.usuario_codigo
                    INNER JOIN roles 
                    ON usuariosxroles.rol_codigo = roles.rol_codigo
                    ';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $rol) {
                    $rolList[] = new Rol(
                        $rol['rol_codigo'],
                        $rol['rol_nombre'],
                        $rol['usuario_nombre'],
                        $rol['usuario_apellido']
                    );
                }
                return $rolList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        
        // # CU11 - Actualizar Rol
        public function actualizarRol(){
            try {
                $sql = 'UPDATE roles SET
                            rol_codigo = :rolCodigo,
                            rol_nombre = :rolNombre
                        WHERE rol_codigo = :rolCodigo';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCodigo', $this->getRolCode());
                $stmt->bindValue('rolNombre', $this->getRolName());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
        # CU12 - Obtener Rol por Id
        public function obtenerRolPorId($rolCodigo){
            try {
                $sql = "SELECT * FROM ROLES WHERE rol_codigo=:rolCodigo";
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCodigo', $rolCodigo);
                $stmt->execute();
                $rolDb = $stmt->fetch();
                $rolDb = new Rol(
                    $rolDb['rol_codigo'],
                    $rolDb['rol_nombre']
                );
                return $rolDb;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }


        # Eliminar Rol
        public function eliminarRol($rolCodigo){
            try {
                $sql = 'DELETE FROM roles WHERE rol_codigo = :rolCodigo';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCodigo', $rolCodigo);
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
