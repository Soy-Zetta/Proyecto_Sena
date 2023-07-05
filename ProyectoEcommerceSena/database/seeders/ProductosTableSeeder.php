<?php

namespace Database\Seeders;

use App\Models\Admin\producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        								
        $productos = [
            [
                 // productos 1
                'nombre' => 'Monitor HP 23,8',
                'codigo' => 1234,
                'descripcion' => 'monitor HP ultradelgado con pantalla de micro-bordes y resolución Full HD. ',
                'precio' => 720000,
                'existencias' => 5,
                'imagen' => 'Monitor HP 23,8 Pulgadas M24f .png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 1
            ],
            [
                'nombre' => 'Monitor HP V22 FHD',
                'codigo' => 1234,
                'descripcion' => 'Monitor HP V22 FHD colores reales gracias a la resolución Full HD y sistema anti reflectante.',
                'precio' => 499000,
                'existencias' => 5,
                'imagen' => 'Monitor HP 21,5 Pulgadas V22 .png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 1
            ],
            [
                'nombre' => 'Monitor SAMSUNG Gaming',
                'codigo' => 1234,
                'descripcion' => 'Monitor SAMSUNG Gaming de 27 pulgadas, con tasa de actualización de 165Hz, tiempo de respuesta de 1ms.',
                'precio' => 1200000,
                'existencias' => 5,
                'imagen' => 'Monitor SAMSUNG Gamer 27 pulgadas G320NL .png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 1
            ],
            [
                'nombre' => 'Monitor SAMSUNG Smart',
                'codigo' => 12345,
                'descripcion' => 'el Monitor SAMSUNG Smart Display . Navega por la web, edita documentos y estudia, todo sin necesidad de una PC y cuidando tu salud ',
                'precio' => 1200000,
                'existencias' => 15,
                'imagen' => 'Monitor SAMSUNG 32 Pulgadas BM500 Smart Display.png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 2
               
            ],
            [
                'nombre' => 'Monitor LG Gaming ',
                'codigo' => 123456,
                'descripcion' => 'Monitor LG Gaming de 24 pulgadas, tasa de refresco de 144Hz que permite a los jugadores ver rápidamente el próximo cuadro con imágenes más fluidas',
                'precio' => 850000,
                'existencias' => 15,
                'imagen' => 'Monitor LG Gamer 24 Pulgadas 24GN65R .png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 1
                
            ],
            [
                'nombre' => 'Monitor Acer ',
                'codigo' => 1234,
                'descripcion' => 'Monitor Acer su pantalla HD de refresco de Imagen 60Hz',
                'precio' => 450000,
                'existencias' => 5,
                'imagen' => 'Monitor Acer 19.5 Pulgadas V206HQL Abi.png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 1
            ],
     
            [
                'nombre' => 'monitor LENOVO',
                'codigo' => 1234,
                'descripcion' => 'el monitor LENOVO G27qc-30, que te ofrece un rendimiento potente en una forma elegante',
                'precio' => 1600000,
                'existencias' => 5,
                'imagen' => 'Monitor LENOVO 27 Pulgadas G27qc-30.png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 1
            ],
            [
                'nombre' => 'Monitor HUAWEI',
                'codigo' => 1234,
                'descripcion' => 'monitor de 23.8 pulgadas diseñado para mejorar tu productividad y acompañarte en los momentos de diversión mientras disfrutas de su increíble pantalla FHD',
                'precio' => 800000,
                'existencias' => 5,
                'imagen' => 'Monitor HUAWEI 23.8 Pulgadas AD80 .png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 1
            ],
            [
                'nombre' => 'Monitor KALLEY',
                'codigo' => 12345,
                'descripcion' => 'monitor Kalley de 24” M24FP color gris',
                'precio' => 600000,
                'existencias' => 15,
                'imagen' => 'Monitor KALLEY 24 Pulgadas K-M24FP .png',
                'disponible' => 1,
                'categorias_id' => 1,
                'proveedores_id' => 2
               
            ],
            [
                'nombre' => 'Monitor Gamer ACER',
                'codigo' => 123456,
                'descripcion' => 'portatil Color Negro 16gb Cmsx16gx5m1a4800c40',
                'precio' => 800000,
                'existencias' => 15,
                'imagen' => 'Monitor Gamer ACER 23.8 Pulgadas QG241Y Pbmiipx .png',
                'disponible' => 1,
                'categorias_id' => 3,
                'proveedores_id' => 3
                
            ],






             //productos 2

             //teclados
            [
                'nombre' => 'RAZER BLACK ',
                'codigo' => 12345,
                'descripcion' => 'teclado gaming retroiluminado negro clasico, con Interruptores verdes - Táctiles y Clicky',
                'precio' => 80000,
                'existencias' => 15,
                'imagen' => 'RAZER BLACK WIDOW V3.png',
                'disponible' => 1,
                'categorias_id' => 3,
                'proveedores_id' => 3
               
            ],
            [
                'nombre' => 'Redragon K580',
                'codigo' => 123456,
                'descripcion' => 'teclado Gaming retroiluminado impermeable, con interuptor MX azul',
                'precio' => 95000,
                'existencias' => 15,
                'imagen' => 'Redragon K580 VATA RGB.png',
                'disponible' => 1,
                'categorias_id' => 3,
                'proveedores_id' => 3
                
            ],



            //audifonos
            [
                'nombre' => 'VSG Gemini',
                'codigo' => 12345,
                'descripcion' => 'audifonos VSG Omnidirecional,Rango de frecuencia 20-20 KHz
                ',
                'precio' => 80000,
                'existencias' => 15,
                'imagen' => 'VSG Gemini.png',
                'disponible' => 1,
                'categorias_id' => 4,
                'proveedores_id' => 3
               
            ],
            [
                'nombre' => 'Logitech G733',
                'codigo' => 123456,
                'descripcion' => 'audifonos Logitech G modelo G733 LIGHTSPEED Color Negro conectividad Bluetooth',
                'precio' => 95000,
                'existencias' => 15,
                'imagen' => 'Logitech G733 Lightspeed.png',
                'disponible' => 1,
                'categorias_id' => 4,
                'proveedores_id' => 3
                
            ],
           


                // mouse
            [
                'nombre' => 'Redragon',
                'codigo' => 123456,
                'descripcion' => 'mouse Marca Redragon, Color Negro- conectividad USB, 12 botones laterales, Pesos extra, Ratón MMO preciso, Diseño ergonómico ',
                'precio' => 100000,
                'existencias' => 15,
                'imagen' => 'Redragon M908 Impact RGB.png',
                'disponible' => 1,
                'categorias_id' => 2,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'Razer Basilisk',
                'codigo' => 12345,
                'descripcion' => ' mouse Color Negro clásico,Cable Razer Speedflex con cable Tecnología de detección de movimiento Óptica   ',
                'precio' => 80000,
                'existencias' => 15,
                'imagen' => 'Razer Basilisk V3.jpg',
                'disponible' => 1,
                'categorias_id' => 2,
                'proveedores_id' => 3
               
            ],
           


                //micronofono

            [
                'nombre' => 'NBPOWER',
                'codigo' => 123456,
                'descripcion' => 'camara NBPOWER, conectividad USB, Tipo de memoria Memory Stick Color Negro - Tamaño de pantalla 2,7 Pulgadas ',
                'precio' => 160000,
                'existencias' => 15,
                'imagen' => 'NBPOWER Cámara web.jpg',
                'disponible' => 1,
                'categorias_id' => 5,
                'proveedores_id' => 3
                
            ],

            // camaras
            [
                'nombre' => 'WMT ',
                'codigo' => 123456,
                'descripcion' => 'microfono con conectividad USB, USB tipo C, conector de auriculares de 0.138, Dispositivos compatibles Portátil, PS4, PS5, PC ',
                'precio' => 160000,
                'existencias' => 15,
                'imagen' => 'WMT Micrófono USB.jpg',
                'disponible' => 1,
                'categorias_id' => 6,
                'proveedores_id' => 3
                
            ],



            // productos board

            [
                'nombre' => 'board rog strix',
                'codigo' => 123456,
                'descripcion' => 'Board Asus Rog Strix B650E-I Wifi Ddr5',
                'precio' => 1843000,
                'existencias' => 15,
                'imagen' => 'board rog strix z790.png',
                'disponible' => 1,
                'categorias_id' => 7,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'gigabite b450m ',
                'codigo' => 123456,
                'descripcion' => 'gigabite b450m',
                'precio' => 785000,
                'existencias' => 15,
                'imagen' => 'gigabite b450m ds3h.png',
                'disponible' => 1,
                'categorias_id' => 7,
                'proveedores_id' => 3
                
            ],


            [
                'nombre' => 'gigabyte-x670',
                'codigo' => 123456,
                'descripcion' => 'BOARD ROG MAXIMUS Z790 HERO WIFI',
                'precio' => 2150000,
                'existencias' => 19,
                'imagen' => 'gigabyte-x670-gaming- 2x.png',
                'disponible' => 1,
                'categorias_id' => 7,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'gigabyte-x671 ',
                'codigo' => 123456,
                'descripcion' => 'BOARD ROG MAXIMUS Z790 HERO WIFI',
                'precio' => 2500000,
                'existencias' => 15,
                'imagen' => 'gigabyte-x670-gaming-x.png',
                'disponible' => 1,
                'categorias_id' => 7,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'Intel vPro Motherboard',
                'codigo' => 123456,
                'descripcion' => 'BOARD ASROCK A620M PRO RS WIFI',
                'precio' => 762000,
                'existencias' => 14,
                'imagen' => 'Intel vPro Motherboard LGA 1155 microATX.png',
                'disponible' => 1,
                'categorias_id' => 7,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'msi ',
                'codigo' => 123456,
                'descripcion' => 'BOARD ASROCK A520M ITX/AC',
                'precio' => 556000,
                'existencias' => 15,
                'imagen' => 'msi  B85-G43.png',
                'disponible' => 1,
                'categorias_id' => 7,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'msi lga 1150',
                'codigo' => 123456,
                'descripcion' => 'BOARD ASROCK Z790M ITX WIFI',
                'precio' => 1200000,
                'existencias' => 14,
                'imagen' => 'msi lga 1150.png',
                'disponible' => 1,
                'categorias_id' => 7,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'MSI lga 11-55 ',
                'codigo' => 123456,
                'descripcion' => 'BOARD ASROCK H610M-ITX/AC',
                'precio' => 556000,
                'existencias' => 15,
                'imagen' => 'MSI lga 11-55 gamin.png',
                'disponible' => 1,
                'categorias_id' => 7,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'board-asrock-a520m',
                'codigo' => 123456,
                'descripcion' => 'BOARD GIGABYTE Z790 GAMING X AX (REV. 1.0) LGA 1700',
                'precio' => 1315000,
                'existencias' => 14,
                'imagen' => 'tarjeta-madre-board-asrock-a520m-itx-ac.png',
                'disponible' => 1,
                'categorias_id' => 7,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'board-asrock-itx',
                'codigo' => 123456,
                'descripcion' => 'BOARD GIGABYTE B450M DS3H WIFI',
                'precio' => 548000,
                'existencias' => 15,
                'imagen' => 'tarjeta-madre-board-asrock-itx-ac-wifi copia.png',
                'disponible' => 1,
                'categorias_id' => 7,
                'proveedores_id' => 3
                
            ],


            // gabinetes 

            [
                'nombre' => ' SPEC-DELTA',
                'codigo' => 123456,
                'descripcion' => 'Gabinete de tamaño medio con diseño angular y ventilación óptima.',
                'precio' => 350000,
                'existencias' => 14,
                'imagen' => 'Torre 1.png',
                'disponible' => 1,
                'categorias_id' => 8,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'NZXT H510',
                'codigo' => 123456,
                'descripcion' => 'BOARD GIGABYTE B450M DS3H WIFI',
                'precio' => 450000,
                'existencias' => 15,
                'imagen' => 'Torre 4.png',
                'disponible' => 1,
                'categorias_id' => 8,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'MasterBox Q300L',
                'codigo' => 123456,
                'descripcion' => 'Gabinete mini torre con diseño versátil y buena capacidad de refrigeración',
                'precio' => 350000,
                'existencias' => 14,
                'imagen' => 'Torre 5.png',
                'disponible' => 1,
                'categorias_id' => 8,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'Fractal Design Meshify C',
                'codigo' => 123456,
                'descripcion' => 'Gabinete de alto flujo de aire con paneles de malla y diseño elegante.',
                'precio' => 450000,
                'existencias' => 15,
                'imagen' => 'Torre 6.png',
                'disponible' => 1,
                'categorias_id' => 8,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'Phanteks Eclipse P400S',
                'codigo' => 123456,
                'descripcion' => 'Gabinete de tamaño medio con iluminación LED ajustable y silencioso funcionamiento',
                'precio' => 555000,
                'existencias' => 14,
                'imagen' => 'Torre 7.png',
                'disponible' => 1,
                'categorias_id' => 8,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'Thermaltake Versa H18',
                'codigo' => 123456,
                'descripcion' => 'Gabinete compacto con ventilación optimizada y panel lateral acrílico..',
                'precio' => 590000,
                'existencias' => 15,
                'imagen' => 'Torre 8.png',
                'disponible' => 1,
                'categorias_id' => 8,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'Deepcool Matrexx 55',
                'codigo' => 123456,
                'descripcion' => 'Gabinete con paneles de vidrio templado en el frente y lateral, y capacidad para refrigeración líquida.',
                'precio' => 320000,
                'existencias' => 14,
                'imagen' => 'Torre 9.png',
                'disponible' => 1,
                'categorias_id' => 8,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'Lian Li PC-O11 Dynamic',
                'codigo' => 123456,
                'descripcion' => 'Gabinete premium con un diseño elegante y amplias opciones de enfriamiento y personalización.',
                'precio' => 580000,
                'existencias' => 15,
                'imagen' => 'Torre 10.png',
                'disponible' => 1,
                'categorias_id' => 8,
                'proveedores_id' => 3
                
            ],



            // almacenamiento AMD


            [
                'nombre' => 'AMD R9 390',
                'codigo' => 123456,
                'descripcion' => 'tarjeta grafica Tiene una cantidad generosa de memoria de video y soporta tecnologías avanzadas como DirectX 12',
                'precio' => 800000,
                'existencias' => 14,
                'imagen' => 'amd___r9_390-removebg-preview.png',
                'disponible' => 1,
                'categorias_id' => 9,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'AMD R7 360',
                'codigo' => 123456,
                'descripcion' => ' tarjeta gráfica de nivel de entrada que ofrece un rendimiento adecuado para juegos de menor exigencia y aplicaciones multimedia.',
                'precio' => 750000,
                'existencias' => 15,
                'imagen' => 'amd_r7_360-removebg-preview.png',
                'disponible' => 1,
                'categorias_id' => 9,
                'proveedores_id' => 3
                
            ],            
            [
                'nombre' => 'AMD R7 370',
                'codigo' => 123456,
                'descripcion' => 'tarjeta gráfica de gama media que ofrece un rendimiento sólido en juegos y aplicaciones gráficamente intensivas',
                'precio' => 650000,
                'existencias' => 14,
                'imagen' => 'amd_r7_370-removebg-preview.png',
                'disponible' => 1,
                'categorias_id' => 9,
                'proveedores_id' => 2
                
            ],
            [
                'nombre' => 'ASUS 39 380',
                'codigo' => 123456,
                'descripcion' => 'tarjeta gráfica de gama alta que ofrece un buen rendimiento para juegos y aplicaciones exigentes',
                'precio' => 550000,
                'existencias' => 15,
                'imagen' => 'amd_r7_360-removebg-preview.png',
                'disponible' => 1,
                'categorias_id' => 9,
                'proveedores_id' => 3
                
            ],




            

            
            [
                'nombre' => 'RTX 3070 Ti',
                'codigo' => 123456,
                'descripcion' => ' tarjeta gráfica potente de Nvidia que ofrece un rendimiento mejorado en comparación con la RTX 3070 estándar, brindando imágenes fluidas y realistas en juegos y aplicaciones gráficas intensivas.',
                'precio' => 800000,
                'existencias' => 14,
                'imagen' => '3070_ti-removebg-preview.png',
                'disponible' => 1,
                'categorias_id' => 9,
                'proveedores_id' => 3
                
            ],
            [
                'nombre' => 'RTX 3070',
                'codigo' => 123456,
                'descripcion' => 'Tarjeta gráfica de gama media de Nvidia que proporciona un excelente rendimiento en juegos y aplicaciones multimedia, con soporte para trazado de rayos y altas tasas de cuadros para una jugabilidad suave.',
                'precio' => 750000,
                'existencias' => 15,
                'imagen' => '3070-removebg-preview.png',
                'disponible' => 1,
                'categorias_id' => 9,
                'proveedores_id' => 3
                
            ],            
            [
                'nombre' => 'RTX 4070',
                'codigo' => 123456,
                'descripcion' => ' tarjetas gráficas de Nvidia con avances en rendimiento, eficiencia energética y tecnologías de trazado de rayos para una experiencia visual de última generación.',
                'precio' => 650000,
                'existencias' => 14,
                'imagen' => '4070-removebg-preview.png',
                'disponible' => 1,
                'categorias_id' => 9,
                'proveedores_id' => 2
                
            ],
            [
                'nombre' => 'RTX 4070 Ti',
                'codigo' => 123456,
                'descripcion' => ' La tarjeta gráfica de alta gama de Nvidia con un rendimiento excepcional y capacidades de trazado de rayos mejoradas para una experiencia visual inmersiva en juegos y aplicaciones exigentes.',
                'precio' => 550000,
                'existencias' => 15,
                'imagen' => '4070tii-removebg-preview.png',
                'disponible' => 1,
                'categorias_id' => 9,
                'proveedores_id' => 3
                
            ],















            // Agrega más productos aquí si es necesario
        ];
    
        foreach ($productos as $productoData) {
            producto::create($productoData);
 
        }

    } 
}
