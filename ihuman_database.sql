-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 20/11/2019 às 23:40
-- Versão do servidor: 10.4.6-MariaDB
-- Versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ihuman`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog`
--

CREATE TABLE `blog` (
  `idBlog` int(11) NOT NULL,
  `nomeBlog` varchar(200) DEFAULT NULL,
  `corpoBlog` mediumtext DEFAULT NULL,
  `caminhoImagemPrincipal` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `blog`
--

INSERT INTO `blog` (`idBlog`, `nomeBlog`, `corpoBlog`, `caminhoImagemPrincipal`) VALUES
(8, 'teste2', 'qeeee', '../../media/images/blog/2019.11.18-17.53.05.png'),
(13, 'HerÃ³is', 'HerÃ³i Ã© uma figura arquetÃ­pica, personagem modelo, que reÃºne, em si, os atributos necessÃ¡rios para superar, de forma excepcional, um determinado problema de dimensÃ£o Ã©pica.', '../../media/images/blog/2019.11.19-02.12.34.png'),
(14, 'Neon', 'A conta digital certa pra cuidar bem do seu dinheiro\r\nNeon, conta grÃ¡tis e cartÃ£o sem anuidade. Abra sua conta, Ã© sÃ³ baixar o app!', '../../media/images/blog/2019.11.19-02.14.01.png'),
(15, 'Nubank', 'VocÃª finalmente no controle do seu dinheiro. Controle total do cartÃ£o de crÃ©dito e da Nuconta 100% digital.', '../../media/images/blog/2019.11.19-02.14.34.png'),
(16, 'Arco Ã­ris', 'Um arco-Ã­ris Ã© um fenÃ´meno Ã³ptico e meteorolÃ³gico que separa a luz do sol em seu espectro contÃ­nuo quando o sol brilha sobre gotas de chuva. Ã‰ um arco multicolorido com o vermelho no seu exterior e o violeta em seu interior.', '../../media/images/blog/2019.11.19-02.15.19.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `dia` varchar(100) DEFAULT NULL,
  `localizacao` varchar(100) DEFAULT NULL,
  `telefone` varchar(100) DEFAULT NULL,
  `realizador` varchar(100) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `class` int(11) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(100) DEFAULT NULL,
  `cpf` varchar(100) DEFAULT NULL,
  `deficiencia` varchar(100) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `gostos` varchar(300) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `tutor` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `class`, `tipo`, `email`, `telefone`, `cpf`, `deficiencia`, `idade`, `endereco`, `uf`, `gostos`, `foto`, `tutor`, `senha`) VALUES
(1, 'adm', 1, NULL, 'adm@adm.com', '+55 19 99999-9999', '222.222.222-22', NULL, 16, 'Rua dos administradores', 'SP', 'Biologia, Botânica, Rock e Tecnologia', 'http://localhost/iHuman/_site/media/images/profiles/adm.png', NULL, '202cb962ac59075b964b07152d234b70'),
(3, 'Deficiente 1', 2, ' ', 'def1@def1.com', '19999999999', '111.111.111-11', 'Trissomia cromossÃ´mica', 10, 'Rua XXX', 'SP', 'Tudo <3', 'http://localhost/iHuman/_site/media/images/unicorn.png', 'JoÃ£o da Silva', '202cb962ac59075b964b07152d234b70'),
(4, 'VoluntÃ¡rio 2', 1, ' ', 'vol2@vol2.com', '19999999999', '111.111.111-11', ' ', 20, 'Rua XXX', 'SP', 'Tudo <3', 'http://localhost/iHuman/_site/media/images/unicorn.png', 'JoÃ£o da Silva', '202cb962ac59075b964b07152d234b70'),
(5, 'aaaaa', 1, ' ', 'aa@aa.com', '111', '11', 'aa', 1, 'aa', 'aa', 'aa', 'http://localhost/iHuman/_site/media/images/unicorn.png', 'aa', '202cb962ac59075b964b07152d234b70'),
(7, 'aa', 1, ' ', 'b@b.com', 'aa', 'aa', 'aa', 1, 'aa', 'aa', 'aa', '../../media/images/profiles/2019.11.18-18.05.04.png', 'aa', '202cb962ac59075b964b07152d234b70'),
(8, 'teste', 2, ' ', 'cu@cu.com', '19999999999', '111.111.111-11', 'aaaa', 11, 'aa', 'aa', 'cu', 'http://localhost/iHuman/_site/media/images/profiles/2019.11.18-22.09.17.png', 'cu', '202cb962ac59075b964b07152d234b70'),
(10, 'FHO', 4, NULL, 'fho@fho.com', '+11 11 11111-1111', '000.000.000-00', NULL, NULL, 'Rua xxx', 'SP', NULL, 'http://localhost/iHuman/_site/media/images/profiles/fho.png', NULL, '202cb962ac59075b964b07152d234b70'),
(11, 'UFRGS', 4, NULL, 'ufrgs@ufrgs.com', '+222 22 22222-2222', '222.222.222-22', NULL, NULL, 'Rua ZZZ', 'RS', NULL, 'http://localhost/iHuman/_site/media/images/profiles/UFRGS.png', NULL, '202cb962ac59075b964b07152d234b70'),
(12, 'UFRJ', 4, NULL, 'ufrj@ufrj.com', '+333 33 33333-3333', '000.000.000-00', NULL, NULL, 'Rua BBB', 'RJ', NULL, 'http://localhost/iHuman/_site/media/images/profiles/UFRJ.png', NULL, '202cb962ac59075b964b07152d234b70'),
(13, 'Voluntário', 3, NULL, 'volvol@vol.com', '+11 11 111111-1111', '000', NULL, 0, 'aaaaa', 'GO', 'Música, Matemática e Gastronomia', 'http://localhost/iHuman/_site/media/images/profiles/2019.11.18-22.09.17.png', NULL, NULL),
(14, 'Etec', 4, NULL, 'etec@etec.com', '+00 00 00000-0000', '000.000.000-00', NULL, NULL, 'Rua xxx', 'SP', NULL, 'http://localhost/iHuman/_site/media/images/profiles/2019.11.20-23.24.40.png', NULL, '202cb962ac59075b964b07152d234b70');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`idBlog`);

--
-- Índices de tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `idBlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
