use autopecas_tanaka;
INSERT INTO categoria (nome) VALUES
('Pneus'),
('Motor'),
('Transmissão');

INSERT INTO subcategoria (nome, id_categoria) VALUES
('Pneu Aro 12', 1),
('Pneu Aro 13', 1),
('Pneu Aro 14', 1),
('Pneu Aro 15', 1),
('Comando de Válvulas', 2),
('Pistão', 2),
('Embreagens', 3);

INSERT INTO produto (nome, preco, imagem, id_subcategoria) VALUES
('Pneu Firestone Aro 12', 299.90, 'pneu_firestone_aro12.jpg', 1),
('Pneu Goodyear Aro 13', 319.50, 'pneu_goodyear_aro13.jpg', 2),
('Pneu Michelin Aro 14', 359.00, 'pneu_michelin_aro14.jpg', 3),

('Comando de Válvulas Esportivo', 450.00, 'comando_valvulas_esportivo.jpg', 5),
('Pistão 1.0 Flex', 220.00, 'pistao_1.0_flex.jpg', 6),
('Pistão Turbo 1.6', 330.00, 'pistao_turbo_1.6.jpg', 6),

('Embreagem Sachs 1.6', 550.00, 'embreagem_sachs_1.6.jpg', 7),
('Embreagem Luk 1.0', 480.00, 'embreagem_luk_1.0.jpg', 7),
('Embreagem Valeo 1.8', 620.00, 'embreagem_valeo_1.8.jpg', 7);