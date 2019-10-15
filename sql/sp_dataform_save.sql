CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_users_save`(
pdesfirstname VARCHAR(64),
pdeslastname VARCHAR(64),
pdessex VARCHAR(32),
pdesdate DATE,
pnrphone BIGINT(20),
pdesemail VARCHAR(128),
pdeszipcode char(8),
pdesaddress varchar(128),
pdesnumber int(64),
pdescomplement varchar(32),
pdesdistrict varchar(32),
pdescity varchar(32),
pdesstate varchar(32),
pdescountry varchar(32)
)
BEGIN
	
    DECLARE vidperson INT;
    
	INSERT INTO tb_persons (desfirstname, deslastname, dessex, desdate, nrphone, desemail, deszipcode, desaddress, desnumber, descomplement, desdistrict, descity, desstate, descountry)
    VALUES(pdesfirstname, pdeslastname, pdessex, pdesdate, pnrphone, pdesemail, pdeszipcode, pdesaddress, pdesnumber, pdescomplement, pdesdistrict, pdescity, pdesstate, pdescountry);
    
    SET vidperson = LAST_INSERT_ID();
    
    
    SELECT * FROM tb_persons WHERE idperson = LAST_INSERT_ID();
    
END ;;
