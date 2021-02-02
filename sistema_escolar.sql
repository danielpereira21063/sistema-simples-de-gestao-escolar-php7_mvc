-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Fev-2021 às 15:01
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_escolar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `data_criacao`) VALUES
(1, 'Daniel Pereira Sanches', 'danielsanches6301@gmail.com', '$2y$10$nAbwiEYa4sPqtdetxcXTxOP7hrD59Mmxvb4aLrO/T0rLM7Shx4zB.', '2021-01-17 11:50:57'),
(2, 'Vanessa Pereira Sanches', 'vanessasanches0011@gmail.com', '$2y$10$W4uo5w5GmPjt0JEthIagAeJTGN6NDHsqPx7t/qyPCqTrJNXj0R6TC', '2021-01-17 12:32:04'),
(3, 'Daniel', '12345678@email.com', '$2y$10$0Z63zZN3U0gWiLymb81N/.PTNf2mvMzug9rjWpmpz7qNfPWTqkTPK', '2021-01-17 12:40:36'),
(4, 'Daniele Pereira Sanches', 'danielesanches@gmail.com', '$2y$10$AVkUZ2z8uJ8SZgESjj48v.4LhT.4AIqn6GytjigV2EGMu4CXkYFM6', '2021-01-17 12:50:24'),
(5, 'Miranda da Silva', 'miranda12@gmail.com', '$2y$10$saS8pilhZZKP7UDX5xXv/uKsNDQ7UhB5m53awN4MzFwAcOjwqse.u', '2021-01-18 12:31:58'),
(6, 'Pedro da Silva', 'pedrinho@email.com', '$2y$10$pvCaaiT2qIYiOL4AE57DIuZrwPNIYoanatMPRxKdUmCRb3S6qveO6', '2021-01-18 12:33:55'),
(7, 'Pedro Moraes', 'pedrinhomoraes@email.com', '$2y$10$9I8GP88ntCrL.tjw90wtheZKDcoB4nC457Yn/blrB3gMRZeQPQup6', '2021-01-18 12:38:14'),
(8, 'Alice Miranda', 'alice@email.com', '$2y$10$VjEzxoAwCXu2wuP57ThwpudhoQBGDCDcYs78m9gL2sk8o9HE4Ug8G', '2021-01-18 12:39:46'),
(9, 'Joaquim Rohem', 'joaquim@email.com', '$2y$10$mjFpPhYmVEN0DgSYl/Zb2uS/CtaaHa3WQ5ySFuDj6kcYxeUHwxoFe', '2021-01-18 21:05:43'),
(10, 'Walter Gonçalves', 'walter@gmail.com', '$2y$10$3bkuIEJVLlWLb.S5LswdT.VLPmzV96K3dZCNWYEW02QZOxsGW/CYK', '2021-01-18 21:14:47'),
(11, 'Lucas Daniel Paulino', 'lucaspaulino@email.com', '$2y$10$/BLZIZrwM4qm/ISg5u9cP.02sAXlxE5qbZYc4WnnNiG7V6GsR4Ipu', '2021-01-20 23:43:00'),
(13, 'Diego Botelho', 'diego123@email.com', '$2y$10$ekZ2CxBOk4yFCrzN7DfZ4.Kgy.8k9asfXnX6kc3EiN1DsfjPUC8NO', '2021-01-21 02:34:55'),
(14, 'Pedro Pedroca da Cunha', 'pedrao@email.com', '$2y$10$4pira49/rqQPu0BdMZz9CegA1lD3ZZhBT170slmXEO/35wE5yzVpy', '2021-01-30 13:17:31'),
(15, 'Maria Izabel Alvez da Silva Figueiredo da Cunha Alberta Mirana', 'mariaizabel2021@email.com', '$2y$10$WHDCuLeej3ouv1FagnaqTe.MPl/NGrtJgAg/U.pj.keZ3YFFjPss6', '2021-01-30 13:22:19'),
(16, 'Mirana Oliveira da cunha', 'mirandasilva@gmail.com', '$2y$10$Ani98ABJ2RnGgIDg2KZWM.30yWS/YVnF8SU9VeAjaBgEt6MSkjdMS', '2021-01-31 12:06:51'),
(17, 'Diego Botelho', 'diego@gmail.com', '$2y$10$cbV1AatW/sSipZnULJBwbuZglv2jYbr40dQkhwbAZ85xpCnCAtZD.', '2021-01-31 22:19:49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
