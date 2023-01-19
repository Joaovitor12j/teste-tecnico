
-- Criando a estrutura do banco de dados
CREATE DATABASE IF NOT EXISTS `database_teste` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `database_teste`;

-- Copiando estrutura para tabela database_teste.clientes
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `numero` varchar(30) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cep` varchar(11) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(3) NOT NULL,
  `update_at` timestamp DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
