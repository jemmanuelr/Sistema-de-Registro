<?php

class Cne {
    public function obtenerElector($nacionalidad = "", $cedula = "") {
        $url = "http://www.cne.gob.ve/web/registro_electoral/ce.php?nacionalidad=".$nacionalidad."&cedula=".$cedula;
        $ch = curl_init();
              curl_setopt($ch,CURLOPT_URL, $url);
              curl_setopt($ch, CURLOPT_REFERER,'http://www.cne.gob.ve/');
              curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux i686; rv:32.0) Gecko/20100101 Firefox/32.0');
              curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
              curl_setopt($ch,CURLOPT_FRESH_CONNECT,TRUE);
              curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
              curl_setopt($ch,CURLOPT_TIMEOUT,100);
        $html=curl_exec($ch);
        if($html==false){
            $m=curl_error(($ch));
            error_log($m);
            curl_close($ch);
            $j['error'] = true;
            $j['descripcion'] = $m;
            print json_encode($j);
            return;
        } else {
            curl_close($ch);
            if (strpos($html, '<b>DATOS DEL ELECTOR</b>') > 0) {
                $modo = 1; # Puede Votar
            } else if (strpos($html, '<strong>DATOS PERSONALES</strong>') > 0) {
                $modo = 2; # No Puede Votar
            } else {
                $modo = -1;
                $j['error'] = true;
                $j["descripcion"] = "El usuario no se encuentra inscrito en el registro electoral";
                return json_encode($j);
            }
            $j['error'] = false;
            $j["descripcion"] = "/cne/elector";
            $j['modo'] = $modo;
            // Datos para un elector que puede votar
            if ($j['modo'] == 1) {
                #Obtener Cédula
                $npos = strpos($html, 'align="left">', strpos($html, 'dula:')) + 15;
                $j['cedula'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Nombre
                $npos = strpos($html, 'align="left"><b>', strpos($html, 'Nombre:')) + 16;
                $j['nombre'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Estado
                $npos = strpos($html, 'align="left">', strpos($html, 'Estado:')) + 13;
                $j['estado'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Municipio
                $npos = strpos($html, 'align="left">', strpos($html, 'Municipio:')) + 13;
                $j['municipio'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Parroquia
                $npos = strpos($html, 'align="left">', strpos($html, 'Parroquia:')) + 13;
                $j['parroquia'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Centro
                $npos = strpos($html, '"#0000FF">', strpos($html, 'Centro:')) + 10;
                $j['centro'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Dirección
                $npos = strpos($html, '"#0000FF">', strpos($html, 'Direcci')) + 10;
                $j['direccion'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                $j['servicio'] = 'no';
                #Obtener servicio
                $npos = strpos($html, 'color="#', strpos($html, 'SERVICIO ELECTORAL')) + 16;
                $j['servicio'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
            }
            // Datos para un elector con objeción
            else if ($j['modo'] == 2) {
                #Obtener Cédula
                $npos = strpos($html, 'strong> ', strpos($html, 'dula:')) + 10;
                $j['cedula'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Nombre
                $npos = strpos($html, 'strong> ', strpos($html, 'Primer Nombre:')) + 8;
                $j['nombre'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Nombre
                $npos = strpos($html, 'strong> ', strpos($html, 'Segundo Nombre:')) + 8;
                $j['nombre'] .= " " . trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Apellido
                $npos = strpos($html, 'strong> ', strpos($html, 'Primer Apellido:')) + 8;
                $j['nombre'] .= " " . trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Apellido
                $npos = strpos($html, 'strong> ', strpos($html, 'Segundo Apellido:')) + 8;
                $j['nombre'] .= " " . trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Estatus
                $npos = strpos($html, '<td>', strpos($html, 'ESTATUS')) + 4;
                $j['estatus'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Objecion
                $npos = strpos($html, 'strong> ', strpos($html, '>Objeci')) + 8;
                $j['objecion'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Descripción
                $npos = strpos($html, 'strong> ', strpos($html, '>Descripci')) + 8;
                $j['descripcionobjecion'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener institución
                $npos = strpos($html, 'strong> ', strpos($html, 'solventar la objeci')) + 8;
                $j['institucion'] = trim(substr($html, ($npos), (strpos($html, '<', ($npos)) - ($npos))));
                #Obtener Requisitos
                $npos = strpos($html, '<td>', strpos($html, 'Requisitos')) + 4;
                $j['requisitos'] = trim(substr($html, ($npos), (strpos($html, '</td>', ($npos)) - ($npos))));
            }
            return $j;
        }
    }
}

$cne=new Cne();

$r = $cne->obtenerElector( $_POST["nacionalidad"], $_POST["cedula"] );