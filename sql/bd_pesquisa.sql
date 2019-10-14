-- Host: 127.0.0.1    Database: bd_pesquisa

DROP TABLE IF EXISTS `tb_persons`;
CREATE TABLE `tb_persons` (
    `idperson` INT(11) NOT NULL AUTO_INCREMENT,
    `desfirstname` VARCHAR(64) NOT NULL,
    `deslastname` VARCHAR(64) NOT NULL,
    `dessex` VARCHAR(32) NOT NULL,
    `desdate` DATE NOT NULL,
    `nrphone` BIGINT(20) DEFAULT NULL,
    `desemail` VARCHAR(128) DEFAULT NULL,
	`deszipcode` char(8) NOT NULL,
    `desaddress` varchar(128) NOT NULL,
    `desnumber` int(64) NOT NULL,
    `descomplement` varchar(32) DEFAULT NULL,
    `desdistrict` varchar(32) NOT NULL,
    `descity` varchar(32) NOT NULL,
    `desstate` varchar(32) NOT NULL,
    `descountry` varchar(32) NOT NULL,
    `dtregister` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`idperson`)
)  ENGINE=INNODB AUTO_INCREMENT=11 DEFAULT CHARSET=UTF8;