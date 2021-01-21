-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 21-Jan-2021 às 17:43
-- Versão do servidor: 5.7.25
-- versão do PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quimis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `ie` varchar(17) NOT NULL,
  `client` varchar(255) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `logradouro` varchar(255) NOT NULL,
  `numero` int(10) NOT NULL,
  `complemento` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `UF` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `cnpj`, `ie`, `client`, `telefone`, `celular`, `email`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `UF`) VALUES
(10, 'Rafael cordeiro', '2232251', '3366', '', '46402075', '', 'rafaelcordeiroalmeida299@gmail.com', '59074305', 'Travessa Indomar', 363, '', 'Felipe Camarão', 'Natal', 'RN'),
(11, 'João Augusto', '09.090.909/0091090', '22333', '', '46402075', '', 'rafaelcordeiroalmeida299@gmail.com', '59074305', 'Travessa Indomar', 665, 'g5', 'Felipe Camarão', 'Natal', 'MA'),
(12, 'Janaína', '88.888.888/8081888', '3363', '', '1222433662', '119535322642', 'janaina@gmail.com', '08571000', 'Avenida Presidente Tancredo Neves', 522, '', 'Estação', 'Itaquaquecetuba', 'SP'),
(13, 'Marcelo', '66255311615213', '11511', '', '40028922', '11952793798', 'marcelo@gmail.com', '08571000', 'Avenida Presidente Tancredo Neves', 6698, '', 'Estação', 'Itaquaquecetuba', 'CE'),
(14, 'Leonardo', '53.434.343/4031434', '11666', '', '34495267', '11982829179', 'leonardo@gmail.com', '08571000', 'Avenida Presidente Tancredo Neves', 885, '', 'Estação', 'Itaquaquecetuba', 'MA'),
(15, 'Alberto', '777888115', '3352', '', '40028933', '982829177', 'albertosantos@gmail.com', '59074305', 'Travessa Indomar', 2336, 'b', 'Felipe Camarão', 'Natal', 'RN'),
(16, 'Wagner', '2266632', '446814121', '', '46450798', '11946450755', 'wagner@gmail.com', '08571000', 'Avenida Presidente Tancredo Neves', 23, 'c', 'Estação', 'Itaquaquecetuba', 'SP'),
(17, 'Brenda', '442111551', '886511142', '', '11468211146', '11552145226', 'brenda@gmail.com', '08571000', 'Avenida Presidente Tancredo Neves', 90, '', 'Estação', 'Itaquaquecetuba', 'PB');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `entrega` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricaoProd` varchar(255) NOT NULL,
  `formula` varchar(255) NOT NULL,
  `qtddEstoque` varchar(255) NOT NULL,
  `unidadeMed` varchar(255) NOT NULL,
  `fornecedor` varchar(255) NOT NULL,
  `Fabricante` varchar(255) NOT NULL,
  `precoMed` varchar(255) NOT NULL,
  `lote` varchar(255) NOT NULL,
  `descricaoTec` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `descricaoProd`, `formula`, `estoqueMin`, `unidadeMed`, `fornecedor`, `Fabricante`, `precoMed`, `lote`, `descricaoTec`, `obs`) VALUES
(3, 'óleo diesel', 'óleo para motor de caminhonetes, caminões, etc', '', '20', '60L', 'petrobrás', 'eu mesmo', 'R$700', '233', 'é óleo dieseeeeeel', ''),
(4, 'coca cola', 'coquinha gelada uhmmmmm', 'coca+cola', '20', '2L', 'mercado', 'COCACOLA', 'r$15', '20', 'É COCA MANO', 'Gelo e limão??????'),
(5, 'água', 'água é dooois', 'H2O', '20', '550ml', 'mercado', 'COCACOLA', 'r$5', '522', 'é águaaaaaaaa', 'hidrate-se meu mano'),
(6, 'TANG DE MORANGO', 'suquinho de pó', 'água + pozinho', '60', '15g', 'mercado', 'TANG', 'r$0,75', '14', 'suquito de moranguito', 'dá câncer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `cnpj` (`cnpj`),
  ADD UNIQUE KEY `ie` (`ie`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
