CREATE TABLE public.profile
(
    --id                  SERIAL          NOT NULL    PRIMARY KEY,
    username            VARCHAR(100)    NOT NULL    UNIQUE,
    password            VARCHAR(100)    NOT NULL,
    display_name        VARCHAR(100)    NOT NULL    UNIQUE
);

CREATE TABLE public.character
(
    	id                  	SERIAL          NOT NULL    PRIMARY KEY,
    	--user_id             	INT	        NOT NULL    REFERENCES public.profile(id),
    	--user_display_name   	VARCHAR(100)    NOT NULL    REFERENCES public.profile(display_name),
    	character_name     	VARCHAR(100)    NOT NULL,
    	class               	VARCHAR(100)    NOT NULL,
    	character_level     	INT             NOT NULL,
    	race                	VARCHAR(100)    NOT NULL,
    	alignment           	VARCHAR(100)    NOT NULL,
    	strength            	INT             NOT NULL,
	dexterity           	INT             NOT NULL,
	constitution        	INT             NOT NULL,
	intelligence        	INT             NOT NULL,
	wisdom              	INT             NOT NULL,
	charisma            	INT             NOT NULL,
	maxHP               	INT             NOT NULL,
	accessible_items    	VARCHAR(1000), 
	currency            	INT,
	feats               	VARCHAR(1000)   NOT NULL,
	features            	VARCHAR(1000)   NOT NULL
);
