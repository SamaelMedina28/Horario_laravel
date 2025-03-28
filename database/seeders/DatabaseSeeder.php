<?php

namespace Database\Seeders;

use App\Models\Dia;
use App\Models\Materia;
use App\Models\Salida;
use App\Models\Entrada;
use App\Models\Salon;
use App\Models\Edificio;
use App\Models\Horario;
use Illuminate\Support\Str;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Pest\Laravel\call;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $dias = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'];
        foreach ($dias as $dia) {
            Dia::firstOrCreate(['nombre' => $dia]);
        }

        // 2. Edificios
        $edificios = ['6K', '6J'];
        foreach ($edificios as $edificio) {
            Edificio::firstOrCreate(['nombre' => $edificio]);
        }

        // 3. Salones (relacionados con edificios) - CORRECCIÓN AQUÍ
        $edificio6k = Edificio::where('nombre', '6K')->first()->id;
        $edificio6j = Edificio::where('nombre', '6J')->first()->id;
        $salones = [
            ['nombre' => '203', 'edificio_id' => $edificio6j], // Cambiado a edificio_id
            ['nombre' => '202', 'edificio_id' => $edificio6k],
            ['nombre' => '201', 'edificio_id' => $edificio6k],
            ['nombre' => '103', 'edificio_id' => $edificio6k]
        ];
        foreach ($salones as $salon) {
            Salon::firstOrCreate($salon);
        }

        // 4. Materias (corrigiendo ortografía)
        $materias = [
            'Tecnologia y Sociedad',
            'Estadistica Avanzada',
            'Programacion Estructurada',
            'Lenguaje C',
            'Matematicas Discretas',
            'Metodología de la Investigacion',
            'Organizacion de Computadoras'
        ];
        foreach ($materias as $materiaNombre) {
            Materia::firstOrCreate([
                'nombre' => $materiaNombre,
                'slug' => Str::slug($materiaNombre) // Genera el slug automáticamente
            ]);
        }

        // 5. Horas de entrada (formato HH:MM:SS)
        $horasEntrada = ['07:00:00', '08:00:00', '13:00:00', '15:00:00', '10:00:00', '12:00:00'];
        foreach ($horasEntrada as $hora) {
            Entrada::firstOrCreate(['hora' => $hora]);
        }

        // 6. Horas de salida (formato HH:MM:SS)
        $horasSalida = ['09:00:00', '12:00:00', '15:00:00', '17:00:00', '10:00:00', '13:00:00'];
        foreach ($horasSalida as $hora) {
            Salida::firstOrCreate(['hora' => $hora]);
        }

        // 7. Horarios (tabla principal)
        $this->seedHorarios();
    }

    protected function seedHorarios()
    {
        $horarios = [
            //* Lunes
            [
                'dia' => 'Lunes',
                'materia' => 'Tecnologia y Sociedad',
                'salon' => '201',
                'entrada' => '08:00:00',
                'salida' => '09:00:00'
            ],
            [
                'dia' => 'Lunes',
                'materia' => 'Estadistica Avanzada',
                'salon' => '202',
                'entrada' => '10:00:00',
                'salida' => '12:00:00'
            ],
            //* Martes
            [
                'dia' => 'Martes',
                'materia' => 'Tecnologia y Sociedad',
                'salon' => '201',
                'entrada' => '07:00:00',
                'salida' => '09:00:00'
            ],
            [
                'dia' => 'Martes',
                'materia' => 'Estadistica Avanzada',
                'salon' => '203',
                'entrada' => '10:00:00',
                'salida' => '12:00:00'
            ],
            [
                'dia' => 'Martes',
                'materia' => 'Lenguaje C',
                'salon' => '203',
                'entrada' => '13:00:00',
                'salida' => '15:00:00'
            ],
            [
                'dia' => 'Martes',
                'materia' => 'Matematicas Discretas',
                'salon' => '202',
                'entrada' => '15:00:00',
                'salida' => '17:00:00'
            ],
            // & Miercoles
            [
                'dia' => 'Miercoles',
                'materia' => 'Programacion Estructurada',
                'salon' => '203',
                'entrada' => '08:00:00',
                'salida' => '10:00:00'
            ],
            [
                'dia' => 'Miercoles',
                'materia' => 'Matematicas Discretas',
                'salon' => '202',
                'entrada' => '15:00:00',
                'salida' => '17:00:00'
            ],
            // & Jueves
            [
                'dia' => 'Jueves',
                'materia' => 'Programacion Estructurada',
                'salon' => '203',
                'entrada' => '08:00:00',
                'salida' => '10:00:00'
            ],
            [
                'dia' => 'Jueves',
                'materia' => 'Organizacion de Computadoras',
                'salon' => '202',
                'entrada' => '10:00:00',
                'salida' => '12:00:00'
            ],
            [
                'dia' => 'Jueves',
                'materia' => 'Lenguaje C',
                'salon' => '203',
                'entrada' => '13:00:00',
                'salida' => '15:00:00'
            ],
            // & Viernes
            [
                'dia' => 'Viernes',
                'materia' => 'Metodologia de la Investigacion',
                'salon' => '103',
                'entrada' => '10:00:00',
                'salida' => '12:00:00'
            ],
            [
                'dia' => 'Viernes',
                'materia' => 'Lenguaje C',
                'salon' => '202',
                'entrada' => '12:00:00',
                'salida' => '13:00:00'
            ],
            [
                'dia' => 'Viernes',
                'materia' => 'Organizacion de Computadoras',
                'salon' => '203',
                'entrada' => '13:00:00',
                'salida' => '15:00:00'
            ],
        ];

        foreach ($horarios as $horarioData) {
            $horario = [
                'id_dia' => Dia::where('nombre', $horarioData['dia'])->first()->id,
                'id_materia' => Materia::where('nombre', $horarioData['materia'])->first()->id,
                'id_salon' => Salon::where('nombre', $horarioData['salon'])->first()->id,
                'id_entrada' => Entrada::where('hora', $horarioData['entrada'])->first()->id,
                'id_salida' => Salida::where('hora', $horarioData['salida'])->first()->id
            ];

            Horario::firstOrCreate($horario);
        }
    }
}
