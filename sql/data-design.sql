DROP TABLE IF EXISTS `product`;
DROP TABLE IF EXISTS profile;

CREATE TABLE profile (
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileActivationToken CHAR(32),
	profileAtHandle VARCHAR(32) NOT NULL,
	profileEmail VARCHAR(128) NOT NULL,
	profileHash	CHAR(128) NOT NULL,
	profilePhone VARCHAR(32),
	profileSalt CHAR(64) NOT NULL,
	UNIQUE(profileEmail),
	UNIQUE(profileAtHandle),
	PRIMARY KEY(profileId)
);


CREATE TABLE product (
	productId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	productProfileId INT UNSIGNED NOT NULL,
	productname VARCHAR(140) NOT NULL,
	productprice VARCHAR(140) NOT NULL,
	productphoto VARCHAR(140) NOT NULL,
	INDEX(productProfileId),
	FOREIGN KEY(productProfileId) REFERENCES profile(profileId),
	PRIMARY KEY(productId)
);