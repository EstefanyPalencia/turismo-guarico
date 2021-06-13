<?php

namespace Database\Seeders;

use App\Models\Letter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->delete();
        $words = collect([
            'a' => [
                [
                    'word' => 'Automatización',
                    'body' => 'Es el proceso de intercambiar un sistema que se encarga de realizar una tarea por un
                sistema mucho mas beneficioso que el sistema actual. Esto con el fin de mejorar la producción y gestión en
                una entidad',
                ]
            ],
            'b' => [
                [
                    'word' => 'Buscador',
                    'body' => 'Es un sistema que se encarga de procesar la solicitud de un usuario y mediante una búsque-
                    da en los servidores web dar una respuesta con una lista de sitios web relacionados a la palabra clave que
                    proporciono el usuario'
                ]
            ],
            'c' => [
                [
                    'word' => 'Calameo',
                    'body' => 'Es un sitio web que mediante la utilización de documentos de textos y luego al subirlos éstos
                    se convierten en revistas interactivas o virtuales'
                ],
                [
                    'word' => 'Ciberespacio',
                    'body' => 'Es un entorno virtual creado con el fin de mantener conectados a los usuarios y que pue-
                    dan tener una interacción parecida a la del mundo real. La información en este ciberespacio puede ser inter-
                    cambiada en tiempo real, y gracias a esto las personas pueden comprar, compartir, explorar, trabajar o ju-
                    gar'
                ],
                [
                    'word' => 'Clideo',
                    'body' => 'Es un conjunto de herramientas que permiten la edición de vídeos o audios, haciendo uso de fun-
                    ciones tan básicas como la de recortar un trozo de vídeo o redimensionarlo, hasta funciones mas complica-
                    das como hacer montajes mediante fotos, gifts, vídeo o audio'
                ],
                [
                    'word' => 'Comunicación',
                    'body' => 'Es el proceso de intercambiar información mediante el uso de sistemas informáticos, es-
                    to con el fin de mantener comunicados a los usuarios o bien para comunicarse unos usuarios con otros'
                ],
                [
                    'word' => 'Comunidad Virtual',
                    'body' => 'Es un grupo en el cual haciendo uso de canales digital los usuarios intercambian in-
                    formación y opiniones sobre un contenido en especifico y de esa manera sentirse parte de esa comunidad'
                ],
                [
                    'word' => 'Control',
                    'body' => 'Es el proceso de verificar si una función se esta realizando de manera correcta, el control permi-
                    te la comparación de un rendimiento esperado con un rendimiento observado para ver si se esta cumplien-
                    do lo predicho, y en caso de que no sea así tomar decisiones correctivas',
                ],
                [
                    'word' => 'Correo Electrónico',
                    'body' => 'Es un sistema de red el cual permite enviar mensajes a múltiples receptores situa-
                    dos en cualquier parte el mundo. En este mensaje puede ir archivados diferentes documentos con distintos
                    formatos'
                ],
                [
                    'word' => 'Creatividad',
                    'body' => 'Es el proceso de crear, innovar y hasta de generar nuevas ideas o nuevas asociaciones
                    que normalmente llevan a conclusiones nuevas y estas resuelven problemas y generan soluciones origina-
                    les y valiosas'
                ],
            ],
            'd' => [
                [
                    'word' => 'Decreto 3390',
                    'body' => 'Este decreto señala que en la República Bolivariana de Venezuela debe darse mayor
                    atención al uso del software libre, esto no da por hecho que no se deba hacer uso de software propietario si-
                    no que mas bien si es posible hacer uso del software libre en vez del propietario pues hacerlo.12-) Diagnos-
                    tico: Hace referencia a la acción de analisis, reconocimiento y evaluación de una cosa o situación para con
                    esto determinar sus tendencias, solucionar problemas o remediar un mal'
                ],
            ],
            'e' => [
                [
                    'word' => 'Edmodo',
                    'body' => 'Es una plataforma diseñada para la gestión de unidades educativas con el fin de crear un aula
                    parecida a la de la vida real solo que esta es en forma virtual. Donde los profesores gestionan sus clases y
                    evaluaciones con fechas limites para que los alumnos puedan realizarlas'
                ],
                [
                    'word' => 'Edpuzzle',
                    'body' => 'Es una aplicación web de forma gratuita destinada a la educación, esta permite, de forma
                    muy simple, crear cuestionarios de evaluación o intercalar notas de audio. Es capaz de editar y hasta crear
                    vídeos para la demostración de algún contenido'
                ],
                [
                    'word' => 'Emaze',
                    'body' => 'Es una aplicación web la cual permite crear presentaciones de forma muy fácil y eficaz, sin ser
                    necesario tener conocimientos expertos, una de las características notable es que es utilizada totalmente
                    desde el navegador y no es necesario descargar ningún software para su utilización'
                ],
                [
                    'word' => 'Emprendedor',
                    'body' => 'Es aquella persona que tiene una visión de como crear una oportunidad de negocio, es-
                    te analiza la posibilidad para luego unir todos los recursos necesario para dar inicio al proyecto que le con-
                    seguirá dicha oportunidad de negocio'
                ],
                [
                    'word' => 'Emprendedores',
                    'body' => 'Son un conjunto de personas que juntos analizan las oportunidades de negocio en un
                    área determinada para luego unificar las partes necesarias para llevar a cabo el proyecto que los ayudara a
                    alcanzar dicha oportunidad de negocio'
                ],
                [
                    'word' => 'Emprendimiento',
                    'body' => 'Es la acción que toma una persona luego de tener una visión de una posible oportu-
                    nidad de negocio mediante la realización de un proyecto donde aplique las ideas y oportunidades conoci-
                    das'
                ],
                [
                    'word' => 'Etapas de un proyecto',
                    'body' => "A- Aquí se debe identificar el proyecto y medir su valor y la viabilidad del mismo. Para esto se hace
                    uso de dos herramientas las cuales son el plan de negocio y el estudio de viabilidad.<br/>
                    B- Una vez se haya dado la autorización para llevar a cabo el proyecto es importante crear un plan
                    firme en el cual se basara el equipo.<br/>
                    C- Es aquí donde se lleva a cabo la ejecución del proyecto, en donde se asignaran recursos y se les
                    entregaran tareas al equipo para con esto realizar el proyecto.<br/>
                    D- En esta etapa se debe llevar un seguimiento del proyecto, esto con el fin de controlar el modo de
                    ejecución del mismo y verificar si se están cumpliendo con los parámetros y monitorizar constantemente su
                    progreso.<br/>
                    E- Por ultimo tenemos el cierre del proyecto, y es aquí donde se hace entrega del proyecto termina-
                    do al cliente. Es importante documentar esta etapa ya que permite avanzar hacia los siguientes proyectos
                    teniendo en cuenta los errores y éxitos que se presentaron en el proyecto anterior para con esto saber llevar
                    los proyectos futuros de una forma mas exitosa."
                ],
                [
                    'word' => 'Evaluación de un proyecto',
                    'body' => 'Es el proceso de identificar, cuantificar y valorar los costos y beneficios que
                    se generen de éste, en un determinado periodo de tiempo'
                ],
                [
                    'word' => 'Everything (Todo)',
                    'body' => 'Indica la totalidad de los miembros del conjunto denotado por el sintagma nominal al
                    que modifica'
                ],
                [
                    'word' => 'Exelearning',
                    'body' => 'Es un programa de código abierto bajo licencia GPL-2 para crear contenidos educativos en
                    soportes informáticos sin necesidad de ser ni convertirse en expertos en HTML, XML o HTML5'
                ]
            ],
            'f' => [
                [
                    'word' => 'Flyer',
                    'body' => 'Es uno de los clásicos del marketing y la publicidad. El flyer contiene un mensaje con el fin de
                    transmitir, vender o promocionar un producto o servicio por parte de empresas, pequeños negocios o inclu-
                    so organizadores de eventos'
                ],
            ],
            'g' => [
                [
                    'word' => 'Genially',
                    'body' => 'Es un software en línea que permite crear presentaciones animadas e interactivas'
                ],
                [
                    'word' => 'Gerencia',
                    'body' => 'Se encargan de coordinar que todo funcione correctamente'
                ],
                [
                    'word' => 'Gestión de la información',
                    'body' => 'Proceso mediatizado por un conjunto de actividades que permite la obten-
                    ción de información, lo más pertinente, relevante y económica posible, para ser usada en el desarrollo y el
                    éxito de una organización'
                ],
                [
                    'word' => 'Gestión del conocimiento',
                    'body' => 'Se puede definir como el esfuerzo que hace una organización para adquirir,
                    aumentar, organizar, distribuir y compartir el conocimiento entre todos los empleados'
                ],
                [
                    'word' => 'Gobierno Electrónico',
                    'body' => 'Es el uso de dispositivos tecnológicos de comunicación, como computadoras e
                    Internet para proporcionar servicios públicos a ciudadanos y otras personas en un país o región'
                ],
                [
                    'word' => 'Google Classroom',
                    'body' => 'Es una herramienta creada por Google, destinada exclusivamente al mundo edu-
                    cativo. Su misión es la de permitir gestionar un aula de forma colaborativa a través de Internet, siendo una
                    plataforma para la gestión del aprendizaje'
                ],
                [
                    'word' => 'Glogster',
                    'body' => 'Es una plataforma basada en la nube para crear presentaciones y aprendizaje interactivo. Una
                    plataforma que permite a los usuarios, principalmente estudiantes y educadores, combinar texto, imágenes,
                    video y audio para crear un póster interactivo basado en la web llamado glogs en un lienzo virtual'
                ],
            ],
            'h' => [
                [
                    'word' => 'Herramientas gerencia',
                    'body' => 'Son todas aquellos métodos empleados para hacer más eficaz la labor de di-
                    rección de una organización. Apoyan a los tomadores de decisiones a determinar un modelo directivo y aco-
                    plarlo a su estructura'
                ],
            ],
            'i' => [
                [
                    'word' => 'Infografía',
                    'body' => 'Es una representación gráfica que respalda una información y permite traducirla en algo que
                    todo el mundo puede entender a simple vista, una herramienta de comunicación increíblemente útil, ya que
                    al tener un formato visual, es procesada por el ojo humano mucho más rápido'
                ],
                [
                    'word' => 'Infogram',
                    'body' => 'Una plataforma de visualización de datos e infografías basada en la web, permite a las perso-
                    nas crear y compartir gráficos digitales, infografías y mapas'
                ],
                [
                    'word' => 'Internet',
                    'body' => 'Es un conjunto descentralizado de redes de comunicación interconectadas que utilizan la fami-
                    lia de protocolos TCP/IP, lo cual garantiza que las redes físicas heterogéneas que la componen constituyen
                    una red lógica única de alcance mundial'
                ],
            ],
            'l' => [
                [
                    'word' => 'Learning apps',
                    'body' => 'Es una aplicación creada para apoyar los procesos de enseñanza y aprendizaje con pe-
                    queños módulos interactivos. Estos módulos se pueden utilizar directamente como material de enseñanza
                    pero también para que los estudiantes estudien de forma autónoma'
                ],
                [
                    'word' => 'Libro electrónico',
                    'body' => 'es la publicación electrónica o digital de un libro. Es importante diferenciar el libro
                    electrónico o digital de uno de los dispositivos más popularizados para su lectura: el lector de libros
                    electrónicos, o e-reader, en su versión inglesa. Aunque a veces se define como "una versión electrónica de
                    un libro impreso", 2​ algunos libros electrónicos existen sin un equivalente impreso. Los libros electrónicos se
                    pueden leer en dispositivos dedicados de lectura electrónica, pero también en cualquier dispositivo de com-
                    putadora que tenga una pantalla de visualización controlable, incluyendo computadoras de escritorio, orde-
                    nadores portátiles, lector de libros electrónicos y teléfonos inteligentes'
                ],
                [
                    'word' => 'Líder',
                    'body' => 'Persona que encabeza y dirige un grupo o movimiento social, político, religioso, etc'
                ],
                [
                    'word' => 'Liderazgo',
                    'body' => 'El liderazgo es el conjunto de habilidades gerenciales o directivas que un individuo tiene para
                    influir en la forma de ser o actuar de las personas o en un grupo de trabajo determinado, haciendo que este
                    equipo trabaje con entusiasmo hacia el logro de sus metas y objetivos'
                ],
            ],
            'm' => [
                [
                    'word' => 'Módem',
                    'body' => 'Dispositivo que convierte señales digitales en analógicas, o viceversa, para poder ser transmiti-
                    das a través de líneas de teléfono, cables coaxiales, fibras ópticas y microondas; conectado a una computa-
                    dora, permite la comunicación con otra computadora por vía telefónica'
                ],
                [
                    'word' => 'Moodle',
                    'body' => 'Moodle es una plataforma de aprendizaje diseñada para proporcionarle a educadores, adminis-
                    tradores y estudiantes un sistema integrado único, robusto y seguro para crear ambientes de aprendizaje
                    personalizados'
                ],
                [
                    'word' => 'Multimedia',
                    'body' => 'Que reúne distintos medios integrados, como audio, video y televisión.Que está destinado a
                    la difusión por varios medios de comunicación combinados, como texto, fotografías, imágenes de video o
                    sonido, generalmente con el propósito de educar o de entretener'
                ],
            ],
            'n' => [
                [
                    'word' => 'Neoliberalismo',
                    'body' => 'Movimiento de actualización del liberalismo, aparecido después de la Primera Guerra
                    Mundial, que limita la intervención del Estado en asuntos jurídicos y económicos'
                ],
                [
                    'word' => 'Niveles de Responsabilidad',
                    'body' => 'Es el nivel de es una cualidad y un valor de las personas que son capa-
                    ces de comprometerse y actuar de forma correcta'
                ],
            ],
            'o' => [
                [
                    'word' => 'Objetividad',
                    'body' => 'es la cualidad de lo objetivo, de tal forma que es perteneciente o relativo al objeto en sí
                    mismo, con independencia de la propia manera de pensar o de sentir que pueda tener cualquier sujeto que
                    lo observe o considere'
                ],
                [
                    'word' => 'Obs',
                    'body' => 'Open Broadcaster Software es una aplicación libre y de código abierto para la grabación y
                    transmisión de vídeo por internet, mantenida por OBS Project'
                ],
                [
                    'word' => 'Ocr',
                    'body' => 'es un proceso dirigido a la digitalización de textos, los cuales identifican automáticamente a partir
                    de una imagen símbolos o caracteres que pertenecen a un determinado alfabeto, para luego almacenarlos
                    en forma de datos. Así podremos interactuar con estos mediante un programa de edición de texto o similar'
                ],
                [
                    'word' => 'Oferta y Demanda',
                    'body' => 'La ley de la oferta y demanda es un modelo económico básico postulado para la
                    formación de precios de mercado de los bienes dentro de la escuela neoclásica y otras afines, ​ usándose
                    para explicar una gran variedad de fenómenos y procesos tanto macro como microeconómicos'
                ],
                [
                    'word' => 'Organización',
                    'body' => 'Acción de organizar u organizarse. Grupo de personas y medios organizados con un fin
                    determinado'
                ],
            ],
            'p' => [
                [
                    'word' => 'Pequeño y Mediano emprendedores',
                    'body' => 'Un pequeño y mediano empresario es la persona que establece
                    los objetivos y toma las decisiones estratégicas sobre los medios, la administración y el control de una
                    pyme. Asimismo, asume la responsabilidad tanto comercial como legal frente a terceros'
                ],
                [
                    'word' => 'Piratería Electrónica',
                    'body' => 'La piratería de Internet ocurre cuando se pone a disposición de los usuarios una
                    transferencia electrónica de software con derechos de autor. Operadores de sistemas y/o usuarios ponen a
                    disposición materiales con derechos de autor en internet para que otros puedan copiarlos y usarlos sin la li-
                    cencia correspondiente'
                ],
                [
                    'word' => 'Pizarra Digital',
                    'body' => 'Sistema tecnológico, generalmente integrado por un ordenador y un video proyector,
                    que permite proyectar contenidos digitales en un formato idóneo para visualización en grupo. Se puede inte-
                    ractuar sobre las imágenes proyectadas utilizando los periféricos del ordenador: ratón, teclado, entre otros.'
                ],
                [
                    'word' => 'Plan',
                    'body' => 'Idea del modo de llevar a cabo una acción. Programa en el que se detalla el modo y conjunto de
                    medios necesarios para llevar a cabo esa idea'
                ],
                [
                    'word' => 'Planificación',
                    'body' => 'La planificación (planeación o planeamiento) es una función administrativa que compren-
                    de el análisis de una situación, el establecimiento de objetivos, la formulación de estrategias que permitan
                    alcanzar dichos objetivos, y el desarrollo de planes de acción que señalen cómo implementar dichas estrategias'
                ],
                [
                    'word' => 'Prezzi',
                    'body' => 'Es un programa de presentaciones para explorar y compartir ideas sobre un documento virtual
                    basado en la informática en nube'
                ],
                [
                    'word' => 'Problema',
                    'body' => 'Es una circunstancia en la que se genera un obstáculo al curso normal de las cosas. Su
                    etimología nos demuestra que un problema es aquel que requiere de solución'
                ],
                [
                    'word' => 'Proceso',
                    'body' => 'Es una secuencia de pasos dispuesta con algún tipo de lógica que se enfoca en lograr algún
                    resultado específico'
                ],
                [
                    'word' => 'Proceso Administrativo',
                    'body' => 'Es un conjunto de etapas (planificación, organización, dirección y control) cuya finalidad
                    es conseguir los objetivos de una empresa u organización de la forma más eficiente posible'
                ],
                [
                    'word' => 'Producto',
                    'body' => 'Es una cosa o un objeto producido o fabricado, algo material que se elabora de manera natu-
                    ral o industrial mediante un proceso, para el consumo o utilidad de los individuos'
                ],
                [
                    'word' => 'Proyecto',
                    'body' => 'Es el conjunto de las actividades que desarrolla una persona o una entidad para alcanzar un
                    determinado objetivo. Estas actividades se encuentran interrelacionadas y se desarrollan de manera coordi-
                    nada'
                ],
                [
                    'word' => 'Proyecto Canaima',
                    'body' => 'Este Proyecto se desarrolla con el objetivo de garantizar el acceso de los venezola-
                    nos a las tecnologías de información libres'
                ],
                [
                    'word' => 'Proyecto Económico, Social Productivo',
                    'body' => 'Son aquellos que impulsan el desarrollo de actividades gene-
                    radoras de bienes y servicios útiles para nuestra comunidad, enmarcándose dentro del concepto de desarro-
                    llo endógeno, generando redes productivas para el desarrollo de la economía solidaria'
                ],
            ],
            'r' => [
                [
                    'word' => 'Razón Social',
                    'body' => 'Es el nombre o denominación oficial de una empresa, es decir, es la forma de nombrar a
                    la persona jurídica y que permite identificarla de manera inequívoca, la razón social es el atributo legal que
                    permite identificar a una empresa'
                ],
                [
                    'word' => 'Redes Sociales',
                    'body' => 'Son plataformas digitales formadas por comunidades de individuos con intereses, acti-
                    vidades o relaciones en común (como amistad, parentesco, trabajo). Las redes sociales permiten el contac-
                    to entre personas y funcionan como un medio para comunicarse e intercambiar información'
                ],
                [
                    'word' => 'Remind',
                    'body' => 'Es una aplicación gratuita que permite a los profesores enviar mensajes de texto a alumnos y
                    familias en un entorno seguro. Bautizada como “El Whatsapp de los Profesores”'
                ],
                [
                    'word' => 'Responsabilidad Social',
                    'body' => 'Es el compromiso, obligación y deber que poseen los individuos, miembros de
                    una sociedad o empresa de contribuir voluntariamente para una sociedad más justa y de proteger el am-
                    biente'
                ],
                [
                    'word' => 'Rol de Gerente',
                    'body' => 'Consiste en la utilización eficiente de diversos recursos para obtener beneficios en una
                    organización determinada. El gerente también controlará, planificará y organizará la empresa. Coordinara a
                    las personas para poder lograr el cumplimento de cada uno de sus objetivos'
                ],
                [
                    'word' => 'Rol del gerente de un proyecto en una empresa globalizada',
                    'body' => 'El rol del gerente del proyecto es dife-
                    rente del de un gerente funcional, es quien estratégicamente debe saber comunicarse con cada nivel organi-
                    zacional y saber responder en el momento preciso cualquier duda que sobre el proyecto se tenga, el geren-
                    te del proyecto se convierte en el nexo de unión entre la estrategia y el equipo, él es responsable en última
                    instancia de los proyectos de toda la empresa'
                ],
            ],
            's' => [
                [
                    'word' => 'Señal Analógica',
                    'body' => 'Es una señal que varía de forma continua a lo largo del tiempo. La mayoría de las
                    señales que representan una magnitud física (temperatura, luminosidad, humedad, entre otros)'
                ],
                [
                    'word' => 'Señal Digital',
                    'body' => 'Es aquella que presenta una variación discontinua con el tiempo y que sólo puede tomar
                    ciertos valores discretos. Su forma característica es ampliamente conocida, la señal básica es una onda
                    cuadrada (pulsos) y las representaciones se realizan en el dominio del tiempo'
                ],
                [
                    'word' => 'Sistema de almacenamiento en la nube',
                    'body' => 'Es un servicio que permite almacenar datos transfiriéndolos a
                    través de Internet o de otra red a un sistema de almacenamiento externo que mantiene un tercero'
                ],
                [
                    'word' => 'Sistema Operativo Linux',
                    'body' => 'Es un sistema operativo semejante a Unix, de código abierto y desarrollado
                    por una comunidad, para computadoras, servidores, mainframes, dispositivos móviles y dispositivos embebi-
                    dos'
                ],
                [
                    'word' => 'Sistema Operativo Windows',
                    'body' => 'Su sistema operativo pertenece a la compañía Microsoft y su código no
                    es libre, por lo que no puede ser utilizado por los usuarios. Muchos consideran que Windows es en realidad
                    un subsistema operativo, ya que para su funcionamiento precisa de otro sistema operativo llamado MS-
                    DOS'
                ],
                [
                    'word' => 'Socialismo',
                    'body' => 'Es una doctrina sociopolítica y económica basada en la propiedad y la administración colec-
                    tiva de los medios de producción con el fin de alcanzar una distribución más equitativa de la riqueza'
                ],
                [
                    'word' => 'Sociedad de Garantía Recíproca',
                    'body' => 'También conocida como SGR por sus siglas, hace referencia a un ti-
                    po de entidades financieras cuyo objetivo principal es asegurarse la facilitación del crédito a las pequeñas y
                    medianas empresas de una sociedad y mejorar, de forma general, sus condiciones de financiación, median-
                    te la prestación de avales ante los bancos, las cajas de ahorro, las cooperativas de crédito, los clientes, los
                    proveedores o las Administraciones Públicas'
                ],
                [
                    'word' => 'Software de Gestión',
                    'body' => 'Es un sistema informático integrado por múltiples herramientas que individual-
                    mente se utilizan para ejecutar tareas administrativas y que, en conjunto, simplifican los procesos operati-
                    vos, productivos y burocráticos de una organización'
                ],
                [
                    'word' => 'Software Educativo',
                    'body' => 'Es un programa diseñado con la finalidad de facilitar los procesos de enseñanza y
                    aprendizaje'
                ],
                [
                    'word' => 'Software Libre',
                    'body' => 'Es un programa informático donde el usuario propietario del programa tiene la libertad
                    de copiarlo, modificarlo, redistribuirlo y distribuirlo para el beneficio de una comunidad'
                ],
                [
                    'word' => 'Software Propietario',
                    'body' => 'Es todo aquel software al cual el usuario tiene poco o ningún acceso al código
                    fuente y esto hace que su uso sea limitado en cuanto a su distribución o modificación y eventualmente este
                    tipo de software tiene un costo'
                ],
                [
                    'word' => 'SlidesGo',
                    'body' => 'Es un sitio web en el cual puedes elegir y descargar plantillas de forma gratuita con la opción
                    de editarlas para que se adapten a tus proyectos. Esta es una herramienta importante a la hora de crear tus
                    presentaciones de Power Point o Slides Google'
                ],
            ],
            't' => [
                [
                    'word' => 'Telemática',
                    'body' => 'Es la combinación entre la informática y la tecnología de la comunicación para el envío,
                    recepción y almacenamiento de datos'
                ],
                [
                    'word' => 'Telegram',
                    'body' => 'Es una aplicación de mensajería que permite la comunicación entre dos o mas personas por
                    medio del envío de mensajes, notas de voz, llamadas de voz o vídeo llamadas. La peculiaridad de telegram
                    es que es muy rápida, segura, simple y gratuita'
                ],
                [
                    'word' => 'Thinglink',
                    'body' => 'Thinglink, también conocida como Thinglink Inc. o Thinglink Oy, es software interactivo, con
                    sede en Helsinki, cuya función principal es la de crear contenidos atractivos, posibilitando que periodistas,
                    educadores, blogueros, etc., puedan añadir enlaces de todo tipo -vídeos, música, fotos, páginas web, etc.-
                    para enriquecer todo tipo de material gráfico sobre el que trabajen'
                ],
                [
                    'word' => 'Tics',
                    'body' => 'Tecnologías de la Información y la Comunicación (TICS) es un término extensivo para la
                    tecnología de la información (TI) que enfatiza el papel de las comunicaciones unificadas​ y la integración de
                    las telecomunicaciones (líneas telefónicas y señales inalámbricas) y las computadoras, así como el software
                    necesario, el middleware, almacenamiento y sistemas audiovisuales, que permiten a los usuarios acceder,
                    almacenar, transmitir y manipular información'
                ],
                [
                    'word' => 'Tipos de empresas',
                    'body' => 'Tipos de empresas Se puede diferenciar a las empresas por el origen de su capi-
                    tal (privada o pública), por su tamaño (pequeñas, medianas o grandes), por su actividad (industriales, co-
                    merciales o de servicios) y por su forma jurídica (sociedad anónima, sociedad limitada o cooperativa)'
                ],
                [
                    'word' => 'Tipos de proyectos',
                    'body' => "Los proyectos pueden clasificarse de acuerdo a su ámbito de acción, de la sI-
                    guiente manera:<br/>
                     - Proyectos productivos o privados. Aquellos que tienen como fin ulterior la rentabilidad, es decir, la obtención de lucro.<br/>
                     - Proyectos públicos o sociales.<br/>
                     - Proyectos comunitarios.<br/>
                     - Proyectos de vida.<br/>
                     - Proyectos de investigación.<br/>"
                ],
            ],
            'v' => [
                [
                    'word' => 'Videoconferencia',
                    'body' => 'Es un sistema interactivo que permite a varios usuarios mantener una conversación
                    virtual por medio de la transmisión en tiempo real de video, sonido y texto a través de Internet'
                ],
                [
                    'word' => 'Vanguardia',
                    'body' => 'Se entiende por vanguardia a algo que va hacía adelante o en primer lugar. La palabra van-
                    guardia puede usarse en estrategia bélica como la parte del ejército que va primero. También se utiliza en el
                    ámbito científico o artístico para calificar los pensamientos o movimientos que resultan innovadores'
                ],
                [
                    'word' => 'Virus, Virus Troyano',
                    'body' => 'En informática, se denomina caballo de Troya, o troyano, a un malware que se
                    presenta al usuario como un programa aparentemente legítimo e inofensivo, pero que, al ejecutarlo, le brin-
                    da a un atacante acceso remoto al equipo infectado'
                ],
                [
                    'word' => 'Vue',
                    'body' => 'Es una estrategia de articulación público-privada que busca mejorar el entorno para el desarrollo de
                    la actividad empresarial, coordinada por el Ministerio de Comercio, Industria y Turismo (MinCIT), con la par-
                    ticipación de entidades de orden nacional y territorial, y desde el sector privado con la participación de la red
                    de cámaras de comercio'
                ],
            ],
            'w' => [
                [
                    'word' => 'Web 2.0',
                    'body' => 'Es un modelo de paginas web que facilitan la tranmision de informacion, la interoperatividad y
                    la colaboracion entre sus usuarios'
                ],
                [
                    'word' => 'WhatsApp',
                    'body' => 'Es una aplicación de chat para teléfonos móviles de última generación, los llamados smartp-
                    hones. Sirve para enviar mensajes de texto y multimedia entre sus usuarios. Su funcionamiento es similar a
                    los programas de mensajería instantánea para ordenador más comunes, aunque enfocado y adaptado al
                    móvil.'
                ],
                [
                    'word' => 'Wifi',
                    'body' => 'Tecnología que permite conectar diferentes equipos informáticos a través de una red inalámbrica de
                    banda ancha.'
                ],
            ]
        ]);

        foreach ($words as $letter => $wordValue) {
            $letter = Letter::where('letter', $letter)->first();
            $letter->words()->createMany($wordValue);
        }
    }
}
