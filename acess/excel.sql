-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Set-2020 às 18:44
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `excel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `mae` varchar(220) NOT NULL,
  `pai` varchar(220) NOT NULL,
  `cpf` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `rg` varchar(220) NOT NULL,
  `dtnasc` varchar(220) NOT NULL,
  `telefone` varchar(220) NOT NULL,
  `zap` varchar(220) NOT NULL,
  `rua` varchar(220) NOT NULL,
  `numero` varchar(220) NOT NULL,
  `bairro` varchar(220) NOT NULL,
  `cidade` varchar(220) NOT NULL,
  `estado` varchar(220) NOT NULL,
  `indicacao` varchar(220) NOT NULL,
  `cep` varchar(220) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `mae`, `pai`, `cpf`, `email`, `rg`, `dtnasc`, `telefone`, `zap`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `indicacao`, `cep`, `created`) VALUES
(15, 'ROBERTO PEREIRA LIMA', 'maria madalena da silva rego lima', 'roberto pereira de lima junior', '10845193481', 'betin@lima.com', '9086571', '20/05/1996', '81996697770', '81 99669-7770', 'Rua Velha', '66', 'Boa Vista', 'Recife', 'PE', 'joao pinheiro', '50060210', '2020-09-16 07:55:56'),
(16, 'rodrigo rego de lima', 'caio pereira', 'cesar nascimento', '10845193481', 'robertojunior@jocross.com.br', '9086571', '20/05/1996', '81996697770', '81 99669-7770', 'Rua Rio Bahia', '45', 'Paratibe', 'Paulista', 'PE', 'josemi', '53413010', '2020-09-16 07:59:00'),
(17, 'rodrigo', 'maria madalena da silva rego lima', 'cesar nascimento', '10845193481', 'betoxdd@outlook.com', '9086571', '20/05/1996', '81996697770', '81 99669-7770', 'Rua Rio Bahia', '80', 'Paratibe', 'Paulista', 'PE', 'joao pinheiro', '53413010', '2020-09-16 08:01:07'),
(18, 'sidcley reego', 'maria', 'manoel', '10845296387', 'betinho@lima.com.br', '9086571', '20/05/1996', '81996697770', '', 'Rua Rio Bahia', '25', 'Paratibe', 'Paulista', 'PE', 'joao pinheiro', '53413010', '2020-09-16 09:04:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`) VALUES
(2, 'roberto pereira', 'roberto', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarioss`
--

CREATE TABLE `usuarioss` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `telefone` varchar(220) NOT NULL,
  `cidade` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarioss`
--

INSERT INTO `usuarioss` (`id`, `nome`, `email`, `telefone`, `cidade`, `created`, `modified`) VALUES
(1, 'ROBERTO PEREIRA LIMA', 'robertojunior20171@gmail.com', '81996697770', 'Paulista', '2020-09-15 08:55:27', 0),
(2, 'tonynho', 'roberto@jofdejoafjoad.com.br', '81996697770', 'Paulista', '2020-09-15 08:56:40', 0),
(3, 'tonynho', 'roberto@jofdejoafjoad.com.br', '81996697770', 'Paulista', '2020-09-15 09:07:53', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_admin`
--

CREATE TABLE `usuarios_admin` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios_admin`
--

INSERT INTO `usuarios_admin` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'roberto', 'roberto', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarioss`
--
ALTER TABLE `usuarioss`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios_admin`
--
ALTER TABLE `usuarios_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarioss`
--
ALTER TABLE `usuarioss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios_admin`
--
ALTER TABLE `usuarios_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
