<?php
class Candidato
{
    # Atributos
    private $dbh;
    protected $id_candidato;
    protected $usuario_codigo;
    protected $cedula;
    protected $primer_apellido;
    protected $segundo_apellido;
    protected $primer_nombre;
    protected $segundo_nombre;
    protected $fecha_nacimiento;
    protected $departamento;
    protected $municipio;
    protected $RH;
    protected $sexo;
    protected $fecha_expedicion;
    protected $lugar_expedicion;
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
    public function __construct14($id_candidato, $usuario_codigo, $cedula, $primer_apellido, $segundo_apellido, $primer_nombre, $segundo_nombre, $fecha_nacimiento, $departamento, $municipio, $RH, $sexo, $fecha_expedicion, $lugar_expedicion)
    {
        $this->id_candidato = $id_candidato;
        $this->usuario_codigo = $usuario_codigo;
        $this->cedula = $cedula;
        $this->primer_apellido = $primer_apellido;
        $this->segundo_apellido = $segundo_apellido;
        $this->primer_nombre = $primer_nombre;
        $this->segundo_nombre = $segundo_nombre;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->departamento = $departamento;
        $this->municipio = $municipio;
        $this->RH = $RH;
        $this->sexo = $sexo;
        $this->fecha_expedicion = $fecha_expedicion;
        $this->lugar_expedicion = $lugar_expedicion;
    }

    # Métodos: $id_candidato
    public function setid_candidato($id_candidato)
    {
        $this->id_candidato = $id_candidato;
    }
    public function getid_candidato()
    {
        return $this->id_candidato;
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
    # Métodos: $cedula
    public function setcedula($cedula)
    {
        $this->cedula = $cedula;
    }
    public function getcedula()
    {
        return $this->cedula;
    }
    # Métodos: $primer_apellido
    public function setprimer_apellido($primer_apellido)
    {
        $this->primer_apellido = $primer_apellido;
    }
    public function getprimer_apellido()
    {
        return $this->primer_apellido;
    }
    # Métodos: $segundo_apellido
    public function setsegundo_apellido($segundo_apellido)
    {
        $this->segundo_apellido = $segundo_apellido;
    }
    public function getsegundo_apellido()
    {
        return $this->segundo_apellido;
    }
    # Métodos: $primer_nombre
    public function setprimer_nombre($primer_nombre)
    {
        $this->primer_nombre = $primer_nombre;
    }
    public function getprimer_nombre()
    {
        return $this->primer_nombre;
    }
    # Métodos: $segundo_nombre
    public function setsegundo_nombre($segundo_nombre)
    {
        $this->segundo_nombre = $segundo_nombre;
    }
    public function getsegundo_nombre()
    {
        return $this->segundo_nombre;
    }
    # Métodos: $fecha_nacimiento
    public function setfecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }
    public function getfecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }
    # Métodos: $departamento
    public function setdepartamento($departamento)
    {
        $this->departamento = $departamento;
    }
    public function getdepartamento()
    {
        return $this->departamento;
    }
    # Métodos: $municipio
    public function setmunicipio($municipio)
    {
        $this->municipio = $municipio;
    }
    public function getmunicipio()
    {
        return $this->municipio;
    }
    # Métodos: $RH
    public function setRH($RH)
    {
        $this->RH = $RH;
    }
    public function getRH()
    {
        return $this->RH;
    }
    # Métodos: $sexo
    public function setsexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function getsexo()
    {
        return $this->sexo;
    }
    # Métodos: $fecha_expedicion
    public function setfecha_expedicion($fecha_expedicion)
    {
        $this->fecha_expedicion = $fecha_expedicion;
    }
    public function getfecha_expedicion()
    {
        return $this->fecha_expedicion;
    }
    # Métodos: $lugar_expedicion
    public function setlugar_expedicion($lugar_expedicion)
    {
        $this->lugar_expedicion = $lugar_expedicion;
    }
    public function getlugar_expedicion()
    {
        return $this->lugar_expedicion;
    }

    public function registrarCandidato() {
        try {
            $sql = 'INSERT INTO candidato VALUES (
                        :id_candidato,
                        :usuario_codigo,
                        :cedula,
                        :primer_apellido,
                        :segundo_apellido,
                        :primer_nombre,
                        :segundo_nombre,
                        :fecha_nacimiento,
                        :departamento,
                        :municipio,
                        :RH,
                        :sexo,
                        :fecha_expedicion,
                        :lugar_expedicion
                    )';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('id_candidato', $this->getid_candidato());
            $stmt->bindValue('usuario_codigo', $this->getusuario_codigo());
            $stmt->bindValue('cedula', $this->getcedula());
            $stmt->bindValue('primer_apellido', $this->getprimer_apellido());   
            $stmt->bindValue('segundo_apellido', $this->getsegundo_apellido());
            $stmt->bindValue('primer_nombre', $this->getprimer_nombre());
            $stmt->bindValue('segundo_nombre', $this->getsegundo_nombre());
            $stmt->bindValue('fecha_nacimiento', $this->getfecha_nacimiento());
            $stmt->bindValue('departamento', $this->getdepartamento());
            $stmt->bindValue('municipio', $this->getmunicipio());
            $stmt->bindValue('RH', $this->getRH());
            $stmt->bindValue('sexo', $this->getsexo());
            $stmt->bindValue('fecha_expedicion', $this->getfecha_expedicion());
            $stmt->bindValue('lugar_expedicion', $this->getlugar_expedicion());         
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    } 

    #----CONSULTAR CANDIDATOS-----------/

    public function consultarCandidatos() {
        try {
            $candidatosList = [];
            $sql = 'SELECT * FROM candidato, usuarios WHERE candidato.usuario_codigo = usuarios.usuario_codigo';
            $stmt = $this->dbh->query($sql);
            foreach ($stmt->fetchAll() as $candidato) {
                $candidatosList[] = new Candidato(
                    $candidato['id_candidato'],
                    $candidato['usuario_nombre'],
                    $candidato['cedula'],
                    $candidato['primer_apellido'],
                    $candidato['segundo_apellido'],
                    $candidato['primer_nombre'],
                    $candidato['segundo_nombre'],
                    $candidato['fecha_nacimiento'],
                    $candidato['departamento'],
                    $candidato['municipio'],
                    $candidato['RH'],
                    $candidato['sexo'],
                    $candidato['fecha_expedicion'],
                    $candidato['lugar_expedicion'], 
                );
            }
            return $candidatosList;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //--------- ACTUALIZAR CANDIDATO ------------------//

    public function actualizarCandidato(){
        try {                
            $sql = 'UPDATE candidato SET
                        id_candidato = :id_candidato,
                        usuario_codigo = :usuario_codigo,
                        cedula = :cedula,
                        primer_apellido = :primer_apellido,
                        segundo_apellido = :segundo_apellido,
                        primer_nombre = :primer_nombre,
                        segundo_nombre = :segundo_nombre,
                        fecha_nacimiento = :fecha_nacimiento,
                        departamento = :departamento,
                        municipio = :municipio,
                        RH = :RH,
                        sexo = :sexo,
                        fecha_expedicion = :fecha_expedicion,
                        lugar_expedicion = :lugar_expedicion
                    WHERE id_candidato = :id_candidato';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('id_candidato', $this->getid_candidato());
            $stmt->bindValue('usuario_codigo', $this->getusuario_codigo());
            $stmt->bindValue('cedula', $this->getcedula());
            $stmt->bindValue('primer_apellido', $this->getprimer_apellido());
            $stmt->bindValue('segundo_apellido', $this->getsegundo_apellido());
            $stmt->bindValue('primer_nombre', $this->getprimer_nombre());
            $stmt->bindValue('segundo_nombre', $this->getsegundo_nombre());
            $stmt->bindValue('fecha_nacimiento', $this->getfecha_nacimiento());
            $stmt->bindValue('departamento', $this->getdepartamento());
            $stmt->bindValue('municipio', $this->getmunicipio());
            $stmt->bindValue('RH', $this->getRH());
            $stmt->bindValue('sexo', $this->getsexo());
            $stmt->bindValue('fecha_expedicion', $this->getfecha_expedicion());
            $stmt->bindValue('lugar_expedicion', $this->getlugar_expedicion());
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    //------------ OBTENER CANDIDATO POR ID --------------------//

    public function obtenerCandidatoPorId($id_candidato){
        try {
            $sql = "SELECT * FROM candidato WHERE id_candidato = :id_candidato";
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('id_candidato', $id_candidato);
            $stmt->execute();
            $candidato = $stmt->fetch();
            $candidato = new Candidato(
                $candidato['id_candidato'],
                $candidato['usuario_codigo'],
                $candidato['cedula'],
                $candidato['primer_apellido'],
                $candidato['segundo_apellido'],
                $candidato['primer_nombre'],
                $candidato['segundo_nombre'],
                $candidato['fecha_nacimiento'],
                $candidato['departamento'],
                $candidato['municipio'],
                $candidato['RH'],
                $candidato['sexo'],
                $candidato['fecha_expedicion'],
                $candidato['lugar_expedicion']
            );
            return $candidato;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // ------------ ELIMINAR CANDIDATOS -----------------------//

    public function eliminarCandidato($id_candidato) {
        try {
            $sql = 'DELETE FROM candidato WHERE id_candidato = :id_candidato';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('id_candidato', $id_candidato);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
