<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use App\Models\Alumnos;

class AlumnosTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Prueba de la pagina primcipal de alumnos para verificar que funciona correctamente.
     * @return void
     */
    public function test_alumno_creation(): void
    {
        $response = $this->get('/alumnos');
        $response->assertStatus(200);
    }
    /**
     * Prueba que un alumno creado aparece en la lista.
     *
     * @return void
     */
    public function test_se_puede_ver_un_alumno_en_la_lista(): void
    {
        $alumno = Alumnos::factory()->create();
        // Visitamos la página de alumnos
        $response = $this->get('/alumnos');

        // Comprobamos que la página cargó bien
        $response->assertStatus(200);
        
        // Y lo más importante: comprobamos que podemos ver
        // el nombre de nuestro alumno de prueba en el HTML
        $response->assertSee($alumno->nombre);
    }
}