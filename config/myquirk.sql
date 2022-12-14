-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Out-2022 às 21:12
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `myquirk`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `quirk`
--

CREATE TABLE `quirk` (
  `quirk_id` int(11) NOT NULL,
  `quirk_name` text NOT NULL,
  `quirk_desc` text NOT NULL,
  `quirk_rank` int(11) NOT NULL,
  `quirk_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `quirk`
--

INSERT INTO `quirk` (`quirk_id`, `quirk_name`, `quirk_desc`, `quirk_rank`, `quirk_img`) VALUES
(2, 'Membros Extras', 'Você tem <b>quatro braços</b>, tendo a mesma capacidade para todos, podendo assim desde segurar ou empunhar um objeto ou até fazer ações mais complexas como escrever.', 4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjQFnCgCjWHbgne4eqoITZGYQC03jSz3STeCO-sC7rkRVlaEGyjC-7gxmg4Uq5JW0zBQ&usqp=CAU'),
(3, 'One for All', 'Você foi escolhido para herdar uma série de poderes incríveis que fica mais forte a cada dia.', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjQFnCgCjWHbgne4eqoITZGYQC03jSz3STeCO-sC7rkRVlaEGyjC-7gxmg4Uq5JW0zBQ&usqp=CAU'),
(4, 'Asas', 'Você tem um <b>par de asas</b>, capazes de te fazer voar e planar em até 90km/h', 3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjQFnCgCjWHbgne4eqoITZGYQC03jSz3STeCO-sC7rkRVlaEGyjC-7gxmg4Uq5JW0zBQ&usqp=CAU'),
(5, 'Meio Quente e Meio Frio', 'Metade do seu corpo emana chamas, enquanto o outro emana gelo. Você consegue utilizar ambos os elementos, porém um danifica o outro, o obrigando a usar os dois para equilibrar.', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjQFnCgCjWHbgne4eqoITZGYQC03jSz3STeCO-sC7rkRVlaEGyjC-7gxmg4Uq5JW0zBQ&usqp=CAU'),
(6, 'Sensor de Perigo', 'Permite o usuário detectar qualquer risco em potencial ao seu redor, como se fosse um sexto sentido.', 3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjQFnCgCjWHbgne4eqoITZGYQC03jSz3STeCO-sC7rkRVlaEGyjC-7gxmg4Uq5JW0zBQ&usqp=CAU'),
(7, 'Ácido', 'Permite secretar de seu próprio corpo um líquido corrosivo que danifica qualquer coisa exceto o próprio usuário.', 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjQFnCgCjWHbgne4eqoITZGYQC03jSz3STeCO-sC7rkRVlaEGyjC-7gxmg4Uq5JW0zBQ&usqp=CAU'),
(8, 'Suor Explosivo', 'O suor do usuário possui <b>propriedades explosivas</b>, ele sai como um suor normal porém o usuário consegue explodi-lo conforme precisa', 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjQFnCgCjWHbgne4eqoITZGYQC03jSz3STeCO-sC7rkRVlaEGyjC-7gxmg4Uq5JW0zBQ&usqp=CAU'),
(9, 'Andar no Ar', 'O usuário consegue flutuar e andar pelo ar em alturas de até 2 metros do chão', 3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjQFnCgCjWHbgne4eqoITZGYQC03jSz3STeCO-sC7rkRVlaEGyjC-7gxmg4Uq5JW0zBQ&usqp=CAU'),
(10, 'Apagar', 'Permite o usuário anular temporariamente a individualidade de quem o usuário estiver focando o seu olhar', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjQFnCgCjWHbgne4eqoITZGYQC03jSz3STeCO-sC7rkRVlaEGyjC-7gxmg4Uq5JW0zBQ&usqp=CAU'),
(11, 'Buraco Negro', 'Permite criar um pequeno buraco negro capaz de atrair tudo que estiver ao redor para ele, onde qualquer coisa é desintegrada', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjQFnCgCjWHbgne4eqoITZGYQC03jSz3STeCO-sC7rkRVlaEGyjC-7gxmg4Uq5JW0zBQ&usqp=CAU'),
(12, 'Canhão de Ar', 'O usuário consegue disparar rajadas de ar de seus membros', 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjQFnCgCjWHbgne4eqoITZGYQC03jSz3STeCO-sC7rkRVlaEGyjC-7gxmg4Uq5JW0zBQ&usqp=CAU'),
(13, 'Cimento', 'O usuário consegue cuspir uma substância que endurece rapidamente após o contato com o ar', 3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjQFnCgCjWHbgne4eqoITZGYQC03jSz3STeCO-sC7rkRVlaEGyjC-7gxmg4Uq5JW0zBQ&usqp=CAU'),
(14, 'Chamas do Inferno', 'Permite criar e manipular chamas poderosas em larga escala', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjQFnCgCjWHbgne4eqoITZGYQC03jSz3STeCO-sC7rkRVlaEGyjC-7gxmg4Uq5JW0zBQ&usqp=CAU'),
(15, 'Clones', 'Permite o usuário criar clones de si mesmo, esses clones são versões inteligentes e conscientes, porém quanto mais clones, menor é a saúde, inteligencia e demais fatores do clone', 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjQFnCgCjWHbgne4eqoITZGYQC03jSz3STeCO-sC7rkRVlaEGyjC-7gxmg4Uq5JW0zBQ&usqp=CAU');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `pass`) VALUES
(1, 'Paulo Guilherme', 'pg', 'pg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `quirk`
--
ALTER TABLE `quirk`
  ADD PRIMARY KEY (`quirk_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `quirk`
--
ALTER TABLE `quirk`
  MODIFY `quirk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
