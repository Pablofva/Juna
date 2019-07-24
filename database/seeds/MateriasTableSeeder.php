<?php

use Illuminate\Database\Seeder;
use App\Materia;
use App\Carrera;

class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MATERIAS DE INGENIERIA
        $this->materiasIngenieriaInformatica();
        $this->materiasIngenieriaPetroleo();
        $this->materiasBioingenieria();
        $this->materiasIngenieriaElectromecanica();
        $this->materiasIngenieriaIndustrial();
        $this->materiasProdVegetalIntens();
        $this->materiasTecniEmprAgropec();
        $this->materiasAdminAgraria();
        $this->materiasCienciasAgrarias();
        $this->materiasIngenTransporte();
        //MATERIAS DE SOCIALES
        // $this->materiasRelacionesdeTrabajo();
        // $this->materiasEconomia();
        // $this->materiasAdministracion();
    }
    protected function materiasRelacionesdeTrabajo()
    {
        $id_carrera = Carrera::where('nombre', 'Licenciatura en Relaciones del Trabajo')->value('id');

        //AÑO 1
        $lista1 =
            [
                ['CI001', 'Taller de Lectura y Escritura'], ['CI004', 'Prácticas Culturales'],
                ['CI002', 'Matemática'], ['CI005', 'Conocimiento Científico y Metodología de la Investigación'],
                ['CI006', 'Introducción al Desarrollo Sustentable'], ['CI003', 'Problemas de Historia Argentina']
            ];
        $this->crear_materias($lista1, 1, $id_carrera);

        //AÑO 2
        $lista2 = 
        [
            ['CI013', 'Introducción a la Economía'],
            ['CI014', 'Introducción a la Sociología'],
            ['CI015', 'Análisis de  Procesos Económicos, Sociales y Ambientales'],
            ['C3001', 'Historia de las Relaciones Laborales'], ['CI006', 'Introducción al Derecho'],
            ['CI017', 'Gestión y Administración de las Organizaciones']
        ];
        $this->crear_materias($lista2, 2, $id_carrera);

        //AÑO 3
        $lista3 =
            [
                ['C3002', 'Administración de Personal'], ['C3003', 'Derecho del Trabajo y Legislación    Laboral'],
                ['C3004', 'Gestión y Capacitación de Recursos Humanos'], ['C3005', 'Cultura y Sociología del Trabajo'],
                ['C3006', 'Derecho de la Seguridad Social'], ['C3007', 'Práctica Laboral'], ['CI018', 'Análisis de Políticas Públicas']
            ];
        $this->crear_materias($lista3, 3, $id_carrera);
        ///falta 4 y 5
    }

    protected function materiasEconomia()
    {
        $id_carrera = Carrera::where('nombre', 'Licenciatura en Economia')->value('id');
        $lista1 = [
            ['CI001', 'Taller de Lectura y Escritura'],
            ['CI004', 'Prácticas Culturales'],
            ['CI002', 'Matemática'], ['CI005', 'Conocimiento Científico y Metodología de la Investigación'],
            ['CI003', 'Problemas de Historia Argentina'], ['CI016', 'Introducción al Derecho'],
            ['C5002', 'Elementos para el analisis de la sociedad actual']
        ];
        $this->crear_materias($lista1, 1, $id_carrera);

        $lista2 = [
            ['C5003', 'Análisis Matemático I'], ['C5007', 'Contabilidad Pública y Privada'],
            ['C5006', 'Análisis Matemático II'], ['C5004', 'Epistemología de las Ciencias Sociales'],
            ['C5005', 'Política Económica Argentina'], ['CI013', 'Introducción a la Economía']
        ];

        $this->crear_materias($lista2, 2, $id_carrera);

        $lista3 = [

            ['C5008', 'Análisis Macroeconómico'], ['C5009', 'Estadística para economistas'],
            ['C5012', 'Historia del pensamiento económico'],
            ['C5011', 'Análisis Microeconómico'],
            ['C5013', 'Matemática para economistas'],
            ['C5014', 'Taller de práctica laboral'], ['C5010', 'Inglés aplicado a las Cs Sociales'],
        ];
        $this->crear_materias($lista3, 3, $id_carrera);

        $lista4 = [
            ['C5015', 'Macroeconomía avanzada'], ['C5018', 'Crecimiento y distribución'],
            ['C5019', 'Microeconomía avanzada'], ['C5020', 'Estructura productiva argentina'],
            ['C5016', 'Historia del pensamiento económico nacional'], ['C5017', 'Economía del sector público'],
            ['C5021', 'Política tributaria'], ['C5022', 'Matemática financiera']
        ];

        $this->crear_materisas($lista4, 4, $id_carrera);

        //FALTA LISTA DEL 5TO
    }


    protected function materiasAdministracion()
    {
        $id_carrera = Carrera::where('nombre', 'Licenciatura en Administracion')->value('id');

        $lista1 =
            [
                ['CI001', 'Taller de Lectura y Escritura'], ['CI004', 'Prácticas Culturales'],
                ['CI014', 'Introducción a la Sociología'],
                ['CI006', 'Introducción al Desarrollo Sustentable'],
                ['CI002', 'Matemática'], ['CI005', 'Conocimiento Científico y Metodología de la Investigación']
            ];

        $this->crear_materias($lista1, 1, $id_carrera);

        $lista2 =
            [
                ['CI013', 'Introducción a la Economía'], ['CI015', 'Análisis de  Procesos Económicos, Sociales y Ambientales'],
                ['CI016', 'Introducción al Derecho'],
                ['CI017', 'Gestion y Administracion de las Organizaciones'],
                ['C2001', 'Estadística']
            ];
        $this->crear_materias($lista2, 2, $id_carrera);

        $lista3 =
            [
                ['C2003', 'Contabilidad'],
                ['C2004', 'Comercialización y Comunicación'], ['C2005', 'Microeconomía'],
                ['C2006', 'Matemática Financiera'],
                ['C2007', 'Taller de Práctica Laboral'],
                ['CI018', 'Análisis de Políticas Públicas'],
                ['C2002', 'Sistemas Administrativos']
            ];
        $this->crear_materias($lista3, 3, $id_carrera);

        $lista4 =
            [
                ['C2008', ' Presupuesto y Gestión de Costos'],
                ['C2009', 'Macroeconomía y Política Económica'],
                ['C2010', 'Administración Financiera'],
                ['C2011', 'Gestión de Recursos Humanos'],
                ['C2012',  'Impuestos'], ['C2013', 'Teoría de la Organización y Organización Industrial'],
                ['C2014', 'Planificación y Gestión Estratégica'], ['C2016', 'Taller de Trabajo Final'],
                ['C2015', 'Desarrollo Economico Local']
            ];
        $this->crear_materias($lista4, 4, $id_carrera);
    }



    //MATERIAS DE ING EN INFORMATICA
    protected function materiasIngenieriaInformatica()
    {
        $id_carrera = Carrera::where('nombre', 'Ingenieria en Informatica')->value('id');

        $lista1 =
            [
                ['CI021', 'Taller de Ingeniería'], ['CI004', 'Prácticas Culturales'],
                ['CI009', 'Sistemas de Representación'], ['CI002', 'Matemática'],
                ['CI001', 'Taller de Lectura y Escritura'], ['CI010', 'Fundamentos de Informática'],
                ['CI003', 'Problemas de Historia Argentina'],
                ['CI012', 'Matemática I'],
            ];
        $this->crear_materias($lista1, 1, $id_carrera);

        $lista2 =
            [
                ['I3001', 'Algoritmos y Programación'],
                ['I3002', 'Organización y Arquitectura de Computadoras'],
                ['I3003', 'Sistemas Operativos I '],
                ['I3004', 'Complejidad Temporal, Estructuras de Datos y Algoritmos'],
                ['I3005', 'Bases de Datos I'],
                ['I3006', 'Redes de Computadoras I'],
                ['CI022', 'Matemática II'], ['CI025', 'Física I'],
                ['CI026', 'Matemática III '],
            ];
        $this->crear_materias($lista2, 2, $id_carrera);

        $lista3 =
            [
                ['I3007', 'Metodología de Programación I'],
                ['I3008', 'Información y Comunicaciones'], ['I3009', 'Ingeniería de Software I '],
                ['I3010', 'Redes de Computadoras II'],
                ['I3011', 'Proyecto Software'],
                ['I3012', 'Metodologías de Programación II'], ['I3013', 'Seguridad de la Información '],
                ['CI027', 'Física II'], ['CI029', 'Probabilidad y Estadística'],
                ['CI011', 'Química General'],
            ];
        $this->crear_materias($lista3, 3, $id_carrera);

        $lista4 =
            [
                ['I3014', 'Bases de Datos II'], ['I3015', 'Ingeniería de Software II'],
                ['I3016', 'Sistemas Operativos II'], ['I3017', 'Seguridad en Aplicaciones'],
                ['I3018', 'Aplicaciones Móviles'], ['I3019', 'Administración de Proyectos '],
                ['I3020', 'Lenguajes Formales y Autómatas'], ['I3021', 'Programación en Tiempo Real'],
                ['I3031', 'Optativa I '], ['CI030', 'Ingeniería Ambiental'],
            ];
        $this->crear_materias($lista4, 4, $id_carrera);

        $lista5 =
            [
                ['I3023', 'Sistemas y Organizaciones'], ['I3027', 'Legislación y Ejercicio Profesional de la Informática'],
                ['I3032', 'Optativa II '], ['I3033', 'Optativa III '],
                ['CI031', 'Gestión de Recursos Humanos '], ['CI035', 'Gestión de la Calidad, Higiene y Seguridad'],
                ['I3028', 'Economía'], ['I3029', 'Práctica Profesional Supervisada'],
                ['CI031', 'Gestión de Recursos Humanos '],
                ['CI035', 'Gestión de la Calidad, Higiene y Seguridad'],
            ];
        $this->crear_materias($lista5, 5, $id_carrera);
    }

    protected function materiasIngenieriaPetroleo()
    {
        $id_carrera = Carrera::where('nombre', 'Ingenieria en Petroleo')->value('id');

        //AÑO 1
        $lista1 =
            [
                ['CI021', 'Taller de Ingeniería'], ['CI009', 'Sistemas de Representación'],
                ['CI004', 'Prácticas Culturales'], ['CI002', 'Matemática'], ['CI003', 'Problemas de Historia Argentina'],
                ['CI012', 'Matemática I'], ['CI001', 'Taller de Lectura y Escritura'], ['CI010', 'Fundamentos de Informática'],
            ];
        $this->crear_materias($lista1, 1, $id_carrera);

        //AÑO 2
        $lista2 =
            [
                ['I7012', 'Introducción a la Química'], ['I7001', 'Geología'], ['I7021', 'Química Orgánica'],
                ['CI023', 'Historia de la Ingeniería y la Tecnología'],
            ];
        $this->crear_materias($lista2, 2, $id_carrera);

        //AÑO 3
        $lista3 =
            [
                ['I7002', 'Geología del Petróleo']
            ];
        $this->crear_materias($lista3, 3, $id_carrera);

        //AÑO 4
        $lista4 =
            [
                ['I7005', 'Geofísica'], ['I7006', 'Reservorios I'], ['CI029', 'Probabilidad y Estadística'],
                ['I7010', 'Perforación II'], ['I7023', 'Gestión Ambiental'], ['I7011', 'Reservorios II'],
                ['I4010', 'Máquinas Térmicas'], ['I7007', 'Producción de Petróleo I'], ['I4021', 'Electrónica'],
                ['CI045', 'Organización Industrial'],
            ];
        $this->crear_materias($lista4, 4, $id_carrera);

        //AÑO 5
        $lista5 =
            [
                ['I7014', 'Perfilaje de Pozos'], ['I7025', 'Optativa I'], ['I7016', 'Reservorios III'],
                ['I7020', 'Gestión Económica y Legal del Petróleo'], ['I7013', 'Producción de Petróleo II'],
                ['I7026', 'Optativa II'], ['I7008', 'Evaluación y Estimulación de Formaciones'],
                ['I7018', 'Proyecto de Instalaciones de Superficie'], ['I7019', 'Desarrollo de Yacimientos'],
                ['I6016', 'Automatización y Control'],
            ];
        $this->crear_materias($lista5, 5, $id_carrera);
    }

    protected function materiasBioingenieria()
    {
        $id_carrera = Carrera::where('nombre', 'Bioingenieria')->value('id');

        //AÑO 1
        $lista1 =
            [
                ['CI021', 'Taller de Ingeniería'], ['CI010', 'Fundamentos de Informática'],
                ['CI004', 'Prácticas Culturales'], ['CI002', 'Matemática'], ['CI003', 'Problemas de Historia Argentina'],
                ['CI012', 'Matemática I'], ['CI001', 'Taller de Lectura y Escritura'],
                ['CI009', 'Sistemas de Representación'],
            ];
        $this->crear_materias($lista1, 1, $id_carrera);

        //AÑO 2
        $lista2 =
            [
                ['CI022', 'Matemática II'], ['I6003', 'Programación y Bases de Datos'], ['I6002', 'Biología I'],
                ['CI025', 'Física I'], ['CI027', 'Física II'], ['CI026', 'Matemática III'], ['CI011', 'Química General'],
                ['I6004', 'Biología II'], ['CI029', 'Probabilidad y Estadística'],
            ];
        $this->crear_materias($lista2, 2, $id_carrera);

        //AÑO 3
        $lista3 =
            [
                ['CI028', 'Física III'], ['I6005', 'Fisiología'], ['I6026', 'Electrotecnia, Máquinas e Instalaciones Eléctricas'],
                ['I6027', 'Matemática IV'], ['I6001', 'Química Orgánica'],
                ['CI035', 'Gestión de la Calidad, Higiene y Seguridad'], ['I6007', 'Biomateriales'], ['I6010', 'Fisiopatología'],
                ['I6009', 'Electrónica I (Dispositivos electrónicos)'], ['CI030', 'Ingeniería Ambiental'],
            ];
        $this->crear_materias($lista3, 3, $id_carrera);

        //AÑO 4
        $lista4 =
            [
                ['I6025', 'Electrónica II (Sistemas lógicos y digitales)'], ['CI047', 'Inglés aplicado a Ingeniería I'],
                ['CI045', 'Organización Industrial'], ['I6013', 'Biomecánica'], ['I6012', 'Señales y Sistemas'],
                ['I6021', 'Gestión Económica y Legal'], ['I6015', 'Electrónica III (Circuitos digitales y microprocesadores)'],
                ['I6028', 'Sensores y Acondicionadores de Señal'], ['CI046', 'Automatización y Control'],
            ];
        $this->crear_materias($lista4, 4, $id_carrera);

        //AÑO 5
        $lista5 =
            [
                ['I6020', 'Instalaciones y Arquitectura Hospitalaria'], ['I6029', 'Ingeniería Clínica'],
                ['I6030', 'Sistemas de Diagnóstico por Imágenes'], ['I6031', 'Ingeniería de la Rehabilitación'],
                ['I6018', 'Bioinstrumentación I'], ['I6033', 'Radiaciones y Radioprotección'],
                ['I6032', 'Bioinstrumentación II'],
            ];
        $this->crear_materias($lista5, 5, $id_carrera);
    }

    protected function materiasIngenieriaElectromecanica()
    {
        $id_carrera = Carrera::where('nombre', 'Ingenieria Electromecanica')->value('id');

        //AÑO 1
        $lista1 =
            [
                ['CI021', 'Taller de Ingeniería'], ['CI003', 'Problemas de Historia Argentina'],
                ['CI010', 'Fundamentos de Informática'], ['CI002', 'Matemática'],
                ['CI023', 'Historia de la Ingeniería y la Tecnología'], ['CI001', 'Taller de Lectura y Escritura'],
                ['CI009', 'Sistemas de Representación'], ['CI004', 'Prácticas Culturales'],
                ['CI012', 'Matemática I'],
            ];
        $this->crear_materias($lista1, 1, $id_carrera);

        //AÑO 2
        $lista2 =
            [
                ['CI022', 'Matemática II'], ['CI032', 'Gestión de la Producción'], ['CI025', 'Física I'],
                ['CI044', 'Elementos de la Economía'], ['CI011', 'Química General'], ['CI027', 'Física II'],
                ['CI026', 'Matemática III'], ['CI029', 'Probabilidad y Estadística'],
            ];
        $this->crear_materias($lista2, 2, $id_carrera);

        //AÑO 3
        $lista3 =
            [
                ['I4020', 'Electrotecnia'], ['CI028', 'Física III'], ['CI030', 'Ingeniería Ambienta'],
                ['CI024', 'Materiales'], ['CI040', 'Mecánica de los Fluidos'], ['I4021', 'Electrónica'],
                ['I4002', 'Máquinas e Instalaciones Eléctricas'], ['CI037', 'Estática y Resistencia de Materiales I'],
                ['CI034', 'Seguridad e Higiene Labora'],
            ];
        $this->crear_materias($lista3, 3, $id_carrera);

        //AÑO 4
        $lista4 =
            [
                ['I4019', 'Estática y Resistencia de Materiales II'], ['I4027', 'Mecánica Racional'],
                ['CI036', 'Ingeniería Legal'], ['I4022', 'Termodinámica A'], ['I4028', 'Mecanismos y Elementos de Máquinas'],
                ['I4005', 'Dispositivos en Instalaciones Eléctricas'], ['I4006', 'Circuitos y Máquinas Hidroneumáticas'],
                ['I4007', 'Transferencia de Calor y Acondicionamiento de Aire'],
            ];
        $this->crear_materias($lista4, 4, $id_carrera);

        //AÑO 5
        $lista5 =
            [
                ['I4008', 'Tecnología Mecánica'], ['I4009', 'Procesos de Fabricación'],
                ['I4010', 'Máquinas Térmicas'], ['I4011', 'Generación, Transporte y Distrib. de Energía Eléctrica'],
                ['I4012', 'Proyecto de Máquinas'], ['I4013', 'Mantenimiento Industrial'], ['CI046', 'Automatización y Control'],
                ['I4015', 'Proyecto Integral de Plantas'], ['I4018', 'Práctica Profesional Supervisada'],
            ];
        $this->crear_materias($lista5, 5, $id_carrera);
    }

    protected function materiasIngenieriaIndustrial()
    {
        $id_carrera = Carrera::where('nombre', 'Ingenieria Industrial')->value('id');

        //AÑO 1
        $lista1 =
            [
                ['CI021', 'Taller de Ingeniería'], ['CI010', 'Fundamentos de Informática'],
                ['CI003', 'Problemas de Historia Argentina'], ['CI002', 'Matemática'],
                ['CI004', 'Prácticas Culturales'], ['CI023', 'Historia de la Ingeniería y la Tecnología'],
                ['CI012', 'Matemática I'], ['CI001', 'Taller de Lectura y Escritura'],
                ['CI009', 'Sistemas de Representación'],
            ];
        $this->crear_materias($lista1, 1, $id_carrera);

        //AÑO 2
        $lista2 =
            [
                ['CI022', 'Matemática II'], ['CI025', 'Física I'], ['CI034', 'Seguridad e Higiene Laboral'],
                ['I5001', 'Desarrollo Emprendedor'], ['CI011', 'Química General'], ['CI027', 'Física II'],
                ['CI026', 'Matemática III'], ['I5002', 'Economía Social y Productiva'],
            ];
        $this->crear_materias($lista2, 2, $id_carrera);

        //AÑO 3
        $lista3 =
            [
                ['CI024', 'Materiales'], ['CI029', 'Probabilidad y Estadística'], ['I5019', 'Termodinámica B'],
                ['CI030', 'Ingeniería Ambiental'], ['CI045', 'Organización Industrial'],
                ['CI037', 'Estática y Resistencia de Materiales I'], ['I5003', 'Optativa I'], ['I5022', 'Gestión de la Producción I'],
                ['I5005', 'Electrotecnia y Máquinas Eléctricas'], ['I5006', 'Ingeniería de la Calidad'],
            ];
        $this->crear_materias($lista3, 3, $id_carrera);

        //AÑO 4
        $lista4 =
            [
                ['CI040', 'Mecánica de los Fluidos'], ['I5020', 'Mecánica y Mecanismo'], ['I5007', 'Gestión de la Producción II'],
                ['I5008', 'Administración General'], ['I5009', 'Optativa II'], ['I5010', 'Ingeniería de la cadena de valor'],
                ['I5011', 'Comercialización para Ingenieros'], ['CI044', 'Elementos de Economía'],
            ];
        $this->crear_materias($lista4, 4, $id_carrera);

        //AÑO 5
        $lista5 =
            [
                ['I5012', 'Sistemas Integrado de manufacturas'], ['I5013', 'Instalaciones Industriales'], ['CI036', 'Ingeniería Legal'],
                ['CI031', 'Gestión de Recursos Humanos'], ['I5014', 'Ingeniería Social'], ['I5015', 'Diseño y optimización de operaciones'],
                ['I5016', 'Gestión de riesgo empresariales'], ['I5017', 'Desarrollo Integral de Proyectos'],
            ];
        $this->crear_materias($lista5, 5, $id_carrera);
    }

    protected function materiasProdVegetalIntens()
    {
        $id_carrera = Carrera::where('nombre', 'Tecnicatura Universitaria en Produccion Vegetal Intensiva')->value('id');

        //AÑO 1
        $lista1 =
            [
                ['I1001', 'Sistema de Producción Vegetal Intensiva I'], ['I1028', 'Botánica'],
                ['CI003', 'Problemas de Historia Argentina'], ['CI002', 'Matemática'],
                ['I1007', 'Química General Aplicada'], ['I1003', 'Taller de TIC'],
                ['I1034', 'Extra Curricular Prácticas Pre-Profesionales (Anual)'], ['I1029', 'Fisiología Vegetal'],
                ['CI004', 'Prácticas Culturales'], ['CI001', 'Taller de Lectura y Escritura'], ['I1008', 'Física'],
                ['I1012', 'Suelos y Sustratos'],
            ];
        $this->crear_materias($lista1, 1, $id_carrera);

        //AÑO 2
        $lista2 =
            [
                ['I1006', 'Sistema de Producción Vegetal Intensiva II'], ['I1017', 'Sociología y Extensión Rural'],
                ['I1015', 'Climatología Agrícola'], ['I1014', 'Sanidad Y Protección Vegetal'],
                ['I1010', 'Estadística Aplicada'], ['I1030', 'Prácticas Técnico Profesionales I'],
                ['I1013', 'Riego en Cultivos Intensivos'], ['I1011', 'Instalaciones y Maquinarias de Cultivos Intensivos'],
                ['I1023', 'Gestión Ambiental de la Producción Vegetal Intensiva'], ['I1032', 'Practicas Técnico Profesionales II'],
            ];
        $this->crear_materias($lista2, 2, $id_carrera);

        //AÑO 3
        $lista3 =
            [
                ['I1018', 'Sistema de Producción Hortícola'], ['I1019', 'Sistema de Producción Florícola'],
                ['I1020', 'Sistema de Producción Frutícola'], ['I1033', 'Practicas Técnico Profesionales III'],
                ['I1024', 'Gestión y Administración de la Empresa Agrícola'], ['I1025', 'Agroecología'],
                ['I1031', 'Seminario de Integración: Trabajo Técnico Profesional'],
            ];
        $this->crear_materias($lista3, 3, $id_carrera);
    }

    protected function materiasTecniEmprAgropec()
    {
        $id_carrera = Carrera::where('nombre', 'Tecnicatura Universitaria en Emprendimientos Agropecuarios')->value('id');

        //AÑO 1
        $lista1 =
            [
                ['I2012', 'Sistemas de Producción Agropecuaria'], ['CI002', 'Matemática'],
                ['CI003', 'Problemas de Historia Argentina'], ['I2003', 'Informática'],
                ['I2001', 'Economía Agropecuaria I'], ['I2002', 'Bases Jurídicas de la Empresa Agropecuaria'],
                ['CI004', 'Prácticas Culturales'], ['CI001', 'Taller de Lectura y Escritura'],
            ];
        $this->crear_materias($lista1, 1, $id_carrera);

        //AÑO 2
        $lista2 =
            [
                ['I2006', 'Administracion de Empresas Agropecuarias'], ['I2005', 'Economía Agropecuaria II'],
                ['I2016', 'Sistemas de Producción Vegetal'], ['I2004', 'Practicas Técnico - Profesional I'],
                ['I2011', 'Sistemas Contables y de Tributacion'], ['I2017', 'Sistema de Producción Animal'],
                ['I2027', 'Métodos de Investigación'], ['I2008', 'Practicas Técnico - Profesional II'],
            ];
        $this->crear_materias($lista2, 2, $id_carrera);

        //AÑO 3
        $lista3 =
            [
                ['I2013', 'Política Económica Agropecuaria '], ['I2028', 'Sociología y Geografía Agraria'],
                ['I2018', 'Procesos Agroindustriales'], ['I2015', 'Practica Técnico Profesional III '],
                ['I2022', 'Evaluación y Formulación de Proyectos '], ['I2023', 'Gestión y Administración de Empresas Agrícolas'],
                ['I2024', 'Gestión Ambiental de los Emprendimientos Agropecuarios'],
                ['I2029', 'Comercialización y mercados de productos agropecuarios'],
                ['I2030', 'Seminario de Integración: trabajo de intervención técnico - profesional'],
            ];
        $this->crear_materias($lista3, 3, $id_carrera);
    }

    protected function materiasAdminAgraria()
    {
        $id_carrera = Carrera::where('nombre', 'Licenciatura en Administracion Agraria')->value('id');

        //AÑO 1
        $lista1 =
            [
                ['I2012', 'Sistemas de Producción Agropecuaria'], ['CI002', 'Matemática'],
                ['CI003', 'Problemas de Historia Argentina'], ['XXXXX', 'Climatología Agrícola y Suelos'],
                ['XXXXX', 'Economía General'], ['XXXXX', 'Taller de Prácticas Técnico Profesionales I'],
                ['CI004', 'Prácticas Culturales'], ['CI001', 'Taller de Lectura y Escritura'],
            ];
        $this->crear_materias($lista1, 1, $id_carrera);

        //AÑO 2
        $lista2 =
            [
                ['XXXXX', 'Contabilidad Agropecuaria'], ['XXXXX', 'Estadística'],
                ['XXXXX', 'Sistemas de Producción Vegetal'], ['XXXXX', 'Bases Jurídicas de la Empresa Agropecuaria'],
                ['XXXXX', 'Administración de Empresas Agropecuarias I'], ['XXXXX', 'Informática para las Ciencias Agrarias'],
                ['XXXXX', 'Economía Agraria'], ['XXXXX', 'Taller de Prácticas Técnico Profesionales II'],
            ];
        $this->crear_materias($lista2, 2, $id_carrera);

        //AÑO 3
        $lista3 =
            [
                ['XXXXX', 'Sistemas de Producción Animal I'], ['XXXXX', 'Sociología Rural'],
                ['XXXXX', 'Procesos Agroindustriales I'], ['XXXXX', 'Mercados Agropecuarios'],
                ['XXXXX', 'Formulación y Evaluación de Proyectos'], ['XXXXX', 'Administración de Empresas Agropecuarias II'],
                ['XXXXX', 'Sistemas de Producción Animal II'], ['XXXXX', 'Taller de Prácticas Técnico Profesionales III'],
            ];
        $this->crear_materias($lista3, 3, $id_carrera);

        //AÑO 4
        $lista4 =
            [
                ['XXXXX', 'Métodos de Investigación'], ['XXXXX', 'Extensión y Promoción Rural'],
                ['XXXXX', 'Política Económica Agropecuaria'], ['XXXXX', 'Asociativismo Agrario'],
                ['XXXXX', 'Comercialización Agropecuaria'], ['XXXXX', 'Procesos Agroindustriales II'],
                ['XXXXX', 'Geografía Económica Agraria'], ['XXXXX', 'Planificación y Gestión Estratégica'],
            ];
        $this->crear_materias($lista4, 4, $id_carrera);

        //AÑO 5
        $lista5 =
            [
                ['XXXXX', 'Desarrollo Rural'], ['XXXXX', 'Impuestos Agrarios y Agroindustriales'],
                ['XXXXX', 'Calidad y Seguridad Agroalimentaria '], ['XXXXX', 'El Trabajo en el Sector Agrario'],
                ['XXXXX', 'Agregado de Valor'], ['XXXXX', 'Tecnología para Pequeños y Medianos Productores'],
                ['XXXXX', 'Economía Ambiental'], ['XXXXX', 'Taller de Trabajo Final'], ['XXXXX', 'Trabajo Final'],
            ];
        $this->crear_materias($lista5, 5, $id_carrera);
        //['XXXXX', ''],
    }

    protected function materiasCienciasAgrarias()
    {
        $id_carrera = Carrera::where('nombre', 'Licenciatura en Ciencias Agrarias')->value('id');

        //AÑO 1
        $lista1 =
            [
                ['I1001', 'Sistema de Producción Vegetal Intensiva I'], ['I1028', 'Botánica'],
                ['CI003', 'Problemas de la Historia Argentina'], ['CI002', 'Matemática'],
                ['I1007', 'Química General Aplicada'], ['I1003', 'Taller de TIC'],
                ['I1029', 'Fisiología Vegetal'], ['CI004', 'Prácticas Culturales'], ['CI001', 'Taller de Lectura y Escritura'],
                ['I1008', 'Física'], ['I1012', 'Suelos y Sustratos'], ['I1034', 'Extracurricular Practicas Pre-Profesionales'],
            ];
        $this->crear_materias($lista1, 1, $id_carrera);

        //AÑO 2
        $lista2 =
            [
                ['I1006', 'Sistema de Producción Vegetal Intensiva II'], ['I1017', 'Sociología y Extensión Rural'],
                ['I1015', 'Climatología Agrícola'], ['I1014', 'Sanidad y Protección Vegetal'], ['I1010', 'Estadística Aplicada'],
                ['I1030', 'Prácticas Técnico Profesionales I'], ['I1013', 'Riego en Cultivos Intensivos'],
                ['I1011', 'Instalaciones y Maquinarias de Cultivos Intensivos'], ['I1023', 'Gestión Ambiental de la Producción Vegetal Intensiva'],
                ['I1032', 'Prácticas Técnico Profesionales II'],
            ];
        $this->crear_materias($lista2, 2, $id_carrera);

        //AÑO 3
        $lista3 =
            [
                ['I1018', 'Sistemas de Producción Hortícola'], ['I1019', 'Sistemas de Producción Florícola'],
                ['I1020', 'Sistemas de Producción Frutícola'], ['I1033', 'Prácticas Técnico Profesionales III'],
                ['I1024', 'Gestión y Administración de la Empresa Agrícola'], ['I1025', 'Agroecología'], ['I1035', 'Matemática Aplicada'],
                ['I1036', 'Bioquímica Agrícola'], ['I1037', 'Estadística Aplicada II'],
            ];
        $this->crear_materias($lista3, 3, $id_carrera);

        //AÑO 4
        $lista4 =
            [
                ['I1038', 'Propagación de Plantas'], ['I1039', 'Manejo de Suelos y Sustratos'],
                ['I1040', 'Genética y Mejoramientos Genéticos'], ['I1041', 'Manejo de Ambiente Protegido'],
                ['I1042', 'Manejo Integrado de Plagas y Enfermedades'], ['I1043', 'Ecofisiología de Cultivos Hortícolas'],
                ['I1044', 'Ecofisiología de Cultivos Florícolas'], ['I1045', 'Calidad y Poscosecha'], ['I1046', 'Planificación de Espacios Verdes'],
                ['I1047', 'Agricultura Urbana y Seguridad Alimentaria'],
            ];
        $this->crear_materias($lista4, 4, $id_carrera);

        //AÑO 5
        $lista5 =
            [
                ['I1048', 'Economía Agropecuaria'], ['I1049', 'Sistemas de Producción de Aromáticas y Medicinales'],
                ['I1050', 'Agroecología Periurbana'], ['I1051', 'Seguridad e Higiene del Trabajo'], ['I1052', 'Trabajo Final'],
            ];
        $this->crear_materias($lista5, 5, $id_carrera);
    }

    protected function materiasIngenTransporte()
    {
        $id_carrera = Carrera::where('nombre', 'Ingenieria en Transporte')->value('id');

        //AÑO 1
        $lista1 =
            [
                ['CI021', 'Taller de Ingeniería'], ['CI010', 'Fundamentos de Informática'],
                ['CI001', 'Taller de Lectura y Escritura'], ['CI002', 'Matemática'],
                ['CI003', 'Problemas de Historia Argentina'], ['CI004', 'Prácticas Culturales'],
                ['CI012', 'Matemática I'], ['CI009', 'Sistemas de Representación'],
            ];
        $this->crear_materias($lista1, 1, $id_carrera);

        //AÑO 2
        $lista2 =
            [
                ['CI022', 'Matemática II'], ['CI025', 'Física I'],
                ['I8001', 'Introducción al Transporte'], ['CI023', 'Historia de la Ingeniería y la Tecnología'],
                ['I8002', 'Teoría del Estado y las Instituciones Públicas'], ['CI027', 'Física II'],
                ['CI011', 'Química General'],
            ];
        $this->crear_materias($lista2, 2, $id_carrera);

        //AÑO 3
        $lista3 =
            [
                ['CI026', 'Matemática III'], ['CI024', 'Materiales'],
                ['CI047', 'Inglés Aplicado a Ingeniería I'], ['CI037', 'Estática y Resistencia de los Materiales I'],
                ['I8003', 'Economía del Transporte'], ['I8004', 'Comunicación en Ingeniería'],
                ['CI048', 'Inglés Aplicado a Ingeniería II'], ['I8005', 'Métodos y Técnicas Estadísticas'],
                ['CI034', 'Seguridad e Higiene Laboral'],
            ];
        $this->crear_materias($lista3, 3, $id_carrera);

        //AÑO 4
        $lista4 =
            [
                ['XXXXX', 'Optativa I'], ['I8006', 'Diseño de Infraestructura Vial'], ['I8007', 'Seguridad en el Transporte'],
                ['I8008', 'Políticas Públicas de Transporte'], ['I8009', 'Transporte Guiado'], ['I8010', 'Transporte Marítimo y Fluvial'],
                ['I8011', 'Transporte Aéreo'], ['I8012', 'Ingeniería en Tránsito'], ['I8013', 'Planeamiento Territorial I'],
            ];
        $this->crear_materias($lista4, 4, $id_carrera);

        //AÑO 5
        $lista5 =
            [
                ['I8014', 'Geomática y Modelos Aplicados'], ['OI019', 'Creatividad e Innovación Tecnológica'], ['I8015', 'Logística y Transporte de Cargas'],
                ['I8016', 'Transporte Público'], ['I8017', 'Planeamiento Territorial II'], ['I8018', 'Legislación del Transporte'],
                ['CI030', 'Ingeniería Ambiental'], ['I5015', 'Diseño y Optimización de Operaciones'], ['I5017', 'Desarrollo Integral de Proyectos'],
                ['XXXXX', 'Optativa I'],
            ];
        $this->crear_materias($lista5, 5, $id_carrera);
    }
    //FUNCION GENERICA PARA CREAR MATERIAS, indica una lista de 2 parámetros: codigo y nombre,
    //luego el anio, y luego el id de carrera
    protected function crear_materias($lista, $anio, $carrera_id)
    {
        $lista = $lista;
        foreach ($lista as $item) {
            Materia::create([
                'cod_materia' => $item[0],
                'nombre' => $item[1],
                'anio' => $anio,
                'carrera_id' => $carrera_id,
            ]);
        }
    }
}
