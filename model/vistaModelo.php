<?php

	class vistaModelo
	{
		/*
			Funcion que busca el archivo la vista actual dependiendo de
			lo que haya en la barra de tareas, o lo que seleccione
			el usuario con los botones de la web.
			Está conectado con el vistaControlador.
		*/
		protected function obtener_vista_modelo($vista)
		{
			/* 	
				En esta lista deben ir los nombres de todos los
			 	ficheros que haya en la carpeta contenidos, donde
				estan todo lo que se muestra al usuario y varía.
			*/
			$listaBlanca = ["home", "institutos", "materias", "carreras", "años", "info", "sectores"];



			/* 	
				Se testea si el parametro $vista es un archivo válido dentro
				de la carpeta contenidos, y lo llama.
				Si no es un archivo valido, o si es login/index entonces llama
				al "login"
			*/
			if (in_array($vista, $listaBlanca)) 
			{
				if (is_file("vista/contenidos/".$vista.".php")) 
				{
					$contenido = "vista/contenidos/".$vista.".php";
				}
				else
				{
					$contenido = "login";
				}
			}
			elseif ($vista == "login") 
			{
				$contenido = "login";
			}
			elseif ($vista == "index") 
			{
				$contenido = "login";
			}
			else
			{
				$contenido = "404";
			}

			return $contenido;
		}
	}