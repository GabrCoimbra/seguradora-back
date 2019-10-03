
CREATE TABLE IF NOT EXISTS `tb_calculo` (
  `cd_Calculo` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nm_Condutor` varchar(50) NOT NULL,
  `ds_Sexo` char(1) NOT NULL,
  `dt_Nascimento` date NOT NULL,
  `ds_Marca` varchar(20) NOT NULL,
  `ds_Veiculo` varchar(20) NOT NULL,
  `vl_Veiculo` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO `tb_calculo` (`cd_Calculo`, `nm_Condutor`, `ds_Sexo`, `dt_Nascimento`, `ds_Marca`, `ds_Veiculo`, `vl_Veiculo`) VALUES
(1, 'Gabriel Coimbra Amorim Paina', 'M', '1997-05-19', 'Volkswagen', 'Gol', 43500);

