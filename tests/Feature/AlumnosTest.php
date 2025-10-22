<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\Models\Alumnos;

class AlumnosTest extends TestCase
{
    use RefreshDatabase;
    /** 
    * Test para verificar que funcina el modelo, la migración, el controlador y los routes de Alumnos
    */
    public function test_alumnos()
    {
        //Usamos factory para crear un alumno
        $datosAlumno = Alumnos::factory()->make();
        
        //guardamos el alumno usando la ruta correspondiente
        $response = $this->post(route('alumnos.store'), $datosAlumno->toArray());

        //Comprobamos que el alumno se ha guardado correctamente
        $response->assertRedirect(route('alumnos.index'));
        $this->assertDatabaseHas('alumnos', [
            'codigo' => $datosAlumno['codigo'],
            'nombre' => $datosAlumno['nombre'],
            'correo' => $datosAlumno['correo'],
            'fecha_nacimiento' => $datosAlumno['fecha_nacimiento'],
            'sexo' => $datosAlumno['sexo'],
            'carrera' => $datosAlumno['carrera'],
        ]);
        
        //Obtenemos el alumno recien creado
        $alumno = Alumnos::where('codigo', $datosAlumno['codigo'])->first();
        $this->assertNotNull($alumno);

        //Porbamos las rutas 
        //Probamos la ruta de index
        $response = $this->get(route('alumnos.index'));
        $response->assertStatus(200);
        $response->assertSee($datosAlumno['nombre']);

        //Probamos la ruta de show
        $response = $this->get(route('alumnos.show', ['alumno'=>$alumno->id]));
        $response->assertStatus(200);
        $response->assertSee($datosAlumno['nombre']);

        //Probamos las rutas de edit y update
        $response = $this->get(route('alumnos.edit', ['alumno'=>$alumno->id]));
        $response->assertStatus(200);
        $response->assertSee($datosAlumno['nombre']);

        //Datos actualizados
        $datosActualizados = Alumnos::factory()->make()->toArray();

        //Actualizamos el alumno
        $response = $this->put(route('alumnos.update', ['alumno'=>$alumno->id]), $datosActualizados);
        $response->assertRedirect(route('alumnos.index'));

        //Comprobamos que los datos se han actualizado
        $this->assertDatabaseHas('alumnos', [
            'codigo' => $datosActualizados['codigo'],
            'nombre' => $datosActualizados['nombre'],
            'correo' => $datosActualizados['correo'],
            'fecha_nacimiento' => $datosActualizados['fecha_nacimiento'],
            'sexo' => $datosActualizados['sexo'],
            'carrera' => $datosActualizados['carrera'],
        ]);

        //Probamos la ruta de delete
        $response = $this->delete(route('alumnos.destroy', ['alumno'=>$alumno->id]));
        $response->assertRedirect(route('alumnos.index'));

        //Comprobamos que el alumno se ha eliminado
        $this->assertDatabaseMissing('alumnos', [
            'id' => $alumno->id,
        ]);
    }
}