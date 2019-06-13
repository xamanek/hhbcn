/* cancellare tutto per poter importare */
DROP TABLE if EXISTS contenidos;
DROP TABLE menu;



UPDATE menu
SET color = 'primary'
WHERE id = 1;

UPDATE contenidos
SET contenido = '<h2>Página 2</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer efficitur turpis vel vestibulum scelerisque. Nulla dapibus nec quam nec blandit. Ut suscipit tincidunt ligula vel finibus. Etiam augue justo, aliquam nec ullamcorper sit amet, tempor vitae ipsrfrfrfrum. Vestibulum sed auctor nibh. Donec pretium viverra posuere. Donec quis mattis diam. Morbi vestibulum orci ac ligula ultricies lacinia. Duis in tortor id ex mollis sagittis.</p>'
WHERE id = 4;


INSERT INTO menus
(nombre, icono, color, orden)
VALUE
('Titulaciones', '<i class="fas fa-user-graduate"></i>','danger', 50);

INSERT INTO contenidos
(id_pagina, contenido, orden)
VALUE
(5, '<h1>Página de Titulaciones</h1>', 10),
(5, '<h2>Página 5</h2>', 20),
(5, '<p>Osbarabvaaaaaaaammmmmmmmm</p>', 30);