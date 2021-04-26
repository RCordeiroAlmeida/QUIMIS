-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 26-Abr-2021 às 20:51
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `quimis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `ie` varchar(17) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `logradouro` varchar(150) NOT NULL,
  `numero` int(10) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `UF` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `cnpj`, `ie`, `telefone`, `celular`, `email`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `UF`) VALUES
(2, 'Marcelo', '11.111.111/1111-11', '', '', '(11) 98752-4117', 'marcelo@gmail.com', '08593020', 'Rua dos Bem-Te-Vis', 51, '', 'Chácara Holiday', 'Itaquaquecetuba', 'SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `data_pedido` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricaoProd` varchar(255) NOT NULL,
  `formula` varchar(50) NOT NULL,
  `estoque` int(5) NOT NULL,
  `unidadeMed` varchar(5) DEFAULT NULL,
  `fornecedor` varchar(100) NOT NULL,
  `Fabricante` varchar(50) NOT NULL,
  `preco` varchar(12) NOT NULL,
  `lote` int(10) NOT NULL,
  `descricaoTec` varchar(255) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `descricaoProd`, `formula`, `estoque`, `unidadeMed`, `fornecedor`, `Fabricante`, `preco`, `lote`, `descricaoTec`, `obs`) VALUES
(1, 'Gluconato de Clorexidina', 'Substância com ação antimicrobiana, eficaz no controle da proliferação de bactérias na pele e mucosas, sendo um produto muito utilizado como antisséptico na prevenção de infecções.', 'C22H30Cl2N10', 1, '', 'AlphaQuímica', 'AlphaQuímica', 'R$ 50.00', 1, '', ''),
(3, 'Soro Fisiológico', 'É uma solução isotônica em relação aos líquidos corporais que contem 0,9%, em massa, de NaCl em água destilada', 'NaCl+H2O', 1, '', 'SoriMax', 'SoriMax', 'R$ 12.00', 1, '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `cnpj` (`cnpj`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD UNIQUE KEY `formula` (`formula`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
