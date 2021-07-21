-- case 10
-- perintah: dari ketiga table di atas, buatlah sebuah table untuk merepresentasikan user punya beberapa jabatan dan masa berlaku jabatannya. Tuliskan juga perintah SQL untuk menampilkan datanya

CREATE TABLE `interview`.`user_jabatan` ( `id` INT NOT NULL AUTO_INCREMENT , `id_user` INT NOT NULL , `id_jabatan` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

SELECT * FROM `user_jabatan` INNER JOIN `jabatan` ON `user_jabatan`.`id_jabatan` = `jabatan`.`id` INNER JOIN `user` ON `user_jabatan`.`id_user` = `user`.`id`;