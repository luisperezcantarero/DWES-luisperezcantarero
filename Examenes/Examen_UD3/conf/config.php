<?php
/**
 * Array multidimensional que almacena varios exámenes y cada uno almacena al menos 5 preguntas.
 * @author 
 */

 $aExamenes = array("examen1" => array(
                        array("pregunta" => "¿Cual esta en America del sur?", "respuestas" => array("Brasil", "Mexico", "Argentina","España"), "correcta" => array("Brasil", "Argentina"), "tipo" => "checkbox"),
                        array("pregunta" => "¿Que océanos rodean al continente africano?", "respuestas" => array("Atlántico", "Índico", "Pacífico", "Ártico"), "correcta" => array("Atlántico", "Índico"), "tipo" => "checkbox"),
                        array("pregunta" => "¿Cual de las siguientes son montañas?", "respuestas" => array("Himalaya", "Amazonas", "Andes", "Rio Nilo"), "correcta" => array("Himalaya", "Andes"), "tipo" => "checkbox"),
                        array("pregunta" => "¿Que continentes cruzan la línea del Ecuador?", "respuestas" => array("America del Norte", "África", "Asia", "Oceanía"), "correcta" => array("África", "Oceanía"), "tipo" => "checkbox"),
                        array("pregunta" => "El río Amazonas es el más largo del mundo", "respuestas" => array("Verdadero", "Falso"), "correcta" => "Falso", "tipo" => "radio")),
                    "examen2" => array(
                        array("pregunta" => "El desierto del Sahara es el más grande del mundo", "respuestas" => array("Verdadero", "Falso"), "correcta" => "Falso", "tipo" => "radio"),
                        array("pregunta" => "Australia es tanto un país como un continente", "respuestas" => array("Verdadero", "Falso"), "correcta" => "Verdadero", "tipo" => "radio"),
                        array("pregunta" => "El Monte Everest es la montaña más alta del mundo", "respuestas" => array("Verdadero", "Falso"), "correcta" => "Verdadero", "tipo" => "radio"),
                        array("pregunta" => "¿Cuál es la capital de Japón?", "respuestas" => "", "correcta" => "Tokio", "tipo" => "text"),
                        array("pregunta" => "¿Cúal es la comunidad autónoma de España que tiene como lengua cooficial el euskera?", "respuestas" => "", "correcta" => array("País Vasco", "Euskadi"), "tipo" => "text")))
?>