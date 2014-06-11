<?php
	$installer = $this;
	$installer->startSetup();

	$installer->run("
	DROP TABLE IF EXISTS {$this->getTable('eyedentity_supplier')};
 
    CREATE TABLE {$this->getTable('eyedentity_supplier')} (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`name` varchar(100) NOT NULL,
		`website` varchar(300) NOT NULL,
		`email` varchar(150) NOT NULL,
		`address1` varchar(300) NOT NULL,
		`address2` varchar(300) NOT NULL,
		`suburb` varchar(100) NOT NULL,
		`postcode` varchar(10) NOT NULL,
		`city` varchar(20) NOT NULL,
		`phone` varchar(20) NOT NULL,
		PRIMARY KEY (`id`)
	) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;
 
    INSERT INTO {$this->getTable('eyedentity_supplier')} (`id`, `name`, `website`, `email`, `address1`, `address2`, `suburb`, `postcode`, `city`, `phone`) 
	VALUES
	(1, 'test', 'web', 'email', 'addres1', 'addre2', 'Bella', '2897', 'sydney', '90234'),
	(2, 'Test2', 'www.google.com.au', 'test@email.com', 'adsfsdf', '', 'Central', '2000', 'Sydney', '9872934');
  	");
	
	$installer->endSetup();