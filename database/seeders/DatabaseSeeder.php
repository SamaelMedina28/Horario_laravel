<?php

namespace Database\Seeders;

use App\Models\Dia;
use App\Models\Materia;
use App\Models\Salida;
use App\Models\Entrada;
use App\Models\Salon;
use App\Models\Edificio;
use App\Models\Horario;

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
        $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];
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
        $salones = [
            ['nombre' => '203', 'edificio_id' => $edificio6k], // Cambiado a edificio_id
            ['nombre' => '202', 'edificio_id' => $edificio6k],
            ['nombre' => '201', 'edificio_id' => $edificio6k],
            ['nombre' => '103', 'edificio_id' => $edificio6k]
        ];
        foreach ($salones as $salon) {
            Salon::firstOrCreate($salon);
        }

        // 4. Materias (corrigiendo ortografía)
        $materias = [
            'Tecnología y Sociedad',
            'Estadística Avanzada',
            'Programación Estructurada',
            'Lenguaje C',
            'Matemáticas Discretas',
            'Metodología de la Investigación',
            'Organización de Computadoras'
        ];
        foreach ($materias as $materia) {
            Materia::firstOrCreate(['nombre' => $materia]);
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
            [
                'dia' => 'Lunes',
                'materia' => 'Tecnología y Sociedad',
                'salon' => '201',
                'hora_entrada' => '08:00:00',
                'hora_salida' => '09:00:00'
            ],
            [
                'dia' => 'Lunes',
                'materia' => 'Estadistica Avanzada',
                'salon' => '202',
                'hora_entrada' => '10:00:00',
                'hora_salida' => '12:00:00'
            ],
            [
                'dia' => 'Martes',
                'materia' => 'Programación Estructurada',
                'salon' => '201',
                'hora_entrada' => '13:00:00',
                'hora_salida' => '15:00:00'
            ],
            // Agrega más horarios según necesites
        ];

        foreach ($horarios as $horarioData) {
            $horario = [
                'id_dia' => Dia::where('nombre', $horarioData['dia'])->first()->id,
                'id_materia' => Materia::where('nombre', $horarioData['materia'])->first()->id,
                'id_salon' => Salon::where('nombre', $horarioData['salon'])->first()->id,
                'id_entrada' => Entrada::where('hora', $horarioData['hora_entrada'])->first()->id,
                'id_salida' => Salida::where('hora', $horarioData['hora_salida'])->first()->id
            ];

            Horario::firstOrCreate($horario);
        }
    }

}
