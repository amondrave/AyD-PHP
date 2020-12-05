<?php

require_once 'entities/Proyecto.php';

class ProyectoModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function insertar($proyecto)
    {
        $query = $this->db->conexion()->prepare('INSERT INTO proyecto (idProyecto, nombre, tipo_proyecto_idtipo_proyecto, semillero, convocatoria_idconvocatoria, fecha, estado, nota_final) VALUES (:codigo, :nombre, :tipo, :semillero, :convocatoria, :fecha, :estado, :nota)');
        try {
            $query->execute([
                'codigo' => $proyecto->getIdProyecto(),
                'nombre' => $proyecto->getNombre(),
                'tipo' => $proyecto->getTipoproyecto(),
                'semillero' => $proyecto->getSemillero(),
                'convocatoria' => $proyecto->getConvocatoria(),
                'fecha' => $proyecto->getFecha(),
                'estado' => $proyecto->getEstado(),
                'nota' => $proyecto->getNotaFinal()
            ]);
            return true;
        } catch (PDOException $e) {
            echo ("Error base de datos" . $e);
            return false;
        }
    }

    public function buscar($codigo)
    {
        $proyecto = new Proyecto();
        $query = $this->db->conexion()->prepare('SELECT * FROM proyecto WHERE idproyecto = :codigo');
        try {
            $query->execute([
                'codigo' => $codigo
            ]);
            while ($row = $query->fetch()) {
                $proyecto->setIdProyecto($row['idproyecto']);
                $proyecto->setNombre($row['nombre']);
                $proyecto->setTipoProyecto($row['tipo_proyecto_idtipo_proyecto']);
                $proyecto->setSemillero($row['semillero']);
                $proyecto->setConvocatoria($row['convocatoria_idconvocatoria']);
                $proyecto->setEstado($row['estado']);
            }
            return $proyecto;
        } catch (PDOException $th) {
            print_r($th);
            return null;
        }
    }

    public function obtenerTodos()
    {
        $proyectos = [];
        try {
            $query = $this->db->conexion()->query('SELECT * FROM proyecto');
            while ($row = $query->fetch()) {
                $proyecto = new Proyecto();
                $proyecto->setIdProyecto($row['idproyecto']);
                $proyecto->setNombre($row['nombre']);
                $proyecto->setTipoproyecto($row['tipo_proyecto_idtipo_proyecto']);
                $proyecto->setConvocatoria($row['convocatoria_idconvocatoria']);
                $proyecto->setSemillero($row['semillero']);
                $proyecto->setEstado($row['estado']);
                $proyecto->setNotaFinal($row['nota_final']);
                array_push($proyectos, $proyecto);
            }
            return $proyectos;
        } catch (PDOException $e) {
            print_r($e);
            return [];
        }

        return $proyectos;
    }
}
