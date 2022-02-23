<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $service = new Service();
        $service->nombre = 'Desarrollo de Software y sistemas informáticos';
        $service->img = 'assets\img\services\programacion.jpg';
        $service->descripcion = 'Investigación, Análisis, preparación, desarrollo y producción de Software y todo tipo de aplicaciones informáticas utilizando lenguajes de programación y Gestores de Bases de Datos. Elaboración de programas de escritorio y de plataformas digitales para ambientes de trabajo para la producción de sistemas o programas que darán origen a múltiples Software y sistemas de bases de datos. Estudio, desarrollo y producción de tecnologías web para el comercio electrónico. Testing de todo tipo de producto informático, Software, Tecnología Web, Bases de datos y otros sistemas digitales.';
        $service->save();

        $service = new Service();
        $service->nombre = 'Diseño gráfico y entorno visual.';
        $service->img = 'assets\img\services\diseno.jpg';
        $service->descripcion = 'Diseño, maquetado y edición del entorno visual y gráfico de todo tipo de productos informáticos, publicación de textos, imágenes, audiovisuales y multimedias que tengan objetivos publicitarios, eventos feriales, educativos, comerciales, personales, sociales y de toda índole.';
        $service->save();

        $service = new Service();
        $service->nombre = 'Soporte técnico.';
        $service->img = 'assets\img\services\soporte.jpg';
        $service->descripcion = 'Soporte técnico en instalación y configuración de servidores, pc de escritorio, tables, así como equipos de redes como Rooter o switch. Instalación y configuración de telefonía iP. Instalación y configuración de servicios DNS, DHCP, corta fuegos, de correo electrónico, Montaje y cableado de redes informáticas así como la instalación y configuración de redes wifi y servicios cloud. Incluyendo la atención remota, telefónica o por las redes sociales ante inconvenientes técnicos.';
        $service->save();

        $service = new Service();
        $service->nombre = 'Asesoramiento y consultoría.';
        $service->img = 'assets\img\services\asesoramiento.jpg';
        $service->descripcion = 'Asesoramiento y consultoría en tecnologías informáticas, en sistemas de la información, en seguridad informática  incluyendo los antivirus, La comercialización, la gestión, implementación y mantenimiento de proyectos en materias informáticas.  Prestación de servicios de planificación y gestión de acciones formativas así como en el manejo de las redes sociales.';
        $service->save();

        $service = new Service();
        $service->nombre = 'Capacitación';
        $service->img = 'assets\img\services\capacitacion.jpg';
        $service->descripcion = 'Capacitación mediante cursos, seminarios, talleres y otras acciones formativas y divulgativas en materias informáticas o afines o complementarias. Realización de eventos feriales o jornadas científicas y técnicas que promuevan la formación de especialistas en la rama, donde se realice La divulgación de todas las características técnicas, ventajas, desventajas y avances en los equipos electrónicos, componentes y accesorios, programas antivirus y sobre sus licencias de uso, aplicaciones, software y múltiples sistemas digitales.';
        $service->save();

        $service = new Service();
        $service->nombre = 'Contratación, Comercialización y procesamiento de datos.';
        $service->img = 'assets\img\services\datos.jpg';
        $service->descripcion = 'La contratación, subcontratación, implementación, distribución y la comercialización de productos como antivirus, aplicaciones, software, sistemas y licencias con uso parcial o total de los productos informáticos desarrollados o no por la Empresa. Procesamiento de volúmenes de datos para su estudio o análisis financiero, económico, estadístico, sociales, etc. También la comercialización  de  todo  tipo  de  material  informático, hardware, software o similares. Además La venta online a través de internet y/o canales de distribución similares de servicios o productos informáticos.';
        $service->save();
 
    }
}